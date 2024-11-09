<?php
global $pdo;
session_start();
include'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Validar los datos
    if (empty($username) || empty($password)) {
        echo "Todos los campos son obligatorios.";
        return;
    }

    // Verificar si el usuario ya existe en la base de datos
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if (!$user) {
        echo "El usuario no existe.";
        return;
    }
    // Verificar la contraseña
    if (!password_verify($password, $user['password'])) {
        echo "Contraseña incorrecta.";
        return;
    }

    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php"); // Redirigir a la pagina con todos los usuarios

}
?>
