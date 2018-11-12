<?php
class Pedido{    
    private $fecha;
    private $hora;
    private $lista_productos;

    public function __construct(){}

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function getLista_productos(){
        return $this->lista_productos;
    }

    public function setLista_productos($lista_productos){
        $this->lista_productos = $lista_productos;
    }

    public function __destruct(){}
}