<?php
$username = 'root';
$password = '';
$servernaame = 'localhost';
$dbname = 'cp4s_dacillo_db';

try {
    $conn = new PDO("mysql:host=$servernaame;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
