<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $orderId = session('orderId');
        if (!$orderId)
            return Redirect::route('home')->with('error', 'Your cart is empty');
        return view();
    }
}
