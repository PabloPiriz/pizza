<?php

class Item {

	public static $TIPO_HARINA          = 0;
	public static $TIPO_AGUA            = 1;
	public static $TIPO_OREGANO         = 2;
	public static $TIPO_SALSA           = 3;
	public static $TIPO_SALSA_PREP      = 4;
	public static $TIPO_MASA            = 5;
	public static $TIPO_PIZZA           = 6;
	public static $TIPO_DINERO          = 7;

	private $tipo;
	private $cantidad;

	public function __construct($tipo, $cantidad) { 
		$this->tipo = $tipo;
		$this->cantidad = $cantidad;
	}
	
	public function getTipo() {
		return $this->tipo;
	}
	
	public function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}
	
	public function getCantidad() {
		return $this->cantidad;		
	}

}


?>