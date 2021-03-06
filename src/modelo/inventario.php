<?php

require_once ('item.php');
require_once ('potenciador.php');
require_once ('map.php');

class Inventario {

	private $dinero;
	private $items;
	private $potenciadores;


	public function __construct() {
		$this->items         = new Map();
		$this->potenciadores = new Map();
	}


	public function __toString() {
		$flag = "Dinero: " . $this->dinero . "<br>";

		$flag .= "Items:<br>";
		foreach ($this->items->items as &$item)
			$flag .= "Item [" . $item->key . "] Cantidad [" . $item->value . "]<br>";

		foreach ($this->potenciadores->items as &$item)
			$flag .= "Potenciador [" . $item->key . "] Activo [" . $item->value . "]<br>";

		return $flag;
	}


	public function setDinero($dinero) {
		$this->dinero;
	}
	public function getDinero() {
		return $this->dinero;
	}
	public function modifyDinero($modificador) {
		$this->dinero += $modificador;
	}


	public function addItem($item, $cantidad) {
		$this->items->set($item, $cantidad);
	}
	public function setCantItem($item, $cant) {
		$aux = $this->items->get($item);

		if ($aux != null) $aux->value = $cant;
	}
	public function modifyItem($item, $mod) {
		$aux = $this->items->get($item);

		if ($aux != null) $aux->value += $mod;
	}
	public function getItemCant($item) {
		return $this->items->get($item)->value;
	}


	public function addPotenciador($potenciador, $activo) {
		$this->potenciadores->set($potenciador, $activo);
	}
	public function comprarPotenciador($potenciador) {
		$aux = $this->potenciadores.get($potenciador);
		if ( !($aux->value) )
			if ($this->dinero >= $aux->key->precio) {
				$this->dinero -= $aux->key->precio;
				$aux->value = true;
				return true;
			}

		return false;
	}
	public function potenciadorEstaActico($potenciador) {
		return $this->potenciadores->get($potenciador)->value;
	}
	public function togglePotenciador($potenciador) {
		$aux = $this->potenciadores->get($potenciador);

		if ($aux != null) $aux->value = !($aux->value);
	}
	public function potenciar($potenciador, &$valor) {
		$aux = $this->potenciadores->get($potenciador);

		if ($aux != null and $aux->value) $valor += $valor*$aux->key->getCoeficiente();
	}


	public static function cargarPorPersonaje($personaje){
		$aux = new Inventario();

		$aux->setDinero(0);

		$aux->addItem(Recurso::$HARINA,  0);
		$aux->addItem(Recurso::$OREGANO, 0);
		$aux->addItem(Recurso::$SALSA,   0);
		$aux->addItem(Recurso::$AGUA,    0);

		$aux->addItem(Recurso::$SALSA_PREP, 0);
		$aux->addItem(Recurso::$MASA,       0);

		$aux->addItem(Pizza::$PIZZA_COMUN, 0);

		$aux->addPotenciador(Potenciador::$COCINA_MEJORADA, true);
		$aux->addPotenciador(Potenciador::$HORNO_MEJORADO,  true);
		$aux->addPotenciador(Potenciador::$CAPACITACION,    true);
		$aux->addPotenciador(Potenciador::$DELIVERY,        true);
		$aux->addPotenciador(Potenciador::$SABORES,         true);

		return $aux;
	}
}


?>
