<?php

class PaginaModel
{
    public $id;
    public $nombre;
    public $url;

    public function __construct($id = null, $nombre = null, $url = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->url = $url;
    }
}

