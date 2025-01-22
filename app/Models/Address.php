<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    // user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // orders relationship
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
