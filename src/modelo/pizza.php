<?php

Pizza::$PIZZA_COMUN = new Pizza(0, "Pizza comun", 30);

class Pizza {

    public static $PIZZA_COMUN;

    private $id;
    private $name;
    private $precio;

    function __construct($id, $name, $precio) {
        $this->id     = $id;
        $this->name   = $name;
        $this->precio = $precio;
    }

    function getId() {
        return $this->id;
    }

    
}


?>
