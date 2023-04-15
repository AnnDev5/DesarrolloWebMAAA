<?php

class Cola {
    private $tipo;
    
    private $elementos = array(); 

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function insertarDelante($elemento) {
        array_unshift($this->elementos, $elemento);
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function eliminar() {
        if (!$this->vacia()) {
            return array_shift($this->elementos);
        } else {
            return null;
        }
    }

    public function mostrar() {
        if (!$this->vacia()) {
            foreach ($this->elementos as $elemento) {
                echo $elemento . " ";
            }
        } else {
            echo "La cola está vacía.";
        }
    }

    private function vacia() {
        return empty($this->elementos);
    }
}
