<?php

require_once ('usuario.php');
require_once ('cocina.php');
require_once ('inventario.php');
require_once ('venta.php');
require_once ('item.php');
require_once ('potenciador.php');

class Personaje {

	private $id;
	private $usuario;
	private $nombre;
	private $tipo;
	private $ventas;
	private $inventario;

	public function __construct($usuario, $nombre, $tipo) { 
		$this->usuario = $usuario;
		$this->nombre = $nombre;
		$this->tipo = $tipo;
		$this->ventas = array();
		$this->inventario = Inventario::cargarPorPersonaje($this);
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
		
	}

	public function crearCocina() {
		
	}

	public function unirseCocina() {
		
	}

	public function salirCocina() {
		
	}

	public function comprarPotenciador() {
		
	}

	public function hacerPizza() {
		
	}

	public function getVentas() {
		return $this->ventas;		
	}
	
	public function addVenta($venta) {
		$this->venta[] = $venta;		
	}
	
	public function removeVenta($venta) {
		$i = findid ($this->ventas, $venta);

		if ($i != -1){
			unset($this->ventas[$i]);
		}
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