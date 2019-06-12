<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\DiscountPercentageTooHighException;

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

    public function calculateCustomDiscountedPrice($discountPercentage)
    {
        if ($discountPercentage > 80) {
            throw new DiscountPercentageTooHighException;
        }

        return $this->total_price - $this->total_price * ($discountPercentage / 100);
    }
}
