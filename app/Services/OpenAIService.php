<?php

namespace App\Services;

use OpenAI\Laravel\Facades\OpenAI;

class OpenAIService
{
    public function chat(array $messages): array
    {
        $response = OpenAI::responses()->create([

            'model' => config(
                'services.openai_app.model',
                'gpt-5.6-luna'
            ),

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