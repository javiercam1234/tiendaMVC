<?php 

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {

    $data = [
    [
        'nombre'   => 'Juan Pérez',
        'email'    => 'juan@example.com',
        'telefono' => '123456789'
    ],
    [
        'nombre'   => 'Ana López',
        'email'    => 'ana@example.com',
        'telefono' => '987654321'
    ],
    [
        'nombre'   => 'Carlos Ruiz',
        'email'    => 'carlos@example.com',
        'telefono' => '111222333'
    ],
    [
        'nombre'   => 'María Torres',
        'email'    => 'maria@example.com',
        'telefono' => '444555666'
    ],
    [
        'nombre'   => 'Luis Gómez',
        'email'    => 'luis@example.com',
        'telefono' => '777888999'
    ],
];
        return view('contact', ['contactos' => $data]);
    }
    public function cat($id1, $id2)
    {
        echo "<h2>Contact cat</h2>";
        echo "<p>Parametro 1: " . htmlspecialchars($id1) . "</p>";
        echo "<p>Parametro 2: " . htmlspecialchars($id2) . "</p>";

        print_r(session()->get());
        //return view('contact');
    }

    public function show($id, $id2){

        echo "<h2>Contact show</h2>";
        echo "<p>Parametro 1: " . htmlspecialchars($id) . htmlspecialchars($id) . "</p>";
    

        print_r(session()->get());
        //return view('contact');
    }   
    

    // public function submit(): string
    // {
    //     // Here you would typically handle form submission, e.g., save to database or send an email.
    //     // For now, we'll just return a success message.
    //     return view('contact_success');
    // }
}
