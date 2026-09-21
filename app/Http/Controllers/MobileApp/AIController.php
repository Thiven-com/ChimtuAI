<?php

namespace App\Http\Controllers\MobileApp;

use App\Http\Controllers\Controller;
use App\Models\AiChatroom;
use App\Models\AiMessage;
use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Resources\AiChatroomResource;
use App\Http\Resources\AiMessageResource;

class AIController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Create Chatroom
    |--------------------------------------------------------------------------
    */

    public function createChatroom(Request $request)
    {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        try {

            $chatroom = AiChatroom::create([
                'customer_id' => $user->id,
                'title' => 'New Chat',
                'status' => 'active',
            ]);

            return response()->json([
                'success' => 1,
                'message' => 'Chatroom created successfully',
                'data' => [
                    'chatroom' => $chatroom,
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to create chatroom',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Chatroom List
    |--------------------------------------------------------------------------
    */

    public function chatrooms(Request $request)
    {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        try {

            $chatrooms = AiChatroom::where(
                'customer_id',
                $user->id
            )
                ->where('status', 'active')
                ->latest()
                ->paginate(20);

            return response()->json([
                'success' => 1,
                'message' => 'Chatrooms fetched successfully',
                'data' => [
                    'chatrooms' => AiChatroomResource::collection($chatrooms),
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to fetch chatrooms',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Chatroom Details
    |--------------------------------------------------------------------------
    */

    public function chatroom(
        Request $request,
        $chatroomId
    ) {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        try {

            $chatroom = AiChatroom::where(
                'id',
                $chatroomId
            )
                ->where(
                    'customer_id',
                    $user->id
                )
                ->where(
                    'status',
                    'active'
                )
                ->first();

            if (!$chatroom) {

                return response()->json([
                    'success' => 0,
                    'message' => 'Chatroom not found',
                ]);
            }

            return response()->json([
                'success' => 1,
                'message' => 'Chatroom fetched successfully',
                'data' => [
                    'chatroom' => new AiChatroomResource($chatroom),
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to fetch chatroom',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Chat Messages / History
    |--------------------------------------------------------------------------
    */

    public function messages(
        Request $request,
        $chatroomId
    ) {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        try {

            $chatroom = AiChatroom::where(
                'id',
                $chatroomId
            )
                ->where(
                    'customer_id',
                    $user->id
                )
                ->where(
                    'status',
                    'active'
                )
                ->first();

            if (!$chatroom) {

                return response()->json([
                    'success' => 0,
                    'message' => 'Chatroom not found',
                ]);
            }

            $messages = $chatroom
                ->messages()
                ->oldest('id')
                ->get();

            return response()->json([
                'success' => 1,
                'message' => 'Messages fetched successfully',
                'data' => [
                    'chatroom' => new AiChatroomResource($chatroom),
                    'messages' => AiMessageResource::collection($messages),
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to fetch messages',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Send Message
    |--------------------------------------------------------------------------
    */

    public function sendMessage(
        Request $request,
        $chatroomId,
        OpenAIService $openAI
    ) {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        $request->validate([
            'message' => 'required|string|max:10000',
        ]);

        try {

            /*
            |--------------------------------------------------------------------------
            | Check Chatroom
            |--------------------------------------------------------------------------
            */

            $chatroom = AiChatroom::where(
                'id',
                $chatroomId
            )
                ->where(
                    'customer_id',
                    $user->id
                )
                ->where(
                    'status',
                    'active'
                )
                ->first();

            if (!$chatroom) {

                return response()->json([
                    'success' => 0,
                    'message' => 'Chatroom not found',
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | Save User Message
            |--------------------------------------------------------------------------
            */

            $userMessage = AiMessage::create([
                'chatroom_id' => $chatroom->id,
                'role' => 'user',
                'message' => trim($request->message),
                'message_type' => 'text',
                'status' => 'completed',
            ]);


            /*
            |--------------------------------------------------------------------------
            | Get Recent Chat History
            |--------------------------------------------------------------------------
            */

            $history = $chatroom
                ->messages()
                ->whereIn('role', [
                    'user',
                    'assistant',
                ])
                ->latest('id')
                ->limit(12)
                ->get()
                ->reverse();


            /*
            |--------------------------------------------------------------------------
            | Prepare OpenAI Input
            |--------------------------------------------------------------------------
            */

            $messages = [];

            foreach ($history as $historyMessage) {

                $messages[] = [
                    'role' => $historyMessage->role,
                    'content' => $historyMessage->message,
                ];
            }


            /*
            |--------------------------------------------------------------------------
            | Send Request To OpenAI
            |--------------------------------------------------------------------------
            */

            $startTime = microtime(true);

            $result = $openAI->chat($messages);

            $responseTime = round(
                (microtime(true) - $startTime) * 1000
            );


            /*
            |--------------------------------------------------------------------------
            | Save Assistant Message
            |--------------------------------------------------------------------------
            */

            $assistantMessage = AiMessage::create([
                'chatroom_id' => $chatroom->id,

                'role' => 'assistant',

                'message' => $result['text'] ?? '',

                'message_type' => 'text',

                'openai_response_id' =>
                    $result['id'] ?? null,

                'openai_model' => config(
                    'services.openai_app.model',
                    'gpt-5.6-luna'
                ),

                'input_tokens' =>
                    $result['input_tokens'] ?? null,

                'output_tokens' =>
                    $result['output_tokens'] ?? null,

                'total_tokens' =>
                    $result['total_tokens'] ?? null,

                'status' => 'completed',

                'response_time_ms' => $responseTime,
            ]);


            /*
            |--------------------------------------------------------------------------
            | Auto Generate Chatroom Title
            |--------------------------------------------------------------------------
            */

            if ($chatroom->title === 'New Chat') {

                $title = mb_substr(
                    trim($request->message),
                    0,
                    50
                );

                $chatroom->update([
                    'title' => $title,
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | Return Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => 1,
                'message' => 'AI response generated successfully',

                'data' => [

                    'chatroom' => [
                        'id' => $chatroom->id,
                        'title' => $chatroom->title,
                    ],

                    'user_message' => [
                        'id' => $userMessage->id,
                        'role' => $userMessage->role,
                        'message' => $userMessage->message,
                        'message_type' =>
                            $userMessage->message_type,
                        'status' => $userMessage->status,
                    ],

                    'assistant_message' => [
                        'id' => $assistantMessage->id,
                        'role' => $assistantMessage->role,
                        'message' => $assistantMessage->message,
                        'message_type' =>
                            $assistantMessage->message_type,
                        'status' =>
                            $assistantMessage->status,
                        'openai_response_id' =>
                            $assistantMessage->openai_response_id,
                        'openai_model' =>
                            $assistantMessage->openai_model,
                        'response_time_ms' =>
                            $assistantMessage->response_time_ms,
                    ],

                    'usage' => [
                        'input_tokens' =>
                            $assistantMessage->input_tokens,

                        'output_tokens' =>
                            $assistantMessage->output_tokens,

                        'total_tokens' =>
                            $assistantMessage->total_tokens,
                    ],
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            /*
            |--------------------------------------------------------------------------
            | Save Failed AI Response
            |--------------------------------------------------------------------------
            */

            if (isset($chatroom)) {

                try {

                    AiMessage::create([
                        'chatroom_id' => $chatroom->id,
                        'role' => 'assistant',
                        'message' => null,
                        'message_type' => 'text',
                        'openai_model' => config(
                            'services.openai_app.model',
                            'gpt-5.6-luna'
                        ),
                        'status' => 'failed',
                        'error_message' => $e->getMessage(),
                    ]);

                } catch (Throwable $saveException) {

                    report($saveException);
                }
            }


            /*
            |--------------------------------------------------------------------------
            | Error Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => 0,
                'message' => 'Unable to generate AI response',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Rename Chatroom
    |--------------------------------------------------------------------------
    */

    public function renameChatroom(
        Request $request,
        $chatroomId
    ) {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        try {

            $chatroom = AiChatroom::where(
                'id',
                $chatroomId
            )
                ->where(
                    'customer_id',
                    $user->id
                )
                ->where(
                    'status',
                    'active'
                )
                ->first();

            if (!$chatroom) {

                return response()->json([
                    'success' => 0,
                    'message' => 'Chatroom not found',
                ]);
            }

            $chatroom->update([
                'title' => trim($request->title),
            ]);

            return response()->json([
                'success' => 1,
                'message' => 'Chatroom renamed successfully',
                'data' => [
                    'chatroom' => $chatroom->fresh(),
                ],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to rename chatroom',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Chatroom
    |--------------------------------------------------------------------------
    */

    public function deleteChatroom(
        Request $request,
        $chatroomId
    ) {
        $user = auth('sanctum')->user();

        if (!isset($user->id)) {

            return response()->json([
                'success' => 9,
                'message' => 'Please Login'
            ]);
        }

        try {

            $chatroom = AiChatroom::where(
                'id',
                $chatroomId
            )
                ->where(
                    'customer_id',
                    $user->id
                )
                ->first();

            if (!$chatroom) {

                return response()->json([
                    'success' => 0,
                    'message' => 'Chatroom not found',
                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | Delete Messages
            |--------------------------------------------------------------------------
            */

            $chatroom->messages()->delete();


            /*
            |--------------------------------------------------------------------------
            | Delete Chatroom
            |--------------------------------------------------------------------------
            */

            $chatroom->delete();

            return response()->json([
                'success' => 1,
                'message' => 'Chatroom deleted successfully',
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => 0,
                'message' => 'Unable to delete chatroom',
                'error' => config('app.debug')
                    ? $e->getMessage()
                    : null,
            ]);
        }
    }
}