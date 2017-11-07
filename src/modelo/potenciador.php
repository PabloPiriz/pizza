<?php

Potenciador::$COCINA_MEJORADA = new Potenciador (0, "Cocina Mejorada", 0.1,  700);
Potenciador::$HORNO_MEJORADO  = new Potenciador (1, "Horno Mejorado",  0.1,  700);
Potenciador::$CAPACITACION    = new Potenciador (2, "Capacitacion",    0.14, 1500);
Potenciador::$DELIVERY        = new Potenciador (3, "Delivery",        0.05, 1300);
Potenciador::$SABORES         = new Potenciador (4, "Sabores",         0.3,  1700);

class Potenciador {

	public static $COCINA_MEJORADA;
	public static $HORNO_MEJORADO;
	public static $CAPACITACION;
	public static $DELIVERY;
	public static $SABORES;

	private $id;
	private $coeficiente;
	private $precio;
	private $nombre;

	public function __construct($id, $nombre, $coeficiente, $precio) {
		$this->id          = $id;
		$this->nombre      = $nombre;
		$this->coeficiente = $coeficiente;
		$this->precio      = $precio;
	}

	public function __toString() {
		return "Nombre: ".$this->nombre."| Coeficiente: ".$this->coeficiente . "| Precio: " . $this->precio;
	}

	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}

	public function setCoeficiente($coeficiente) {
		$this->coeficiente = $coeficiente;
	}
	public function getCoeficiente() {
		return $this->coeficiente;
	}

	public function setPrecio($precio) {
		$this->precio = $precio;
	}
	public function getPrecio() {
		return $this->precio;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre() {
		return $this->nombre;
	}
}

?>
