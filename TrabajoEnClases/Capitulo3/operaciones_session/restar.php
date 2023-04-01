<?php
session_start();
include("operaciones.php");
if(isset($_SESSION['a']) and isset($_SESSION['b']))
{
    $o =new operaciones($_SESSION['a'],$_SESSION['b']);
    echo "La resta es ".$o->restar();
}
else
{
    echo "No hay valores de a y/o b";
}
?>
<meta http-equiv="refresh" content="4;url=menu.html">