<?php
include '../db/db.php';
$page_title = "Upload Link Borang";
include '../includes/template_dashboard.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fakultas = $_POST['fakultas'];
    $link = $_POST['link'];
    mysqli_query($conn, "INSERT INTO uploads (fakultas, link, uploaded_at) VALUES ('$fakultas', '$link', NOW())");
    header("Location: manage_links.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM uploads ORDER BY uploaded_at DESC");
?>

<div class="container mt-4">
    <h4>Upload Link Drive Borang</h4>
    <form method="POST" class="row g-3 mb-4">
        <div class="col-md-6"><input type="text" name="fakultas" class="form-control" placeholder="Fakultas / Unit" required></div>
        <div class="col-md-6"><input type="url" name="link" class="form-control" placeholder="Link Google Drive" required></div>
        <div class="col-12"><button class="btn btn-primary">Simpan</button></div>
    </form>

    <table class="table table-striped">
        <thead><tr><th>Fakultas</th><th>Link</th><th>Waktu</th></tr></thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($data)): ?>
                <tr>
                    <td><?= $row['fakultas'] ?></td>
                    <td><a href="<?= $row['link'] ?>" target="_blank"><?= $row['link'] ?></a></td>
                    <td><?= $row['uploaded_at'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
