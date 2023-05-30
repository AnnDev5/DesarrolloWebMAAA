<?php
$id=$_GET['id'];
echo $id;
include('conexion.php');
$sql = "SELECT id,nombre FROM provincias as provincias where id_departamento=$id";
//echo $sql;
$resultado = $con->query($sql);
$agenda = array();
while ($row = $resultado->fetch_assoc()) {
    $agenda[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);


$con->close();
?>