<?php

/** @var PDO $pdo */
require_once __DIR__ . '/../database/connect.php';

$sql = "SELECT price.id, products.name AS product, types.name AS type, price.cost
        FROM price
        LEFT JOIN products ON products.id = price.product_id
        LEFT JOIN types ON types.id = price.type_id";

$price = $pdo->query($sql)->fetchAll();

$json_price = json_encode($price);

echo $json_price;
