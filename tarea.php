<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea</title>
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href="depdos.php" style="color: #4e181d !important; ">Segundo</a>
                <a class="dropdown-item" href="deptres.php" style="color: #4e181d !important;">Tercero</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select nombre_archivo from tareas where id_tareas=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['nombre_archivo']; ?>" width="100%" height="600px" allowfullscreen="true" style="border:1px solid black;"></iframe>
                <?php } } ?>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
