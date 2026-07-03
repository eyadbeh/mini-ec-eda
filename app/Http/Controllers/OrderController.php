<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request, OrderService $orderService): RedirectResponse
    {
        $orderService->placeOrder([
            ...$request->validated(),
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('dashboard');
    }
}
