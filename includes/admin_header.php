<?php
if (session_status() === PHP_SESSION_NONE) session_start();

$page_title = $page_title ?? "Dashboard Admin";
$user_name = $_SESSION['nama'] ?? 'Pengguna';
$user_role = ucfirst($_SESSION['role'] ?? 'admin');
$current_file = basename($_SERVER['PHP_SELF']);
$is_dashboard = ($current_file === 'admin_dashboard.php');
?>

<!-- Header Style Include -->
<link rel="stylesheet" href="../assets/css/admin-header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="header-spmi">
    <div class="header-container">
        <div class="logo-container">
            <img src="../assets/images/logolpm.png" alt="Logo" class="logo-lpm">
            <div>
                <h1 class="header-title"><?= $page_title ?></h1>
                <p class="header-subtitle">Lembaga Penjaminan Mutu - UNIRA Malang</p>
            </div>
        </div>

        <div class="header-user-info">
            <a href="../logout.php" class="btn btn-sm btn-danger text-white me-3">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
            </a>
            <img src="../assets/images/unira.jpg" class="header-user-avatar" alt="User">
            <div class="header-user-text">
                <strong><?= $_SESSION['nama'] ?? 'Pengguna' ?></strong>
                <span class="role-label"><?= ucfirst($_SESSION['role'] ?? '') ?></span>
            </div>
        </div>
    </div>
</div>

