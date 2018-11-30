-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2018 pada 14.59
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatiindah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopohon`
--

CREATE TABLE `infopohon` (
  `idinfo` int(11) NOT NULL,
  `pohontebang` varchar(100) NOT NULL,
  `jumlahpohon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `info` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_info`, `id`, `info`) VALUES
(3, 15, 'lala'),
(4, 16, 'HAI, KAMI ADALAH PERUSAHAAN MEUBEL JATI INDAH'),
(5, 20, 'Meubel jati indah'),
(6, 29, '                                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(7, 31, 'haloo'),
(8, 32, 'heeeee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kayu`
--

CREATE TABLE `kayu` (
  `idkayu` int(100) NOT NULL,
  `id` int(11) NOT NULL,
  `identitas` varchar(100) NOT NULL,
  `diameter` varchar(3) NOT NULL,
  `panjang` varchar(3) NOT NULL,
  `hargakayu` int(100) NOT NULL,
  `stokkayu` int(100) NOT NULL,
  `gambarkayu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kayu`
--

INSERT INTO `kayu` (`idkayu`, `id`, `identitas`, `diameter`, `panjang`, `hargakayu`, `stokkayu`, `gambarkayu`) VALUES
(3, 0, 'Kayu Jati Super 2', '7', '15', 80000000, 5, '5bcea2c5120c8.jpg'),
(4, 0, 'Kayu Jati Super', '3', '17', 1500000, 1, '5bcea2d26b85b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `idlevel` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`idlevel`, `level`) VALUES
(1, 'meubel'),
(2, 'pembeli'),
(3, 'pemasok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `gambarproduk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `id`, `namaproduk`, `hargaproduk`, `stok`, `gambarproduk`) VALUES
(4, 15, 'meja', '2000000', '7', '5bcec0325659b.jpg'),
(5, 16, 'meja kursi', '2000000', '2', '5bea0f4b587da.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telp` int(15) NOT NULL,
  `norek` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `referensi` varchar(100) NOT NULL,
  `budget` int(7) NOT NULL,
  `waktu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `alamatpengiriman` text NOT NULL,
  `jumlahpembelian` int(11) NOT NULL,
  `tanggaltransaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `idlevel` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `password` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `namaperusahaan` varchar(25) DEFAULT NULL,
  `noper` varchar(20) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `idlevel`, `nama`, `namauser`, `password`, `email`, `namaperusahaan`, `noper`, `alamat`, `no_rek`, `no_hp`, `status`) VALUES
(15, 3, 'Alifatur', 'Saturday24', '1234', 'atur@yahoo.com', 'Ayo', '5bbf6c245ab29.jpg', 'jl tanjung', '1234567890', '0987654321', 'verifikasi berhasil'),
(16, 2, 'Alya', 'Alya18', '123', '', '', '', 'jl tanjung', '1234567890', '0987654321', ''),
(20, 1, 'jati_indah', 'admin', 'admin', 'jatiindah@gmail.com', 'Jati_Indah', '1234567890', '0987654321', '1234567890', '1234567890', NULL),
(29, 2, 'Alifatur', 'aturcantik', 'aturcan', 'aturcantik@gmail.com', '', '', 'jl tanjung no 3', '1234567890', '1234567890', ''),
(31, 3, 'Asyalina', 'lina', '123', 'asyalina@gmail.com', 'Alya 18', '5bcb16698a1e8.jpg', 'jl tanjung no 3', '1234567890', '1234567890', 'verifikasi ditolak'),
(32, 2, 'Rini Astutik', 'Rini', '123', 'rini@gmail.com', '', '', 'jl rini 23', '12345', '0987654321', ''),
(33, 2, 'aku', 'lala23', '123', 'ana@gmail.com', '', '', 'jl tanjung no 1', '7', '6', ''),
(34, 2, 'alifatur', 'atur28', '1234', 'satu@gmail.com', '', '', 'jl tanjung no 3', '1234567890', '1234567890', ''),
(35, 3, 'saya', 'saya', 'saya', 'saya@gmail.com', 'haha', '5bea0ab3a80af.jpg', 'jl tanjung', '123456789', '123456789', 'belum diverivikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infopohon`
--
ALTER TABLE `infopohon`
  ADD PRIMARY KEY (`idinfo`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `kayu`
--
ALTER TABLE `kayu`
  ADD PRIMARY KEY (`idkayu`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `iduser` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idevel` (`idlevel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `infopohon`
--
ALTER TABLE `infopohon`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kayu`
--
ALTER TABLE `kayu`
  MODIFY `idkayu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idlevel`) REFERENCES `level` (`idlevel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
