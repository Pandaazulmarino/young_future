<?php
session_start();
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];


    $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);
   

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $_SESSION["usuario"]=$usuario;
        while($fila=$resultado->fetch_assoc()){

            if($fila["perfil"]==='1'){
                header("Location: admin.php");
            } else{  
                if($fila["estado"]==='2'){
                    echo '<script>alert("tu cuenta esta inactiva, por favor contactanos para resolver tu problema o crea una nueva cuenta"); window.location.href = "inicioseccion.php";</script>';
                }else{  
                    header("Location: usuario.php");
                }
            }
        }

       
    } else {
        echo '<script>alert("No coinciden tus datos, revisa de nuevo"); window.location.href = "inicioseccion.php";</script>';
        
}
}
?>