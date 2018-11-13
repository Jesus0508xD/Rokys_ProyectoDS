<?php
include_once("../app/model/Cliente.php");
include_once("../app/model/Trabajador.php");
include_once("../app/service/ClienteService.php");

class ClientesRokysController extends Controller{

    public function ClientesRokysController(){}

    public function index(){

            $datos=array();
            Session::init();
            $trabajador=Session::get('Trabajador');
            $datos[]=$trabajador;

            $clienteService=new ClienteService;
            $clientes=$clienteService->readAllWithTarjetaRokys();
            $datos[]=$clientes;
            //var_dump($clientes[1]);
            $this->getView('ver_clientes',$datos); 
    }
    public function listar(){

    }

    public function filtrar(){
        $datos=array();
        Session::init();
        $trabajador=Session::get('Trabajador');
        $datos[]=$trabajador;

        $cod=$_POST['DNI'];
        $clienteService=new ClienteService;
        $clientes=$clienteService->findByDNI($cod);
        $datos[]=$clientes;
        $this->getView('ver_clientes',$datos); 
    }



    public function filtrarFetch(){
        $cod=$_POST['DNI'];
        $clienteService=new ClienteService;
        $clientes=$clienteService->findByDNI($cod);
        //echo json_encode($clientes);
    }



}