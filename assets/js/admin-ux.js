// admin-ux.js
document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('.admin-table tbody tr');
    rows.forEach((row, index) => {
        row.style.animation = `fadeInUp 0.3s ease ${index * 0.1}s forwards`;
    });
});
// sidebar
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebarAdmin');

    toggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('collapsed');
    });
});
