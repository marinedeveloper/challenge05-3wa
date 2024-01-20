<?php


use Cart\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    protected Product $product;

    public function setUp():void {

    }

    public function testGetName() {
        $product = new Product('apple', 10.5);

        $this->assertEquals('apple', $product->getName());
    }

    public function testSetName() {
        $product = new Product('apple', 10.5);
        $product->setName('samsung');

        $this->assertEquals('samsung', $product->getName());
    }

    public function testGetPrice() {
        $product = new Product('apple', 10.5);

        $this->assertEquals(10.5, $product->getPrice());
    }

    public function testSetPrice() {
        $product = new Product('apple', 10.5);
        $product->setPrice( 15.5);

        $this->assertEquals(15.5, $product->getPrice());
    }

}
