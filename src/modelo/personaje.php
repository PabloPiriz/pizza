<?php

require_once ('usuario.php');
require_once ('cocina.php');
require_once ('inventario.php');
require_once ('venta.php');
require_once ('item.php');
require_once ('potenciador.php');

class Personaje {

	public static $TIPO_SALSERO   = 0;
	public static $TIPO_AMASADOR  = 1;
	public static $TIPO_HORNEADOR = 2;
	public static $TIPO_VENDEDOR  = 3;

	private $id;
	private $usuario;
	private $nombre;
	private $tipo;
	private $ventas;
	private $inventario;

	public function __construct($id, $usuario, $nombre, $tipo) {
		$this->id         = $id;
		$this->usuario    = $usuario;
		$this->nombre     = $nombre;
		$this->tipo       = $tipo;
		$this->ventas     = array();
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
		$flag = $flag . "Id:     " . $this->id . "<br>";
		$flag = $flag . "Nombre: " . $this->nombre . "<br>";
		$flag = $flag . "Tipo:   " . $this->tipoToString() . "<br>";
		$flag = $flag . $this->inventario;
		return $flag;
	}

	public function generarHarina() {
		$item = $this->inventario->getItemPorTipo(Item::$TIPO_HARINA); /*esta sentencia me devuelve el item del inventario*/

		$item->setCantidad($item->getCantidad()+1);

	}

	public function generarOregano() {
		$item = $this->inventario->getItemPorTipo(Item::$TIPO_OREGANO); /*esta sentencia me devuelve el item del inventario*/

		$item->setCantidad($item->getCantidad()+1);
	}

	public function generarSalsa() {
		$item = $this->inventario->getItemPorTipo(Item::$TIPO_SALSA); /*esta sentencia me devuelve el item del inventario*/

		$item->setCantidad($item->getCantidad()+1);
	}

	public function generarAgua() {
		$item = $this->inventario->getItemPorTipo(Item::$TIPO_AGUA); /*esta sentencia me devuelve el item del inventario*/

		$item->setCantidad($item->getCantidad()+1);
	}

	public function hacerMasa() {
		$harina = $this->inventario->getItemPorTipo(Item::$TIPO_HARINA);

		if ($harina->getCantidad() >= 10){
			$agua = $this->inventario->getItemPorTipo(Item::$TIPO_AGUA);

			if ($agua->getCantidad() >= 15){

				$masa = $this->inventario->getItemPorTipo(Item::$TIPO_MASA);
				$masa->setCantidad($masa->getCantidad()+5);
				$agua->setCantidad($agua->getCantidad()-10);
				$harina->setCantidad($harina->getCantidad()-15);

			}
		}
	}

	public function hacerSalsaPrep() {
		$salsa = $this->inventario->getItemPorTipo(Item::$TIPO_SALSA);

		if ($salsa->getCantidad() >= 10) {
			$oregano = $this->inventario->getItemPorTipo(Item::$TIPO_OREGANO);

			if ($oregano->getCantidad() >= 15) {
				 $salsa_prep = $this->inventario->getItemPorTipo(Item::$TIPO_SALSA_PREP);
				 $cocinamejorada = $this->inventario->getPotenciadorPorTipo(Potenciador::$TIPO_COCINA_MEJORADA);

				 $cantidad = 5 ;
				 if ($cocinamejorada->isActive()){
					 $cantidad = $cantidad * $cocinamejorada->getCoeficiente();
				 }
				 $salsa_prep->setCantidad($salsa_prep->getCantidad()+$cantidad);


				 $salsa->setCantidad($salsa->getCantidad()-10);
				 $oregano->setCantidad($oregano->getCantidad()-15);
			}
			/*resolver si existe o no un potenciador para ver si opero con su ratio o no.*/

		}

	}

	public function hacerPizza() {
		$salsa_prep = $this->inventario->getItemPorTipo(Item::$TIPO_SALSA_PREP);
		if ($salsa_prep->getCantidad() >= 1) {
			$masa = $this->inventario->getItemPorTipo(Item::$TIPO_MASA);
			if ($masa->getCantidad() >= 1) {
				$salsa_prep->setCantidad($salsa_prep->getCantidad()-1);
				$masa->setCantidad($masa->getCantidad()-1);

				$potenciador = $this->inventario->getPotenciadorPorTipo(Potenciador::$TIPO_HORNO_MEJORADO);
				$cantidad = 1;
				if ($cocinamejorada->isActive()){
					$cantidad = $cantidad * $cocinamejorada->getCoeficiente();
				}
				$pizza = $this->inventario->getItemPorTipo(Item::$TIPO_PIZZA);
				$pizza->setCantidad($pizza->getCantidad() + $cantidad);
			}
		}

	}

	public function venderPizza() {
		$pizza = $this->inventario->getItemPorTipo(Item::$TIPO_PIZZA);


	}

	public function getVentas() {
		return $this->ventas;
	}
	public function addVenta($venta) {
		$this->venta[] = $venta;
	}


	public function crearCocina() {

	}

	public function unirseCocina() {

	}

	public function salirCocina() {

	}

	public function comprarPotenciador($tipo) {
		/*$dinero = $this->inventario->getItemPorTipo(Item::$TIPO_DINERO);
		$potenciador = $this->inventario->getPotenciadorPorTipo($tipo);
		if (!$potenciador->isActive()) {
			if ($this->dinero->getCantidad() >= $potenciador->getPrecio()) {
				$dinero->setCantidad($dinero->getCantidad() - $potenciador->getPrecio());
				$potenciador->toogleActivo();
			}
		}*/
	}

	private function findid($array, $venta){
		for ($i = 0; $i < count($array); $i++){
			if ($aux == $venta) {
				return $i;
			}
		}
		return -1;
	}

	public function getInventario() {
		return $this->inventario;
	}
}


?>
