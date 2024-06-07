<?php

include 'conexion_db.php';

// Obtener los datos del formulario
$ingresosPasivos = $_POST['ingresosPasivos'];
$ingresosActivos = $_POST['ingresosActivos'];
$gastosAlquiler = $_POST['gastosAlquiler'];
$gastosGenerales = $_POST['gastosGenerales'];
$gastosExtras = $_POST['gastosExtras'];
$deudas = $_POST['deudas'];
$fechaIngreso = $_POST['fechaIngreso'];

// Calcular el dinero total
$dineroTotal = $ingresosPasivos + $ingresosActivos - ($gastosAlquiler + $gastosGenerales + $gastosExtras) - $deudas;

$dineroTotal = $_POST['dineroTotal']
// Insertar los datos en la tabla "finanzas"
$query = "INSERT INTO finanzas(ingresosPasivos, ingresosActivos, gastosAlquiler, gastosGenerales, gastosExtras, deudas, fechaIngreso, dineroTotal)
        VALUES ('$ingresosPasivos', '$ingresosActivos', '$gastosAlquiler', '$gastosGenerales', '$gastosExtras', '$deudas', '$fechaIngreso', '$dineroTotal')";

if ($conn->query($query) === TRUE) {
    echo "Datos guardados correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>