<?php
session_start();
session_unset();  // Menghapus semua variabel sesi
session_destroy(); // Mengakhiri sesi

header("Location: login/login.php"); // Arahkan kembali ke halaman login
exit;
