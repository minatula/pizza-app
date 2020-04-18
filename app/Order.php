<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'finished',
    ];

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

    public function changeProductAmount($productId, $amount)
    {
        if ($this->products->contains($productId)) {
            $product = $this->products()->where('product_id', $productId)->first()->pivot;
            if ($amount >= 1) {
                $product->product_amount = $amount;
                $product->update();
                return true;
            }
            return true;
        }
        return false;
    }

    public function finish($formData)
    {
        $formData['finished'] = 1;

        if ($this->update($formData)) {
            session()->forget('orderId');
            return true;
        }
        return false;
    }

    public function removeProduct($productId)
    {
        if ($this->products->contains($productId)) {
            $this->products()->detach($productId);
            return true;
        }
        return false;
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ];
    }
}
