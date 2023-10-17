<?php
require_once("conexion.php");

$id = $_POST["id"];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$perfil = $_POST['perfil'];
$estado = $_POST['estado'];
$intereses = $_POST['intereses'];

$sql = "UPDATE usuario SET usuario='$usuario', nombre='$nombre', apellido='$apellido', email='$email', contraseña='$contraseña', perfil='$perfil', estado='$estado', intereses='$intereses' WHERE id='$id'";

$query = mysqli_query($conexion, $sql);

if ($query) {
    Header("Location: admin.php");
}
?>
