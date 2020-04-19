<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    private $currencies = [
        [
            'name' => 'US Dollar',
            'code' => 'USD',
            'value' => 1,
            'symbol' => '	$',
            'primary' => 1,
        ],
        [
            'name' => 'Euro',
            'code' => 'EUR',
            'value' => 0.914,
            'symbol' => '€',
            'primary' => 0,
        ],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->currencies as $currency) {
            Currency::create($currency);
        }
    }
}
