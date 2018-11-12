<?php
include_once("../app/model/Trabajador.php");
include_once("../app/service/TrabajadorService.php");

class IngresoController extends Controller{
    public function __constructor(){}

    public function index(){
            Session::init();
            $trabajador= Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            $this->getView('ingreso',$datos);
    }
}
