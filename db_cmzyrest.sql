-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2022 pada 08.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cmzyrest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(1, 'samsurian48@gmail.com', 'riyan', '$2y$10$3O5ZolsVnYjBEmsXkCP0b.Jvy3GdLvKUQ4hcLOrsJG2r8CC9CNyiK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(11) NOT NULL,
  `name_cs` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `guest` int(50) NOT NULL,
  `date_book` date NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking_table`
--

INSERT INTO `booking_table` (`id`, `name_cs`, `class`, `telpon`, `guest`, `date_book`, `note`) VALUES
(12, 'Riyan', 'Private Class II', '082156788765', 2, '2022-10-18', ' give an anniversary surprise'),
(14, 'Chimaa', 'Private Class II', '085245535353', 5, '2022-10-15', 'meeting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `date_upload` varchar(50) NOT NULL,
  `name_menu` varchar(100) NOT NULL,
  `class_menu` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id_menu`, `date_upload`, `name_menu`, `class_menu`, `price`, `image_menu`) VALUES
(18, '27-10-2022', 'The Best Crumbed Lamb Cutlets Recipe with Mint Sauce', 'Main Course', 400000, 'The Best Crumbed Lamb Cutlets Recipe with Mint Sauce.jpg'),
(19, '27-10-2022', 'Grapefruit Pomegranate Mocktail', 'Main Course', 120000, 'Grapefruit Pomegranate Mocktail.jpg'),
(20, '27-10-2022', 'Smoky Jalapeño Cheddar Potato Soup', 'Soup', 135000, 'Smoky Jalapeño Cheddar Potato Soup.jpg'),
(21, '27-10-2022', 'Entremets chocolat au lait et noisettes', 'Dessert', 150000, 'Entremets chocolat au lait et noisettes.jpg'),
(22, '27-10-2022', 'Frothy Whipped Coffee White Russian', 'Coffe', 85000, 'Frothy Whipped Coffee White Russian.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
