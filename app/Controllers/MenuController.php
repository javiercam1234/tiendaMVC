<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends Controller
{
    public function index($pagina = 'dashboard') // valor por defecto
    {
        $menuData = json_decode(file_get_contents(APPPATH . 'Config/menus.json'), true);

        // Convertir a nombre de vista: ejemplo -> "detalle-facturas" => "detalle_facturas"
        $paginaVista = str_replace('-', '_', $pagina);
        $rutaVista = 'partials/' . $paginaVista;

        if (!is_file(APPPATH . 'Views/' . $rutaVista . '.php')) {
            $contenido = "<div class='alert alert-danger'>La vista '$paginaVista' no existe.</div>";
        } else {
            $contenido = view($rutaVista);
        }

        return view('dashboard', [
            'menu' => $menuData,
            'contenido' => $contenido
        ]);
    }
}
