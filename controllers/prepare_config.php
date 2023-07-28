<?php

/** @var PDO $pdo */
require_once __DIR__ . '/../database/connect.php';

$sql = "SELECT * FROM `config`";

$config = $pdo->query($sql)->fetchAll()[0];

$token = $config['token'];
$chat_id = $config['chat_id'];
$dealership = $config['dealership'];
