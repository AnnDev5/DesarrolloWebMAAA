<?php
include('conexion.php');
$sql = "SELECT * FROM productos";
$resultado = $con->query($sql);
?>

<table border="1">
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while ($producto = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><img src="images/<?php echo $producto['imagen'] ?>" height=70px></td>
            <td><?php echo $producto['nombre'] ?></td>
            <td><?php echo $producto['descripcion'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
            <td><?php echo $producto['stock'] ?></td>
        </tr>
    <?php } ?>
</table>
<div id="insertar">
    <input type="submit" onclick="fetchInsertar()" value="Insertar">
</div>