-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2025 at 05:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_personal_profaile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `address` text NOT NULL,
  `zip_code` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `born`, `address`, `zip_code`, `email`, `phone`, `total_project`, `work`, `image`, `description`) VALUES
(4, 'Dimas Prassetyo', '2008-03-11', 'Langensari RT2 RW3 Kota Bnajar', 2222, 'dimas@gmail.com', '+62 895392823488', 1, 'Pelajar SMKN 3 BANJAR', '1755569834.png', '\"Perkenalkan, saya Dimas Prassetyo, seorang pemuda berusia 17 tahun dengan passion di bidang pengembangan perangkat lunak. Saat ini saya sedang menjalani program magang sebagai Web Developer di PT. Lauwba Technologi Indonesia, di mana saya mendapatkan kesempatan berharga untuk mengaplikasikan pengetahuan coding sekaligus mempelajari best practices pengembangan sistem di lingkungan profesional.\"\r\n\r\n'),
(7, 'Dimas Prassetyo', '2025-08-20', 'aaaaaaa', 1111, 'dimas@gmail.com', '+62 895392823488', 1, 'Pelajar', '1755654633.png', 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `tittle`, `description`) VALUES
(3, '1754982167.png', '2023-01-09', 'Dimas Prassetyo', 'Pemandangan sore hari', 'ini saya berada di pangandaran jawa barat pada tahun 2023'),
(7, '1754982280.png', '2022-11-11', 'Dimas Prassetyo', 'Hero Faforit', 'Ini hero faforit saya aya kalo mau mabar saya gendong sampe imortal');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(3, 'Dimas Prassetyo', 'dimas@gmail.com', 'aaaaaaa', 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `description`, `category`) VALUES
(5, '1755226479.png', 'Web Geleri', 'Web Development', 'Galeri karya digital kreatif multimedia & programming.', 'programming'),
(7, '1755226508.png', 'CRUD (Perpustakaan)', 'Web Development', 'Koleksi proyek inovatif dan prestasi digital.', 'prestasi'),
(10, '1755695395.png', 'Portofolio', 'Web Development', 'Ini portofolio yang saya pernah buat dan saya pelajari, Saya membuatnya menggunakan boostrap dan php\r\n', 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(12, '2025-2026', 'PKL (Praktek Kerja Lapangan)', 'Asal saya Dari Langensari RT2 RW3 Kec: Langensari Kota Banjar', 'Pada periode 2025–2026, saya mengikuti Praktek Kerja Lapangan di PT. Lauwba Techno Indonesia untuk mengasah kemampuan teknis serta memperluas wawasan di dunia industri.\r\n'),
(13, '2023-2025', 'Pelajar SMKN 3 BANJAR', 'Asal saya Dari Langensari RT2 RW3 Kec: Langensari Kota Banjar', 'Pelajar PPLG SMKN 3 Banjar berusia 17 tahun, berasal dari Langensari, RT 02 RW 03, Kecamatan Langensari, Kota Banjar. Memiliki kemampuan dasar dalam pemrograman dan pengembangan web, mencakup HTML, CSS, PHP, dan Laravel. Terbiasa mengerjakan proyek sederhana seperti pembuatan website portofolio dan CRUD.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`) VALUES
(2, 'bi bi-code-slash', 'Programming'),
(3, 'bi bi-tiktok', 'Afiliet'),
(5, 'bi bi-camera', 'Fotografer');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `description`) VALUES
(1, 'HTML', 70, 'Menguasai pembuatan struktur web semantik dengan HTML.'),
(3, 'CSS', 75, 'Terampil mendesain tampilan responsif dengan CSS.'),
(4, 'Laravel', 60, 'Pengalaman pengembangan menggunakan Laravel (60%) ');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(2, 'bi bi-facebook', 'https://www.facebook.com/share/1EXJXE7Eoi/'),
(3, 'bi bi-tiktok', 'https://www.tiktok.com/@dimas.prassetyo?_t=ZS-8ynwUUijn0s&_r=1'),
(5, 'bi bi-whatsapp', 'https://wa.me/0895392823488');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'dimas', 'dimas@gmail.com', '12345678'),
(4, 'Dimas', 'dimas@gmail.com', '$2y$10$vq1wY95uqPPnwdG76uaSUOgpk4JKHVA.807b82IKZAqDUlBkrAYNm'),
(5, 'Dimas', 'dimas@gmail.com', '$2y$10$z.mWSHpYm5TmIIdEl/kyaemh1VxOfFLRqfDMW8KJJJ7CK0ptRxrd2'),
(6, 'dimas', 'dimas@gmail.com', '$2y$10$NZjF92xT9SIkgRZI1q2laODqNtT2q7odpNY9kz8Mmpnp0YNZEPfaq'),
(7, 'dimas', 'dimas@gmail.com', '$2y$10$Ih1s4NOZfCiD7hPQEB3vfuVA8xUz5zXJyfevyYMDv4p5nFTeCGiIa'),
(8, 'Dimas', 'dimas@gmail.com', '$2y$10$AHPm.cweuF0JzMlndA0otelppYKTOu2wRa4bVKALpFHWI.mO0A41O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
