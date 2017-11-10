<?php

require_once ('item.php');

class Venta {

	private $pizza;
	private $fecha;
	private $valor;
	private $personaje;

	public function __construct($personaje, $pizza, $fecha, $valor) {
			$this->pizza = $pizza;
			$this->fecha = $fecha;
			$this->valor = $valor;
			$this->personaje = $personaje;
	}

	public function __toString() {
		return "";
	}

	public function save() {
		// TODO:
	}

	public function getTipoDePizza() {
		return $this->tipoDePizza;
	}
	public function setTipoDePizza($tipoDePizza) {
		$this->tipoDePizza = $tipoDePizza;
	}

	public function getFecha() {
		return $this->fecha;
	}
	public function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	public function getValor() {
		return $this->valor;
	}
	public function setValor($valor) {
		$this->valor = $valor;
	}

	public function getVentasPorPersonaje($personaje) {
		// TODO: Devolver un array con las ventas de ese personaje
	}
}

?>
