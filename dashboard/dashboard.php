<?php
$page_title = "Sistem Penjaminan Mutu Internal - LPM UNIRA";
$cards = [
    [
        "icon" => "fa-clipboard-check",
        "title" => "LOGIN AMI",
        "desc" => "Audit Mutu Internal untuk penjaminan kualitas pendidikan.",
        "link" => "login\login_ami.php",
        "btn"  => "Masuk",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-chart-line",
        "title" => "LOGIN MONEV GJM",
        "desc" => "Monitoring dan Evaluasi Gugus Jaminan Mutu.",
        "link" => "login\login_monev.php",
        "btn"  => "Masuk",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-tasks",
        "title" => "LOGIN RTL",
        "desc" => "Rencana Tindak Lanjut perbaikan mutu.",
        "link" => "login\login_rtl.php",
        "btn"  => "Masuk",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-users",
        "title" => "LOGIN RTM",
        "desc" => "Rapat Tinjauan Manajemen pimpinan.",
        "link" => "login\login_rtm.php",
        "btn"  => "Masuk",
        "btn_class" => "btn-access"
    ],
    [
        "icon" => "fa-info-circle",
        "title" => "TENTANG SPMI",
        "desc" => "Informasi tentang Sistem Penjaminan Mutu Internal.",
        "link" => "tentang.php",
        "btn"  => "Lihat",
        "btn_class" => "btn-outline-primary"
    ],
    [
        "icon" => "fa-book",
        "title" => "DOKUMEN SPMI",
        "desc" => "Akses dokumen, SOP, pedoman, dan standar mutu SPMI.",
        "link" => "dokumen.php",
        "btn"  => "Lihat",
        "btn_class" => "btn-outline-primary"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Header -->
        <header class="header-spmi">
            <div class="header-container">
                <div class="logo-container">
                    <img src="assets/images/logolpm.png" alt="Logo LPM UNIRA" class="logo-lpm">
                    <div>
                        <h1 class="header-title">SISTEM PENJAMINAN MUTU INTERNAL</h1>
                        <p class="header-subtitle mb-0">Lembaga Penjaminan Mutu - UNIRA Malang</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="welcome-text">
                <div class="container">
                    <h2>Selamat Datang di SPMI UNIRA</h2>
                </div>
            </div>
            
            <div class="card-container">
                <?php foreach($cards as $card): ?>
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas <?php echo $card['icon']; ?>"></i>
                        </div>
                        <div class="card-body-custom">
                            <h3 class="card-title"><?php echo $card['title']; ?></h3>
                            <p class="card-text"><?php echo $card['desc']; ?></p>
                            <a href="<?php echo $card['link']; ?>" class="btn <?php echo $card['btn_class']; ?>"><?php echo $card['btn']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer-spmi">
            <div class="container">
                <p class="mb-0"><?php echo date('Y'); ?> © Lembaga Penjaminan Mutu - Universitas Islam Raden Rahmat Malang</p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>