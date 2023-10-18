<?php
require_once("conexion.php");

$id = $_POST["id"];
$carrera = $_POST['carrera'];
$descripcion = $_POST['descripcion'];
$universidad = $_POST['universidad'];
$interes = $_POST['interes'];
$grupo = $_POST['grupo'];

$sql = "UPDATE carreras SET carrera='$carrera', descripcion='$descripcion', universidad='$universidad', interes='$interes', grupo='$grupo' WHERE id='$id'";

$query = mysqli_query($conexion, $sql);

if ($query) {
    Header("Location: admin.php");
}
?>