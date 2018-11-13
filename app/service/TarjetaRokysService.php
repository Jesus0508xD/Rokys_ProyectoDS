<?php 
require_once('GenericService.php');
require_once("../app/repository/component/TarjetaDAO.php");
require_once("../app/repository/DAOFactory.php");

class TarjetaRokysService implements GenericService{
    private $tarjeta_rokys_dao;

    public function __construct(){
        $DAOFactoryMongo=DAOFactory::getInstance();
        $this->tarjeta_rokys_dao=$DAOFactoryMongo::getTarjetaRokysServiceDAO();
    }
    public function create($objeto){
        $this->tarjeta_rokys_dao->create($objeto);
    }
    public function update($objeto){
        
    }
    public function read($id){
        return $this->tarjeta_rokys_dao->read($id);
    }
    public function delete($id){

    }
    public function readAll(){
        return $this->tarjeta_rokys_dao->readAll(); 
    }

    public function getFirst(){
        $this->tarjeta_rokys_dao->getFirst();
    }

}