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

    $sql = "SELECT * FROM carreras WHERE interes = '$busqueda'"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $resultados .= "<table border='1'>";
        $resultados .= "<tr><th>Carrera</th><th>Descripción</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $resultados .= "<tr>";
            $resultados .= "<td>" . $row["carrera"] . "</td>";
            $resultados .= "<td>" . $row["descripcion"] . "</td>";
            $resultados .= "</tr>";
        }
        $resultados .= "</table>";
    } else {
        $resultados = "No se encontraron resultados para el valor ingresado.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    <h1>Resultados</h1>
    <form action="" method="post"  >
    <input type="text" name="busqueda" placeholder="busqueda de carreras" >
    <input type="submit" value="enviar">
    </form>
    <?php
    echo $resultados;
    ?>
</body>
</html>