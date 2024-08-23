-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2024 pada 01.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cutis`
--

CREATE TABLE `cutis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cutis`
--

INSERT INTO `cutis` (`id`, `nomor_induk`, `tanggal_cuti`, `lama_cuti`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'IP06001', '2020-08-02', 2, 'Acara Keluarga', NULL, NULL),
(2, 'IP06001', '2020-08-18', 2, 'Anak Sakit', NULL, NULL),
(3, 'IP06006', '2020-08-19', 1, 'Nenek Sakit', NULL, NULL),
(4, 'IP06007', '2020-08-23', 1, 'Sakit', NULL, NULL),
(5, 'IP06004', '2020-08-29', 5, 'Menikah', NULL, NULL),
(6, 'IP06003', '2020-08-30', 2, 'Acara Keluarga', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`nomor_induk`, `nama`, `alamat`, `tanggal_lahir`, `tanggal_bergabung`, `created_at`, `updated_at`) VALUES
('IP06001', 'Agus', 'Jln Gaja Mada no 12, Surabaya', '1980-01-11', '2005-08-07', NULL, NULL),
('IP06002', 'Amin', 'Jln Imam Bonjol no 11, Mojokerto', '1977-09-03', '2005-08-07', NULL, NULL),
('IP06003', 'Yusuf', 'Jln A Yani Raya 15 No 14 Malang', '1973-09-09', '2006-08-07', NULL, NULL),
('IP06004', 'Alyssa', 'Jln Bungur Sari V no 166, Bandung', '1983-03-18', '2006-09-06', NULL, NULL),
('IP06005', 'Maulana', 'Jln Candi Agung, No 78 Gg 5, Jakarta', '1978-10-10', '2006-09-10', NULL, NULL),
('IP06006', 'Agfika', 'Jln Nangka, Jakarta Timur', '1979-02-07', '2007-01-02', NULL, NULL),
('IP06007', 'James', 'Jln Merpati, 8 Surabaya', '1989-03-18', '2007-04-02', NULL, NULL),
('IP06008', 'Octavanus', 'Jln A Yani 17, B 08 Sidoarjo', '1985-04-14', '2007-05-19', NULL, NULL),
('IP06009', 'Nugroho', 'Jln Duren tiga 167, Jakarta Selatan', '1984-01-01', '2008-01-16', NULL, NULL),
('IP06010', 'Raisa', 'Jln Kelapa Sawit, Jakarta Selatan', '1990-12-17', '2008-08-16', NULL, NULL),
('IP06011', 'Budi', 'Jln Contoh no 10, Jakarta', '1985-06-10', '2024-08-22', NULL, NULL),
('IP06012', 'Denis Sumargo', 'Jln Contoh no 90, Jakarta', '1981-09-10', '2024-08-23', NULL, NULL),
('IP06013', 'Juicy Luicy', 'Jln Kapt Pierre 49, A Brebes', '2001-12-25', '2024-08-23', NULL, NULL),
('IP06014', 'Yono', 'jakarta', '2022-02-11', '2024-08-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2024_08_22_160457_create_karyawans_table', 1),
(22, '2024_08_22_160510_create_cutis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'API Token', 'b0792c724e8e9c18f98c1cf13a6791fb71b328c2701b327733a4dae0187310cf', '[\"*\"]', '2024-08-22 14:35:03', NULL, '2024-08-22 14:34:25', '2024-08-22 14:35:03'),
(2, 'App\\Models\\User', 2, 'API Token', '8d42a775dd03f555b86a2f5db46f1f94cdbe36d43bd04feffc87e914b484302b', '[\"*\"]', '2024-08-22 19:53:10', NULL, '2024-08-22 14:38:40', '2024-08-22 19:53:10'),
(3, 'App\\Models\\User', 2, 'API Token', '0ed647f8965720e40fc4d6f84c8c02fc3208017ccb3da4ac3494aecf981e6c63', '[\"*\"]', '2024-08-23 02:08:59', NULL, '2024-08-23 00:03:48', '2024-08-23 02:08:59'),
(4, 'App\\Models\\User', 2, 'API Token', '9ea1ae46b0477239203c274b0e8b9c7579f23a54492d31b11ca624483147ab99', '[\"*\"]', '2024-08-23 03:19:55', NULL, '2024-08-23 03:02:59', '2024-08-23 03:19:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, 'admin123', NULL, NULL, NULL),
(2, 'Admin', 'admin@example.com', NULL, '$2y$12$gbH33aqHhqjHRfCoYMDck.06QEaA6OfzmJS.uLuBjmiDvAGFKzap2', NULL, '2024-08-22 14:33:21', '2024-08-22 14:33:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cutis`
--
ALTER TABLE `cutis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cutis_nomor_induk_foreign` (`nomor_induk`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`nomor_induk`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cutis`
--
ALTER TABLE `cutis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cutis`
--
ALTER TABLE `cutis`
  ADD CONSTRAINT `cutis_nomor_induk_foreign` FOREIGN KEY (`nomor_induk`) REFERENCES `karyawans` (`nomor_induk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
