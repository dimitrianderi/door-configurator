<?php
/** @var str $host */
/** @var str $username */
/** @var str $password */
/** @var str $db_name */
/** @var str $charset */
require_once __DIR__ . '/config.php';

$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $err) {
    echo "Ошибка подключения к базе данных: " . $err->getMessage();
}
