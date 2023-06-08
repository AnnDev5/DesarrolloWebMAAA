<?php
$operacion =$_GET['operacion'];
$numinicio = $_GET['numinicio'];
$numfinal = $_GET['numfinal'];
$datos=[$operacion,$numinicio,$numfinal];
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>