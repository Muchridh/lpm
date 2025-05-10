<?php 
$page_title = "Dashboard Pengisi - SPMI UNIRA";
$cards = [
    [
        "icon" => "fa-upload",
        "title" => "Upload Link Borang",
        "desc" => "Setor link Google Drive borang sesuai fakultas/unit.",
        "link" => "#",
        "btn"  => "Upload",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-history",
        "title" => "Riwayat Upload",
        "desc" => "Lihat dan perbarui link borang yang sudah diunggah.",
        "link" => "#",
        "btn"  => "Cek",
        "btn_class" => "btn-outline-primary"
    ],
    [
        "icon" => "fa-clipboard-check",
        "title" => "Status Penilaian",
        "desc" => "Cek hasil evaluasi dan catatan dari LPM/MONEV.",
        "link" => "#",
        "btn"  => "Lihat",
        "btn_class" => "btn-outline-primary"
    ]
];
include '../includes/template_dashboard.php';
?>
