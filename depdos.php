<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Tareas del Segundo Departamental</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <nav class="navbar navbar-expand-lg">
        <span class="navbar-brand">Aplicaciones Multimedia</span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto">
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
        <div style="width: 100%;margin: auto; margin-top: 15px; border: 1px solid #900F1A;padding: 30px; background: #fff;">
            <div style="margin-top: 14px; margin-bottom: 30px;">
                <h4>Listado de tareas del Segundo Departamental</h4>
            </div>
            <table id="tab_tareas" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Boleta</td>
                    <td>Titulo</td>
                    <td>Tamaño</td>
                    <td>Parcial</td>
                    <td>Nombre del Archivo</td>
                </tr>
            </thead>
            <?php
            include 'config.inc.php';
            $db=new Conect_MySql();
                $sql = "SELECT id_tareas, nombre, ap, am, tareas.boleta, titulo, tamano, departamental, nombre_archivo FROM tareas INNER JOIN alumno ON tareas.boleta  = alumno.boleta WHERE departamental = 2 ";
                $query = $db->execute($sql);
                while($datos=$db->fetch_row($query)){?>
                <tr>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['ap']; ?></td>
                    <td><?php echo $datos['am']; ?></td>
                    <td><?php echo $datos['boleta']; ?></td>
                    <td><?php echo $datos['titulo']; ?></td>
                    <td><?php echo $datos['tamano']; ?> kb</td>
                    <td><?php echo $datos['departamental']; ?></td>
                    <td><a href="tarea.php?id=<?php echo $datos['id_tareas']?>" ><?php echo $datos['nombre_archivo']; ?> </a></td>
                </tr>
                    
            <?php  } ?>
                
            </table>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
            <script>
            $(document).ready(function() {
            $('#tab_tareas').DataTable({
                "lengthMenu": [[10], [10]],
                "pagingType": "numbers",
                "ordering": true,
                autoFill: true,
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ tareas por pagina",
                    "zeroRecords": "No se encontro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Se filtraron de _MAX_ registros en total)"
                }
            });
            $("input.form-control").attr("placeholder", "Realiza tu busqueda");
        });

            </script>
    </body>
</html>
