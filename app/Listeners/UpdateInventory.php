<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class UpdateInventory
{
    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event): void
    {
        Log::info('UpdateInventory: Stock reduced for order #{id}.', [
            'id' => $event->order->id,
        ]);
    }
}
