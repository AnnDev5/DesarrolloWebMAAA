<?php
class operaciones{
    private $a;
    private $b;

    function __construct($a, $b)
    {
      $this->a=$a;
      $this->b=$b;  
    }
    public function sumar(){
        return $this->a + $this->b;
    }
    public function restar(){
        return $this->a - $this->b;
    }
    public function multiplicar(){
        return $this->a * $this->b;
    }
    public function dividir(){
        return $this->a / $this->b;
    }

}