<?php
    $n = $_GET['numero'];
    $dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    for($i = 1; $i<=7 ;$i++){
        if($n==$i){
            echo "<li><span style='color:red'>".$dias[$i-1]."</span>"."</li>"; 
        }else{
        echo "<li><span>".$dias[$i-1]."</span>"."</li>";
        }
    }
?>
