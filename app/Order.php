<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'finished',
    ];

    /**
     * Add product to order
     *
     * @param int  $productId
     *
     * @return bool
     */
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
     * Change product amount for order
     *
     * @param int  $productId
     * @param int  $amount
     *
     * @return bool
     */
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

    /**
     * Add customer info to order and set status to finished
     *
     * @param array $formData
     *
     * @return bool
     */
    public function finish($formData)
    {
        $formData['finished'] = 1;

        if ($this->update($formData)) {
            session()->forget('orderId');
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
     * Remove product from order
     *
     * @param int $productId
     *
     * @return bool
     */
    public function removeProduct($productId)
    {
        if ($this->products->contains($productId)) {
            $this->products()->detach($productId);
            return true;
        }
        return false;
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
