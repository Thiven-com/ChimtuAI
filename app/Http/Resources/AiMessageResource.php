<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AiMessageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'chatroom_id' => $this->chatroom_id,
            'role' => $this->role,
            'message' => $this->message,
            'message_type' => $this->message_type,

            'status' => $this->status,

            'openai_response_id' => $this->openai_response_id,
            'openai_model' => $this->openai_model,

            'input_tokens' => $this->input_tokens,
            'output_tokens' => $this->output_tokens,
            'total_tokens' => $this->total_tokens,

            'response_time_ms' => $this->response_time_ms,

            'file_url' => $this->file_url,
            'file_name' => $this->file_name,
            'file_type' => $this->file_type,

            'metadata' => $this->metadata,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}