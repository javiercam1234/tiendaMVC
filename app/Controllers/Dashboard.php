<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        session()->set('username', 'Juan Pérez'); // Simulación de usuario logueado

        $jsonFile = WRITEPATH . 'json/menu_structure.json';
        if (!file_exists($jsonFile)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Archivo JSON de menú no encontrado');
        }

        $menuData = json_decode(file_get_contents($jsonFile), true);

        return view('dashboard', ['menu' => $menuData]);
    }

    public function view($page)
    {
        if (is_file(APPPATH . "Views/partials/{$page}.php")) {
            return view("partials/{$page}");
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound($page);
        }
    }
}
