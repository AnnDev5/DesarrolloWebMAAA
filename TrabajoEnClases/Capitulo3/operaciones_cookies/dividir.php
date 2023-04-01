<?php
include("operaciones.php");
if(isset($_COOKIE['a']) and isset($_COOKIE['b']))
{
    $o =new operaciones($_COOKIE['a'],$_COOKIE['b']);
    echo "La division es: ".$o->dividir();
}
else
{
    echo "No hay valores de a y/o b";
}
?>
<meta http-equiv="refresh" content="4;url=menu.html">
