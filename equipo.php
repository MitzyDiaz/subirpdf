<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Alumnos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
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
            <a class="nav-link" href="equipo.php" style="text-shadow: 2px 2px #4e181d;">Equipo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="proyecto.php">Proyecto</a>
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
    <body style="background: #eee;">
        <div class="container">
        <div style="width: 100%;margin: auto; margin-top: 15px; border: 1px solid #900F1A;padding: 30px; background: #fff;">
            <div style="margin-top: 14px; margin-bottom: 30px;">
                <h4>Listado de los integrantes del Equipo</h4>
            </div>
            <!--Cards start-->
            <div class="row row-cols-1 row-cols-md-4">
            <div class="col mb-4">
                <div class="card h-100">
                <img src="img/Albergue.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jose Luis Angeles Gutierrez</h5>
                    <p class="card-text">Boleta: 2014130066</p>
                    <p class="card-text">Correo: holamundo.123@gmail.com</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="img/Albergue.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jose Luis Valenzuela	Sanchez</h5>
                    <p class="card-text">Boleta: 2015021332</p>
                    <p class="card-text">Correo: holamundo.123@gmail.com</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="img/Albergue.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luis Fernando Hernandez Casiano</h5>
                    <p class="card-text">Boleta: 2016602127</p>
                    <p class="card-text">Correo: holamundo.123@gmail.com</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="img/Albergue.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marian Jaqueline	Barcenas Castro</h5>
                    <p class="card-text">Boleta: 2012010278</p>
                    <p class="card-text">Correo: holamundo.123@gmail.com</p>
                </div>
                </div>
            </div>
            </div>
            <!--Cards end-->

            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    <!-- Footer -->
    <footer class="page-footer font-small" style="background: #dc3545; color: white;">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Todos los derechos reservados</div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</html>
