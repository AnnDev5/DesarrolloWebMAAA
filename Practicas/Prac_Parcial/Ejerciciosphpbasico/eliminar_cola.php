<?php
include ('cola.php');
session_start();

echo 'Elemento eliminado '. $_SESSION['p']->eliminar();


?>
<meta http-equiv="refresh" content="4;url=Ejercicio19.html">