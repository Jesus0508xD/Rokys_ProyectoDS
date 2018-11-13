<?php
interface ITarjetaRokysDAO {
    public function create($tarjeta_rokys);
    public function update($tarjeta_rokys);
    public function read($id);
    public function delete($id);
    public function readAll($id);
}