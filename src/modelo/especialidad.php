<?php

require_once ('map.php');
require_once ('recurso.php');
require_once ('pizza.php');

Especialidad::$SALSERO = new Especialidad(0, "Salsero",
    array(
        new Par(Recurso::$MASA, 1),
        new Par(Recurso::$SALSA_PREP, 2),
        new Par(Pizza::$PIZZA_COMUN, 1)
    ),
    1
);
Especialidad::$AMASADOR = new Especialidad(1, "Amasador",
    array(
        new Par(Recurso::$MASA, 2),
        new Par(Recurso::$SALSA_PREP, 1),
        new Par(Pizza::$PIZZA_COMUN, 1)
    ),
    1
);
Especialidad::$HORNEADOR = new Especialidad(2, "Horneador",
    array(
        new Par(Recurso::$MASA, 1),
        new Par(Recurso::$SALSA_PREP, 1),
        new Par(Pizza::$PIZZA_COMUN, 2)
    ),
    1
);
Especialidad::$HORNEADOR = new Especialidad(3, "Vendedor",
    array(
        new Par(Recurso::$MASA, 1),
        new Par(Recurso::$SALSA_PREP, 1),
        new Par(Pizza::$PIZZA_COMUN, 1)
    ),
    2
);

class Especialidad {

    public static $SALSERO;
    public static $AMASADOR;
    public static $HORNEADOR;
    public static $AMASADOR;

    public $id;
    public $name;
    public $bonosItems;
    public $bonoDinero;

    public function __construct($id, $name, $bonosItems, $bonoDinero) {
        $this->id   = $id;
        $this->name = $name;
        $this->bonosItems = $bonosItems;
        $this->bonoDinero = $bonoDinero;
    }

    public function getBonoItem($item) {
        return $this->bonosItems->get($item)->value;
    }

    public function getBonoDinero() {
        return $this->bonoDinero;
    }
}

?>
