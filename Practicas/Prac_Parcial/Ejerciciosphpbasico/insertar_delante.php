<?php
include ('cola.php');
session_start();
$valor=$_GET['valor'];
if (!isset($_SESSION['p']))
{
    $_SESSION['p']=new Cola('Normal');
}

$_SESSION['p']->insertarDelante($valor);
?>
<meta http-equiv="refresh" content="4;url=Ejercicio19.html">