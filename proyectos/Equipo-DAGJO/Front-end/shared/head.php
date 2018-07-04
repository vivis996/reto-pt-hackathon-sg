<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">NubeEvento</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#pricing">Eventos </a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#portfolio">Favoritos</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>


                <li><a href="#contact">Contacto</a></li>
                
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if ($userActive)
                    echo 'algo';
                    else
                        include 'loginnav.php' 
                    ?>
                </ul>
                </ul>

        </div>
    </div>
</nav>