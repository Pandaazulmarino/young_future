<?php
session_start();
session_unset();//elimino todos los datos de la sesiòn actual
session_destroy();
header("Location:index.php");
exit();


?>