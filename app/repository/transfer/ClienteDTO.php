<?php

include_once('Persona.php');
class ClienteDTO extends PersonaDTO{
    private $correo;
	private $direccion;

    /*public function __construct(){
        parent::__construct();
	}*/
	public function __construct($dni=null,$nombres=null,$apellidos=null,$numero_telefonico=null,$correo=null,$direccion=null){
		parent::__construct1($dni,$nombres,$apellidos,$numero_telefonico);
		$this->correo=$correo;
		$this->direccion=$direccion;
	}
	
    public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function jsonSerialize() {

    }

    public function __destruct(){
		parent::__destruct();
	}
}