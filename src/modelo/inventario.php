<?php

require_once ('item.php');
require_once ('potenciador.php');
require_once ('map.php');

class Inventario {

	private $dinero;
	private $items;
	private $pizzas;
	private $potenciadores;

	public function __construct() {
		$this->items         = new Map();
		$this->pizzas        = new Map();
		$this->potenciadores = new Map();
	}

	public function __toString() {
		$flag = "Dinero: " . $this->dinero . "<br>";

		$flag = $flag . "Items:<br>";
		foreach ($this->items->items as &$item)
			$flag = $flag . "	Item [" . $item->key . "] Cantidad [" . $item->value . "]<br>";

		$flag = $flag . "Pizzas:<br>";
		foreach ($this->pizzas->items as &$item)
			$flag = $flag . "	Pizza [" . $item->key . "] Cantidad [" . $item->value . "]<br>";

		$flag = $flag . "Potenciadores:<br>";
		foreach ($this->potenciadores->items as &$item)
			$flag = $flag . "	Potenciador [" . $item->key . "] Activo [" . $item->value . "]<br>";

		return $flag;
	}

	public function setDinero($dinero) {
		$this->dinero;
	}
	public function getDinero() {
		return $this->dinero;
	}


	public function addItem($item, $cantidad) {
		$this->items->set($item, $cantidad);
	}
	public function setCantItem($item, $cant) {
		$aux = $this->items->get($item);

		if ($aux != NULL) $aux->value = $cant;
	}
	public function getItemCant($item) {
		return $this->items->get($item)->value;
	}


	public function addPotenciador($potenciador, $activo) {
		$this->potenciadores->set($potenciador, $activo);
	}
	public function potenciadorEstaActico($potenciador) {
		return $this->potenciadores->get($potenciador)->value;
	}
	public function togglePotenciador($potenciador) {
		$aux = $this->potenciadores->get($potenciador);

		if ($aux != NULL) $aux->value = !($aux->value);
	}


	public function addPizza ($pizza, $cant) {
		$this->pizzas->set($pizza, $cant);
	}
	public function setCantPizza($pizza, $cant) {
		$aux = $this->pizzas->get($pizza);

		if ($aux != NULL) $aux->value = $cant;
	}
	public function getCantPizza($pizza) {
		return $this->pizzas->get($pizza)->value;
	}

	public static function cargarPorPersonaje($personaje){
		//Devolver el inventario que corresponde al personaje dado
		$aux = new Inventario();

		$aux->setDinero(0);

		$aux->addItem(Item::$HARINA,  0);
		$aux->addItem(Item::$OREGANO, 0);
		$aux->addItem(Item::$SALSA,   0);
		$aux->addItem(Item::$AGUA,    0);

		$aux->addItem(Item::$SALSA_PREP, 0);
		$aux->addItem(Item::$MASA,       0);

		$aux->addPotenciador(Potenciador::$COCINA_MEJORADA, true);
		$aux->addPotenciador(Potenciador::$HORNO_MEJORADO,  true);
		$aux->addPotenciador(Potenciador::$CAPACITACION,    true);
		$aux->addPotenciador(Potenciador::$DELIVERY,        true);
		$aux->addPotenciador(Potenciador::$SABORES,         true);

		return $aux;
	}
}


?>
