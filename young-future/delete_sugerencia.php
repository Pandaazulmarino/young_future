<?php

require_once("conexion.php");

$id=$_GET["id"];

$sql="DELETE FROM sugerencia WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: admin.php");
}else{

}

?>