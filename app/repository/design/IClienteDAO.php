<?php
interface IClienteDAO {
    public function create($cliente);
    public function update($cliente);
    public function read($id);
    public function delete($id);
    public function readAll();
}