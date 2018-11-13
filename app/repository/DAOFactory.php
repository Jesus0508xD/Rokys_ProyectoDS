<?php 
include_once("../app/repository/component/ClienteDAO.php");
include_once("../app/repository/component/TarjetaRokysDAO.php");
include_once("../app/repository/component/TrabajadorDAO.php");
include_once("../app/repository/component/ProductoDAO.php");

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

    public function getTarjetaRokysDAO(){
        return  new TarjetaRokysDAO;
    }
}