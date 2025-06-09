document.addEventListener('DOMContentLoaded', function () {
    // Mostrar fecha actual
    const fechaElement = document.getElementById('fecha');
    const fecha = new Date();
    fechaElement.textContent = fecha.toLocaleDateString('es-MX', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });

    // Funcionalidad de ocultar/mostrar el menú
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', function () {
        sidebar.classList.toggle('collapsed');
    });
});
