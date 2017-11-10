<?php

require_once ('personaje.php');

class Cocina {

	private $id;
	private $nombre;
	private $fundador;
	private $integrante2;
	private $integrante3;


	public function __construct($id, $nombre, $fundador) {
		$this->nombre   = $nombre;
		$this->fundador = $fundador;
		$this->id       = $id;

		$this->integrante2 = null;
		$this->integrante3 = null;
	}

	public function save() {
		// TODO: Guardar los cambios // crear
	}

	public function eliminarse() {
		// TODO: Eliminiar la cocina
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



	public static function crearCocina($personaje, $nombre) {
		if (Cocina::getCocinaPorpersonaje($personaje) != null) {
			$cocina = new Cocina(-1, $nombre, $personaje);
			$cocina.save();
			return true;
		}

		return flase;
	}

	public static function unirPersonajeCocina($personaje, $nombre) {
		$cocina_actual = Cocina::getCocinaPorPersonaje($personaje);

		if ($cocinaActual == null) {
			$cocinaNueva = Cocina::getCocinaPorNombre($nombre);

			if ($cocinaNueva != null) {
				if ($cocinaNueva->getIntegrante2() != null) {
					$cocinaNueva->setIntegrante2($personaje);
					return true;
				}
				if ($cocinaNueva->getIntegrante3() != null) {
					$cocinaNueva->setIntegrante3($personaje);
					return true;
				}
			}
		}

		return false;
	}

	public static function quitarPersonajeCocina($personaje) {
		$cocina = getCocinaPorPersonaje($personaje);

		if ($cocina != null)  {
			if ( $cocina->fundador->equals($personaje) ) {
				// TODO: Borrar la cocina
				return true;
			}
			if ( $cocina->integrante2->equals($personaje) ) {
				$cocina->integrante2 = null;
				return true;
			}
			if ( $cocina->integrante3->equals($personaje) ) {
				$cocina->integrante3 = null;
				return true;
			}
		}

		return false;
	}


	public static function getCocinaPorNombre($nombre) {
		// TODO: Cargar cocina, si no existe null
		return null;
	}

	public static function getCocinaPorPersonaje($personaje) {
		// TODO: Cargar cocina a la que pertenece el personaje
		//       si no hay, null
		return null;
	}
}


?>
