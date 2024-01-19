<?php

namespace App;

use Exception;

class Cart {
    private array $cart = [];

    public function buy(Product $product, $quantity) {
        $this->cart[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function reset() {
        $this->cart = [];
    }

    public function restore($index)
    {

    }

    public function total() {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }

        return $total;
    }
}
