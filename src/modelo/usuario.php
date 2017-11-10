<?php

require_once ('personaje.php');

class Usuario {

	private $id;
	private $username;
	private $password;
	private $personaje;

	public function __construct($id, $username, $password) {
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->personaje = Personaje::getPersonajePorUsuario($this);
	}

	public function getId() {
		return $this->id;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

}


?>
