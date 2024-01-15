<?php

namespace App\Http\Controllers\Api\v1;

use App\Handler\WebhookHandler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\WebhookProcessor;

class GithubWebhookController extends Controller
{
    public function handle()
    {
        //
    }
}
