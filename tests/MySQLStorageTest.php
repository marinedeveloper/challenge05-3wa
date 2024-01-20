<?php


use Cart\Product;
use http\Header\Parser;
use PHPUnit\Framework\TestCase;


class MySQLStorageTest extends TestCase
{

    public function setUp(): void
    {
        $this->pdo = new \PDO('sqlite::memory:');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec(
            "CREATE TABLE products (
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                price DECIMAL(10, 2) NOT NULL
            );
                "
        );

    $this->In = new In($this->pdo);

    $yaml = new Parser();


}

}
