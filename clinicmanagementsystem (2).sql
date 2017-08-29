-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 06:39 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` int(11) NOT NULL,
  `barangay_number` int(11) NOT NULL,
  `barangay_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `barangay_number`, `barangay_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Em\'s Bario', '2017-06-30 00:45:00', NULL),
(2, 2, 'Em\'s Bario (South)', '2017-06-30 00:45:00', NULL),
(3, 3, 'Em\'s Bario (East)', '2017-06-30 00:45:00', NULL),
(4, 4, 'Sagpon', '2017-06-30 00:45:00', NULL),
(5, 5, 'Sagmin', '2017-06-30 00:45:00', NULL),
(6, 6, 'Bañadero', '2017-06-30 00:45:00', NULL),
(7, 7, 'Baño', '2017-06-30 00:45:00', NULL),
(8, 8, 'Bagumbyan', '2017-06-30 00:45:00', NULL),
(9, 9, 'Pinaric', '2017-06-30 00:45:00', NULL),
(10, 10, 'Cabugao', '2017-06-30 00:45:00', NULL),
(11, 11, 'Maoyod', '2017-06-30 00:45:00', NULL),
(12, 12, 'Tula-Tula', '2017-06-30 00:45:00', NULL),
(13, 13, 'Ilawod West', '2017-06-30 00:45:00', NULL),
(14, 14, 'Ilawod', '2017-06-30 00:45:00', NULL),
(15, 15, 'Ilawod (East)', '2017-06-30 00:45:00', NULL),
(16, 16, 'Kawit East Washington', '2017-06-30 00:45:00', NULL),
(17, 17, 'Rizal St., Ilawod', '2017-06-30 00:45:00', NULL),
(18, 18, 'Cabagñan (West)', '2017-06-30 00:45:00', NULL),
(19, 19, 'Cabagñan', '2017-06-30 00:45:00', NULL),
(20, 20, 'Cabagñan (East)', '2017-06-30 00:45:00', NULL),
(21, 21, 'Binanuahan West', '2017-06-30 00:45:00', NULL),
(22, 22, 'Binanuahan East', '2017-06-30 00:45:00', NULL),
(23, 23, 'Imperial Court Subd.', '2017-06-30 00:45:00', NULL),
(24, 24, 'Rizal Street', '2017-06-30 00:45:00', NULL),
(25, 25, 'Lapu-Lapu', '2017-06-30 00:45:00', NULL),
(26, 26, 'Dinagaan', '2017-06-30 00:45:00', NULL),
(27, 27, 'Victory Village South', '2017-06-30 00:45:00', NULL),
(28, 28, 'Victory Village North', '2017-06-30 00:45:00', NULL),
(29, 29, 'Sabang', '2017-06-30 00:45:00', NULL),
(30, 30, 'Pigcale', '2017-06-30 00:45:00', NULL),
(31, 31, 'Centro Baybay', '2017-06-30 00:45:00', NULL),
(32, 32, 'San Roque', '2017-06-30 00:45:00', NULL),
(33, 33, 'Peñaranda', '2017-06-30 00:45:00', NULL),
(34, 34, 'Oro Site', '2017-06-30 00:45:00', NULL),
(35, 35, 'Tinago', '2017-06-30 00:45:00', NULL),
(36, 36, 'Kapantawan', '2017-06-30 00:45:00', NULL),
(37, 37, 'Bitano', '2017-06-30 00:45:00', NULL),
(38, 38, 'Gogon', '2017-06-30 00:45:00', NULL),
(39, 39, 'Bonot', '2017-06-30 00:45:00', NULL),
(40, 40, 'Cruzada', '2017-06-30 00:45:00', NULL),
(41, 41, 'Bogtong', '2017-06-30 00:45:00', NULL),
(42, 42, 'Rawis', '2017-06-30 00:45:00', NULL),
(43, 43, 'Tamaoyan', '2017-06-30 00:45:00', NULL),
(44, 44, 'Pawa', '2017-06-30 00:45:00', NULL),
(45, 45, 'Dita', '2017-06-30 00:45:00', NULL),
(46, 46, 'San Joaquin', '2017-06-30 00:45:00', NULL),
(47, 47, 'Arimbay', '2017-06-30 00:45:00', NULL),
(48, 48, 'Bagong Abre', '2017-06-30 00:45:00', NULL),
(49, 49, 'Bigaa', '2017-06-30 00:45:00', NULL),
(50, 50, 'Padang', '2017-06-30 00:45:00', NULL),
(51, 51, 'Buyuan', '2017-06-30 00:45:00', NULL),
(52, 52, 'Matanag', '2017-06-30 00:45:00', NULL),
(53, 53, 'Bogna', '2017-06-30 00:45:00', NULL),
(54, 54, 'Mabinit', '2017-06-30 00:45:00', NULL),
(55, 55, 'Estanza', '2017-06-30 00:45:00', NULL),
(56, 56, 'Taysan', '2017-06-30 00:45:00', NULL),
(57, 57, 'Dapdap', '2017-06-30 00:45:00', NULL),
(58, 58, 'Buraguis', '2017-06-30 00:45:00', NULL),
(59, 59, 'Puro', '2017-06-30 00:45:00', NULL),
(60, 60, 'Lamba', '2017-06-30 00:45:00', NULL),
(61, 61, 'Maslog', '2017-06-30 00:45:00', NULL),
(62, 62, 'Homapon', '2017-06-30 00:45:00', NULL),
(63, 63, 'Mariawa', '2017-06-30 00:45:00', NULL),
(64, 64, 'Bagacay', '2017-06-30 00:45:00', NULL),
(65, 65, 'Imalnod', '2017-06-30 00:45:00', NULL),
(66, 66, 'Banquerohan', '2017-06-30 00:45:00', NULL),
(67, 67, 'Bariis', '2017-06-30 00:45:00', NULL),
(68, 68, 'San Francisco', '2017-06-30 00:45:00', NULL),
(69, 69, 'Buenavista', '2017-06-30 00:45:00', NULL),
(70, 70, 'Cagbacong', '2017-06-30 00:45:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors_affiliations`
--

CREATE TABLE `doctors_affiliations` (
  `user_id` int(10) DEFAULT NULL,
  `affiliation_from` time DEFAULT NULL,
  `affiliation_to` time DEFAULT NULL,
  `affiliation_days` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `icon`, `name`, `created_at`, `updated_at`) VALUES
(1, '/assets/custom/img/roles/administrator.png', 'Administrator', '2017-06-30 01:50:06', NULL),
(2, '/assets/custom/img/roles/doctor.png', 'Doctor', '2017-06-30 01:50:06', NULL),
(3, '/assets/custom/img/roles/patient.png', 'Patient', '2017-06-30 01:50:06', NULL),
(4, '/assets/custom/img/roles/nurse.png', 'Nurse', '2017-06-30 01:50:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ext` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `license_number` int(25) DEFAULT NULL,
  `civil_status` enum('Single','Married','Separated','Divorced','Widowed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Single',
  `contact_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `barangay_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `email`, `first_name`, `middle_name`, `last_name`, `ext`, `job_title`, `license_number`, `civil_status`, `contact_number`, `birth_date`, `gender`, `barangay_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'charlesmarnielimpo@gmail.com', 'Charles Marnie', 'Barba', 'Limpo', NULL, NULL, NULL, 'Single', '0936-799-5285', '2017-08-01', 'Male', 18, '2017-07-03 22:10:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_affiliations`
--
ALTER TABLE `doctors_affiliations`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors_affiliations`
--
ALTER TABLE `doctors_affiliations`
  ADD CONSTRAINT `doctors_affiliations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
