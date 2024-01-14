<?php

namespace App\Handler;

use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob 
{
    public function handle()
    {
        $payload = $this->webhookCall;
        Log::info('Github Payload: '. json_encode($payload, JSON_PRETTY_PRINT));
    }
}