<?php


use Cart\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    protected Product $product;

    public function setUp():void {
        $this->product = new Product();
    }


}
