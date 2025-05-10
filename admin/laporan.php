<?php
include '../db/db.php';
$page_title = "Laporan Borang";
include '../includes/template_dashboard.php';

$data = mysqli_query($conn, "SELECT u.fakultas, u.link, p.nilai, p.tanggal 
    FROM uploads u 
    LEFT JOIN penilaian p ON u.id = p.upload_id 
    ORDER BY u.fakultas");
?>

<div class="container mt-4">
    <h4>Laporan Borang Tiap Fakultas</h4>
    <table class="table table-striped">
        <thead><tr><th>Fakultas</th><th>Link Borang</th><th>Nilai</th><th>Dinilai Pada</th></tr></thead>
        <tbody>
            <?php while($r = mysqli_fetch_assoc($data)): ?>
                <tr>
                    <td><?= $r['fakultas'] ?></td>
                    <td><a href="<?= $r['link'] ?>" target="_blank">Lihat Borang</a></td>
                    <td><?= $r['nilai'] ?? '-' ?></td>
                    <td><?= $r['tanggal'] ?? '-' ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
