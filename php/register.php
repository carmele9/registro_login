<?php
global $pdo;
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $termsAccepted = isset($_POST['termsAccepted']);

    // Validar que la contraseña tenga entre 8 y 12 caracteres
    if (strlen($password) < 8 || strlen($password) > 12) {
        echo "La contraseña debe tener entre 8 y 12 caracteres.";
        exit();
    }
    // Validar que el nombre de usuario y el email no estén en uso
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM users WHERE username =? OR email =?");
    $stmt->execute([$username, $email]);
    $result = $stmt->fetch();

    if ($result['count'] > 0) {
        echo "El nombre de usuario o el email ya está en uso.";
        exit();
    }
    // Validar que el campo de nombre de usuario no esté vacío
    if (empty($username)) {
        die("El nombre de usuario no puede estar vacío.");
    }
    // Validar que el campo de email no esté vacío
    if (empty($email)) {
        die("El correo electrónico no puede estar vacío.");
    }
    // Validar que el campo de contraseña no esté vacío
    if (empty($password)) {
        die("La contraseña no puede estar vacía.");
    }
    // Validar que el campo de email sea válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El correo electrónico no es válido.");
    }
    // Validar que el campo de nombre de usuario no contenga caracteres especiales
    if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        die("El nombre de usuario solo puede contener letras y números.");
    }
    // Validar que el checkbox de "Términos y condiciones" esté marcado
    if (!$termsAccepted) {
        die("Debes aceptar los términos y condiciones.");
    }

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);

    header("Location: index.php"); // Redirigir a la página del inicio
    exit();
}
?>