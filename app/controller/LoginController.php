<?php
/*include_once("../app/model/Trabajador.php");
include_once("../app/service/TrabajadorService.php");*/

class LoginController extends Controller{
        public function __construct(){}
        
        public function index(){
            $this->getView('login');
        }

        public function login(){
            $codigo=$_POST['password'];
            /*$trabajador_service=new TrabajadorService;
            $trabajador=$trabajador_service->read($codigo);*/
            /*if(isset($trabajador)){
                Session::init();
                Session::add('Trabajador',$trabajador);
                header('location: ../HomeController');
            }else{
                die('Usuario no registrado');
            }*/
            echo $codigo;
        }
}