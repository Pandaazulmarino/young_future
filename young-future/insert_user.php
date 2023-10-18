<?php
//require_once("conexion.php");
$conexion=mysqli_connect('localhost','root','','young_fututre');

if (!$conexion) {
die('Error de conexión: ' . mysqli_connect_error());
}

$id = null;
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$perfil = null;
$estado = null;
$interes =$_POST['interes'];

$sql = "INSERT INTO usuario VALUES('$id','$usuario','$nombre','$apellido','$email','$contraseña', '$perfil', '$estado', '$interes')";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}

?>