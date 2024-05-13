<?php
    
    session_start();
    
    include 'conexion_db.php';

    $email = $_POST['userEmail'];
    $pass = $_POST['userPassword'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE email='$email' 
    and password='$pass'");

    if (mysqli_num_rows($validar_login) > 0){
        $_SESSION['user'] = $email;
        header("location: ../inicio.php");
        exit;

    } else {
        echo '
        <script>
            alert("Usuario no existe por favor registrese");
            window.location = "../index.php";
        </script>
        ';
    }


?>