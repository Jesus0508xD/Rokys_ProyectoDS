<?php
require_once 'Persona.php';

class TrabajadorDTO extends PersonaDTO{
    private $cod_trabajador;
    private $sueldo;
    private $rol;

    public function __construct(){
        /*parent::__construct();*/
    }

	public function getCod_trabajador(){
		return $this->cod_trabajador;
	}

	public function setCod_trabajador($cod_trabajador){
		$this->cod_trabajador = $cod_trabajador;
	}

	public function getSueldo(){
		return $this->sueldo;
	}

	public function setSueldo($sueldo){
		$this->sueldo = $sueldo;
	}

	public function getRol(){
        return $this->rol;
	}

	public function setRol($rol){
		$this->rol = $rol;
    }
        
    public function __destruct(){}
}