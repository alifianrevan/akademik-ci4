CREATE DATABASE IF NOT EXISTS akademik_ci4;
USE akademik_ci4;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    ipk DECIMAL(3,2) NOT NULL
);

INSERT INTO mahasiswa (nim, nama, prodi, ipk) VALUES
('2026001', 'Andi', 'Teknik Informatika', 3.75),
('4523210083', 'Naufal Maulana Saputra', 'Teknik Informatika', 3.50);
