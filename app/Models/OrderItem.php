<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];

    // order relationship
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // product relationship
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
