<?php

require_once __DIR__ . '/vendor/autoload.php';


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "cart_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ajout de quelques produits de test
    $products = [
        ['apple', 10.5],
        ['raspberry', 13.0],
        ['orange', 7.5],
    ];

    foreach ($products as $product) {
        $name = $product[0];
        $price = $product[1];

        $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->execute();
    }

    // Ajout de quelques paniers et produits dans les paniers
    $stmt = $conn->prepare("INSERT INTO carts DEFAULT VALUES");
    $stmt->execute();

    $cartId = $conn->lastInsertId(); // Récupère l'ID du panier créé

    $cartProducts = [
        ['cart_id' => $cartId, 'product_id' => 1, 'quantity' => 3],
        ['cart_id' => $cartId, 'product_id' => 2, 'quantity' => 2],
    ];

    foreach ($cartProducts as $cartProduct) {
        $stmt = $conn->prepare("INSERT INTO cart_products (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, :quantity)");
        $stmt->bindParam(':cart_id', $cartProduct['cart_id']);
        $stmt->bindParam(':product_id', $cartProduct['product_id']);
        $stmt->bindParam(':quantity', $cartProduct['quantity']);
        $stmt->execute();
    }

    echo "Données insérées avec succès.";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;