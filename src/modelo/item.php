<?php

Item::$HARINA      = new Item (0, "Harina");
Item::$AGUA        = new Item (1, "Agua");
Item::$OREGANO     = new Item (2, "Oregano");
Item::$SALSA       = new Item (3, "Salsa");
Item::$SALSA_PREP  = new Item (4, "Salsa Preparada");
Item::$MASA        = new Item (5, "Masa");

class Item {

	public static $HARINA;
	public static $AGUA;
	public static $OREGANO;
	public static $SALSA;
	public static $SALSA_PREP;
	public static $MASA;

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
