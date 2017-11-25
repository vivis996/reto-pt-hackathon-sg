<!DOCTYPE HTML>
<html>
<head>

    <style>

        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Nombre es requerido";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Solo letras y espacios en blancos permitidos";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Correo electronico requerido";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Correo invalido";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Genero requerido";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/registro.css">

<div class="testbox">
    <h1>Registro</h1>

    <form action="/">
        <hr>
        <div class="accounttype">
            <input type="radio" value="None" id="radioOne" name="account" checked/>
            <label for="radioOne" class="radio" chec>Usuario</label>
            <!--<input type="radio" value="None" id="radioTwo" name="account" />
            <label for="radioTwo" class="radio">Compañia</label>-->
        </div>
        <hr>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="name" placeholder="Correo Electronico" required/>
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Nombre" required/>
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="name" id="name" placeholder="Contraseña" required/>
        <div class="gender">
            <input type="radio" value="None" id="male" name="gender" checked/>
            <label for="male" class="radio" chec>Masc</label>
            <input type="radio" value="None" id="female" name="gender" />
            <label for="female" class="radio">Fem</label>
        </div>
        <p>Al hacer clic en Registrarse, usted acepta nuestros <a href="#">terms y cond</a>.</p>
        <a href="#" class="button" type="submit"onclick="myFunction()">Registrar</a>
        <!--<button class="button" type="submit"onclick="myFunction()">Registrarse</button>-->

        <script>
            function myFunction() {
                alert("¡Registro exitoso!");
            }
        </script>
    </form>
</div>




</body>
</html>