<?php

namespace App\Http\Controllers\Api\v1;

use App\Handler\WebhookHandler;
use App\Http\Controllers\Controller;
use App\Jobs\HandleWebhookPayload;
use Illuminate\Http\Request;

class GithubWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->all();

        WebhookHandler::dispatch($payload);

        return response()->json(['message' => 'Webhook received'], 200);
    }
}
