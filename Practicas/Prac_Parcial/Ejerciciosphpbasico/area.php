<?php
$b=$_GET['b'];
$a=$_GET['a'];
function area($b,$a){
    $area=($b*$a)/2;
    echo "El area del triangulo es: ".$area;
}
echo area($b,$a);
?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">