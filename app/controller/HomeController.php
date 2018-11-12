<?php
include_once("../app/model/Trabajador.php");
include_once("../app/service/TrabajadorService.php");

class HomeController extends Controller{
    public function __constructor(){}

    public function index(){
            Session::init();
            $trabajador= Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            $this->getView('home',$datos);
    }

    public function verMesa($valor){
        Session::init();
        $trabajador= Session::get('Trabajador');
        $datos=array();
        $datos[]=$trabajador;
        $datos[]=$valor;
        $this->getView('ingreso',$datos);
    }
}
