<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$interes = $_POST['interes'];

if (!$usuario == "" && !$contraseña == "") {
    $consulta = "SELECT * FROM `usuario` WHERE usuario='$usuario'";
    $resultado_consulta = mysqli_query($conexion, $consulta);

    if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
        echo '<script>alert("El usuario ya existe, por favor elige otro"); window.location.href = "registro.php";</script>';
    } else {
        $insertar = "INSERT INTO usuario (usuario, nombre, apellido, email, contraseña, interes)
        VALUES ('$usuario','$nombre','$apellido','$email','$contraseña', '$interes')";

        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo '<script>alert("Has sido registrado con exito, por favor difruta de tu esperiencia con Young Future"); window.location.href = "index.php";</script>';
        } else {
            echo "Error de registro: " . mysqli_error($conexion);
        }
    }
}
?>
