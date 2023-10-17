<?php 
include ('conexion.php');

$facultad=$_POST['facultad'];
$carrera = $_POST['carrera'];
$descripción = $_POST['descripción']; 
$intereses = $_POST['intereses'];

if (!empty($carrera)) {
    $consulta = "SELECT * FROM `carreras` WHERE carrera='$carrera'";
    $resultado_consulta = mysqli_query($conexion, $consulta);

    if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
        echo '<script>alert("La carrera ya está inscrita, por favor elige otra"); window.location.href = "intereses.php";</script>';
    } else {
        $insertar = "INSERT INTO carreras (facultad, carrera, descripción, intereses) VALUES ('$facultad', '$carrera','$descripción', '$intereses')";

        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            header("Location: admin.php");
        } else {
            echo "Error de registro: " . mysqli_error($conexion);
        }
    }
}
?>
