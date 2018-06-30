<?php 
session_start();

include('./Functions/rest.php');
$userActive = false;
//$resultado = Rest::sendGet('users', '6', '/');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<!-- meh -->
    <title>NubeEventos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include './shared/head.php' ?>

<div class="jumbotron text-center">
    <h1>NubeEvento</h1>
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
        <a href="./events.php"><h2>Eventos</h2></a>
        <h4>Selecciona los eventos de tu preferencia</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Culturales</h1>
                </div>
                <div class="panel-body">

                    <img class="img-circle" src="img/cancun1.jpg" width="300" height="200">
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
                    <img class="img-circle" src="img/music2.jpg" width="300" height="200">
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
                    <img class="img-circle" src="img/eventos-deportivos.jpg" width="300" height="200">
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


<!-- Contenido (Seccion de servicios) -->
<div id="services" class="container-fluid text-center">
    <h2>¿Qué tenemos para ti?</h2>
    <h4>¡Lo más divertido de estas categorías!</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos ">Innovación</a></p></h4>
            <p>Descripcion breve de esto de aqui</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos ">Favoritos</a></p></h4>
            <p>Descripcion breve de esto de aqui..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos ">Trabajo</a></p></h4>
            <p>Descripcion breve de esto de aqui..</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos"> Verde</a></p></h4>
            <p>Descripcion breve de esto aqui..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos ">Certificados</a></p></h4>
            <p>Descripcion breve de esto aqui..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4><p><a href="xd.php" title="Visitanos ">Desarrolladores</a></p></h4>
            <p>Descripcion breve de esto aqui..</p>
        </div>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Nuestros favoritos</h2><br>
    <h4>¿Que te puede interesar?</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
s
                <img src="img/cancun1.jpg" alt="Paris" width="800" height="200">
                <p><a href="xd.php" title="Visitanos ">Cancun</a></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/merida.jpg" alt="New York" width="300" height="200">
                <p><strong>Mérida</strong></p>
                <p>Lo tradicional con lo innovador</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/Chiapas.jpg" alt="San Francisco" width="300" height="200">
                <p><strong>Chiapas</strong></p>
                <p>Lo mistico y lo antiguo</p>
            </div>
           <!-- <div class="panel-body">
                <img class="img-circle" src="img/Chiapas.jpg" width="300" height="200">
                <p><strong>Chiapas</strong></p>
                <p>Lo mistico y lo antiguo</p>
            </div>-->
        </div>
    </div><br>

    <h2>¡Nuestras recomendaciones!</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="img/cancun2.jpg" alt="New York" width="1366" height="623">
                <div class="carousel-caption">
                    <h3>¡Visitalo!</h3>
                    <p>Ven y vive la experiencia de la lluvia de estrellas.</p>
                </div>
            </div>
            <div class="item">
                <img src="img/fest1.jpg" alt="Chicago" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Danza del venado</h3>
                    <p>Ballet Folklórico de Mexico de Amalia Hernández.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/music.jpg" alt="Los Angeles" width="1200" height="700">
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
                <h2>Acerca de Nosotros</h2><br>
                <h4>¡Somos un grupo de desarrolladores enfocados en ayudarte!</h4><br>
                <p>Somos un grupo de desarrolladores enfocados en ayudarte a falicitarte la ubicación de los eventos más innovadores e interesantes para ti,
                    permitiendo que encuentres en un solo lugar toda la información clara y concisa de cada evento.
                </p>
                <br><button class="btn btn-default btn-lg">Mas información</button>
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
                <h2>Nuestros valores</h2><br>
                <h4>Somos un grupo de  jovenes soñadores de la innovación y el cambio</h4>
                <h4><strong>MISION:</strong> Ser la mejor extensión en la busqueda de grandes eventos .</h4><br>
                <h4><strong>VISION:</strong>Ser la mejor opción para los usuarios</h4>
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


<?php include 'footer.php' ?>
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
</html>