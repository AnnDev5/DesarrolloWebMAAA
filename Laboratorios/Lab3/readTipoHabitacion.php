<?php
include('conexion.php');
$sql = "SELECT descripcion,numero_camas FROM tipo_habitaciones";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
             <tr>
                <th>Descripcion</th>
                <th>Numero de Camas</th>
            </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['descripcion'] ?> </td>
                <td><?php echo $row['numero_camas'] ?></td>
                <td>
            </tr>
        <?php } ?>
    </table>
<?php
}
$con->close();
?>