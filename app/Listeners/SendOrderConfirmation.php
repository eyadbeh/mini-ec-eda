<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class SendOrderConfirmation
{
    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event): void
    {
        Log::info('SendOrderConfirmation: Order #{id} confirmation sent.', [
            'id' => $event->order->id,
        ]);
    }
}
