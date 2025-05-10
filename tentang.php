<?php
$page_title = "Tentang SPMI - LPM UNIRA";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a5acd;
            --secondary-color: #4b1a9a;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .header-spmi {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: var(--white);
            padding: 1.5rem 0;
            margin-bottom: 2rem;
        }
        
        .header-title {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .about-section {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #eee;
            padding-bottom: 0.5rem;
        }
        
        .feature-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .footer-spmi {
            background-color: var(--secondary-color);
            color: var(--white);
            padding: 1.5rem 0;
            text-align: center;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header-spmi">
        <div class="container text-center">
            <h1 class="header-title"><i class="fas fa-info-circle me-2"></i>TENTANG SPMI</h1>
            <p class="mb-0">Sistem Penjaminan Mutu Internal UNIRA</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="about-container">
        <div class="about-section">
            <h2 class="section-title">Apa itu SPMI?</h2>
            <p>Sistem Penjaminan Mutu Internal (SPMI) adalah sistem yang dirancang untuk menjamin mutu pendidikan tinggi secara berkelanjutan yang dilaksanakan oleh perguruan tinggi. SPMI UNIRA Malang mengacu pada standar nasional pendidikan tinggi dan kebijakan mutu yang ditetapkan oleh universitas.</p>
        </div>
        
        <div class="about-section">
            <h2 class="section-title">Fitur SPMI UNIRA</h2>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h4>Audit Mutu Internal</h4>
                    <p>Evaluasi berkala terhadap pelaksanaan standar mutu pendidikan</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Monitoring & Evaluasi</h4>
                    <p>Pemantauan terus menerus terhadap proses pendidikan</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h4>Rencana Tindak Lanjut</h4>
                    <p>Perbaikan berkelanjutan berdasarkan hasil evaluasi</p>
                </div>
            </div>
        </div>
        
        <div class="about-section">
            <h2 class="section-title">Struktur Organisasi</h2>
            <p>SPMI UNIRA Malang dikelola oleh Lembaga Penjaminan Mutu (LPM) yang terdiri dari:</p>
            <ul>
                <li>Ketua LPM</li>
                <li>Tim Auditor Mutu Internal</li>
                <li>Gugus Jaminan Mutu Fakultas/Jurusan</li>
                <li>Koordinator SPMI Program Studi</li>
            </ul>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-spmi">
        <div class="container">
            <p class="mb-0"><?php echo date('Y'); ?> © Lembaga Penjaminan Mutu - Universitas Islam Raden Rahmat Malang</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>