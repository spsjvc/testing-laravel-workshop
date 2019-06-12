<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [
        'id',
    ];

    public function getTotalPriceAttribute()
    {
        return $this->product_price * $this->quantity;
    }

    public function getTotalPriceWithStudentDiscountAttribute()
    {
        return $this->total_price * 0.85;
    }
}
