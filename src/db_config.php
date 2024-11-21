<?php
$host = 'mysql'; 
$dbname = 'mydatabase'; 
$username = 'admlinux';
$password = 'admpassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE )";
    
    $pdo->exec($sql);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    $pdo = null;
}
?>
