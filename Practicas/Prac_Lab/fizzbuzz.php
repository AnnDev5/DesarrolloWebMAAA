<?php
$n=$_GET['numero'];
function fizzbuzz($n){
    if($n%3==0&&$n%5==0){
        echo "FizzBuzz";
    }else{
        if($n%3==0){
        echo "Fizz";
        }else{
            if($n%5==0){
                echo "Buzz";
            }else{
                echo "El numero ".$n." es incorrecto";
            }
        }
    }
}
echo fizzbuzz($n);
?>