<?php

class DetalleFacturaModel
{
    public $id;
    public $factura_id;
    public $producto_id;
    public $cantidad;
    public $precio_unitario;

    public function __construct($id = null, $factura_id = null, $producto_id = null, $cantidad = null, $precio_unitario = null)
    {
        $this->id = $id;
        $this->factura_id = $factura_id;
        $this->producto_id = $producto_id;
        $this->cantidad = $cantidad;
        $this->precio_unitario = $precio_unitario;
    }
}

