<?php

require_once ('item.php');
require_once ('potenciador.php');

class Inventario {

	private $items;
	private $potenciadores;


	public function __construct() {
		$this->items = array();
		$this->potenciadores = array();
	}

	public function getItems() {
		return $this->items;
	}

	public function getItemPorTipo($tipo) {
		$flag = NULL;

		foreach ($this->items as &$aux) {
			if ($aux->getTipo() == $tipo){
				$flag = $aux;
				break;
			}
		}

		return $flag;
	}

	public function addItem($item) {
		$this->items[] = $item;
	}

	public function removeItem($item) {
		$i = $this->findid ($this->items, $item);

		if ($i != -1){
			unset($this->items[$i]);
		}
	}

	public function getPotenciadores() {
		return $this->potenciadores;
	}

	public function getPotenciadorPorTipo($potenciador) {
		$flag = NULL;

		foreach ($this->potenciadores as &$aux) {
			if ($aux->getTipo() == $tipo){
				$flag = $aux;
				break;
			}
		}

		return $flag;
	}

	public function addPotenciador($potenciador) {
		$i = $this->findid ($this->potenciadores, $potenciador);

		if ($i == -1){
			$this->potenciadores[] = $potenciador;
		}
	}

	public function removePotenciador($potenciador) {
		$i = findid ($this->potenciadores, $potenciador);

		if ($i != -1){
			unset($this->potenciadores[$i]);
		}
	}

	private function findid($array, $item){
		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i] == $item) {
				return $i;
			}
		}
		return -1;
	}

	public static function cargarPorPersonaje($personaje){
		/*Devolver el inventario que corresponde al personaje dado*/
		$aux = new Inventario();

		$aux->addItem( new Item(Item::$TIPO_HARINA,  0) );
		$aux->addItem( new Item(Item::$TIPO_OREGANO, 0) );
		$aux->addItem( new Item(Item::$TIPO_SALSA,   0) );
		$aux->addItem( new Item(Item::$TIPO_AGUA,    0) );

		$aux->addItem( new Item(Item::$TIPO_SALSA_PREP, 0) );
		$aux->addItem( new Item(Item::$TIPO_MASA,       0) );
		$aux->addItem( new Item(Item::$TIPO_PIZZA,      0) );
		$aux->addItem( new Item(Item::$TIPO_DINERO,     0) );

		$aux->addPotenciador( new Potenciador(Potenciador::$TIPO_COCINA_MEJORADA, 1) );
		$aux->addPotenciador( new Potenciador(Potenciador::$TIPO_HORNO_MEJORADO,  1) );
		$aux->addPotenciador( new Potenciador(Potenciador::$TIPO_CAPACITACION,    1) );
		$aux->addPotenciador( new Potenciador(Potenciador::$TIPO_DELIVERY,        1) );
		$aux->addPotenciador( new Potenciador(Potenciador::$TIPO_SABORES,         1) );

		return $aux;

	}

}


?>
