<?php

class FacturaModel
{
    public $id;
    public $cliente_id;
    public $fecha;
    public $total;

    public function __construct($id = null, $cliente_id = null, $fecha = null, $total = null)
    {
        $this->id = $id;
        $this->cliente_id = $cliente_id;
        $this->fecha = $fecha;
        $this->total = $total;
    }
}

