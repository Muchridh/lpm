<?php
include '../db/db.php';
session_start();
$page_title = "Kelola User - Admin";

// Tambah user jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $fakultas = $_POST['fakultas_unit'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    mysqli_query($conn, "INSERT INTO users (nama, jabatan, fakultas_unit, email, password, role, created_at) 
        VALUES ('$nama','$jabatan','$fakultas','$email','$password','$role', NOW())");
    header("Location: manage_users.php");
    exit;
}

// Hapus user
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    header("Location: manage_users.php");
    exit;
}

// Ambil semua user
$data = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/marge-user-style.css">
    <link rel="stylesheet" href="../assets/css/admin-header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="../assets/js/admin-ux.js" defer></script>
</head>
<body>

<div class="page-wrapper d-flex">

    <!-- Sidebar -->
    <?php include '../includes/sidebar_admin.php'; ?>

    <!-- Konten Utama -->
    <div class="flex-grow-1 d-flex flex-column">

        <!-- Header -->
        <?php include '../includes/admin_header.php'; ?>

        <!-- Main Content -->
        <main class="main-content container py-4">

            <h4 class="mb-4 text-center fw-bold text-primary">Tambah User</h4>

            <form method="POST" class="row g-3 admin-form">
                <div class="col-md-6"><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required></div>
                <div class="col-md-6"><input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required></div>
                <div class="col-md-6"><input type="text" name="fakultas_unit" class="form-control" placeholder="Fakultas / Unit" required></div>
                <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                <div class="col-md-6"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
                <div class="col-md-6">
                    <select name="role" class="form-select" required>
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="pengisi">Pengisi</option>
                        <option value="monev">Monev</option>
                    </select>
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>

            <hr class="my-5">

            <div class="admin-table">
                <h4 class="mb-3 fw-semibold">Daftar User</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Fakultas/Unit</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while($u = mysqli_fetch_assoc($data)): ?>
                            <tr>
                                <td><?= htmlspecialchars($u['nama']) ?></td>
                                <td><?= htmlspecialchars($u['jabatan']) ?></td>
                                <td><?= htmlspecialchars($u['fakultas_unit']) ?></td>
                                <td><?= htmlspecialchars($u['email']) ?></td>
                                <td><?= ucfirst($u['role']) ?></td>
                                <td class="text-center">
                                    <a href="?hapus=<?= $u['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus user ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer class="footer-admin text-center mt-auto py-3">
            &copy; <?= date('Y') ?> LPM UNIRA Malang
        </footer>
    </div>
</div>

</body>
</html>
