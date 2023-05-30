<?php

if (!isset($_GET['orden'])) {
    $orden = 'per.id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%" . str_replace(" ", "%", $_GET['buscar']) . "%'";
}
include('conexion.php');
$sql = "SELECT id,nombre FROM departamentos as departamentos";
//echo $sql;
$resultado = $con->query($sql);
$agenda = array();
while ($row = $resultado->fetch_assoc()) {
    $agenda[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);


$con->close();
?>