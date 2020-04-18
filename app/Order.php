<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function addProduct($productId)
    {
        if ($this->products->contains($productId)) {
            $product = $this->products()->where('product_id', $productId)->first()->pivot;
            $product->product_amount++;
            $product->update();
        } else {
            $this->products()->attach($productId);
        }
        return true;
    }

    /**
     * Products from current order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('product_amount');
    }
}
