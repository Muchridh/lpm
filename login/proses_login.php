<?php
session_start();
include '../db/db.php'; // pastikan path ke db benar

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    header("Location: login.php?error=Email dan password wajib diisi");
    exit;
}

// Cek user berdasarkan email
$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['jabatan'] = $user['jabatan'];
        $_SESSION['fakultas_unit'] = $user['fakultas_unit'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Redirect berdasarkan role
        switch ($user['role']) {
            case 'admin':
                header("Location: ../admin/admin_dashboard.php");
                break;
            case 'pengisi':
                header("Location: ../dashboard/pengisi_dashboard.php");
                break;
            case 'monev':
                header("Location: ../dashboard/monev_dashboard.php");
                break;
            default:
                header("Location: login.php?error=Role tidak dikenali");
                break;
        }
        exit;
    } else {
        header("Location: login.php?error=Email atau password salah");
        exit;
    }
} else {
    header("Location: login.php?error=Email tidak ditemukan");
    exit;
}
