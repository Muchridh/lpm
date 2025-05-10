<?php 
$page_title = "Dashboard MONEV - SPMI UNIRA";
$cards = [
    [
        "icon" => "fa-search",
        "title" => "Review Borang",
        "desc" => "Tinjau borang SPMI dari semua fakultas.",
        "link" => "#",
        "btn"  => "Tinjau",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-check-double",
        "title" => "Validasi Pengisian",
        "desc" => "Validasi hasil isian dan tambahkan catatan evaluasi.",
        "link" => "#",
        "btn"  => "Validasi",
        "btn_class" => "btn-outline-primary"
    ]
];
include '../includes/template_dashboard.php';
?>

