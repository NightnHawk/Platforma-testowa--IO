<?php

class User{
//properties
	protected $login;
	protected $password;
	private $type;

//methods
//getters
	public function getLogin(){
		return $this->login;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getType(){
		return $this->type;
	}

	//setters
	public function setLogin($_login){
		$this->login = $_login;
	}
	public function setPassword($_password){
		$this->password = $_password;
	}
	public function setType($_type){
		$this->type = $_type;
	}
}

?>