CREATE DATABASE IF NOT EXISTS db_digital_library
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE db_digital_library;

CREATE TABLE IF NOT EXISTS fasilitas_area (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_area VARCHAR(100) NOT NULL,
    lantai INT NOT NULL,
    stopkontak ENUM('Ada', 'Tidak Ada') NOT NULL,
    wifi ENUM('Ada', 'Tidak Ada') NOT NULL,
    status ENUM('Tersedia', 'Terisi') NOT NULL
);

INSERT INTO fasilitas_area (nama_area, lantai, stopkontak, wifi, status) VALUES
('Meja Baca 01', 1, 'Ada', 'Ada', 'Tersedia'),
('Bilik Baca 02', 2, 'Ada', 'Ada', 'Terisi'),
('Meja Baca 03', 1, 'Tidak Ada', 'Ada', 'Tersedia');
    

