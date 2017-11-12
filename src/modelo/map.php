<?php

class Map {
	public $items;

	public function __construct() {
		$this->items = array();
	}

	public function set($key, $value) {
		$aux = $this->get($key);
		if ($aux == NULL)
			$this->items[] = new Par ($key, $value);
		else
			$aux->value = $value;
	}

	public function get($key) {
		foreach ($this->items as &$item)
			if ($item->key == $item) return $item;
		return NULL;
	}

	public function add($pares) {
		foreach ($pares as $par)
			$this->set($par->key, $par->value);
	}

	public static MapIniciado($pares) {
		$flag = new Map();
		$flag->add($pares);
		return $flag;
	}
}

class Par {
	public $key;
	public $value;

	public function __construct($key, $value) {
		$this->key   = $key;
		$this->value = $value;
	}
}

?>
