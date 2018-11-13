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
        if(strlen($objeto->getDNI()) !=8){
            return 0;
        }else if(strlen($objeto->getNumero_telefonico())<7){
            return -1; 
        }else{
            return $this->clienteDao->create($objeto);
        }
    }
    public function update($objeto){
        
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