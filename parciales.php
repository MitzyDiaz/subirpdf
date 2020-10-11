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
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <span class="navbar-brand">Aplicaciones Multimedia</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="parciales.php" style="text-shadow: 2px 2px #4e181d;">Actividades</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="equipo.php">Equipo</a>
            </li>
            </ul>
        </div>
    </nav>
    <body style="background: #eee;">
    <div class="container">
            <div style="margin-top: 14px; margin-bottom: 30px;">
                <h4>AQUI VAN ORDENADOS POR DEPARTAMENTAL</h4>
            </div>
            
            <div class="card-deck">
                <div class="card">
                    <img src="img/albergue.png" class="card-img-top" style="padding: 30px; width: 300px;" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Primer Departamental</h5>
                    <p class="card-text">Tareas asignadas para el primer departamental de la materia Aplicaciones Multimedia.</p>
                    </div>
                    <div class="card-footer">
                    <a href="depuno.php" class="btn btn-primary btn-lg btn-block">Ver</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/albergue.png" class="card-img-top" style="padding: 30px; width: 300px;" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Segundo Departamental</h5>
                    <p class="card-text">Tareas asignadas para el segundo departamental de la materia Aplicaciones Multimedia.</p>
                    </div>
                    <div class="card-footer">
                    <a href="depdos.php" class="btn btn-primary btn-lg btn-block">Ver</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/albergue.png" class="card-img-top" style="padding: 30px; width: 300px;" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Tercer Departamental</h5>
                    <p class="card-text">Tareas asignadas para el tercer departamental de la materia Aplicaciones Multimedia.</p>
                    </div>
                    <div class="card-footer">
                        <a href="deptres.php" class="btn btn-primary btn-lg btn-block">Ver</a>
                    </div>
                </div>
            </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
