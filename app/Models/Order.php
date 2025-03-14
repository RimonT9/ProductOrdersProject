<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = false;
    protected $table = "orders";

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
