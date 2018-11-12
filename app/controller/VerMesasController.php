<?php 
include_once("../app/model/Trabajador.php");

class VerMesasController extends Controller{
    public function __construct(){}
    
    public function index(){
        Session::init();
        $trabajador=Session::get('Trabajador');
        $datos=array();
        $datos[]=$trabajador;
        $this->getView('ver_mesas',$datos);
    }

}