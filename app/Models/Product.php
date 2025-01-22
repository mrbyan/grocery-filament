<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
    ];

    // category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // order items relationship
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
