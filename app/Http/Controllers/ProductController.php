<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function index(){

    $products = Product::all();
    return view('products.index', [
        'products' => $products
    ]);
}

    public function show(string $slug,Product $product){
        $product = Product::where('slug', $slug)->firstOrFail();
        if($slug !== $product->slug){
            return to_route('product.show',[
                'slug'=>$product->slug,
                'product'=>$product
            ]);
        }
        return view('products.show', compact('product'));
    }
}
