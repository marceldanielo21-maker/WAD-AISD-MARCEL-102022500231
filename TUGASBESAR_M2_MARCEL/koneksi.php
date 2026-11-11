<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_digital_library");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
