<?php

require_once ('personaje.php');

class Cocina {

	private $id;
	private $nombre;
	private $fundador;
	private $integrante2;
	private $integrante3;

	
	public function __construct($nombre, $fundador) { 
		$this->nombre = $nombre;
		$this->fundador = $fundador;
	}
	
	public function getFundador() {
		return $this->fundador;		
	}

	public function getIntegrante2() {
		return $this->integrante2;			
	}

	public function setIntegrante2($integrante2) {
		$this->integrante2 = $integrante2;		
	}

	public function getIntegrante3() {
		return $this->integrante3;			
	}

	public function setIntegrante3($integrante3) {
		$this->integrante3 = $integrante3;			
	}

	public function getnombre() {
		return $this->nombre;		
	}

}


?>