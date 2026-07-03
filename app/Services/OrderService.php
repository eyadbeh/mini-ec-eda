<?php

namespace App\Services;

use App\Events\OrderPlaced;
use App\Models\Order;

class OrderService
{

    public function placeOrder(array $data): Order
    {
        $order = Order::create($data);

        OrderPlaced::dispatch($order);

        return $order;
    }
}
