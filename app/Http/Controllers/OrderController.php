<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = $this->getCurrentOrder();

        if (!$order || !count($order->products))
            return redirect()->route('home')->with('error', 'Your cart is empty');

        return view('order', compact('order'));
    }

    /**
     * Return current Order from session
     *
     * @return mixed
     */
    private function getCurrentOrder()
    {
        $orderId = session('orderId');

        if ($orderId == null)
            return null;

        $order = Order::find($orderId);
        return $order;
    }
}
