<?php
include '../db/db.php';
$page_title = "Kelola User - Admin";
include '../includes/admin_header.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/template_dashboard.css">
</head>
<?php if (isset($cards) && is_array($cards)): ?>
    <div class="card-container">
        <?php foreach($cards as $card): ?>
            <!-- isi card -->
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<body>
    <div class="page-wrapper">

        <!-- Main Content -->
        <main class="main-content">
            <div class="welcome-text text-center mb-4">
                <div class="container">
                    <h2>Selamat datang di <?= $page_title ?></h2>
                </div>
            </div>
            
            <div class="card-container">
                <?php foreach($cards as $card): ?>
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas <?= $card['icon']; ?>"></i>
                        </div>
                        <div class="card-body-custom">
                            <h3 class="card-title"><?= $card['title']; ?></h3>
                            <p class="card-text"><?= $card['desc']; ?></p>
                            <a href="<?= $card['link']; ?>" class="btn <?= $card['btn_class']; ?>"><?= $card['btn']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer-spmi">
            <div class="container text-center">
                &copy; <?= date('Y') ?> LPM Universitas Islam Raden Rahmat Malang
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
