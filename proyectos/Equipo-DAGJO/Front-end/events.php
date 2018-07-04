<?php 
session_start();

include('./Functions/rest.php');
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
        <td>#</td>
        <td>Nombre</td>
        <td>TipoEvento</td>
        <td>Fecha</td>
    </tr>
    
    <?php 
        $decode = json_decode($resultado, true);

        for($i = 0; $i < count($decode); $i++){
            var_dump($decode[$i]); 
            //$id = $decode[$i]->Id;
            //echo $id;
            // $nombre_fruta = $decode[$i]->Nombre;
            // $cantidad = $decode[$i]->Fecha;
            // echo $id_fruta." ".$nombre_fruta." ".$cantidad;
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