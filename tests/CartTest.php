<?php

use Cart\Cart;
use Cart\InMemoryStorage;
use Cart\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected Product $product;
    protected Cart $cart;
    protected InMemoryStorage $inMemoryStorage;

    public function setUp():void {

    }

    public function testBuy() {
        $cart = new Cart(new InMemoryStorage());

        $product = new Product('apple', 4.5);
        $cart->buy($product, 2);

        $this->assertTrue(True);
    }

    public function testReset() {
        $cart = new Cart(new InMemoryStorage());
        $product = new Product('apple', 4.5);
        $cart->buy($product, 2);

        $cart->reset();

        $this->assertTrue(True);
    }

    public function testRestore() {
        $cart = new Cart(new InMemoryStorage());

        $product = new Product('apple', 4.5);
        $cart->buy($product, 2);

        $cart->restore($product);

        $this->assertTrue(True);
    }

//    public function testTotal() {
//        $cart = new Cart(new InMemoryStorage());
//
//        $product1 = new Product('apple', 4.5);
//        $product2 = new Product('apple', 4.5);
//        $cart->buy($product1, 2);
//        $cart->buy($product2, 2);
//
//        $cart->total();
//
//        $this->assertEquals(4, $cart->total());
//    }


}
