<?php 
include_once("../app/repository/component/ClienteDAO.php");
class DAOFactory{
    private static $daoFac;

    private function __construct(){
    }

    public static function getInstance(){
        if(!isset(self::$daoFac)){
            self::$daoFac=new self;
        }
        return self::$daoFac;
    }

    public static function getClienteDAO(){
        return new ClienteDAO;
    }

    public function getTrabajadorDAO(){
        return  new TrabajadorDAO;
    }

    public function getProductoDAO(){
        return  new ProductoDAO;
    }

    public function getPedidoDAO(){
        return  new PedidoDAO;
    }

}