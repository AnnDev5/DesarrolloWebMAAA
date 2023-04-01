<?php
session_start();
include("operaciones.php");
if(isset($_SESSION['a']) and isset($_SESSION['b']))
{
    $o =new operaciones($_SESSION['a'],$_SESSION['b']);
    echo "La suma es ".$o->sumar();
}
else
{
    echo "No hay valores de a y/o b";
}
?>
<meta http-equiv="refresh" content="4;url=menu.html">
