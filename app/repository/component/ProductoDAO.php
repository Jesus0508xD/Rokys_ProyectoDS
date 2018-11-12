<?php
    include_once("AccesoDB.php");
    include_once("../app/model/Producto.php");
class ProductoDAO{
    public function __construct(){}
    
    public function findProductByCategory($producto,$categoria){
        $producto=new Producto;
        $bd=Acceso::getConnection();
        $collection=$bd->producto;
        $document=$collection->find();
    }
}