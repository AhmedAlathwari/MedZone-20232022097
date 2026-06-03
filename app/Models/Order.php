<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;

class Order extends Model
{
    protected $fillable = [

        'user_id',

        'name',

        'surname',

        'email',

        'phone',

        'address',

        'total',

        'ip',

        'status'

    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}