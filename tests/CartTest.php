<?php

use App\Cart;
use App\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected Product $product;
    protected Cart $cart;

    public function setUp():void {
        $this->cart = new Cart();
    }

    public function testBuy() {
        $product = new Product('apple', 5);

        $this->assertEquals(3, $this->cart->buy($product));
    }

    public function testReset() {
        $this->assertEquals(0, $this->cart->reset());
    }

    public function testRestore() {
        $this->assertEquals(2, $this->cart->restore());
    }

    public function testTotal() {
        $this->assertEquals(2, $this->cart->restore());
    }

}
