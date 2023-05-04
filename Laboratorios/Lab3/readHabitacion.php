<?php
include('verificar.php');
include('conexion.php');
$sql = "SELECT id,nro,idtipohabitacion,bonoprivado,espacio,precio FROM habitaciones";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
            <tr>
                <th>Nro</th>
                <th>Tipo Habitacion</th>
                <th>Bono Privado</th>
                <th>Espacio</th>
                <th>Precio</th>
            </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['nro'] ?> </td>
                <td><?php echo $row['idtipohabitacion'] ?></td>
                <td><?php echo $row['bonoprivado'] ?></td>
                <td><?php echo $row['espacio'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                <td>
                    <?php if ($_SESSION['idrol'] == 1) { ?>
                        <a href="form_updateHabitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="deleteHabitacion.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    <?php } ?>
                </td>  
            </tr>
        <?php } ?>
        <?php if ($_SESSION['idrol'] == 1) { ?>
                <a href="form_createHabitacion.php">Crear Habitacion</a>
        <?php } ?>
        
    </table>
<?php
}
$con->close();
?>