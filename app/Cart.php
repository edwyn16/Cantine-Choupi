<?php

namespace App;

class Cart
{
    public $items = [];
    public $totalAmount = 0;
    public $totalPrice = 0;

    public function __construct(array $oldCart = []) {
        if ($oldCart) {
            $this->items = $oldCart['items'];
            $this->totalAmount = $oldCart['totalAmount'];
            $this->totalPrice = $oldCart['totalPrice'];
        }
    }

    public function add($item) {
        // configure the item to the amount, item-price and the item that I want to pass
        $storedItem = ['totalAmount' => 0, 'price' => $item['price'], 'item' => $item];
        // check if i have items in de array
            // checks if the associative array already has the item-ID
            if (array_key_exists($item->id, $this->items)) {
                // overrides/loops through the first associative array
                $storedItem = $this->items[$item->id];
            }
        $storedItem['totalAmount']++;
        $storedItem['price'] = $item->price * $storedItem['totalAmount'];
        // here I'm accessing my items-id and stores the item back at it's current position.
        $this->items[$item->id] = $storedItem;
        $this->totalAmount++;
        $this->totalPrice += $item->price;
    }

    public function get() {
        return [
            'items' => $this->items,
            'totalAmount' => $this->totalAmount,
            'totalPrice' => $this->totalPrice
        ];
    }
}
