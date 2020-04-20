<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Order for current product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }


    /**
     * @param $value
     * @return mixed
     */
    public function getPriceAttribute($value)
    {
        $currency = Currency::byCode(session('currency', 'USD'))->first();
        $value = round($value * $currency->value, 2);
        return $value;
    }

    /**
     * Return total price for product in Order
     *
     * @return mixed
     */
    public function getTotalPriceAttribute()
    {
        return $this->pivot->product_amount * $this->price;
    }
}
