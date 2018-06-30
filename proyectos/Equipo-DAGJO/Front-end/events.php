<?php 
session_start();

include('./Functions/rest.php');
include('./Models/Events.php');
$userActive = false;
$resultado = Rest::sendGet('events', '', '/');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<!-- meh -->
    <title>NubeEventos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include './shared/head.php' ?>

<br/>
<br/>
<div class="row">
    <div class="col-md-12">
    <h1>Eventos</h1>
    <table class="table table-condensed">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>TipoEvento</th>
        <th>Fecha</th>
    </tr>
    
    <?php
        // $class = new Events();
        // $class->Nombre = 'hola';
        // echo($class.Nombre);
        // foreach ($data as $key => $value) $class->{$key} = $value;

        $decode = json_decode($resultado, true);

        for($i = 0; $i < count($decode); $i++){
            $variable = $decode[$i];
            // var_dump($variable);
            echo("<tr>");
            echo("<td>".$variable["Id"]."</td>");
            echo("<td>".$variable["Nombre"]."</td>");
            echo("<td>".$variable["IdTipoEvento"]."</td>");
            echo("<td>".$variable["Fecha"]."</td>");
            echo("</tr>");
        }
    ?>
    </table>
    </div>
</div>

</body>
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