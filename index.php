<!DOCTYPE html>
<?php
include_once 'config.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador de tareas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <!--OTRO NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <span class="navbar-brand">Aplicaciones Multimedia</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="text-shadow: 2px 2px #4e181d;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="equipo.php">Equipo</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="parciales.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Departamentales
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="depuno.php" style="color: #4e181d !important;">Primero</a>
                <a class="dropdown-item" href="depdos.php" style="color: #4e181d !important;">Segundo</a>
                <a class="dropdown-item" href="deptres.php" style="color: #4e181d !important;">Tercero</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <!--OTRO NAVBAR-->
    <body style="background: #eee;">
    <div class="container">
        <!--inicio de carrusel-->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="img/upiicsa1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/upiicsa2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/upiicsa3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            <!--fin de carrusel-->
            <div style="margin-top: 14px; margin-bottom: 30px;">
                <h4>AQUI VA INFORMACION DE TU PROYECTO</h4>
            </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
