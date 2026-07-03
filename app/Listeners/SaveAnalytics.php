<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class SaveAnalytics
{
    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event): void
    {
        Log::info('SaveAnalytics: Analytics recorded for order #{id}.', [
            'id' => $event->order->id,
        ]);
    }
}
