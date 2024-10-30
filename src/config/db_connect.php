<?php
$host = '127.0.0.1';
$port = '3004'; // Replace 'your_custom_port' with the port specified in TablePlus
$dbname = 'KyteApi';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: Set charset
    $pdo->exec('SET NAMES utf8');

    echo "Connected successfully"; die();
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


