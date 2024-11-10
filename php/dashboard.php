<?php
global $pdo;
session_start();
include'db.php';

// Verificar si el usuario ha hecho log in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Magra:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2>Usuarios Registrados</h2>
    <div class="row">
        <?php foreach ($users as $user): ?>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($user['username']); ?></h5>
                        <p class="card-text">Email: <?php echo htmlspecialchars($user['email']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="logout.php" class="btn btn-danger mt-3">Cerrar sesión</a>
</div>
</body>
</html>
