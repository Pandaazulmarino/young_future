<?php
require_once("conexion.php");

$id = $_POST["id"];
$carrera = $_POST['carrera'];
$descripción = $_POST['descripción'];
$intereses = $_POST['intereses'];

$sql = "UPDATE carreras SET carrera='$carrera', descripción='$descripción', intereses='$intereses' WHERE id='$id'";

$query = mysqli_query($conexion, $sql);

if ($query) {
    Header("Location: admin.php");
}
?>