<?php
include_once("../app/model/Cliente.php");
include_once("../app/service/ClienteService.php");
include_once("../app/model/Trabajador.php");

class RegistrarController extends Controller{
    public function RegistrarController(){}

    public function index(){
            Session::init();
            $trabajador=Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            $clienteService=new ClienteService;
            $clientes=$clienteService->readAll();
            $datos[]=$clientes;
            $this->getView('registro_cliente',$datos);
    }

    public function agregar(){
        $nombre=$_POST['Nombre'];
        $apellidos=$_POST['Apellidos'];
        $dni=$_POST['DNI'];
        $num_telefonico=$_POST['Numero_Telefonico'];
        $direccion=$_POST['Direccion'];
        $correo=$_POST['Correo'];
        $codigo_tarjeta=$_POST['Codigo_de_Tarjeta'];
        $cliente=new Cliente($dni,$nombre,$apellidos,$num_telefonico,$correo,$direccion);
        $clienteService=new ClienteService;
        $clienteService->create($cliente);
    }
}