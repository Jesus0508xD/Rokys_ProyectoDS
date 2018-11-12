<?php 
require_once('GenericService.php');
require_once("../app/repository/component/TrabajadorDAO.php");

class TrabajadorService implements GenericService{
    private $trabajadorDao;

    public function __construct(){
        $this->trabajadorDao=new TrabajadorDAO;
    }
    public function create($objeto){
        
    }
    public function update($objeto){
        
    }
    public function read($id){
        return $this->trabajadorDao->read($id);
    }
    public function delete($id){

    }
    public function readAll(){
        return $trabajadorDao->readAll(); 
    }
}