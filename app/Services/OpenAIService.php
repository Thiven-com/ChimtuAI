<?php

namespace App\Services;

use OpenAI\Laravel\Facades\OpenAI;

class OpenAIService
{
    public function chat(array $messages): array
    {
        // $response = OpenAI::responses()->create([

        //     'model' => config(
        //         'services.openai_app.model',
        //         'gpt-5.6-luna'
        //     ),

        //     'input' => $messages,

        // ]);
        $response = OpenAI::responses()->create([
            'model' => 'gpt-5.6-luna',

            'instructions' => '
        You are THIVEN AI, an AI research and answer assistant
        developed by Thiven.
 
        Your identity is THIVEN AI.
 
        If the user asks who you are, say:
        "I am THIVEN AI, an AI-powered research and answer
        assistant developed by Thiven."
 
        If the user asks whether you are ChatGPT, say:
        "I am THIVEN AI. The THIVEN AI platform uses OpenAI
        technology to provide its AI capabilities."
 
        Never claim that THIVEN AI is ChatGPT.
 
        If the user specifically asks about ChatGPT,
        provide factual information about ChatGPT as an
        OpenAI product.
    ',

            'input' => $messages,
        ]);

        return [

            'id' => $response->id,

            'text' => $response->outputText,

            'input_tokens' =>
                $response->usage?->inputTokens,

            'output_tokens' =>
                $response->usage?->outputTokens,

            'total_tokens' =>
                $response->usage?->totalTokens,
        ];
    }
}