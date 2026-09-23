<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsAppService
{
    protected string $endpoint = 'https://brandbooster.app/api/b258d0fe-e304-4161-9917-fecd7ac12faf/contact/send-template-message';
    protected string $token = 'hdAnsDGbkeTXYhzpSrgBOOC9ym2oaX6aAS2UO5sc14uICprbcUgXyDxbXbG4wqD8';

    public function sendTemplateMessage(array $data)
    {
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
        ])->post("{$this->endpoint}?token={$this->token}", $data);
            // dd($response->json());
        return $response->json();
    }
    public function sendMessage(WhatsappService $whatsappService)
    {
        $data = [
            "from_phone_number_id" => "1326275880562410",
            "phone_number" => "919154153016",
            "template_name" => "welcome_company",
            "template_language" => "en",
            "header_image" => "https://cdn.pixabay.com/photo/2015/01/07/15/51/woman-591576_1280.jpg",
            "header_video" => "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
            "header_document" => "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
            "header_document_name" => "{full_name}",
            "header_field_1" => "{full_name}",
            "location_latitude" => "22.22",
            "location_longitude" => "22.22",
            "location_name" => "{first_name}",
            "location_address" => "{country}",
            "field_1" => "{Age}",
            "field_2" => "{full_name}",
            "field_3" => "{first_name}",
            "field_4" => "{last_name}",
            "field_5" => "{}",
            "button_0" => "{email}",
            "button_1" => "{phone_number}",
            "copy_code" => "YourCode",
        ];

        $result = $whatsappService->sendTemplateMessage($data);

        return response()->json($result);
    }
}
