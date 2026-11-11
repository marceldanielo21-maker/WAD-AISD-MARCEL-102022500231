<?php
include 'koneksi.php';

$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama_area']);
    $lantai = (int) $_POST['lantai'];
    $stopkontak = $_POST['stopkontak'];
    $wifi = $_POST['wifi'];
    $status = $_POST['status'];

    $stmt = mysqli_prepare(
        $koneksi,
        "INSERT INTO fasilitas_area
        (nama_area, lantai, stopkontak, wifi, status)
        VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt, "sisss",
        $nama, $lantai, $stopkontak, $wifi, $status
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit;
    } else {
        $pesan = "Gagal menambahkan data.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Fasilitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>Digital Library</h1></header>

<main>
    <h2>Tambah Fasilitas</h2>

    <?php if ($pesan !== '') echo "<p>$pesan</p>"; ?>

    <form method="POST">
        <p>Nama fasilitas:</p>
        <input type="text" name="nama_area" required>

        <p>Lantai:</p>
        <input type="number" name="lantai" min="1" required>

        <p>Stopkontak:</p>
        <select name="stopkontak">
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
        </select>

        <p>Wi-Fi:</p>
        <select name="wifi">
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
        </select>

        <p>Status:</p>
        <select name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Terisi">Terisi</option>
        </select>

        <p><button type="submit">Simpan Data</button></p>
    </form>
</main>
</body>
</html>