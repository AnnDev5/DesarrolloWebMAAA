<?php
    $n = $_GET['numero'];
    $dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    echo "El dia de la semana elegido es:<br>";
    echo '<select>';
    for($i = 1; $i<=7 ;$i++){
        if($n==$i){
            echo '<option value="'.$i.'"selected>'.$dias[$i-1].'</option>';
        }else{
            echo '<option value="'.$i.'">'.$dias[$i-1].'</option>';
        }
    }
    echo '</select>';
?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">