<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM fasilitas_area ORDER BY id ASC");

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Digital Library - Detail Fasilitas & Area</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><h1>Digital Library</h1></header>
  <main>
    <section>
      <h2>Detail Fasilitas & Area</h2>
      <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="detail-card">
          <h3><?= e($row['nama_area']) ?></h3>
          <p>Lantai: <?= e($row['lantai']) ?></p>
          <p>Stopkontak: <?= e($row['stopkontak']) ?></p>
          <p>WiFi: <?= e($row['wifi']) ?></p>
          <p>Ketersediaan:
            <span class="<?= $row['status'] === 'Tersedia' ? 'status-tersedia' : 'status-terisi' ?>">
              <?= e($row['status']) ?>
            </span>
          </p>
        </div>
      <?php } ?>
      <a href="index.php" class="btn-kembali">Kembali ke Daftar</a>
    </section>
  </main>
</body>
</html>
