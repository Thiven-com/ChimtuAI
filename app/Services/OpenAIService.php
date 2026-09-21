<?php

namespace App\Services;

use OpenAI\Laravel\Facades\OpenAI;

class OpenAIService
{
    public function chat(array $messages): array
    {
        $instructions = file_get_contents(
            public_path('ai/thiven-ai.txt')
        );

        $response = OpenAI::responses()->create([
            'model' => 'gpt-5.6-luna',

            'instructions' => $instructions,

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