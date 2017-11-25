<!DOCTYPE html>
<html lang="es">
<head>
    <!-- meh -->
    <title>EvenToday</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
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
            <a class="navbar-brand" href="#myPage">EvenToday</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#pricing">Eventos </a></li>
                <!--<li><a href="#services">Servicios</a></li>-->
               <!-- <li><a href="#portfolio">Favoritos</a></li>
              <!--  <li><a href="#about">Sobre Nosotros</a></li>-->


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
                                        <!--<div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>-->

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
                                        ¿Nuevo aqui? <a href="registrarse.php"><b>Unetenos</b></a>
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
    <h1>EvenToday</h1>
    <p>¡Te ayudamos a encontrar los eventos más interesantes para ti!</p>
    <form>
        <div class="input-group">
            <!-- <input type="email" class="form-control" size="50" placeholder="Correo electrónico" required>-->
            <div class="input-group-btn">
                <!-- <button type="button" class="btn btn-danger">Subscribete!</button>-->
            </div>
        </div>
    </form>
</div>
<!-- Seccion de Eventos -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Eventos</h2>
        <h4>Selecciona los eventos de tu preferencia</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Culturales</h1>
                </div>
                <div class="panel-body">

                    <img class="img-circle" src="img2/DIABLOS.jpg" width="300" height="200">
                </div>
                <div class="panel-footer">

                    <h4>¡Los más destacados!</h4>
                    <form action="icultura.php">
                        <button class="btn btn-lg">Más</button>
                    </form>
                    <!-- <button class="btn btn-lg">Más</button>-->
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Musicales</h1>
                </div>
                <div class="panel-body">
                    <img class="img-circle" src="img2/music2.jpg" width="300" height="200">
                </div>
                <div class="panel-footer">

                    <h4>¡Los mejores del momento!</h4>
                    <form action="xd.php">
                        <button class="btn btn-lg">Más</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Deportivos</h1>
                </div>
                <div class="panel-body">
                    <img class="img-circle" src="img2/eventos-deportivos.jpg" width="300" height="200">
                </div>
                <div class="panel-footer">

                    <h4>¡Los más aclamados!</h4>
                    <form action="xd.php">
                        <button class="btn btn-lg">Más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <!--<h2>¡Nuestras recomendaciones!</h2>-->
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="img2/cancun2.jpg" alt="New York" width="1366" height="623">
                <div class="carousel-caption">
                    <h3>¡Visitalo!</h3>
                    <p>Ven y vive la experiencia de la lluvia de estrellas.</p>
                </div>
            </div>
            <div class="item">
                <img src="img2/fest1.jpg" alt="Chicago" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Danza del venado</h3>
                    <p>Ballet Folklórico de Mexico de Amalia Hernández.</p>
                </div>
            </div>

            <div class="item">
                <img src="img2/music.jpg" alt="Los Angeles" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Playa del Carmen</h3>
                    <p>¡Ven y disfruta de la mejor música electronica en la palaya!</p>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>¿Qué tenemos para ti?</h2><br>
                <h4>¡Descripcion!</h4><br>
                <p>Descripcion a grandes rasgos
                </p>
                <!--<br><button class="btn btn-default btn-lg">Mas información</button>-->
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Ubicación</h2><br>
                <h4></h4>
                <h4><strong>Dirección</strong> Cancun, Quintana Roo .</h4><br>
                <h4><strong>Horario</strong>8:00 PM</h4>
            </div>
        </div>
    </div>


    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">Contactanos</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>
                    Póngase en contacto con nosotros y nos pondremos en contacto con usted dentro de las 24 horas.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Cancún, MX</p>
                <p><span class="glyphicon glyphicon-phone"></span> +52 998 156 34 56</p>
                <p><span class="glyphicon glyphicon-envelope"></span> NubeEvento@algo.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <form>
                            <!--<button class="btn btn-default pull-right" type="submit">Enviar</button></form>-->
                            <button class="btn btn-default pull-right" type="submit"onclick="myFunction()">Enviar</button>

                            <script>
                                function myFunction() {
                                    alert("¡Enviado!");
                                }
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps
    <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position:myCenter});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p> <a href="https://www.eventos.com" title="Visitanos ">Inicio</a></p>
    </footer>

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>
