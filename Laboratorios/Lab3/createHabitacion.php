<?php 
include('verificar.php');
$nro=$_POST['nro'];
$idtipohabitacion=$_POST['idtipohabitacion'];
$bonoprivado=$_POST['bonoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
include('conexion.php');
$sql="INSERT into habitaciones (nro,idtipohabitacion,bonoprivado,espacio,precio)
VALUES ($nro,$idtipohabitacion,'$bonoprivado',$espacio,$precio)";
#echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=readHabitacion.php" />