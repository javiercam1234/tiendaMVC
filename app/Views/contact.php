<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

    <h1>Formulario de Contacto</h1>

    <form method="post" action="/contactos/guardar">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br><br>

        <input type="submit" value="Guardar Contacto">
    </form>

    <h2>Lista de Contactos</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Datos simulados (normalmente vienen del controlador)
            $contactos = [
                ['nombre' => 'Juan Pérez', 'email' => 'juan@example.com', 'telefono' => '123456789'],
                ['nombre' => 'Ana López', 'email' => 'ana@example.com', 'telefono' => '987654321'],
                ['nombre' => 'Carlos Ruiz', 'email' => 'carlos@example.com', 'telefono' => '111222333'],
                ['nombre' => 'María Torres', 'email' => 'maria@example.com', 'telefono' => '444555666'],
                ['nombre' => 'Luis Gómez', 'email' => 'luis@example.com', 'telefono' => '777888999'],
                ['nombre' => 'Sofía Díaz', 'email' => 'sofia@example.com', 'telefono' => '123123123'],
                ['nombre' => 'Pedro Molina', 'email' => 'pedro@example.com', 'telefono' => '321321321'],
                ['nombre' => 'Laura Vega', 'email' => 'laura@example.com', 'telefono' => '456456456'],
                ['nombre' => 'Jorge Silva', 'email' => 'jorge@example.com', 'telefono' => '654654654'],
                ['nombre' => 'Marta Ramírez', 'email' => 'marta@example.com', 'telefono' => '789789789'],
            ];

            $i = 1;
            foreach ($contactos as $contacto):
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($contacto['nombre']) ?></td>
                    <td><?= esc($contacto['email']) ?></td>
                    <td><?= esc($contacto['telefono']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
