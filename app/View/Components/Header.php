<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Currency;

class Header extends Component
{
    /**
     * Array of currencies
     *
     * @var array
     */
    protected $currencies;

    /**
     * Current currency
     *
     * @var string
     */
    protected $currentCurrency;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->currencies = Currency::all();
        $this->currentCurrency = Currency::byCode(session('currency', 'USD'))->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header', [
            'currencies' => $this->currencies,
            'currentCurrency' => $this->currentCurrency
        ]);
    }
}
