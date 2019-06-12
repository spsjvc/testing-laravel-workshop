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
}
