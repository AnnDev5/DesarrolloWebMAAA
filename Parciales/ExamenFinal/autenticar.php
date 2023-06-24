<?php
session_start();
include("conexion.php");
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT  nombre, apellido, correo_electronico FROM usuarios WHERE correo_electronico = '$email' AND password = SHA1($password)";
$consulta = mysqli_query($con, $sql);
$usuario = mysqli_fetch_array($consulta);
if ($usuario != null) {
    $_SESSION["nombre"] = $usuario["nombrecompleto"];
    $_SESSION["nivel"] = $usuario["nivel"];
    echo "Se logueo con exito";
} else {
    echo "No autorizado";
}
