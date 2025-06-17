-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2025 pada 10.00
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oilcycle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasok`
--

CREATE TABLE `pemasok` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nomorHp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemasok`
--

INSERT INTO `pemasok` (`id`, `username`, `nomorHp`, `password`, `created_at`, `updated_at`) VALUES
(1, 'hello', '08', '123', '2025-06-14 02:15:56', '2025-06-14 02:15:56'),
(2, 'mahen', '09867', '123', '2025-06-16 08:52:49', '2025-06-16 08:52:49'),
(3, 'sheva', '', '$2y$10$Bm684pEuto7ZGgVlUDUlX.bg7UcGOW4PKZ.V.6XxKQiUSVrWRvGWu', '2025-06-16 09:22:35', '2025-06-16 09:22:35'),
(8, 'erwin', '', '$2y$10$XbLaW99Ja3PFf4zzPlHsTOTCN0m0tPrjfmIrGFVNrDMR/2VaJWZr6', '2025-06-17 06:02:34', '2025-06-17 06:02:34'),
(9, 'taorm', '09876', '$2y$10$5L7fzJGmqe4GEBmBAoPIR.1moknHSEL9yRX9BS4M4kidQpMVzqY0m', '2025-06-17 06:07:38', '2025-06-17 06:07:38'),
(10, 'shepwa', '0891', '$2y$10$NCdWqWIpLrG6UrqQRlgT7Oxvh.75zFS6NDj6pGzb/rSn7sk16JsqC', '2025-06-17 06:29:02', '2025-06-17 06:29:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
