<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = false;
    protected $table = "products";

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
