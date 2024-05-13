<?php
    session_start();

    if(!isset($_SESSION['user'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡¡SI SIRVIO!!</h1>
    <a href="php/cerrar_sesion.php">CERRAR SESION</a>

</body>
</html>