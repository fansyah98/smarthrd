-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2021 pada 00.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthrd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_jabatan` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_jabatan`, `name`, `kode`) VALUES
(2, 'Admin Gudang', 'AC'),
(6, 'General Afrial', 'GA'),
(7, 'Marketing Asosiated', 'MA'),
(8, 'Sales Asosiated', 'SA'),
(9, 'Creadit Marketing Excecutive ', 'CME'),
(10, 'Human Reoucuser Develompment', 'HRD'),
(11, 'Teknis Air Show', 'TA'),
(13, 'Site Engineer', 'SE'),
(14, 'Structure Engineering', 'SEG'),
(15, 'Architect Engineering', 'AEG'),
(16, 'Quality Control', 'QC'),
(17, ' Staff Akutansi', 'SA'),
(18, 'Administrasi dan Umum', 'AU'),
(19, 'IT (Information & Technology)', 'IT '),
(20, 'Product Planning Inventory Contro', 'PPIC'),
(21, 'Quality Assurance', 'GA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `jenis_kelamin` int(2) NOT NULL COMMENT '1: laki laki : 2. Perempuan \r\n',
  `nik` int(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `Kota_asal` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `wn` varchar(30) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `name`, `kota`, `jenis_kelamin`, `nik`, `jabatan`, `ttl`, `Kota_asal`, `alamat`, `wn`, `golongan_darah`, `no_hp`, `id_jabatan`, `id_cabang`) VALUES
(17, 'Fansyah Dwi Krisnady', 'Cirebon', 2, 2147483647, 'IT support', '2000-02-20', 'Kuningan', 'Palimanan Cirebon Jawa Barat ', 'Indonesia', 'C', 2147483647, 19, 22),
(19, 'Davi Anur', 'Kab Cirebon ', 2, 2147483647, 'Staff Accounting', '2000-02-20', 'Cirebon', 'Cirebon ', 'Indonesia', 'AB', 2147483647, 7, 20),
(20, 'Fuji Yama Takahasi', 'Karawang Pusta', 2, 2147483647, 'Sales Accociated', '1928-02-20', 'Tokyo', 'Jepang , Tokyo ', 'Jepang', 'D', 2147483647, 6, 19),
(25, 'Fanzy Pangestu', 'Kab Cirebon ', 2, 2147483647, 'Staff Accounting', '2222-02-20', 'Cirebon', 'Bekasi timur bantar gebang', 'Indonesia', 'C', 56456, 21, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `gender` int(2) NOT NULL COMMENT '1. Laki Laki : 2. Perempuan ',
  `universitas` varchar(40) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magang`
--

INSERT INTO `magang` (`id_magang`, `nama`, `nim`, `semester`, `gender`, `universitas`, `jurusan`) VALUES
(3, 'Muhammad Indra Kusuma', 14519077, 4, 0, 'Stikom Poltek Cirebon', 'Teknik Infomartika'),
(5, 'Fansyah Dwi Krisnady', 14519077, 4, 1, 'Stikom Poltek Cirebon', 'Ekonomi Menejemen'),
(6, 'hasyim Robani', 1526712, 4, 1, 'Stikom Poltek Cirebon', 'Teknik Infomartika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_cabang`
--

CREATE TABLE `p_cabang` (
  `id_cabang` int(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_cabang`
--

INSERT INTO `p_cabang` (`id_cabang`, `name`) VALUES
(7, 'Kab Cirebon'),
(8, 'Losari'),
(9, 'Indramayu'),
(12, 'Indramayu'),
(13, 'Lemah Abang'),
(14, 'Solo'),
(15, 'Kedawung '),
(17, 'Jakarta Pusat'),
(19, 'Ciledug'),
(20, 'AstanaJapura'),
(22, 'Kawarang Pusat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(30) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1. Direksi Perushaan : 2. HRD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `address`, `level`) VALUES
(1, 'Fansyah Dwi Krisnady', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Cirebon , 20 Febuari  2000', 1),
(10, 'Fanzy Pangestu', 'admin123', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Cirebo , 30 jul 1929', 2),
(12, 'Fathir surya trinadi', 'fathir20000', 'eac2aa4d37ef456993cdbf654eb9e48fd8bd6f0b', 'Cirebon , 02  Febuari 2002', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `karyawan_ibfk_1` (`id_jabatan`),
  ADD KEY `karyawan_ibfk_2` (`id_cabang`);

--
-- Indeks untuk tabel `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `p_cabang`
--
ALTER TABLE `p_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `p_cabang`
--
ALTER TABLE `p_cabang`
  MODIFY `id_cabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `departemen` (`id_jabatan`),
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `p_cabang` (`id_cabang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
