<?php

/** @var PDO $pdo */
require_once __DIR__ . '/../database/connect.php';

$sql = "SELECT id FROM orders ORDER BY id DESC";

$list = $pdo->query($sql)->fetchAll();
