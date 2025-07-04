<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\RolModel;  // <-- Agregado para cargar roles
use CodeIgniter\Controller;

class Usuarios extends Controller
{
    
    public function index()
    {
        $rolModel = new RolModel();
        $roles = $rolModel->findAll();

        // Enviar la variable $roles a la vista usuarios.php
        echo view('partials/usuarios', ['roles' => $roles]);
    }

    public function listar()
    {
        $model = new UsuarioModel();
        $usuarios = $model->findAll();

        return $this->response->setJSON($usuarios);
    }

    public function guardar()
    {
        $model = new UsuarioModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'rol_id' => $this->request->getPost('rol_id'),
        ];

        $id = $this->request->getPost('id');

        // Solo actualizar contraseña si viene (y hashearla)
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        if (empty($id)) {
            // Insertar
            $model->insert($data);
        } else {
            // Actualizar
            $model->update($id, $data);
        }

        return $this->response->setJSON(['success' => true]);
    }
}
