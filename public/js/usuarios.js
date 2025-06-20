document.addEventListener('DOMContentLoaded', function () {
    cargarUsuarios();

    // Evento submit para guardar
    document.getElementById('formUsuario').addEventListener('submit', function (e) {
        e.preventDefault();
        guardarUsuario();
    });
});

function cargarUsuarios() {
    fetch('/usuarios/listar')
        .then(res => res.json())
        .then(usuarios => {
            const tbody = document.querySelector('#tablaUsuarios tbody');
            tbody.innerHTML = '';

            usuarios.forEach(usuario => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${usuario.id}</td>
                    <td>${usuario.nombre}</td>
                    <td>${usuario.email}</td>
                    <td>${usuario.rol_id}</td>
                    <td>${usuario.created_at ?? ''}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick='editarUsuario(${JSON.stringify(usuario)})'>Editar</button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        });
}

function limpiarFormulario() {
    document.getElementById('formUsuario').reset();
    document.getElementById('usuario_id').value = '';
    document.getElementById('usuarioModalLabel').innerText = 'Agregar Usuario';
}

function editarUsuario(usuario) {
    document.getElementById('usuario_id').value = usuario.id;
    document.getElementById('nombre').value = usuario.nombre;
    document.getElementById('email').value = usuario.email;
    document.getElementById('password').value = '';
    document.getElementById('rol_id').value = usuario.rol_id;

    document.getElementById('usuarioModalLabel').innerText = 'Editar Usuario';

    const modal = new bootstrap.Modal(document.getElementById('usuarioModal'));
    modal.show();
}

function guardarUsuario() {
    const form = document.getElementById('formUsuario');
    const formData = new FormData(form);

    fetch('/usuarios/guardar', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(response => {
            if (response.success) {
                alert('Usuario guardado correctamente');
                limpiarFormulario();
                const modalEl = document.getElementById('usuarioModal');
                const modal = bootstrap.Modal.getInstance(modalEl);
                modal.hide();
                cargarUsuarios();
            } else {
                alert('Error al guardar usuario');
            }
        });
}
