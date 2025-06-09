$BASEDIR = "c:\xampp\htdocs\tiendaMVC"

# Crear carpetas
New-Item -Path "$BASEDIR\app\Views\partials" -ItemType Directory -Force
New-Item -Path "$BASEDIR\public\js" -ItemType Directory -Force
New-Item -Path "$BASEDIR\app\Models" -ItemType Directory -Force
New-Item -Path "$BASEDIR\app\Controllers" -ItemType Directory -Force

# Crear archivos de vistas
"" | Out-File "$BASEDIR\app\Views\partials\roles.php"
"" | Out-File "$BASEDIR\app\Views\partials\usuarios.php"
"" | Out-File "$BASEDIR\app\Views\partials\paginas.php"
"" | Out-File "$BASEDIR\app\Views\partials\roles_paginas.php"
"" | Out-File "$BASEDIR\app\Views\partials\clientes.php"
"" | Out-File "$BASEDIR\app\Views\partials\productos.php"
"" | Out-File "$BASEDIR\app\Views\partials\facturas.php"
"" | Out-File "$BASEDIR\app\Views\partials\detalle_facturas.php"

# Crear archivos JS
"" | Out-File "$BASEDIR\public\js\roles.js"
"" | Out-File "$BASEDIR\public\js\usuarios.js"
"" | Out-File "$BASEDIR\public\js\paginas.js"
"" | Out-File "$BASEDIR\public\js\roles_paginas.js"
"" | Out-File "$BASEDIR\public\js\clientes.js"
"" | Out-File "$BASEDIR\public\js\productos.js"
"" | Out-File "$BASEDIR\public\js\facturas.js"
"" | Out-File "$BASEDIR\public\js\detalle_facturas.js"

# Crear archivos de modelos
"" | Out-File "$BASEDIR\app\Models\RolModel.php"
"" | Out-File "$BASEDIR\app\Models\UsuarioModel.php"
"" | Out-File "$BASEDIR\app\Models\PaginaModel.php"
"" | Out-File "$BASEDIR\app\Models\RolPaginaModel.php"
"" | Out-File "$BASEDIR\app\Models\ClienteModel.php"
"" | Out-File "$BASEDIR\app\Models\ProductoModel.php"
"" | Out-File "$BASEDIR\app\Models\FacturaModel.php"
"" | Out-File "$BASEDIR\app\Models\DetalleFacturaModel.php"

# Crear archivos de controladores
"" | Out-File "$BASEDIR\app\Controllers\Roles.php"
"" | Out-File "$BASEDIR\app\Controllers\Usuarios.php"
"" | Out-File "$BASEDIR\app\Controllers\Paginas.php"
"" | Out-File "$BASEDIR\app\Controllers\RolesPaginas.php"
"" | Out-File "$BASEDIR\app\Controllers\Clientes.php"
"" | Out-File "$BASEDIR\app\Controllers\Productos.php"
"" | Out-File "$BASEDIR\app\Controllers\Facturas.php"
"" | Out-File "$BASEDIR\app\Controllers\DetalleFacturas.php"

Write-Host "Listo. Archivos y carpetas creados."