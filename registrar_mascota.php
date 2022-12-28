<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

    <?php
    include('menu.php')
    ?>

    <div class="col-sm-4 offset-sm-4">
        <br>
        <form action="guardar_mascota.php" method="post">

            <!--<input type="hidden" name="">-->

            <H3>
                <th><label for="">REGISTRO DE MASCOTA:</label></th>
            </H3>

            <div class="mb-3">
                <th><label for="">CODIGO:</label></th>
                <th><input class="form-control" type="text" name="codigo" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">NOMBRE:</label></th>
                <th><input class="form-control" type="text" name="nombre" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">FECHA_NACIMIENTO:</label></th>
                <th><input class="form-control" type="DATE" name="fecha_nacimiento" id=""></th>
            </div>
            <div class="mb-3">
                <th><label for="">RAZA:</label></th>
                <th><input class="form-control" type="text" name="raza" id=""></th>
            </div>
            <input type="hidden" name="editar" id="" value='no' readonly>
            <input class="" type="submit" value="GUARDAR">
        </form>
    </div>

    <link rel="stylesheet" href="./css/index.css">
</body>

</html>