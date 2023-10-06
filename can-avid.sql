-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 03:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `can-avid`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_07_22_062644_create_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Jovie@gmail.com', '$2y$10$iD5s5WVTTfIN/UT4iZaRRem2puwxFhqoXbRpa/VmwHrJ/IJ1HCGp6', '2023-07-24 17:15:40'),
('Jeiann@gmail.com', '$2y$10$fq8lUzqyzEv3ZqSSv9u/juhMgCoeaTvi1uwTyaHQinl4baKNj6J.y', '2023-07-24 17:40:00'),
('Jordan@gmail.com', '$2y$10$rGK3gz4rD9jPss6v6.4mn.T78bWzdZFJySwCCXn5n6fnPZzN/BzUm', '2023-07-24 21:47:54'),
('Jessa@gmail.com', '$2y$10$JXGv12h7oxUWiCoT25xEAeEDiwucpodcEVFMAamG7P1W92rdjJLSC', '2023-07-24 21:52:09'),
('jordben@gmail.com', '$2y$10$zr1c4Kb/PstfTeSfEyNe.Ol1dKmJU8HPNAB4v6h98cpv3ZvtVUBYW', '2023-07-24 22:33:18'),
('annamae@gmail.com', '$2y$10$4/VON/N/yIqOcrJnqiN8yudRGrYZtCBeDXj.JJngOOLZHXtlGWJCa', '2023-07-24 22:35:23'),
('timmy@gmail.com', '$2y$10$oWvG4DSAbWL8Epe5U5wUg.QVa/xvPdzWz5tWDg35DcdNLwg1Tn5Em', '2023-07-24 22:39:22'),
('timmy@gmail.com', '$2y$10$Lgr9S91AVgnG1lbHw1ki3u86tEBwDSbZxAPS1RqewDfwTjeP54W7O', '2023-07-24 22:41:17'),
('angie@gmail.com', '$2y$10$oKWxfKOhCk/Hidi534RVR.pDp0CwTPYoRkUNAAcaiGfdQVsJmswbe', '2023-07-24 22:43:08'),
('jrod@gmail.com', '$2y$10$tEyY/KRmIVITfJjuTCLrMeFecvVkEw/nBCfFT7y2m5d39.vBcZ3Qq', '2023-07-24 22:48:14'),
('jorge@gmail.com', '$2y$10$WDpr3rh1IDFXDwGCCeELsuwVD4428N.8YZ4ShFp3ADwwFEMhr.AOG', '2023-07-24 22:49:47'),
('AnnNe@gmail.com', '$2y$10$ijOspFzWE0UuoBCx9khagOBId/at41ARJJ9bPTbY3J6ab08ZoxKK2', '2023-07-24 22:59:04'),
('last@gmail.com', '$2y$10$AnSDnk/y.QZXpKsrmQR1luXUZQJwkfizPFo.6HFAUODPkttVpZuxm', '2023-07-24 23:09:00'),
('last@gmail.com', '$2y$10$KkG0gaT9gNlE4UWLNk1GiOaLCFt5iQuXg9iTpgKZXUrig72hRFBXy', '2023-07-24 23:09:56'),
('please@gmail.com', '$2y$10$75e0cLQTs6zo.JllspY6AeJL0PVSJw/.ZcQLKn8ybd5tvH95uApQ6', '2023-07-24 23:15:37'),
('efhj@gmail.com', '$2y$10$Y8X4nMuovUxFUABApTjqteQA4wbttcXZ4./LgfZ82VojcigFymA0W', '2023-07-24 23:22:58'),
('chemuelgodes@gmail.com', '$2y$10$rzwNPatWkugUQ1ZaGTMxz.3.lPQVqF274WvhlUQxvNl3jRaUaSSGm', '2023-07-24 23:25:09'),
('gwapoako@gmail.com', '$2y$10$GCfyo.v3JOW0HJx27njBTuNvwJE7opcYQ2SEHZC0JMddEA.doGm9W', '2023-07-25 00:57:44'),
('chemuelgodes45adaw@gmail.com', '$2y$10$OOZ/t1y46gu8D/BiSRWTlOveyNx8q15MF3kp2daF3j489Stct8dRi', '2023-07-25 16:22:38'),
('try@gmail.com', '$2y$10$uHFoOikmx7NDReJcQLG.Ou8vXdwRLSRjd0SEJIoMwtH.Q.3v22Sh.', '2023-07-25 16:25:10'),
('test@gmail.com', '$2y$10$7ZEMZDs.2ebej50fIrjPs.7SzZB/B.ATthUd7R2mYafnyPrlAla0u', '2023-07-25 20:39:38'),
('test1@gmail.com', '$2y$10$bG8gilebuZh36WXLt6Nil.eKjL4oAKCstQxfPGjLcSw0Q3cm.dpiG', '2023-07-25 21:08:30'),
('test2@gmail.com', '$2y$10$7pyemlCHoRewVBwlSSwmZOcGBMSZDpeGyx49JzgLu.LsWGCgqRG0i', '2023-07-25 21:28:49'),
('test3@gmail.com', '$2y$10$FyGgHbj7lXXaHY3mO5zFeeMfg0hPeyfF/djPXlS..QFloiRFUlCQ2', '2023-07-25 21:30:48'),
('test4@gmail.com', '$2y$10$eZDACuEiZdMqk/BVAhnVkuMuH0Z3DyPnnbPfTR8EvEoh16HuOtzYi', '2023-07-25 21:33:08'),
('test5@gmail.com', '$2y$10$jZ21L.5eQvhIT11MNgzwXuj2DEx8mx3OkF0yBW//1w8sZY6f2baZS', '2023-07-25 21:36:15'),
('test6@gmail.com', '$2y$10$T3kltvXzTlDOhuAS9flePuEa2tggxmm0A64Mo8ZkHVQQPRdjJbrZy', '2023-07-25 21:36:58'),
('therizia@gmail.com', '$2y$10$zOv0.S5iH.QIei.GidzOleY6Jp6z6IgEH1omgcYMxLfZiE1KELKam', '2023-07-26 14:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `email`, `name`, `age`, `gender`, `position`, `department`, `phone_number`, `images`) VALUES
(1, 'chemuelgodes@gmail.com', 'Chemuel', 22, 'Male', 'Master Teacher III', 'Non Teaching Department', 9631198435, ''),
(7, 'Julies@gmail.com', 'Julies', 22, 'Female', 'Teacher I', 'IT', 9631198435, 'pictures/profile_pictures/5n96kf2mUxmlhDlY3qCoVsnVV09YKZOg7685xXQT.jpg'),
(8, 'rog@gmail.com', 'Rog', 22, 'Male', 'Teacher I', 'Finance', 9631198435, 'pictures/profile_pictures/ZIcmqCYte4ZP37w88Sai9CQUfFyaY3e4h3GviUWP.jpg'),
(9, 'chem@gmail.com', 'chem', 21, 'Male', 'Master Teacher III', 'HR', 9631198435, 'pictures/profile_pictures/qKPrlZcKztGNBDUVik4BSHFoC2Z7qHb9kNv5r8Fb.jpg'),
(10, 'jordben@gmail.com', 'Jovie', 21, 'Female', 'Teacher I', 'Finance', 9631198435, 'pictures/profile_pictures/GAmy0D3ElUCrlx6LtEpnGaKxe0AmH2IBa9C1IDHy.jpg'),
(12, 'timmy@gmail.com', 'timmy', 21, 'Female', 'Teacher II', 'IT', 9631198435, 'pictures/profile_pictures/bfba2GNOdG7gtB1JOsGACksbrY7PWmYTvUT583ci.jpg'),
(13, 'angie@gmail.com', 'angie', 21, 'Female', 'Teacher I', 'IT', 9631198435, 'pictures/profile_pictures/hX06iW1eqpabeaTcaODkRTertIln4T1uxqG5h4u4.jpg'),
(14, 'jrod@gmail.com', 'Jovie', 21, 'Female', 'Teacher I', 'IT', 9631198435, 'pictures/profile_pictures/aJL6BTynrB7nV9CMZEQWFQPCBKX6GVEVqOTbbfOp.jpg'),
(17, 'last@gmail.com', 'last', 21, 'Female', '69', 'Finance', 9631198435, 'pictures/profile_pictures/0ra8hbwXWRVDLTtADoLEM21XxocRLqFw9VORk4Xh.jpg'),
(18, 'please@gmail.com', 'please', 21, 'Male', 'Teacher I', 'IT', 9631198435, 'pictures/profile_pictures/mvKF8kPFXFoCYeOeVd7lJpqDO4EMT2TxEcJQDCHF.jpg'),
(19, 'efhj@gmail.com', 'Jovie', 21, 'Female', 'Master Teacher III', 'Finance', 9631198435, 'pictures/profile_pictures/p8Ep9VpdWZxl7sbONZVIHj8FeC3pQBJJsgSqdcqn.jpg'),
(21, 'test@gmail.com', 'test', 20, 'Female', 'Master Teacher III', 'Finance', 9631198435, 'pictures/profile_pictures/FHuz9wXclJBlUxvrD4jX5bWw7k1lhHeHqJXUHG6v.jpg'),
(23, 'test2@gmail.com', 'test2', 21, 'Female', 'Master Teacher III', 'Finance', 9631198435, 'pictures/profile_pictures/O7m46DAwKU1aTmlsl6jQqm5SLkM1tsUxWcAKyOjc.jpg'),
(24, 'test3@gmail.com', 'test3', 21, 'Male', '21', 'Finance', 9631198435, 'pictures/profile_pictures/JogSJbptuXNo08ZGVunznurcKA0aDBRDODvO7pOk.jpg'),
(25, 'test4@gmail.com', 'test4', 21, 'Female', 'Teacher I', 'Finance', 9631198435, 'pictures/profile_pictures/ERoXNJ52Cp3JIMmtwznIbmpXfMA3mqjLdu6vBQ8o.jpg'),
(26, 'test5@gmail.com', 'test5', 21, 'Female', 'Teacher I', 'Finance', 9631198435, 'pictures/profile_pictures/lC1l8nuAgGoaGfkpRIYvFaDsEN1T9G08fcwZOlab.jpg'),
(27, 'test6@gmail.com', 'test6', 21, 'Female', '69', 'HR', 9631198435, 'pictures/profile_pictures/OnjuTl3ODPXN5GHQUAi4IScjJaAT4kgUMSu3o9ob.jpg'),
(28, 'therizia@gmail.com', 'therizia', 21, 'Female', 'Master Teacher III', 'Finance', 9631198435, 'pictures/profile_pictures/dnCEeAA0NEfI61KLo2ivLel20QjoKIuGNL0nI6eh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'faculty',
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chemuel', 'castillo@gmail.com', NULL, 'Admin', '$2y$10$qGJikqbRW6Cls4TZh2vVp.fkMZBYsPMV4saoF.p8kT4tvJGc6Sn0y', NULL, NULL, NULL),
(7, 'Jei Ann', 'bayer@gmail.com', NULL, 'Admin', '$2y$10$RmCQh8.pheqewhXx3U5tpuSmk4HPr4mZB0fKWOqvqCUSO/BT2BhMm', NULL, '2023-07-24 22:11:24', '2023-07-24 22:11:24'),
(8, 'Jovie', 'bendijo@gmail.com', NULL, 'Admin', '$2y$10$3gE6LwkF0b/IniyJjEmc3OsKxyWL4TwN3a56ke4ttXmCLrhSQP8i2', NULL, '2023-07-24 22:14:16', '2023-07-24 22:14:16'),
(9, 'Jordan', 'jorolan@gmail.com', NULL, 'Admin', '$2y$10$LEa4nq8C5WjZoeorDzyfqO65fbql1K.agCme6HO1Lf0eazUCF/NWy', NULL, '2023-07-24 22:16:01', '2023-07-24 22:16:01'),
(10, 'Jovie', 'jordben@gmail.com', NULL, 'Principal', NULL, NULL, '2023-07-24 22:33:23', '2023-07-24 22:33:23'),
(12, 'timmy', 'timmy@gmail.com', NULL, 'Registrar', NULL, NULL, '2023-07-24 22:41:22', '2023-07-24 22:41:22'),
(13, 'angie', 'angie@gmail.com', NULL, 'Registrar', NULL, NULL, '2023-07-24 22:43:13', '2023-07-24 22:43:13'),
(14, 'Jovie', 'jrod@gmail.com', NULL, 'Registrar', NULL, NULL, '2023-07-24 22:48:20', '2023-07-24 22:48:20'),
(17, 'last', 'last@gmail.com', NULL, 'Faculty', NULL, NULL, '2023-07-24 23:10:01', '2023-07-24 23:10:01'),
(18, 'please', 'please@gmail.com', NULL, 'Registrar', NULL, NULL, '2023-07-24 23:15:42', '2023-07-24 23:15:42'),
(19, 'Jovie', 'efhj@gmail.com', NULL, 'Admin', NULL, NULL, '2023-07-24 23:23:03', '2023-07-24 23:23:03'),
(21, 'test', 'test@gmail.com', NULL, 'Faculty', NULL, NULL, '2023-07-25 20:39:45', '2023-07-25 20:39:45'),
(23, 'test2', 'test2@gmail.com', NULL, 'Principal', NULL, NULL, '2023-07-25 21:28:54', '2023-07-25 21:28:54'),
(24, 'test3', 'test3@gmail.com', NULL, 'Faculty', NULL, NULL, '2023-07-25 21:30:54', '2023-07-25 21:30:54'),
(25, 'test4', 'test4@gmail.com', NULL, 'Principal', NULL, NULL, '2023-07-25 21:33:13', '2023-07-25 21:33:13'),
(26, 'test5', 'test5@gmail.com', NULL, 'Principal', NULL, NULL, '2023-07-25 21:36:20', '2023-07-25 21:36:20'),
(27, 'test6', 'test6@gmail.com', NULL, 'Registrar', NULL, NULL, '2023-07-25 21:37:03', '2023-07-25 21:37:03'),
(28, 'therizia', 'therizia@gmail.com', NULL, 'Principal', NULL, NULL, '2023-07-26 14:22:39', '2023-07-26 14:22:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
