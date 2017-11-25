
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 25/11/2017
 * Time: 10:12 AM
 */

<!DOCTYPE html>
<html lang="es">
<head>

    <title>NubeEventos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estiloc.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">NubeEvento</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Eventos </a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#portfolio">Favoritos</a></li>
                <li><a href="#pricing">Sobre Nosotros</a></li>


                <li><a href="#contact">Contacto</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="registrarse.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a>
                    </li>
                    <li class="dropdown">
                        <link rel="stylesheet" href="css/eslitologin.css">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Iniciar Sesión</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Iniciar sesión

                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Correo electrónico</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Correo electrónico" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
                                                <div class="help-block text-right"><a href="">¿Olvidaste tu contraseña?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <a href="index.html" class="btn btn-tw"><i class="fa fa-twitter"></i> Iniciar Sesion</a>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Mantener sesión
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                            ¿Nuevo aqui? <a href="registrarse.php"><b>Unetenos!</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                </ul>

        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>¡Cultura!</h1>
    <p>¡Lo más interesantes para ti!</p>
    <form>
        <div class="input-group">
            <!-- <input type="email" class="form-control" size="50" placeholder="Correo electrónico" required>-->
            <div class="input-group-btn">
                <!-- <button type="button" class="btn btn-danger">Subscribete!</button>-->
            </div>
        </div>
    </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>¿Qué hay aqui?</h2><br>
            <h4>¡Los eventos más geniales de tu ciudad!</h4><br>
            <p>Aqui hay unas opciones aclamadas por el publico,disfruta de una danza  Folklórica, obras de teatro y mucho mas...
            </p>
            <br><button class="btn btn-default btn-lg">Mas información</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>
