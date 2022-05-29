<?php

namespace App;

class Cart
{
    public $items = null;
    public $sales = 0;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->sales = $oldCart->sales;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalPrice += $item->price - ($item->price * $item->sales / 100);
        $this->totalQty++;
    }
    public function deleteItem($id)
    {
        $newTotal = $this->items[$id]['price'] -  $this->items[$id]['price'] *  $this->items[$id]['item']->sales / 100;
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -=  $newTotal;
        unset($this->items[$id]);
    }

    public function updateAllCart($id, $qty)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

        $this->items[$id]['qty'] = $qty;
        $this->items[$id]['price'] = $qty * $this->items[$id]['item']->price;

        $this->totalQty += $this->items[$id]['qty'];
        $this->totalPrice += $this->items[$id]['price'];
    }

    public function addToCartMulti($item, $id, $qty)
    {
        // Mac dinh gio hang rong (so luong = 0)
        $newProduct = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $newProduct = $this->items[$id];
            }
        }

        // //
        // $newProduct['qty'] +=  $qty;
        // $newProduct['price'] = $item->price * $newProduct['qty'];
        // $this->items[$id] = $newProduct;

        // $this->totalQty += $newProduct['qty'];
        // $this->totalPrice += $newProduct['price'] - ($newProduct['price'] * $item->sales / 100);
        // //


        $newQty = $newProduct['qty'] + $qty;
        $newProduct['price'] = $item->price * $newQty;

        $this->items[$id] = $newProduct;

        //Tong so luong va tong tien cua tat ca san pham
        $this->totalQty += $newQty;
        $this->totalPrice += $newProduct['price'] - ($newProduct['price'] * $item->sales / 100);
    }
}
