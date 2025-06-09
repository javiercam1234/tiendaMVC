<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends Controller
{
    public function index()
    {
        // Cargar el archivo JSON
        $menuData = json_decode(file_get_contents(APPPATH . 'Config/menus.json'), true);

        // Pasar los datos a la vista
        return view('dashboard', ['menu' => $menuData]);
    }
}
