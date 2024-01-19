<?php

use App\Cart;
use App\InMemoryStorage;
use App\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected Product $product;
    protected Cart $cart;
    protected InMemoryStorage $inMemoryStorage;

    public function setUp():void {
        $cart = new Cart(new InMemoryStorage());
    }

    public function testBuy() {
    }

    public function testReset() {
    }

    public function testRestore() {

    }

}
