<?php

namespace App\Handler;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;

class WebhookHandler extends ProcessWebhookJob 
{
    public function handle(WebhookCall $webhookCall)
    {
        $headers = $this->webhookCall->headers;
        $payload = $this->webhookCall->payload;
        Log::info('Github Header: '. json_encode($headers, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        Log::info('Github Payload: '. json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}