<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addToCart($product)
    {
        $item = ['quantity' => 0, 'price' => $product->price, 'product' => $product];
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $item = $this->items[$product->id];
            }
        }
        $item['quantity']++;
        $item['price'] = $product->price * $item['quantity'];
        $this->items[$product->id] = $item;

        $this->totalQuantity++;
        $this->totalPrice += $product->price;
    }

    public function removeFromCart($id)
    {
        if($this->items){
            $products = $this->items;
            if(array_key_exists($id, $products)){
                $priceOfProductDelete = $products[$id]['price'];

                $this->totalPrice -= $priceOfProductDelete;
                $this->totalQuantity -= $products[$id]['quantity'];
                unset($products[$id]);
                $this->items = $products;
            }
        }
    }

    public function updateQuanlity($request, $id)
    {
        if($this->items){
            $products = $this->items;
            if (array_key_exists($id, $products)){
                $productUpdate = $products[$id];

                $quantityUpdate = $request->quantity - $productUpdate['quantity'];
                $this->totalQuantity += $quantityUpdate;

                $priceUpdate = $productUpdate['product']->price * $request->quantity - $productUpdate['price'];
                $this->totalPrice += $priceUpdate;

                $productUpdate['quantity'] = $request->quantity;

                $productUpdate['price'] = $productUpdate['product']->price * $request->quantity;
                $this->items[$id] = $productUpdate;
            }
        }
    }
}
