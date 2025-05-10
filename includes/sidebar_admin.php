<link rel="stylesheet" href="../assets/css/admin-sidebar.css">
<script src="../assets/js/admin-ux.js" defer></script>
<div class="sidebar-admin" id="sidebarAdmin">
    <div class="sidebar-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-white">Menu Admin</h5>
        <button id="toggleSidebar" class="btn btn-sm btn-toggle-sidebar" title="Sembunyikan Sidebar">
            <i class="fas fa-angle-left"></i>
        </button>
    </div>

    <hr class="sidebar-divider my-3">

    <ul class="nav flex-column sidebar-nav mt-4"> <!-- diturunkan -->
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="admin_dashboard.php">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="manage_users.php">
                <i class="fas fa-user-plus me-2"></i> Kelola User
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="manage_links.php">
                <i class="fas fa-database me-2"></i> Data Borang
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="penilaian.php">
                <i class="fas fa-star me-2"></i> Penilaian
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="edit_profil.php">
                <i class="fas fa-user-cog me-2"></i> Edit Profil
            </a>
        </li>
    </ul>
</div>
