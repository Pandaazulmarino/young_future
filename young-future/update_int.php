<?php 
    require_once("conexion.php");
     
    $id=$_GET['id'];

    $sql="SELECT * FROM carreras WHERE id='$id'";
    $query=mysqli_query($conexion, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar carreras</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_carrera.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="carrera" placeholder="Carrera" value="<?= $row['carrera']?>">
                <input type="text" name="descripcion" placeholder="Descripción" value="<?= $row['descripcion']?>">
                <input type="text" name="universidad" placeholder="Universidad" value="<?= $row['universidad']?>">
                <input type="text" name="interes" placeholder="Interes" value="<?= $row['interes']?>">
                <input type="text" name="grupo" placeholder="Grupo" value="<?= $row['grupo']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>