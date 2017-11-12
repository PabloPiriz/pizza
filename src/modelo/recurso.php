<?php

Recurso::$HARINA      = new Recurso (0, "Harina");
Recurso::$AGUA        = new Recurso (1, "Agua");
Recurso::$OREGANO     = new Recurso (2, "Oregano");
Recurso::$SALSA       = new Recurso (3, "Salsa");
Recurso::$SALSA_PREP  = new Recurso (4, "Salsa Preparada");
Recurso::$MASA        = new Recurso (5, "Masa");

class Recurso {

	public static $HARINA;
	public static $AGUA;
	public static $OREGANO;
	public static $SALSA;
	public static $SALSA_PREP;
	public static $MASA;
	public static $PIZZA_COMUN;

	private $id;
	private $nombre;

	public function __construct($id, $nombre) {
		$this->id     = $id;
		$this->nombre = $nombre;
	}

	public function __toString() {
		return "Nombre: ".$this->nombre;
	}

	public function getId() {
		return $this->id;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre() {
		return $this->nombre;
	}
}

?>
