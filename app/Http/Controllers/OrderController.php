<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Validate form and finish the order
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function finish(Request $request)
    {
        $order = $this->getCurrentOrder();

        if (!$order || !count($order->products))
            return redirect()->route('home')->with('error', 'Your cart is empty');

        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);

        $order->finish($request->all());

        return redirect()->route('home');
    }

    /**
     * Show the order form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
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
