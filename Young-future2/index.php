<?php

require_once("conexion.php");


$resultados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $busqueda = $_POST['busqueda'];

    $sql = "SELECT * FROM carreras WHERE facultad = '$busqueda'"; 

    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $resultados .= "<table border='1'>";
        $resultados .= "<tr><th>facultad</th><th>Carrera</th><th>Descripción</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $resultados .= "<tr>";
            $resultados .= "<td>" . $row["facultad"] . "</td>";
            $resultados .= "<td>" . $row["carrera"] . "</td>";
            $resultados .= "<td>" . $row["descripción"] . "</td>";
            $resultados .= "</tr>";
        }
        $resultados .= "</table>";
    } else {
        $resultados = "No se encontraron resultados para el valor ingresado.";
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
                <input type="text" name="busqueda" placeholder="Búsqueda por facultad" class="form-control">
                 <div class="input-group-btn">
                    <input type="submit" value="Enviar" class="btn ">
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
    <div class="galeria">
        <input type="radio" name="navegacion" id="_1" checked>
        <input type="radio" name="navegacion" id="_2">
        <input type="radio" name="navegacion" id="_3">
        <input type="radio" name="navegacion" id="_4"> 
        <img src="img/u1.jpg" width="260" height="300" alt="Galeria CSS 1" />
        <img src="img/u2.jpg" width="260" height="300" alt="Galeria CSS 2"  />
        <img src="img/u3.jpg" width="260" height="300" alt="Galeria CSS 3" />
        <img src="img/u4.jpg" width="260" height="300" alt="Galeria CSS 4" />
      </div>
    </section>

      <div class="galeria2">
        <input type="radio" name="navegacion" id="_1" checked>
        <input type="radio" name="navegacion" id="_2">
        <input type="radio" name="navegacion" id="_3">
        <input type="radio" name="navegacion" id="_4"> 
        <img src="img/u5.png" width="260" height="300" alt="Galeria CSS 5" />
        <img src="img/u6.jpg" width="260" height="300" alt="Galeria CSS 6"  />
        <img src="img/u7.jpg" width="260" height="300" alt="Galeria CSS 7" />
        <img src="img/u8.png" width="260" height="300" alt="Galeria CSS 8" />
      </div>

      <div class="galeria3">
        <input type="radio" name="navegacion" id="_1" checked>
        <input type="radio" name="navegacion" id="_2">
        <input type="radio" name="navegacion" id="_3">
        <input type="radio" name="navegacion" id="_4"> 
        <img src="img/u9.jpg" width="260" height="300" alt="Galeria CSS 1" />
        <img src="img/u10.jpg" width="260" height="300" alt="Galeria CSS 2"  />
        <img src="img/u11.jpg" width="260" height="300" alt="Galeria CSS 3" />
        <img src="img/u12.jpg" width="260" height="300" alt="Galeria CSS 4" />
      </div>

      <div class="galeria4">
        <input type="radio" name="navegacion" id="_1" checked>
        <input type="radio" name="navegacion" id="_2">
        <input type="radio" name="navegacion" id="_3">
        <input type="radio" name="navegacion" id="_4"> 
        <img src="img/u13.jpg" width="260" height="300" alt="Galeria CSS 1" />
        <img src="img/u14.jpg" width="260" height="300" alt="Galeria CSS 2"  />
        <img src="img/u15.jpg" width="260" height="300" alt="Galeria CSS 3" />
        <img src="img/u16.webp" width="260" height="300" alt="Galeria CSS 4" />
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
