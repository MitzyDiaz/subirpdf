<!DOCTYPE html>
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $boleta= $_POST['boleta'];
            $departamental= $_POST['departamental'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tareas(titulo,tamano,tipo,nombre_archivo,boleta,departamental) VALUES('$titulo','$tamano','$tipo','$nombre','$boleta','$departamental')";
            $query = $db->execute($sql);
            if($query){
                echo "<script>
                    alert('Se guardo correctamente');
                    </script>";
            }
        } else {
            echo "Error";
        }
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador de tareas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <span class="navbar-brand">Administrador Tareas</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index_admin.php" style="text-shadow: 2px 2px #4e181d;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="lista.php">Lista</a>
            </li>
            </ul>
        </div>
    </nav>
    <body style="background: #eee;">
    <div class="container">
        <div style="width: 500px;margin: auto; margin-top: 15px; border: 1px solid #900F1A;padding: 30px; background: #fff;">
            <div style="margin-top: 14px; margin-bottom: 30px;">
                <h4>Administrador de tareas</h4>
            </div>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Boleta</label>
                        <div class="col-sm-10">
                        <input name="boleta" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Parcial</label>
                        <div class="col-sm-10">
                        <select name="departamental" class="form-control" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Selecciona...</option>
                            <option value="1">Primero</option>
                            <option value="2">Segundo</option>
                            <option value="3">Tercero</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tarea#</label>
                        <div class="col-sm-10">
                        <select name="titulo" class="form-control" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Selecciona...</option>
                            <option value="T01">Tarea1</option>
                            <option value="T02">Tarea2</option>
                            <option value="T03">Tarea3</option>
                            <option value="T04">Tarea4</option>
                            <option value="T05">Tarea5</option>
                            <option value="T06">Tarea6</option>
                            <option value="T07">Tarea7</option>
                            <option value="T08">Tarea8</option>
                            <option value="T09">Tarea9</option>
                            <option value="T010">Tarea10</option>
                            <option value="T011">Tarea11</option>
                            <option value="T012">Tarea12</option>
                            <option value="T013">Tarea13</option>
                            <option value="T014">Tarea14</option>
                            <option value="T015">Tarea15</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tarea</label>
                        <div class="col-sm-10">
                        <input type="file" name="archivo" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="subir">Subir</button>
                </form>            
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
