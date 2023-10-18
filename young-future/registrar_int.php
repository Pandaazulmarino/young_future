<?php 
include ('conexion.php');

$carrera = $_POST['carrera'];
$descripcion = $_POST['descripcion']; 
$universidad = $_POST['universidad'];
$interes = $_POST['interes'];
$grupo = $_POST['grupo'];

if (!empty($carrera)) {
    $consulta = "SELECT * FROM `carreras` WHERE carrera='$carrera'";
    $resultado_consulta = mysqli_query($conexion, $consulta);

    if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
        echo '<script>alert("La carrera ya está inscrita, por favor elige otra"); window.location.href = "interes.php";</script>';
    } else {
        $insertar = "INSERT INTO carreras (carrera, descripcion, universidad, interes, grupo) VALUES ('$carrera','$descripcion', '$universidad', '$interes', '$grupo')";

        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            header("Location: admin.php");
        } else {
            echo "Error de registro: " . mysqli_error($conexion);
        }
    }
}
?>
