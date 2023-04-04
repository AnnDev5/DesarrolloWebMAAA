<?php
$n = $_GET['numero'];
    $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
    echo '<select>';
    for($i = 1; $i<=12 ;$i++){
        if($n==$i){
            echo '<option value="'.$i.'"selected>'.$meses[$i-1].'</option>';
            //echo "<li><span style='color:red'>".$meses[$i-1]."</span>"."</li>"; 
        }else{
            echo '<option value="'.$i.'">'.$meses[$i-1].'</option>';
        //echo "<li><span>".$meses[$i-1]."</span>"."</li>";
        }
    }
    echo '</select>';
?>