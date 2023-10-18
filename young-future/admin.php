<?php
    require_once("conexion.php");
    session_start();//inicie la sesion
    if(!isset($_SESSION["usuario"])){
        header("Location:login2.html");
        exit();
    }
    $usuario=$_SESSION["usuario"];

    $sql1 = "SELECT * FROM usuario";
    $query1 = mysqli_query($conexion,$sql1);

    $sql2 = "SELECT * FROM carreras";
    $query2 = mysqli_query($conexion,$sql2);

    $sql3 ="SELECT * FROM sugerencia";
    $query3 = mysqli_query($conexion, $sql3);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img" href="img/enciclopedia.png">
</head>
<body>
    <h1>Admin, <?php echo $usuario?></h1>
    <a href="logout.php">Cerrar sesión</a>

    <body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="registrar.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="email" name="email" placeholder="Correo">
            <input type="password" name="contraseña" placeholder="contraseña">
           <!--elaboracion perfil-->
            <SELECT name="perfil">
                <option>Seleccione un perfil</OPTIOn>
                <!--<option value="1">1.Admin</OPTION>-->
                <option value="1">Admin</OPTION>
                <option value="2">Vista</OPTION>
            </SELECT> <!-- NOS VAMOS PARA REGISTRAR-->
            <select name="estado">
                <option selected>Estado</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            <select name="interes">
                <option selected>Intereses</option>
                <option value="1">musica</option>
                <option value="2">medicina</option>
                <option value="3">tecnologia</option>
            </select><br>
            <input type="submit" value="Agregar">
            <br>
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>interes</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query1)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['usuario'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['contraseña'] ?></th>
                        <th><?= $row['perfil'] ?></th>
                        <th><?= $row['estado'] ?></th>
                        <th><?= $row['interes'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <br>
        </table>
    </div><br><br>
    <div class="users-form">
    <h2>Registar carreras e intereses</h2>
        <form action="registrar_int.php" method="post">
            <input required name="carrera" type="text" placeholder="Carrera">
            <input required name="descripcion" type="text" placeholder="Descripción">
            <input required name="universidad" type="text" placeholder="Universidad">
            <input required name="interes" type="text" placeholder="Interes">
            <input required name="grupo" type="text" placeholder="Grupo"><br>
            <input required type="submit" value="Enviar datos">
        </form>
    </div>
    <br><br>
    <div class="users-table">
    <h2>Carreras e intereses registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carrera</th>
                    <th>Descripción</th>
                    <th>universidad</th>
                    <th>Interes</th>
                    <th>Grupo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query2)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['carrera'] ?></th>
                        <th><?= $row['descripcion'] ?></th>
                        <th><?= $row['universidad'] ?></th>
                        <th><?= $row['interes'] ?></th>
                        <th><?= $row['grupo'] ?></th>
                        <th><a href="update_int.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_carrera.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div><br><br>
    <div class="users-table">
    <h2>Sugerencias</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Sugerencia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query3)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['sugerencia'] ?></th>
                        <th><a href="delete_sugerencia.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <div id="footer" style="height: 5hv; width: 100%;" ></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
