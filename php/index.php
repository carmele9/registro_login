<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Bienvenido</h2>
            <div class="card mt-4">
                <div class="card-body">
                    <form id="loginForm" method="POST" action="/login">
                        <h4>Iniciar Sesión</h4>
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelpBlock" required>
                            <div id="passwordHelpBlock" class="form-text"><strong>La contraseña debe tener entre 8-12 caracteres</strong></div>
                        </div>
                        <button type="submit" class="btn btn-custom">Iniciar Sesión</button>
                    </form>
                    <hr>
                    <form id="registerForm" method="POST" action="/register">
                        <h4>Registrarse</h4>
                        <div class="mb-3">
                            <label for="newUsername" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="newUsername" name="username" required>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Email</label>
                            <input type="email" id="registerEmail" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="newPassword" name="password" aria-describedby="passwordHelpBlock" required>
                            <div id="passwordHelpBlock2" class="form-text"><strong>La contraseña debe tener entre 8-12 caracteres</strong></div>
                        </div>
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                   aria-describedby="registerCheckHelpText" />
                            <label class="form-check-label" for="registerCheck">
                                He leido los terminos y condiciones.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-secondary">Registrarse</button>
                        <div class="text-center">
                            <p>o entrar con:</p>
                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
