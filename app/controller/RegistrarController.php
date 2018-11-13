<?php
include_once("../app/model/Cliente.php");
include_once("../app/service/ClienteService.php");
include_once("../app/model/Trabajador.php");
require_once('../app/model/TarjetaRokys.php');
include_once("../app/service/TarjetaRokysService.php");

class RegistrarController extends Controller{
    public function RegistrarController(){}

    public function index(){
            Session::init();
            $trabajador=Session::get('Trabajador');
            $datos=array();
            $datos[]=$trabajador;
            /*$clienteService=new ClienteService;
            $clientes=$clienteService->readAll();
            $datos[]=$clientes;*/
            $tarjeta_rokys_service=new TarjetaRokysService;
            $tarjeta_rokys=$tarjeta_rokys_service->getFirst();
            //var_dump($tarjeta_rokys);
            $datos[]=$tarjeta_rokys;
            $this->getView('registro_cliente',$datos);
    }

    public function agregar(){
        $nombre=$_POST['Nombre'];
        $apellidos=$_POST['Apellidos'];
        $dni=$_POST['DNI'];
        $num_telefonico=$_POST['Numero_Telefonico'];
        $direccion=$_POST['Direccion'];
        $correo=$_POST['Correo'];

        $cliente=new Cliente($dni,$nombre,$apellidos,$num_telefonico,$correo,$direccion);
        $clienteService=new ClienteService;
        $rpta=$clienteService->create($cliente);

        if(count($rpta)==0){
            $tarjeta_rokys_service=new TarjetaRokysService;
            $tarjeta_rokys=$tarjeta_rokys_service->activarTarjeta();
            $cliente->setTarjetaRokys($tarjeta_rokys);
            $clienteService->update($cliente);
            echo "Usuario Registrado con Exito";
        }else{
            foreach($rpta as $cod_error=>$error){
                echo "Error numero: ".$cod_error." detalles: ".$error."<br>";
            }
            echo "<br>Intentelo otra Vez";
        }

    }
}