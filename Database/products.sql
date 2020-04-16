-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2018 pada 16.52
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'fti', 'fti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(12) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_barang`, `kategori`, `gambar`, `harga`, `diskon`) VALUES
(1, 'DK Kaos Polos O-Neck Combed 20s Lengan Pendek Unisex', 'Kaos', 'gambar1.jpg', 43000, 30),
(2, 'Kaos Distro Premium / Baju Distro / Tshirt Casual Pria Wanita / Fashion', 'Kaos', 'gambar2.jpg', 135000, 74),
(3, 'Alliegro Kaos Pria Polos Distro Premium - Kaos Terbaru Keren Murah Tumblr Tee Dewasa Hitam', 'Kaos', 'gambar3.jpg', 45000, 0),
(4, 'Maciku Kemeja Batik Songket Pria Lengan Panjang Slimfit Hitam / Baju', 'Kemeja', 'gambar4.jpg', 199000, 0),
(5, 'Celana Pendek Pria Jeans Sobek', 'Celana Jeans', 'gambar5.jpg', 185000, 77),
(6, 'Celana Jeans Pria Wrangler Basic/Standar - Garmen', 'Celana Jeans', 'gambar6.jpg', 375000, 0),
(7, 'Tas Punggung/ Tas Ransel / Backpack / Tas Laptop/ Ransel', 'Tas Ransel', 'gambar7.jpg', 175000, 50),
(8, 'NEW ARRIVAL-Alibi Paris Tas Pria Coco Bag', 'Tas Ransel', 'gambar8.jpg', 199000, 53),
(9, 'Kemeja fashion flanel pria lengan panjang - size M.L.XL', 'Kemeja', 'gambar9.jpg', 145000, 0),
(10, 'Metric Tas Keril Tas Pria Tas Ransel Pria Tas Gunung Tas Punggung Tas', 'Tas Ransel', 'gambar10.jpg', 225000, 0),
(11, 'Skmei 1016 Jam Tangan Olahraga Pria Dual Time Analag Digital Sport', 'Jam Tangan', 'gambar11.jpg', 180000, 58),
(12, 'Tas Ransel Pria Gear Bag Excalibur Mountaineering Tas Laptop Backpack', 'Tas Ransel', 'gambar12.jpg', 149000, 66),
(13, 'Santorini Jam Tangan Pria Wanita Anak Anak Fashion Digital LED Men', 'Jam Tangan', 'gambar13.jpg', 29000, 0),
(14, 'Indi Retro Round Clear Lens Fashion Glasses 14977 M - Kacamata Pria', 'Kacamata', 'gambar14.jpg', 80000, 60),
(15, 'Ajoe Celana Jeans Pria DOUBLE SOBEK / Ripped Strecth Model Skinny', 'Celana Jeans', 'gambar15.jpg', 150000, 26);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
