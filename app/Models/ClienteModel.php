<?php

class ClienteModel
{
    public $id;
    public $nombre;
    public $email;
    public $telefono;

    public function __construct($id = null, $nombre = null, $email = null, $telefono = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }
}

