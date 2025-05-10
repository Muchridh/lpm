<?php
$page_title = "Dokumen SPMI - LPM UNIRA";
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
        
        .documents-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .documents-section {
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
        
        .document-card {
            border-left: 4px solid var(--primary-color);
            padding: 1rem;
            margin-bottom: 1rem;
            transition: all 0.3s;
        }
        
        .document-card:hover {
            background-color: rgba(106, 90, 205, 0.05);
        }
        
        .document-icon {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-right: 1rem;
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
            <h1 class="header-title"><i class="fas fa-book me-2"></i>DOKUMEN SPMI</h1>
            <p class="mb-0">Standar, Pedoman, dan Dokumen Mutu UNIRA</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="documents-container">
        <div class="documents-section">
            <h2 class="section-title">Standar Mutu</h2>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <h5>Standar Nasional Pendidikan Tinggi</h5>
                        <p class="mb-1">Permendikbud No. 3 Tahun 2020</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <h5>Standar Mutu UNIRA</h5>
                        <p class="mb-1">Keputusan Rektor No. 123/UNIRA/2023</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="documents-section">
            <h2 class="section-title">Pedoman dan SOP</h2>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div>
                        <h5>Pedoman Audit Mutu Internal</h5>
                        <p class="mb-1">Versi 2.0 - Tahun 2023</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div>
                        <h5>SOP Penyusunan Borang</h5>
                        <p class="mb-1">Untuk Program Studi</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="documents-section">
            <h2 class="section-title">Template Dokumen</h2>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-file-word"></i>
                    </div>
                    <div>
                        <h5>Template Laporan AMI</h5>
                        <p class="mb-1">Format .docx</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
            
            <div class="document-card">
                <div class="d-flex align-items-center">
                    <div class="document-icon">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <div>
                        <h5>Template Borang Program Studi</h5>
                        <p class="mb-1">Format .xlsx</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
                    </div>
                </div>
            </div>
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