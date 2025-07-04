<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';       // Nombre de la tabla
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'email',
        'rol_id',
        'password',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre'  => 'required|min_length[3]|max_length[255]',
        'email'   => 'required|valid_email|is_unique[usuarios.email,id,{id}]',
        'rol_id'  => 'required|integer',
        'password'=> 'permit_empty|min_length[6]',
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio',
            'min_length' => 'El nombre debe tener al menos 3 caracteres',
        ],
        'email' => [
            'required' => 'El correo es obligatorio',
            'valid_email' => 'Debe ser un correo válido',
            'is_unique' => 'Este correo ya está registrado',
        ],
        'rol_id' => [
            'required' => 'El rol es obligatorio',
            'integer' => 'El rol debe ser un número válido',
        ],
        'password' => [
            'min_length' => 'La contraseña debe tener al menos 6 caracteres',
        ],
    ];
}

