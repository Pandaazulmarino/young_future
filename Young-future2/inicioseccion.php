<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar seccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="icon" type="img" href="img/enciclopedia.png">
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
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 col-md-1"></div>
                <div class="col-10 col-md-10"><div id="formulario2">
                    <form id="form2" method="post" action="inicio_sesion.php">
                        <div class="form-floating mb-3">
                            <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="Usuario" value="Usuario">
                            <div class="input-group flex-nowrap mb-3" id="input">
                                <input type="text" class="form-control-plaintext" id="floatingPlaintextInput" placeholder="usuario" aria-label="Username" aria-describedby="addon-wrapping" name="usuario">
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="textl" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="contraseña" value="Contraseña">
                            <div class="input-group flex-nowrap mb-3" id="input">
                                <input type="password" class="form-control-plaintext" id="floatingPlaintextInput" placeholder="contraseña" aria-label="contrseña inicio seccion" aria-describedby="addon-wrapping" name="contraseña">
                            </div>
                        </div>
                        <div>
                            <button id="btn">Iniciar sección</button>
                        </div>
                    </form> 
                    
                </div></div>
                <div class="col-1 "></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>