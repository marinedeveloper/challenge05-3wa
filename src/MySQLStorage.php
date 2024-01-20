<?php

namespace Cart;

class MySQLStorage
{
    public function __construct(private \PDO $pdo)
    {
        $this->pdo = $pdo;
    }


}