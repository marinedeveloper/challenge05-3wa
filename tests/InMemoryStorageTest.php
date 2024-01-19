<?php

use Cart\InMemoryStorage;
use PHPUnit\Framework\TestCase;

class InMemoryStorageTest extends TestCase
{
    protected InMemoryStorage $inMemoryStorage;

    public function setUp():void {
        $this->inMemoryStorage = new InMemoryStorage;
    }

    public function testSetValue() {
        $this->inMemoryStorage->setValue('test', 4.5);

        $this->assertTrue(True);
    }

    public function testRestore() {
        $this->inMemoryStorage->setValue('test', 4.5);
        $this->inMemoryStorage->restore('test');
        $this->assertTrue(True);
    }

    public function testReset() {
        $this->inMemoryStorage->setValue('test', 4.5);
        $this->inMemoryStorage->reset();
        $this->assertTrue(True);
    }



}
