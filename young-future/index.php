<?php

$servidor="localhost";
$usuario="root";
$clave="";
$bd="young_future";

$conn = new mysqli($servidor, $usuario, $clave, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$resultados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $busqueda = $_POST['busqueda'];

    $sql = "SELECT * FROM carreras WHERE interes = '$busqueda' or grupo ='$busqueda' or universidad= '$busqueda' or carrera = '$busqueda'" ; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $resultados .= "<table border='1'>";
        $resultados .= "<tr><th>Carrera</th><th>Descripción</th><th>Universidad</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $resultados .= "<tr>";
            $resultados .= "<td>" . $row["carrera"] . "</td>";
            $resultados .= "<td>" . $row["descripcion"] . "</td>";
            $resultados .= "<td>" . $row["universidad"] . "</td>";
            $resultados .= "</tr>";
        }
        $resultados .= "</table>";
    } else {
        $resultados = "No se encontraron carreras de tu interes.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Young Future</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="icon" type="img" href="img/enciclopedia.png">
    <style>
        body {
            background-color: #F0FAFF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #F2E1CB;
        }

        tr:nth-child(even) {
            background-color: #CBE4F2;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 2%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #CBE4F2;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 150px;
        }

        input[type="submit"]:hover {
            background-color: #7B96A6;
            color: #fff;
        }
    </style>
</head>
<body>
    <header >
        <div class="container-fluid" >
            <div class="row">
            <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active navbar-brand" aria-current="page" href="requisitos.html">Requisitos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link navbar-brand" href="contacto.php" >Contacto</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link navbar-brand" href="nosotros.html">Sobre nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-brand" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Cuenta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
                            <li><a class="dropdown-item" href="inicioseccion.php">Iniciar sesión</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>
    </header>
    <section id="busqueda" style="margin-top: 90px; padding-bottom: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <form action="" method="post" class="input-group">
                    <input type="text" name="busqueda" placeholder="Búsqueda de interes (carrera, universidas, etc)" class="form-control">
                    <div class="input-group-btn">
                        <input type="submit" value="Buscar" class="btn ">
                    </div>
                    </form>
                    <?php
                    echo $resultados;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-bottom: 5%;" >
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/u3.jpg" class="d-block w-100" alt="..." height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="img/u2.jpg" class="d-block w-100" alt="..." height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="img/u4.jpg" class="d-block w-100" alt="..." height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="img/u1.jpg" class="d-block w-100" alt="..." height="450px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
