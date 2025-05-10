<?php
session_start();
include '../db/db.php';

$user_id = $_SESSION['user_id'] ?? null;

// Redirect jika tidak login
if (!$user_id) {
    header("Location: ../login.php");
    exit;
}

// Ambil data user
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
$user = mysqli_fetch_assoc($result);

// Update profil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $fakultas = $_POST['fakultas_unit'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET nama='$nama', jabatan='$jabatan', fakultas_unit='$fakultas', email='$email' WHERE id=$user_id");
    $_SESSION['nama'] = $nama;
    header("Location: edit_profil.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="../assets/css/marge-user-style.css">
    <link rel="stylesheet" href="../assets/css/admin-header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="page-wrapper d-flex">
    <?php include '../includes/sidebar_admin.php'; ?>
    <div class="flex-grow-1 d-flex flex-column">
        <?php include '../includes/admin_header.php'; ?>
        <main class="main-content container py-4">
            <h4 class="mb-4 fw-bold text-primary">Edit Profil</h4>

            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">Profil berhasil diperbarui.</div>
            <?php endif; ?>

            <form method="POST" class="row g-3">
                <div class="col-md-6"><input type="text" name="nama" value="<?= $user['nama'] ?>" class="form-control" required></div>
                <div class="col-md-6"><input type="text" name="jabatan" value="<?= $user['jabatan'] ?>" class="form-control" required></div>
                <div class="col-md-6"><input type="text" name="fakultas_unit" value="<?= $user['fakultas_unit'] ?>" class="form-control" required></div>
                <div class="col-md-6"><input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required></div>
                <div class="col-12 text-end">
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </main>
    </div>
</div>
</body>
</html>
