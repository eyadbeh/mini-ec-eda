<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class CreateInvoice
{
    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event): void
    {
        Log::info('CreateInvoice: Invoice generated for order #{id}.', [
            'id' => $event->order->id,
        ]);
    }
}
