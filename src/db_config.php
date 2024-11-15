<?php
$host = 'mysql'; 
$dbname = 'mydatabase'; 
$username = 'admlinux';
$password = 'admpassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    $pdo = null;
}
?>
