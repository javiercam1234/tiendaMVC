<?php

class RolPaginaModel
{
    public $id;
    public $rol_id;
    public $pagina_id;

    public function __construct($id = null, $rol_id = null, $pagina_id = null)
    {
        $this->id = $id;
        $this->rol_id = $rol_id;
        $this->pagina_id = $pagina_id;
    }
}

