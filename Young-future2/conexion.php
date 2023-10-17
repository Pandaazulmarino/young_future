<?php
$servidor="localhost";
$usuario="root";
$clave="";
$bd="young_future";

$conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
if(!$conexion){
    die("error de conexion: ".mysqli_connect_error());
}
?>