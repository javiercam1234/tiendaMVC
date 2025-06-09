// Reloj
function updateClock() {
  const now = new Date();
  const time = now.toLocaleTimeString();
  document.getElementById('clock').textContent = time;
}

setInterval(updateClock, 1000);
updateClock();

// Sidebar toggle
document.getElementById('toggleSidebar').addEventListener('click', () => {
  const sidebar = document.getElementById('sidebar');
  const icon = document.querySelector('#toggleSidebar i');

  sidebar.classList.toggle('sidebar-expanded');
  sidebar.classList.toggle('sidebar-collapsed');

  // Cambiar flecha
  if (sidebar.classList.contains('sidebar-collapsed')) {
    icon.classList.remove('fa-angle-left');
    icon.classList.add('fa-angle-right');
  } else {
    icon.classList.remove('fa-angle-right');
    icon.classList.add('fa-angle-left');
  }
});
