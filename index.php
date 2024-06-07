<?php
    session_start();

    if(isset($_SESSION['user'])){
        header("location: inicio.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginRegisterForm</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido a FinanzTrack</h2>
                <p>Para unirte a nuestra comunidad por favor inicia sesión</p>
                <input type="button" value="Iniciar sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
                <p>O usa tu email para registrarte</p>
                <form action="php/register_db.php" method="POST" class="form form-register" novalidate>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Nombre de usuario" name="userName">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="email" placeholder="Correo electronico" name="userEmail">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="password" placeholder="Contraseña" name="userPassword">
                        </label>
                    </div>
                    <input type="submit" value="Registrarse">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>
    
    
    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Si aun no tienes una cuenta por favor registrese aquí</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
                <p>O Iniciar sesión con una cuenta</p>
                <form action="php/login_usuario.php" method="POST" class="form form-login" novalidate>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="email" placeholder="Correo electronico" name="userEmail">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="password" placeholder="Contraseña" name="userPassword">
                        </label>
                    </div>
                    <input type="submit" value="Iniciar sesión">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Iniciaste sesión correctamente</div>
                </form>
            </div>
        </div>
    </div>
    <script src="Js/script.js"></script>
    <script src="Js/register.js" type="module"></script>
    <script src="Js/login_modulo.js" type="module"></script>
</body>
</html>