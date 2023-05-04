<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('conexion.php');
    $sql2="SELECT id,descripcion,numero_camas from tipo_habitaciones";
    $resultado2 = $con->query($sql2);
    ?>

    <form action="createHabitacion.php" method="POST" enctype="multipart/form-data"
><div>
            <label for="nro">Numero:</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="idtipohabitacion">Tipo de habitacion:</label>
            <select name="idtipohabitacion">
                <?php while ($tipohabitacion = $resultado2->fetch_assoc()) {
                ?>
                    <option value="<?php echo $tipohabitacion['id']; ?>"
                    <?php echo $tipohabitacion['id']==1?'selected':''; ?>>
                    <?php echo $tipohabitacion['descripcion']; ?></option>
                <?php
                }
                ?>
            </select>
        </div> 
        <div>
            <label for="bonoprivado">Bono Privado:</label>
            <input type="number" name="bonoprivado">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio">
        </div>
        <input type="submit" value="Crear">



    </form>

</body>

</html>