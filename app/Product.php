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
}
