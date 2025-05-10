<?php
include 'db/db.php';

$nama          = $_POST['nama'] ?? '';
$jabatan       = $_POST['jabatan'] ?? '';
$fakultas_unit = $_POST['fakultas_unit'] ?? '';
$email         = $_POST['email'] ?? '';
$password      = $_POST['password'] ?? '';
$role          = $_POST['role'] ?? '';

if (!$nama || !$jabatan || !$fakultas_unit || !$email || !$password || !$role) {
    header("Location: tambah_user.php?error=Semua field wajib diisi.");
    exit;
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database
$sql = "INSERT INTO users (nama, jabatan, fakultas_unit, email, password, role, created_at)
        VALUES ('$nama', '$jabatan', '$fakultas_unit', '$email', '$hashed', '$role', NOW())";

if (mysqli_query($conn, $sql)) {
    header("Location: tambah_user.php?sukses=1");
} else {
    $error = mysqli_error($conn);
    header("Location: tambah_user.php?error=Gagal menyimpan data: $error");
}
exit;
