<?php
$page_title = "Dashboard Admin - SPMI UNIRA";
$cards = [
    [
        "icon" => "fa-user-plus",
        "title" => "Tambah User",
        "desc" => "Kelola akun pengguna sistem berdasarkan peran.",
        "link" => "../admin/manage_users.php",
        "btn"  => "Kelola",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-database",
        "title" => "Data Borang",
        "desc" => "Lihat semua link drive borang dari fakultas.",
        "link" => "../admin/manage_links.php",
        "btn"  => "kelola",
        "btn_class" => "btn-outline-primary"
    ],
    [
        "icon" => "fa-star",
        "title" => "Penilaian Borang",
        "desc" => "Berikan nilai evaluasi borang: 5, 3, 2, 1.",
        "link" => "../admin/penilaian.php",
        "btn"  => "Nilai",
        "btn_class" => "btn-outline-primary"
    ]
];
include '../includes/template_dashboard.php';
?>
