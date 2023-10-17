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
                <input type="text" name="descripción" placeholder="Descripción" value="<?= $row['descripción']?>">
                <input type="text" name="intereses" placeholder="intereses" value="<?= $row['intereses']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>