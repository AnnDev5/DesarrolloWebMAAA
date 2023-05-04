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
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT nro,idtipohabitacion,bonoprivado,espacio,precio from habitaciones where id=$id";
    $sql2="SELECT id,descripcion,numero_camas from tipo_habitaciones";
    $resultado = $con->query($sql);
    $resultado2 = $con->query($sql2);
    $row = $resultado->fetch_assoc();
    ?>
        <form action="updateHabitacion.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
        <label for="nro">Numero:</label>
            <input type="number" name="nro" value="<?php echo $row['nro']; ?>">
        </div>
        <!--<div>
            <label for="idtipohabitacion">Tipo Habitacion:</label>
            <input type="number" name="idtipohabitacion" value="<?php echo $row['idtipohabitacion']; ?>">
        </div>-->
        <div>
            <label for="bonoprivado">Bono Privado:</label>
            <input type="number" name="bonoprivado" value="<?php echo $row['bonoprivado']; ?>">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']; ?>">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
        <div>
            <label for="idtipohabitacion">Tipo de habitacion:</label>
            <select name="idtipohabitacion">
                <?php while ($tipohabitacion = $resultado2->fetch_assoc()) {
                ?>
                    <option value="<?php echo $tipohabitacion['id']; ?>"
                    <?php echo $tipohabitacion['id']==$row['idtipohabitacion']?'selected':''; ?>>
                    <?php echo $tipohabitacion['descripcion']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Actualizar">
        </form>

</body>

</html>