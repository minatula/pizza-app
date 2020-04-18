<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addProduct($productId)
    {
        $order = $this->getCurrentOrderOrCreate();
        $order->addProduct($productId);
        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function changeProductAmount($productId, Request $request)
    {
        $order = $this->getCurrentOrder();
        $order->changeProductAmount($productId, $request->productAmount);
        return redirect()->route('cart.index');
    }

    public function index()
    {

        $order = $this->getCurrentOrder();

        if (!$order || !count($order->products))
            return redirect()->route('home')->with('error', 'Your cart is empty');

        return view('cart', compact('order'));
    }

    public function removeProduct($productId)
    {
        $order = $this->getCurrentOrder();
        if (!$order)
            return redirect()->back()->with('error', 'Your cart is empty');

        $order->removeProduct($productId);
        return redirect()->route('cart.index');
    }

    /**
     * Return current Order from session or create new
     *
     * @return Order
     */
    private function getCurrentOrderOrCreate()
    {
        $orderId = session('orderId');
        if (!$orderId) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        return $order;
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
