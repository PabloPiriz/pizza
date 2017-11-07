<?php

class Usuario {

	private $id;
	private $username;

	public function __construct($username) { 
		$this->username = $username;
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