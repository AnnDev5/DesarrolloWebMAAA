<?php

$n=$_POST['n'];

$suma=0;
foreach($_POST['valor'] as $valor)
{
    $suma+=$valor;
}
echo 'La suma total es: '.$suma;
?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">