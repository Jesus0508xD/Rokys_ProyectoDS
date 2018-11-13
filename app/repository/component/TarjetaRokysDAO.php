<?php
require_once('../app/repository/AccesoDB.php');
require_once('../app/model/TarjetaRokys.php');
require_once('../app/repository/design/ITarjetaRokysDAO.php');

class TarjetaRokysDAO{
    private $collection;

    public function __construct(){
        $db=AccesoDB::getConnection();
        $this->collection=$db->TarjetaRocky;
    }
    
    public function create($tarjetaRokys){
        $result=-1;
        if(!empty($tarjetaRokys)){
            $this->collection->insertOne([
                'UID'=>$tarjetaRokys->getCod_tarjeta(),
                'estado'=>$tarjetaRokys->getEstado(),
                'Saldo'=>$tarjetaRokys->getSaldo()
            ]);
            $result=1;
        }
        return $result;
    }

    public function read($clave){
        $result=new TarjetaRokys;
        $document=$this->collection->findOne(array('UID'=> $clave));
        if(isset($document)){
            $result->setCod_tarjeta($document['UID']);
            $result->setSaldo($document['Saldo']);
            $result->setEstado($document['estado']);
        }
        return $result;
    }
    
    public function update($tarjetaRokys){
        $updateResult = $this->collection->updateOne(
            [ 'UID' => $tarjetaRokys->getCod_tarjeta()],
            [ '$set' => [ 'estado' => $tarjetaRokys->getEstado() ]]
        );
        return $updateResult;
    }

    public function delete($clave){
        
    }

    public function readAll(){
        $listaTarjetasRFID=array();
        $cursor=$this->collection->find();
        if(isset($cursor)){
            foreach($cursos as $document){
                $result=new TarjetaRokys;
                $result->setCod_tarjeta($document['UID']);
                $result->setSaldo($document['Saldo']);
                $result->setEstado($document['Estado']);
                $listaTarjetasRFID[]=$result;
            }
        }
        return $listaTarjetasRFID;
    }

    public function getFirst($cod){
        $result=new TarjetaRokys;
        $document=$this->collection->findOne(array('estado'=> $cod));
        if(isset($document)){
            $result->setCod_tarjeta($document['UID']);
            $result->setSaldo($document['Saldo']);
            $result->setEstado($document['estado']);
        }
        return $result;
    }
    

    public function __destruct(){}
}