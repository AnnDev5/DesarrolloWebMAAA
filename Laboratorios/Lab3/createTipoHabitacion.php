<?php
include('verificar.php'); 
$descripcion=$_POST['descripcion'];
$numero_camas=$_POST['numero_camas'];
include('conexion.php');
$sql="INSERT into tipo_habitaciones (descripcion,numero_camas)
VALUES ('$descripcion',$numero_camas)";
#echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />