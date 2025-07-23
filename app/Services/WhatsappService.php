<?php
// app/Services/WhatsAppService.php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    protected $client;
    protected $apiUrl;
    protected $phoneNumberId;
    protected $accessToken;

    public function __construct()
    {
        $this->apiUrl = config('services.whatsapp.api_url');
        $this->phoneNumberId = config('services.whatsapp.phone_number_id');
        $this->accessToken = config('services.whatsapp.api_key');
        
        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->accessToken,
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    public function sendMessage($to, $message)
    {
        try {
            $response = $this->client->post("{$this->phoneNumberId}/messages", [
                'json' => [
                    'messaging_product' => 'whatsapp',
                    'to' => $to,
                    'type' => 'text',
                    'text' => ['body' => $message]
                ]
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('WhatsApp API Error: ' . $e->getMessage());
            return false;
        }
    }

    public function sendTemplateMessage($to, $templateName, $languageCode, $components = [])
    {
        try {
            $response = $this->client->post("{$this->phoneNumberId}/messages", [
                'json' => [
                    'messaging_product' => 'whatsapp',
                    'to' => $to,
                    'type' => 'template',
                    'template' => [
                        'name' => $templateName,
                        'language' => ['code' => $languageCode],
                        'components' => $components
                    ]
                ]
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('WhatsApp Template Error: ' . $e->getMessage());
            return false;
        }
    }

    public function sendFile($to, $fileUrl, $caption = '')
    {
        try {
            $response = $this->client->post("{$this->phoneNumberId}/messages", [
                'json' => [
                    'messaging_product' => 'whatsapp',
                    'to' => $to,
                    'type' => 'document',
                    'document' => [
                        'link' => $fileUrl,
                        'caption' => $caption
                    ]
                ]
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('WhatsApp File Error: ' . $e->getMessage());
            return false;
        }
    }
}
