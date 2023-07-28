<?php

/** @var PDO $pdo */
require_once __DIR__ . '/../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $res = $pdo->prepare("SELECT * FROM `orders` WHERE `id` = ?");
    $res->execute([$id]);
    $order = $res->fetchAll()[0];
    echo "<pre>" . print_r($order, 1) . "</pre>";

    $painting_color = $order['painting_color'];

    $tape_color = $order['tape_color'];
    $handle_color = $order['handle_color'];
    $width_door = $order['width_door'];
    $height_door = $order['height_door'];
    $opening = $order['opening'];
    $accessories = $order['accessories'];
    $sum = $order['sum'];

    require_once __DIR__ . '/create_pdf.php';
    require_once __DIR__ . '/telegram_send.php';
}

//header("Location: " . $_SERVER['HTTP_REFERER']);
