<?php
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['numero_camas'];
$id = $_POST['id'];
include('conexion.php');
$sql = "UPDATE tipo_habitaciones SET  descripcion='$descripcion',numero_camas=$numero_camas
WHERE id=$id";
#echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=readTipoHabitacion.php" />