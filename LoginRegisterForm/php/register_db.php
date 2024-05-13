<?php
    include 'conexion_db.php';

    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $pass = $_POST['userPassword'];

    $query = "INSERT INTO users(name,email,password) 
              VALUES('$name','$email','$pass')";

    $check_email = mysqli_query($conexion, "SELECT * FROM users WHERE email='$email'");

    /* Si los datos se ingresan mal o incompletos sale este mensaje(Que no deberia),
    deberia salir el de usuario no almacenado*/

    if (mysqli_num_rows($check_email)>0){
        echo '
        <script>
            alert("Este correo ya esta en uso, por favor inicie sesión");
            window.location = "../index.php";
        </script>
        ';

        exit();
    }

    $ejecutar = mysqli_query($conexion,$query);

    /*Esto esta funcionando al reves, cuando la funcion no se cumple envia el formulario y
    cuando esta buena no lo envia (°¬°) */

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Usuario no almacenado, ocurrio un error");
            window.location = "../index.php";
        </script>
        ';
    };

    mysqli_close($conexion);
?>