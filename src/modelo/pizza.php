<?php

class Pizza {

    public static $COMUN = new Pizza(0, "Comun");

    private $id;
    private $nombre;

    public function __construct($id, $nombre) {
        $this->id     = $id;
        $this->nombre = $nombre;
    }

    public function __toString() {
        return "Nombre: ".$this->nombre." ID: ".$this->id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
}

?>
