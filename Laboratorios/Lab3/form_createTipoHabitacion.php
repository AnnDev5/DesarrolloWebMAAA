<?php #include('verificar.php');
#include('permiso.php');
include('conexion.php');
/*$sql = "SELECT id,nombre from profesiones";

$resultado = $con->query($sql);*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tipo Habitacion</title>
</head>

<body>

    <form action="createTipoHabitacion.php" method="POST" enctype="multipart/form-data"
><div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="numero_camas">Numero de camas:</label>
            <input type="number" name="numero_camas">
        </div>
        <input type="submit" value="Crear">



    </form>

</body>

</html>