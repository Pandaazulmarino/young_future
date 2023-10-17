<?php
include('conexion.php');


$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$intereses = $_POST['intereses'];

if (!$usuario == "" && !$contraseña == "") {
    $consulta = "SELECT * FROM `usuario` WHERE usuario='$usuario'";
    $resultado_consulta = mysqli_query($conexion, $consulta);

    if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
        echo '<script>alert("El usuario ya existe, por favor elige otro"); window.location.href = "registro.php";</script>';
    } else {
        $insertar = "INSERT INTO usuario (usuario, nombre, apellido, email, contraseña, intereses)
        VALUES ('$usuario','$nombre','$apellido','$email','$contraseña', '$intereses')";

        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            header("Location: index.php");
        } else {
            echo "Error de registro: " . mysqli_error($conexion);
        }
    }
}
?>
