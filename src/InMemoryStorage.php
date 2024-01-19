<?php

namespace App;

class InMemoryStorage
{

    public function __construct() {
    }

    private static $values = [];

    /**
     * @param array $values
     */
    public static function setValues(array $values): void
    {
        self::$values = $values;
    }

    public static function delete($key) {
        unset(self::$values[$key]);
    }

    public static function reset() {
        self::$values = [];
    }

    public static function total() {
        return count(self::$values);
    }

}