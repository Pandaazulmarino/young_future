<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" type="img" href="img/enciclopedia.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        *{
  margin: 0%;
  padding: 0%;   
}
#navbar{
  background-color: #d0c2cf;
}
body{
  background-color: #F0FAFF;
}
@import url(http://fonts.googleapis.com/css?family=Montserrat+Alternates);
        .form-sugerencia {
background-color: #cce0c1;
box-sizing: border-box;
display: flex;
align-items: center;
border: 3px black solid;
width: fit-content;
height:fit-content;
margin-left: 30%;
margin-top: 130px;
border-radius: 3%;
}
@media(max-width:600px){
  .form-sugerencia{
  width: 97%;
  margin-left :01vh;
  margin-right: 01vh;
  margin-top: 95px;
  padding: 01vh;
  text-align: center;
  margin-bottom: 0vh;
  }
}
@media((max-width:900px)){
  .form-sugerencia{
    margin-left: 2%;
    margin-top: 13%;  
  }
}

.form-s{
padding: 50px 35px;
display: flex;
flex-direction: column; 
text-align: center;
width: 40%;
}

.h1{
font-size: 40px;
color:black;
margin: 0px;
float: left;

}
.p {
text-align: left;
font-size: 20px;
color: black;
margin-top: 25px;
margin-bottom: 0px;

}
.input-wrapper {
position: relative;
width: fit-content;
margin-bottom: 0px;
}

.input {
color:black;
padding: 0px;
width: 500px;
height: 38px;
border: black solid 3px;
margin: 1vh;
font-size: 18px;
text-align: left;
}
@media(max-width:600px){
  .input{
  width:inherit;
  margin-left :01vh;
  margin-right: 01vh;
  margin-top: 15px;
  padding: 01vh;
  text-align: left;
  margin-bottom: 0vh;
  font-size: 18px;
  }
}

.css-button-retro--red {
  min-width: 130px;
  height: 40px;
  color: #ffffff;
  padding: 5px 10px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  outline: none;
  border: 3px solid #000;
  color: #000;
  background: rgb(222, 215, 215);
  width: 50px;
  margin-top: 15px;
  margin-left: 180px;
}
@media(max-width:600px){
  .css-button-retro--red{
  margin-left:1vh;
  }
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
    
    <section class="form-sugerencia" class="col-sg-5">
    <div class="col-sg-5"></div>
      <div>
        <form action="sugerencia.php" method="post" class="form-s">
            <h1 class="h1">Sugerencias</h1>
            <div id="input-wrapper">
                <p class="p">Nombre</p>
                <input type="text" name="nombre" placeholder="" class="input">
            </div> 
            <div id="input-wrapper">
                <p class="p">Correo electrónico</p>
                <input type="email" name="email" placeholder="" class="input">
            </div> 
            <div id="input-wrapper">
                <p class="p">Sugerencia</p>
                <input type="text" name="sugerencia" placeholder="" class="input">
            </div> 
            <input class="css-button-retro--red input" type="submit" name="enviar" value="Enviar">
        </form>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>