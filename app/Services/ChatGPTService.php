<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class ChatGPTService
{

    public function start($msg)
    {
        $groqApiKey = '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';
        $response = Http::withHeaders([
            'Authorization' => "Bearer $groqApiKey",
            'Content-Type' => 'application/json',
        ])->post('https://api.groq.com/openai/v1/chat/completions', [
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $msg,
                ],
            ],
            'model' => 'llama3-8b-8192',
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return $data['choices'][0]['message']['content'];
        } else {
            return 'Error: ' . $response->status();
        }
    }
}
