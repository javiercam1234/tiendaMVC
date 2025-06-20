<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'roles';         // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';       // Clave primaria

    protected $allowedFields = ['nombre'];  // Campos que se pueden insertar/actualizar

    protected $useTimestamps = true;   // Si la tabla tiene campos created_at, updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Opcional: reglas de validación si usas validación automática
    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[255]',
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio',
            'min_length' => 'El nombre debe tener al menos 3 caracteres',
            'max_length' => 'El nombre no debe exceder 255 caracteres',
        ],
    ];
}
