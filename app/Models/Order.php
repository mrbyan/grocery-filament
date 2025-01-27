<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    // user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // address relationship
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    // order items relationship
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
