<?php



require_once ('item.php');
class Venta {


	private $tipoDePizza;
	private $fecha;
	private $valor;

	public function __construct($tipoDePizza, $fecha, $valor) { 
			$this->tipoDePizza = $tipoDePizza;
			$this->fecha = $fecha;
			$this->valor = $valor;		
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

}


?>