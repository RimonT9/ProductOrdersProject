<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CreateController extends Controller
{
    public function __invoke() 
    {
        $products = Product::all();

        return view('order.create', compact('products'));
    }
}