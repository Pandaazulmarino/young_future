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

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                <option>SELECCIONE PERFIL</OPTIOn>
                <!--<option value="1">1.Admin</OPTION>-->
                <option value="1">1.Admin</OPTION>
                <option value="2">2.Vista</OPTION>
            </SELECT> <!-- NOS VAMOS PARA REGISTRAR-->
            <input type="number" name="estado" placeholder="estado">
            <select name="intereses">
                <option selected>intereses</option>
                <option value="1">musica</option>
                <option value="2">medicina</option>
                <option value="3">tecnologia</option>
            </select>
            <input type="submit" value="Agregar">
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
                        <th><?= $row['intereses'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-form">
    <h2>intereses</h2>
        <form action="registrar_int.php" method="post">
            <input required name="facultad" type="text" placeholder="Facultad">
            <input required name="carrera" type="text" placeholder="Carrera">
            <input required name="descripción" type="text" placeholder="Descripción">
            <input  name="intereses" type="text" placeholder="Interes"><br>
            <input required type="submit" value="Enviar datos">
        </form>
    </div>
    <div class="users-table">
    <h2>Carreras registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Facuktad</th>
                    <th>Carrera</th>
                    <th>Descripción</th>
                    <th>Interes</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query2)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['facultad'] ?></th>
                        <th><?= $row['carrera'] ?></th>
                        <th><?= $row['descripción'] ?></th>
                        <th><?= $row['intereses'] ?></th>
                        <th><a href="update_int.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_carrera.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div id="footer" ></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
