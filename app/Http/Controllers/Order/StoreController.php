<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) 
    {
        $data = $request->validated();

        $price = Product::where('id', $data['product_id'])->pluck('price')->first();
        $data['total_price'] = $data['count'] * $price;
        
        Order::create($data);

        return redirect()->route('order.index');
    }
}