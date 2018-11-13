<?php
    require_once('../app/repository/AccesoDB.php');
    require_once("../app/model/Pedido.php");
    require_once("../app/model/IPedidoDAO.php");
class PedidoDAO implements IPedidoDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Pedido;
    }

    public function create($pedido){

    }
    public function read($id){

    }
    public function update($pedido){

    }
    public function delete($id){

    }
    public function readAll($id){

    }
}