<?php
include_once("../app/model/Trabajador.php");

    class MesaController extends Controller{
        public function __constructor(){}
        
        public function index(){
            Session::init();
            $trabajador=Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            $this->getView('ver_mesa',$datos);
            //echo getcwd();
        }

        public function verMesa($valor){
            Session::init();
            $trabajador=Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            $this->getView('ver_mesa',$datos);
            //echo getcwd();
        }


    }
