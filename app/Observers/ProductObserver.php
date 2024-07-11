<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function created(Product $product): void
    {
        $product->slug = $product->getSlug();
        $product->save();
    }
}
