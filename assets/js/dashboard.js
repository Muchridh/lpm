// Toggle Sidebar di Mobile
document.querySelector('.sidebar-toggle').addEventListener('click', function() {
    document.querySelector('.dashboard-sidebar').classList.toggle('active');
});

// Active menu item berdasarkan URL
document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname.split('/').pop();
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach(item => {
        const itemHref = item.getAttribute('href').split('/').pop();
        if(currentPage === itemHref) {
            item.classList.add('active');
        }
    });
    
    // Logout confirmation
    const logoutBtn = document.querySelector('.logout-btn');
    if(logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            if(!confirm('Anda yakin ingin logout?')) {
                e.preventDefault();
            }
        });
    }
});