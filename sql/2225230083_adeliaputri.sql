-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2023 pada 08.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2225230083_adeliaputri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_20_041726_create_warga_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adelia Putri', 'adel', 'adel@gmail.com', '$2y$12$BUTN4CSHS97m9/hdOs1UmOb7MI02KGC7v8E9S4acXhu207j/d5VPC', NULL, '2023-12-22 22:55:40', '2023-12-22 22:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Tiktok` varchar(255) NOT NULL,
  `vote` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `Nama`, `Gambar`, `Email`, `Instagram`, `Tiktok`, `vote`, `created_at`, `updated_at`) VALUES
(1, 'Adelia Putri', 'C:\\xampp\\tmp\\php1C13.tmp', '2225230083@untirta.ac.id', 'adellptri', 'adellptri', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:20:47'),
(2, 'Rendy Pratama', 'https://via.placeholder.com/200x200.png/0011aa?text=people+eaque', 'isuwarno@example.net', 'habibi.syahrini', 'marbun.yance', 'PASLON 3', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(3, 'Caraka Samosir', 'https://via.placeholder.com/200x200.png/0099dd?text=people+enim', 'hhariyah@example.net', 'himawan91', 'adinata95', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(4, 'Paiman Suwarno M.M.', 'https://via.placeholder.com/200x200.png/0066dd?text=people+nihil', 'shania63@example.com', 'puti.permata', 'farida.puji', 'PASLON 3', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(6, 'Embuh Jailani M.TI.', 'https://via.placeholder.com/200x200.png/0022dd?text=people+qui', 'ellis63@example.net', 'mustika.hastuti', 'argono31', 'PASLON 3', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(7, 'Yahya Taswir Wasita M.Pd', 'https://via.placeholder.com/200x200.png/00ddbb?text=people+in', 'xhalimah@example.org', 'oktaviani.lamar', 'paris.napitupulu', 'PASLON 3', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(8, 'Farhunnisa Rahimah', 'https://via.placeholder.com/200x200.png/001199?text=people+itaque', 'hasim55@example.net', 'lestari.ami', 'bbudiman', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(9, 'Bahuwarna Dongoran', 'https://via.placeholder.com/200x200.png/00aa00?text=people+sequi', 'dian41@example.com', 'ifa.mahendra', 'melani.elma', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:21:35'),
(10, 'Dinda Suryatmi', 'https://via.placeholder.com/200x200.png/00dd33?text=people+sit', 'nainggolan.virman@example.net', 'ekusmawati', 'tami.maheswara', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(11, 'Prayogo Firgantoro', 'https://via.placeholder.com/200x200.png/001188?text=people+dolore', 'tania05@example.org', 'cakrabirawa.prastuti', 'jane10', 'PASLON 2', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(12, 'Sakti Waluyo', 'https://via.placeholder.com/200x200.png/00ee33?text=people+similique', 'ahartati@example.com', 'qpratama', 'zaenab.yuniar', 'PASLON 2', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(13, 'Lukman Simanjuntak S.Sos', 'https://via.placeholder.com/200x200.png/006633?text=people+nam', 'nurdiyanti.jasmin@example.org', 'raihan34', 'iswahyudi.banara', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:21:44'),
(14, 'Febi Mayasari S.E.', 'https://via.placeholder.com/200x200.png/007777?text=people+perferendis', 'hpurwanti@example.com', 'lestari.latika', 'yulia.gunarto', 'PASLON 1', '2023-12-22 22:18:20', '2023-12-22 22:18:20'),
(16, 'Tubagus Weshan Febrii', 'tbgess', 'tubaguss@gmail.com', 'tbgess', 'tbgess', 'PASLON 3', '2023-12-22 23:18:07', '2023-12-22 23:18:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warga_email_unique` (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
