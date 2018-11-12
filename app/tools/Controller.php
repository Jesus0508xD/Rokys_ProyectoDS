<?php
    require_once 'Session.php';
    class Controller{
        public function __construct(){}
        
        public function getModel($modelo){
            require_once '../model/'.$modelo.'.php';
            return new $modelo();
        }

        public function getView($vista,$datos=[]){
            //../app/view/'.$vista.'.php'
            Session::init();
           if(!(Session::getStatus()===1 || empty(Session::get('Trabajador'))) || $vista=='login'){
                if(file_exists('../app/view/'.$vista.'.php')){
                    require_once '../app/view/'.$vista.'.php';
                }else{
                    die('La vista no existe');
                }
            }else{
                die('NO PUEDES INGRESAR SI ANTES HABER INICIADO SESION');
            }
        }
    }