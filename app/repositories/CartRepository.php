<?php



namespace App\Repositories;

use Cart;
use App\Models\Product;

class CartRepository
{
    public function add(Product $product)
    {
        \Cart::session(auth()->user()->id)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $product,
    ));

    return $this->count();
    }

    public function content()
    {

        return \Cart::session(auth()->user()->id)
        ->getContent();

    }

    public function count()
    {
       return $this->content()->sum('quantity');

    }

    public function increase($id)
    {

        \Cart::session(auth()->user()->id)
        ->update($id, array(
            'quantity' => 1
        ));
    }

    public function decrease($id)
    {
        $item = \Cart::session(auth()->user()->id)->get($id);
        if($item->quantity ===1){
            $this->remove($id);
            //  \Cart::session(auth()->user()->id)->remove($id);
             return;
        }
        \Cart::session(auth()->user()->id)
        ->update($id, array(
            'quantity' => -1
        ));


    }

    public function remove($id)
    {

        \Cart::session(auth()->user()->id)->remove($id);
    }
}
