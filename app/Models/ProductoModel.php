<?php

class ProductoModel
{
    public $id;
    public $nombre;
    public $precio;
    public $stock;

    public function __construct($id = null, $nombre = null, $precio = null, $stock = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
}

