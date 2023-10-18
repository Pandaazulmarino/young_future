<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sugerencia = $_POST['sugerencia'];

$insertar = "INSERT INTO sugerencia (nombre, email, sugerencia)
    VALUES ('$nombre', '$email','$sugerencia')";

$resultado = mysqli_query($conexion, $insertar);

 if ($resultado) {
    echo '<script>alert("Tu sugerencia se ha enviado con exito, gracias por ayudarnos a crecer en Young Future"); window.location.href = "contacto.php";</script>';
} else {
    echo "Error de registro: " . mysqli_error($conexion);
}
