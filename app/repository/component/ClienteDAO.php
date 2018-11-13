<?php
require_once('../app/repository/AccesoDB.php');
require_once('../app/model/Cliente.php');
require_once('../app/repository/design/IClienteDAO.php');
require_once('../app/repository/component/TarjetaRokysDAO.php');

class ClienteDAO implements IClienteDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Persona;
    }

    public function update($cliente){}
    public function read($id){}
    public function delete($id){}

    public function create($cliente){
        $result=false;
        if(!empty($cliente)){
            $this->collection->insertOne([
                'DNI'=>$cliente->getDni(),
                'Nombres'=>$cliente->getNombres(),
                'Apellidos'=>$cliente->getApellidos(),
                'NumTelefono'=>$cliente->getNumero_telefonico(),
                'Correo'=>$cliente->getCorreo(),
                'Direccion'=>$cliente->getDireccion()//,
                //'Tarjeta'=>$cliente->getTarjeta()
                ]);
            $result=true;
        }
        return $result;
    }

    public function readAll(){
       $listaClientes=array();
        $cursor=$this->collection->find();
        if(isset($cursor)){
            foreach($cursor as $document){
                $result=new Cliente;
                $result->setDni($document['DNI']);
                $result->setNombres($document['Nombres']);
                $result->setApellidos($document['Apellidos']);
                $result->setNumero_telefonico($document['NumTelefono']);
                $result->setDireccion($document['NumTelefono']);
                $result->setCorreo($document['Correo']);
                $listaClientes[]=$result;
            }
        }
        return $listaClientes;
    }

    public function readAllWithTarjetaRokys(){
        $listaClientes=array();
        $tarjetaDao=new TarjetaRokysDAO;
         $cursor=$this->collection->find(array('Tarjeta'=> array('$ne' => null)));
         if(isset($cursor)){
             foreach($cursor as $document){
                 $result=new Cliente;
                 $result->setDni($document['DNI']);
                 $result->setNombres($document['Nombres']);
                 $result->setApellidos($document['Apellidos']);
                 $result->setNumero_telefonico($document['NumTelefono']);
                 //$result->setDireccion($document['Direccion']);
                 $result->setCorreo($document['Correo']);
                 $cod_tarjeta=$document['Tarjeta'];
                 $tarjeta=$tarjetaDao->read($cod_tarjeta);
                 $result->setTarjetaRokys($tarjeta);
                 $listaClientes[]=$result;
             }
         }
         return $listaClientes;
     }

    public function findbyDNI($codigo){
        $listaClientes=array();
         $cursor=$this->collection->find(array('DNI'=> array('$regex' => $codigo)));
         if(isset($cursor)){
             foreach($cursor as $document){
                 $result=new Cliente;
                 $result->setDni($document['DNI']);
                 $result->setNombres($document['Nombres']);
                 $result->setApellidos($document['Apellidos']);
                 $result->setNumero_telefonico($document['NumTelefono']);
                 $result->setDireccion($document['NumTelefono']);
                 $result->setCorreo($document['Correo']);
                 $cod_tarjeta=$document['Tarjeta'];
                 $tarjeta=$tarjetaDao->read($cod_tarjeta);
                 $result->setTarjetaRokys($tarjeta);
                 $listaClientes[]=$result->jsonSerialize();
             }
         }
         return $listaClientes;
     }

    public function __destruct(){}
}
