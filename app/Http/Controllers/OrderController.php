<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return Order::with('user')->get();
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return response()->json($order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(['status'=>'deleted']);
    }
}
