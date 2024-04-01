<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();

        Log::debug(is_array($request['opcionais']));


        $order = Order::create([
            'name' => $request['nome'],
            'meat' => $request['carne'],
            'bread' => $request['pao'],
            'sauce' => $request['molho'],
            'optionals' => is_array($request['opcionais']),
            'status' => $request['status'],
        ]);

        Log::debug($order);

        return response()->json($order);
    }

    public function getOrders()
    {
        $order = Order::all();
        return response()->json($order);
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json($order);
    }
}
