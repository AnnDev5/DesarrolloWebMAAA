<?php
$numero=$_POST['numero'];
function par_impar($numero){
    if($numero%2==0){
        echo 'El numero '.$numero.' es par';
    }else{
        echo 'El numero '.$numero.' es impar';
    }    
}
echo par_impar($numero);
?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">