<?php
function eliminarmayores($array,$num_mayor){
    foreach($array as $key => $value){
        if($value > $num_mayor){
            unset($array[$key]);
        }
    }
    return $array;
}
if(isset($_POST['num_elementos']) and isset($_POST['num_mayor'])){
    $num_elementos = $_POST['num_elementos'];
    $num_mayor = $_POST['num_mayor'];
    $array = $_POST['valor'];
    $array_modificado = eliminarmayores($array,$num_mayor);
    echo "Arreglo Original: ".implode(",",$array)."<br>";
    echo "Arreglo Modificado: ".implode(",",$array_modificado)."<br>";
}
