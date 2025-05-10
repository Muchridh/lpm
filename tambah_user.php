<?php
// tambah_user.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User - SPMI UNIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>

    <div class="form-card">
        <h4 class="mb-4 text-center">Tambah User SPMI</h4>

        <?php if (isset($_GET['sukses'])): ?>
            <div class="alert alert-success">User berhasil ditambahkan!</div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>

        <form action="proses_tambah_user.php" method="POST">
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Fakultas/Unit</label>
                <input type="text" name="fakultas_unit" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-4">
                <label>Role</label>
                <select name="role" class="form-select" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="pengisi">Pengisi (Fakultas/Prodi)</option>
                    <option value="monev">MONEV</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Tambah User</button>
        </form>
    </div>

</body>
</html>
