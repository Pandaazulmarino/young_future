<?php 
    require_once("conexion.php");
     
    $id=$_GET['id'];

    $sql="SELECT * FROM usuario WHERE id='$id'";
    $query=mysqli_query($conexion, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="text" name="apellido" placeholder="Apellido" value="<?= $row['apellido']?>">
                <input type="email" name="email" placeholder="Email" value="<?= $row['email']?>">
                <input type="password" name="contraseña" placeholder="Contraseña" value="<?= $row['contraseña']?>">
                <!--elaboracion perfil-->
                <SELECT name="perfil">
                    <option>SELECCIONE PERFIL</OPTIOn>
                    <!--<option value="1">1.Admin</OPTION>-->
                    <option value="1">1.Admin</OPTION>
                    <option value="2">2.Vista</OPTION>
                </SELECT> <!-- NOS VAMOS PARA REGISTRAR-->
                <input type="number" name="estado" placeholder="estado" value="<?= $row['estado']?>">
                <select name="interes">
                    <option selected>intereses</option>
                    <option value="1">musica</option>
                    <option value="2">medicina</option>
                    <option value="3">tecnologia</option>
            </select>
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>