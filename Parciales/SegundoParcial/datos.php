<?php
include("conexion.php");
$sql = "SELECT id, titulo, imagen FROM libros";
$consulta = mysqli_query($con, $sql);
$libros = array();
while ($libro = mysqli_fetch_array($consulta)) {
    array_push($libros, array(
        "id" => $libro['id'],
        "titulo" => $libro['titulo'],
        "imagen" => $libro['imagen']
    ));
}
echo json_encode($libros);
