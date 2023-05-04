<?php 
session_start();
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
include('conexion.php');
$sql = "SELECT id,correo,nombres,apellidos,idrol,estado FROM usuarios WHERE correo='$correo' AND password ='$password'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    setcookie('correo',$correo,0);
    $fila = $resultado->fetch_assoc();
    $_SESSION['correo'] = $fila['correo'];
    $_SESSION['nombres'] = $fila['nombres'];
    $_SESSION['idrol'] = $fila['idrol'];
    header("location:readHabitacion.php");
} else {
?>
    Error contraseña no valida
    <meta http-equiv="refresh" content="3; url=login.php" />
<?php
}
?>
