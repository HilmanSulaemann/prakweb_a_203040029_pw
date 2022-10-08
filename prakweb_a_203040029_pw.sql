-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2022 pada 18.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040029_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `nama`, `penulis`, `penerbit`, `harga`) VALUES
(1, 'python.jpg', 'Membuat Aplikasi GUI Menggunakan Java Di Apachee NetBeans IDE', 'Ir. Yuniar Supardi, Iwan Rizal Setiawan, Erie Maulana', 'Elex Media Komputindo', 'Rp.80.000'),
(2, 'keamanan.jpg', 'Membangun da Menguji Keamanan Website', 'HARTONO & ONNO W. PURBO', 'ANDI OFFSET', 'Rp.84.800'),
(3, 'ibmlt.jpg', 'Implementasi Blended Learning dengan Microsoft Team', 'Dr. Ridi Ferdiana, M.T.\r\n', 'Andi Offset', 'Rp.44.000'),
(4, 'mpw.jpg', '7 Materi Pemograman Web untuk Pemula', 'Rohi Abdulloh', 'Elex Media Komputindo', 'Rp.135.000'),
(5, 'seim.jpg', 'Strategi Efektif Internet Marketing', 'Arista Prasetyo Adi', 'Elex Media Komputindo', 'Rp.51.000'),
(9, 'EBI.jpg', 'Etika Bisnis Di Era Teknologi Digital\r\n', 'DR. Ratna Candra Sari, M. SI., CA., Prof. Mahfud S...', 'Andi Offset', 'Rp. 131.000'),
(10, 'mdw.jpg', 'Merancang Web Menggunakan Dreamweaver: Teknik Pembelajaran', 'Chandra Anugrah Putra', 'Graha Ilmu', 'Rp.92.000'),
(11, 'mwd.jpg', 'Membuat Desain Web Untuk Pemula\r\n', 'Madcoms', 'Andi Publisher', 'Rp.89.000'),
(12, 'teknikdesain.jpg', 'Teknik Desain Ilustrasi Dan Karakter Dengan Photoshop Komplel', 'Iwan Nisaburi & Saiful Hadi Arofat', 'Elex Media Komputindo', 'Rp.100.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
