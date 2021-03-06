<?php 
require_once('GenericService.php');
require_once("../app/repository/component/ClienteDAO.php");
require_once("../app/repository/DAOFactory.php");

class ClienteService implements GenericService{
    private $clienteDao;

    public function __construct(){
        $DAOFactoryMongo=DAOFactory::getInstance();
        $this->clienteDao=$DAOFactoryMongo::getClienteDAO();
    }
    public function create($objeto){
        $error=array();
        if(strlen($objeto->getDni()) !=8){
            $error[0] = "Cifras del DNI incorrectas";
        }else if(strlen($objeto->getNumero_telefonico())<7){
            $error[0] = "Numero Telefonico Incorrecto";
        }else{
            return $this->clienteDao->create($objeto);
        }
        return $error;
    }
    public function update($objeto){
        return $this->clienteDao->update($objeto);
    }
    public function read($id){
        return $this->clienteDao->read($id);
    }
    public function delete($id){

    }
    public function readAll(){
        return $this->clienteDao->readAll(); 
    }
    public function findbyDNI($dni){
        return $this->clienteDao->findbyDNI($dni);
    }
    public function readAllWithTarjetaRokys(){
        return $this->clienteDao->readAllWithTarjetaRokys();
    }
}