<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Currency;

class MainController extends Controller
{
    /**
     * Show homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    /**
     * Change current currency
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->first();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }
}
