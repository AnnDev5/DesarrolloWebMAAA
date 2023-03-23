<?php 
$cadena=$_GET['cadena'];
echo $cadena;
echo "<br>";
echo strlen($cadena);
?>
<hr>
<h1>Cuadrado</h1>
<?php
echo $cadena."<br>";
$l=strlen($cadena);
for($i=1;$i<$l-1;$i++){
    echo $cadena[$i];
    for($j=1;$j<$l-1;$j++){
        echo "&nbsp";
    }
    echo $cadena[$l-$i+1]."<br/>";
}
//for($i=1;$i<$l-1;$i++){

//}
?>

<hr>
<h1>Cuadrado Bonito</h1>
<table>
<?php
echo "<tr>";
for($i=1;$i<$l-1;$i++){
echo "<td>".$cadena[$i]."</td>";
}
echo "</tr>";
for($i=1;$i<$l-1;$i++){
    echo "<tr>";
    echo "<td>".$cadena[$i]."</td>";
    for($j=1;$j<$l-1;$j++){
        echo "<td>&nbsp;</td>";
    }
    echo "<td>".$cadena[$l-$i+1]."<br/>";
}
for($i=1;$i<$l-1;$i++){
    
}
?>
</table>