<?php
include '../db/db.php';
$page_title = "Penilaian Borang";
include '../includes/template_dashboard.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $upload_id = $_POST['upload_id'];
    $nilai = $_POST['nilai'];
    mysqli_query($conn, "REPLACE INTO penilaian (upload_id, nilai, tanggal) VALUES ($upload_id, $nilai, NOW())");
}

$uploads = mysqli_query($conn, "SELECT u.*, p.nilai FROM uploads u LEFT JOIN penilaian p ON u.id = p.upload_id");
?>

<div class="container mt-4">
    <h4>Penilaian Borang</h4>
    <table class="table table-bordered">
        <thead><tr><th>Fakultas</th><th>Link</th><th>Nilai</th><th>Aksi</th></tr></thead>
        <tbody>
            <?php while($u = mysqli_fetch_assoc($uploads)): ?>
                <tr>
                    <td><?= $u['fakultas'] ?></td>
                    <td><a href="<?= $u['link'] ?>" target="_blank">Lihat Borang</a></td>
                    <td><?= $u['nilai'] ?? '-' ?></td>
                    <td>
                        <form method="POST" class="d-flex">
                            <input type="hidden" name="upload_id" value="<?= $u['id'] ?>">
                            <select name="nilai" class="form-select form-select-sm me-2" required>
                                <option value="">Nilai</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                            <button class="btn btn-sm btn-primary">Simpan</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
