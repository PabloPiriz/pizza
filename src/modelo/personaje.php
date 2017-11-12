<?php

require_once ('cocina.php');
require_once ('inventario.php');
require_once ('venta.php');
require_once ('item.php');
require_once ('potenciador.php');
require_once ('map.php');

class Personaje {

	public static $TIPO_SALSERO   = 0;
	public static $TIPO_AMASADOR  = 1;
	public static $TIPO_HORNEADOR = 2;
	public static $TIPO_VENDEDOR  = 3;

	private $id;
	private $nombre;
	private $tipo;
	private $inventario;
	// private $ventas;

	public function __construct($id, $nombre, $tipo) {
		$this->id         = $id;
		$this->nombre     = $nombre;
		$this->tipo       = $tipo;
		// $this->ventas     = array();
		$this->inventario = Inventario::cargarPorPersonaje($this);
	}

	public function tipoToString() {
		switch ($this->tipo) {
			case Personaje::$TIPO_SALSERO:
				return "Salsero";
			case Personaje::$TIPO_AMASADOR:
				return "Amasador";
			case Personaje::$TIPO_HORNEADOR:
				return "Horneador";
			case Personaje::$TIPO_VENDEDOR:
				return  "Vendedor";
		}
		return "";
	}

	public function __toString() {
		$flag = "Personaje:<br>";
		$flag .= "Id:     " . $this->id . "<br>";
		$flag .= "Nombre: " . $this->nombre . "<br>";
		$flag .= "Tipo:   " . $this->tipoToString() . "<br>";
		$flag .= $this->inventario;
		return $flag;
	}

	public function equals($personaje) {
		if ($personaje != null)
			if ($this->id == $personaje->id)
				return true;

		return false;
	}

	public function generarHarina() {
		$this->inventario->modifyItem (Recurso::$HARINA, 1);
	}
	public function generarOregano() {
		$this->inventario->modifyItem (Recurso::$OREGANO, 1);
	}
	public function generarSalsa() {
		$this->inventario->modifyItem (Recurso::$SALSA, 1);
	}
	public function generarAgua() {
		$this->inventario->modifyItem (Recurso::$AGUA, 1);
	}

	//Craftea un item
	public function hacerItem ($requisitos, $salida) {
		//Si falta algun item se termina la funcion
		foreach ($requisitos as &$requisito)
			if ($this->inventario->getItemCant ($requisito->key) < $requisito->value)
				return false;

		//Resta los requisitos
		foreach ($requisitos as &$requisito)
			$this->inventario->modifyItem ($requisito->key, -$requisito->value);

		//Craftea el item
		$this->inventario->modifyItem ($salida->key, $salida->value);
		return true;
	}

	public function hacerMasa() {
		$cantHarina = 10;
		$cantAgua   = 15;
		$cantMasa   = 5;

		return $this->hacerItem(
			array (
				new Par (Recurso::$HARINA, $cantHarina),
				new Par (Recurso::$AGUA,   $cantAgua)
			),
				new Par (Recurso::$MASA, $cantMasa)
		);
	}

	public function hacerSalsaPrep() {
		$cantSalsa     = 10;
		$cantOregano   = 15;
		$cantSalsaPrep = 5;

		$this->inventario->potenciar(Potenciador::$COCINA_MEJORADA, $cantSalsaPrep);

		return $this->hacerItem(
			array (
				new Par (Recurso::$SALSA,   $cantSalsa),
				new Par (Recurso::$OREGANO, $cantOregano)
			),
				new Par (Recurso::$SALSA_PREP, $cantSalsaPrep)
		);
	}

	public function hacerPizza() {
		$cantMasa      = 1;
		$cantSalsaPrep = 1;
		$cantPizza     = 1;

		$this->inventario->potenciar(Potenciador::$HORNO_MEJORADO, $cantPizza);

		return $this->hacerItem(
			array (
				new Par (Recurso::$MASA,       $cantMasa),
				new Par (Recurso::$SALSA_PREP, $cantSalsaPrep)
			),
				new Par (Pizza::$PIZZA_COMUN, $cantPizza)
		);
	}
	public function venderPizza($pizza) {
		if ($this->inventario->getItemCant(Recurso::$PIZZA_COMUN) >= 1) {
			$this->inventario->modifyItem(Recurso::$PIZZA_COMUN, -1);
			$precio = $pizza->
			$this->inventario->modifiyDinero($pizza->precio);
			$venta = new Venta($this, $pizza, date("Y/m/d"), $precio);
			$venta->save();
		}
	}

	public function comprarPotenciador($potenciador) {
		$this->inventario->comprarPotenciador($potenciador);
	}

	private function findid($array, $venta){
		for ($i = 0; $i < count($array); $i++)
			if ($aux == $venta)	return $i;

		return -1;
	}

	public function getInventario() {
		return $this->inventario;
	}
	public function getId() {
		return $this->id;
	}
	public function getTipo() {
		return $this->tipo;
	}

	public static function getPersonajePorUsuario($usuario) {
		// TODO: obtener el usuario o null
		return null;
	}
}


?>
