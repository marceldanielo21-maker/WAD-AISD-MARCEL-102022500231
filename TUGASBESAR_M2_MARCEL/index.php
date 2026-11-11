<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM fasilitas_area ORDER BY id ASC");

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Digital Library - Fasilitas & Area</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><h1>Digital Library</h1></header>
  <main>
    <section>
      <h2>Daftar Fasilitas & Area</h2>
      <ul class="area-list">
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
          <li class="area-item">
            <h3><?= e($row['nama_area']) ?></h3>
            <p>Lantai: <?= e($row['lantai']) ?></p>
            <p>Status:
              <span class="<?= $row['status'] === 'Tersedia' ? 'status-tersedia' : 'status-terisi' ?>">
                <?= e($row['status']) ?>
              </span>
            </p>
          </li>
        <?php } ?>
      </ul>
      <a href="detail.php" class="btn-detail">Lihat Semua Detail</a>
    </section>
  </main>
  <footer>
    <p>Nama: Marcel Aziz</p>
    <p>NIM: 102022500231</p>
    <p>Kelas: SI4906</p>
    <p>Kelompok: Kelompok 1</p>
    <p>Modul: Fasilitas & Area</p>
  </footer>
</body>
</html>
