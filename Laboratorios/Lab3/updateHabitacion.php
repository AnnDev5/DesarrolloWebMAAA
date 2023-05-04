<?php
$nro=$_POST['nro'];
$idtipohabitacion=$_POST['idtipohabitacion'];
$bonoprivado=$_POST['bonoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$id = $_POST['id'];
include('conexion.php');
$sql = "UPDATE habitaciones SET  nro=$nro,idtipohabitacion=$idtipohabitacion,bonoprivado=$bonoprivado,espacio=$espacio,precio=$precio
WHERE id=$id";
#echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=readHabitacion.php" />