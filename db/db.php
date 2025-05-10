<?php
$host = "localhost";
$user = "root"; // default XAMPP user
$pass = "";     // default kosong
$dbname = "lpmdb";

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
