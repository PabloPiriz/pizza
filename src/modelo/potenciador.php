<?php


class Potenciador {

	public static $TIPO_COCINA_MEJORADA = 0;
	public static $TIPO_HORNO_MEJORADO  = 1;
	public static $TIPO_CAPACITACION    = 2;
	public static $TIPO_DELIVERY        = 3;
	public static $TIPO_SABORES         = 4;
	
	private $tipo;
	private $coeficiente;

	public function __construct($tipo, $coeficiente) { 
		$this->tipo = $tipo;
		$this->coeficiente = $coeficiente;
	}
	
	
	public function getTipo() {
		return $this->tipo;		
	}
	
	public function setCoeficiente($coeficiente) {
		$this->coeficiente = $coeficiente;
	}
	
	public function getCoeficiente() {
		return $this->coeficiente;				
	}

}


?>