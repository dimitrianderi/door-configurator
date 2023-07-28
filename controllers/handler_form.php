<?php
session_start();

/** @var PDO $pdo */
require_once __DIR__ . '/../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $painting_color = trim($_POST['painting_color']);
    $tape_color = trim($_POST['tape_color']);
    $handle_color = trim($_POST['handle_color']);
    $width_door = trim($_POST['width']);
    $height_door = trim($_POST['height']);
    $opening = trim($_POST['opening']);
    $accessories = $_POST['accessories'] ? implode(', ', $_POST['accessories']) : null;
    $sum = trim($_POST['sum']);

    /** @var arr $error_messages */
    require_once __DIR__ . '/validator.php';
    require_once __DIR__ . '/prepare_config.php';

    if (empty($error_messages)) {
        $sql = "INSERT INTO `orders` (painting_color, tape_color, handle_color, width_door, height_door, opening, accessories, sum) 
                VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?)";
        $res = $pdo->prepare($sql);
        $request = $res->execute([$painting_color, $tape_color, $handle_color, $width_door, $height_door, $opening, $accessories, $sum]);

        $_SESSION['status'] = $request;

        require_once __DIR__ . '/create_pdf.php';
        require_once __DIR__ . '/telegram_send.php';
    };

    $_SESSION['error_messages'] = $error_messages;
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
