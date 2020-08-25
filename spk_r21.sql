-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2019 pada 04.33
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_r21`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`, `keterangan`) VALUES
(12, 'A01', 'Muhammad Yasir', ''),
(13, 'A02', 'Hendra Halim', ''),
(14, 'A03', 'Ardiansyah Basha', ''),
(15, 'A04', 'Thamrin Hasan', ''),
(16, 'A05', 'Syaukani', ''),
(17, 'A06', 'Mohammad', ''),
(18, 'A07', 'Triyanto', ''),
(19, 'A08', 'Arif Syaripudin', ''),
(20, 'A09', 'Marlo', ''),
(21, 'A10', 'Syafina', ''),
(22, 'A11', 'Aziz Bawahab', ''),
(23, 'A12', 'Sisca', ''),
(24, 'A13', 'Atik Sri Hartati', ''),
(25, 'A14', 'Jay Aja', ''),
(26, 'A15', 'Eko', ''),
(27, 'A16', 'Arbany', ''),
(28, 'A17', 'Riky Tomo', ''),
(29, 'A18', 'Femi Isferina', ''),
(30, 'A19', 'J. Rumi', ''),
(31, 'A20', 'Priscilla', ''),
(32, 'A21', 'Laura Sitepu', ''),
(33, 'A22', 'Susi Rustam', ''),
(34, 'A23', 'Rista', ''),
(35, 'A24', 'Rama Aryandana', ''),
(36, 'A25', 'Nabila Violet', ''),
(37, 'A26', 'Christina', ''),
(38, 'A27', 'Mohammad Miqdad Amaly', ''),
(39, 'A28', 'Rokib', ''),
(40, 'A29', 'Jess Prabawa Hudaya', ''),
(41, 'A30', 'Christina Manurung', ''),
(42, 'A31', 'Faisal Azrain', ''),
(43, 'A32', 'Panca Yudha Kurniawan', ''),
(44, 'A33', 'Eva Fairus', ''),
(45, 'A34', 'Yusuf Adrianus Tolla', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `crips`
--

CREATE TABLE `crips` (
  `id_crips` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `crips`
--

INSERT INTO `crips` (`id_crips`, `id_kriteria`, `nilai`, `keterangan`) VALUES
(5, 11, 5, 'Amat Baik'),
(6, 11, 4, 'Baik'),
(7, 12, 5, 'Amat Baik'),
(8, 11, 3, 'Cukup'),
(9, 12, 4, 'Baik'),
(10, 12, 3, 'Cukup'),
(12, 12, 2, 'Buruk'),
(14, 11, 2, 'Buruk'),
(15, 11, 1, 'Sangat Buruk'),
(17, 12, 1, 'Sangat Buruk'),
(18, 13, 5, 'Amat Baik'),
(19, 13, 4, 'Baik'),
(20, 13, 3, 'Cukup'),
(21, 13, 2, 'Buruk'),
(22, 13, 1, 'Sangat Buruk'),
(23, 14, 5, 'Amat Baik'),
(24, 14, 4, 'Baik'),
(25, 14, 3, 'Cukup'),
(26, 14, 2, 'Buruk'),
(27, 14, 1, 'Sangat Buruk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_nilai_alternatif` int(11) NOT NULL,
  `hasil_c1` float NOT NULL,
  `hasil_c2` float NOT NULL,
  `hasil_c3` float NOT NULL,
  `hasil_c4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `nama_kriteria` varchar(199) NOT NULL,
  `atribut_kriteria` enum('benefit','cost') NOT NULL,
  `bobot_kriteria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `atribut_kriteria`, `bobot_kriteria`) VALUES
(11, 'C1', 'Penilaian Data Profil', 'benefit', '15'),
(12, 'C2', 'Penilaian Lisensi', 'benefit', '40'),
(13, 'C3', 'Penilaian Prestasi', 'benefit', '20'),
(14, 'C4', 'Penilaian Wilayah', 'benefit', '20'),
(15, 'C5', 'aa', 'benefit', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id_nilai_alternatif` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai_c1` float NOT NULL,
  `nilai_c2` float NOT NULL,
  `nilai_c3` float NOT NULL,
  `nilai_c4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id_nilai_alternatif`, `id_alternatif`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`) VALUES
(1, 12, 4, 1, 1, 1),
(2, 13, 5, 1, 1, 1),
(3, 14, 4, 1, 1, 1),
(4, 15, 5, 1, 1, 1),
(5, 16, 5, 1, 1, 1),
(6, 17, 5, 1, 1, 1),
(7, 18, 4, 1, 1, 1),
(8, 19, 5, 1, 1, 1),
(9, 20, 3, 1, 1, 1),
(10, 21, 3, 1, 1, 1),
(11, 22, 3, 1, 1, 1),
(12, 23, 3, 1, 1, 1),
(13, 24, 3, 1, 1, 1),
(14, 25, 3, 1, 1, 1),
(15, 26, 3, 1, 1, 1),
(16, 28, 3, 1, 1, 1),
(17, 29, 3, 1, 1, 1),
(19, 30, 3, 1, 1, 1),
(20, 31, 3, 1, 1, 1),
(21, 32, 1, 4, 1, 1),
(22, 33, 1, 1, 4, 1),
(23, 34, 1, 1, 1, 4),
(24, 35, 2, 1, 2, 1),
(25, 36, 1, 2, 1, 2),
(26, 37, 2, 2, 1, 1),
(27, 38, 1, 1, 2, 2),
(28, 39, 1, 2, 2, 1),
(29, 40, 1, 1, 1, 1),
(30, 41, 1, 2, 1, 2),
(31, 42, 1, 1, 1, 1),
(32, 43, 1, 1, 1, 1),
(33, 44, 1, 1, 1, 1),
(34, 45, 1, 1, 1, 1),
(35, 27, 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(39, 'Pevita Peace', 'Pev', 'pev', 'karyawan'),
(42, 'administrator', 'Pevita', 'pevita', 'admin'),
(43, 'Pahry', 'Pahry', 'pahry', 'admin'),
(44, 'Cinta Laura', 'Cinta', 'cinta', 'karyawan'),
(45, 'karyawan', 'karyawan', 'karyawan', 'karyawan'),
(46, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `crips`
--
ALTER TABLE `crips`
  ADD PRIMARY KEY (`id_crips`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_alternatif_2` (`id_alternatif`),
  ADD KEY `id_alternatif_3` (`id_alternatif`),
  ADD KEY `id_nilai_alternatif` (`id_nilai_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id_nilai_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `crips`
--
ALTER TABLE `crips`
  MODIFY `id_crips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id_nilai_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `crips`
--
ALTER TABLE `crips`
  ADD CONSTRAINT `crips_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_nilai_alternatif`) REFERENCES `nilai_alternatif` (`id_nilai_alternatif`);

--
-- Ketidakleluasaan untuk tabel `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD CONSTRAINT `nilai_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
