<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
   public function store(Request $request)
   {
    $product = Product::where('id', $request->productId)->first();

    return $product;
   }
}
