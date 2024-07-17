<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CartRepository;

class CartController extends Controller
{

    public function index()
    {
        $cartContent = (new CartRepository())->content();
        return response()->json(['cartContent' => $cartContent]);
    }
   public function store(Request $request)
   {
    $product = Product::where('id', $request->productId)->first();
$count = (new CartRepository())->add($product);
    return response()->json(['count' => $count]);
   }

   public function count()
   {
       $count = (new CartRepository())->count();

       return response()->json([
           'count' => $count,
       ]);

   }
}
