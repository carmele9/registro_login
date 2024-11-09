<?php
$host = 'db';
$user = 'root';
$password = 'secret';
$dbname = 'myapp_db';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión Fallida: " . $e->getMessage());
}
?>
