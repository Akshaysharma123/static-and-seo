-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2018 at 07:41 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techphant`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `product_budget` varchar(20) DEFAULT NULL,
  `other_information` text,
  `project_start_date` date DEFAULT NULL,
  `product_urgency` varchar(20) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `attachment` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `contact_person`, `email`, `contact_number`, `product_budget`, `other_information`, `project_start_date`, `product_urgency`, `product`, `attachment`, `created_at`, `updated_at`) VALUES
(1, '4324', 'awa@gmail.com', '32432', '34', 'sadsa', '2018-12-12', 'low', 'WEBAPP', NULL, '2018-12-14 04:23:26', '2018-12-14 04:23:26'),
(2, '4234', 'awa@gmail.com', 'sadsad', NULL, 'dsd', '2018-12-14', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:29:25', '2018-12-14 04:29:25'),
(3, '4234', 'awa@gmail.com', 'sadsad', NULL, 'dsd', '2018-12-14', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:29:34', '2018-12-14 04:29:34'),
(4, '4234', 'awa@gmaildsad.com', 'sadsad', NULL, 'dsd', '2018-12-14', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:32:00', '2018-12-14 04:32:00'),
(5, '44', 'awa@gmail.com', '32423', '43243', 'sadsa', '2018-12-21', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 04:36:42', '2018-12-14 04:36:42'),
(6, '44', 'awa@gmail.com', '32423', '43243', 'sadsa', '2018-12-21', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 04:38:12', '2018-12-14 04:38:12'),
(7, '4324', 'awa@gmail.com', '3424', '3424', 'dsad', '2018-12-19', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:38:31', '2018-12-14 04:38:31'),
(8, 'dsad', 'awa@gmail.com', 'sadsad', '32423', 'dsad', '2018-12-14', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:39:43', '2018-12-14 04:39:43'),
(9, '4234', 'awa@gmail.com', '234234', '23423', 'sadsad', '2018-12-20', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:41:16', '2018-12-14 04:41:16'),
(10, '4234', 'awa@gmail.com', '234234', '23423', 'sadsad', '2018-12-20', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:41:23', '2018-12-14 04:41:23'),
(11, '43234', 'awa@gmail.com', '32423423', '324', 'sdasad', '2018-12-21', 'low', 'WEBAPP', NULL, '2018-12-14 04:44:27', '2018-12-14 04:44:27'),
(12, '3432', 'awa@gmail.com', '4324234', '4234', 'sadsa', '2018-12-07', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:47:43', '2018-12-14 04:47:43'),
(13, '43234', 'awa@gmail.com', 'dsad', '4324', 'sadsad', '2018-12-21', 'low', 'MOBILEAPP', NULL, '2018-12-14 04:50:39', '2018-12-14 04:50:39'),
(14, '3423432', 'awa@gmail.com', '32432', '3432', 'dsad', '2018-12-06', 'low', 'DESSKTOPAPP', '/tmp/phpSDrsam', '2018-12-14 05:08:53', '2018-12-14 05:08:53'),
(15, '3423432', 'awa@gmail.com', '34234234', '34', 'dsad', '2018-12-06', 'low', 'WEBAPP', NULL, '2018-12-14 05:10:01', '2018-12-14 05:10:01'),
(16, 'dsdsa', 'awa@gmail.com', 'dsadsad', '4234', 'sadsa', '2018-12-15', 'low', 'DESSKTOPAPP', '/tmp/phpQKi71t', '2018-12-14 05:10:37', '2018-12-14 05:10:37'),
(17, 'dsdsa', 'awa@gmail.com', 'dsadsad', '4234', 'sadsa', '2018-12-15', 'low', 'DESSKTOPAPP', '/tmp/phpqw6qka', '2018-12-14 05:11:22', '2018-12-14 05:11:22'),
(18, '4324', 'awa@gmail.com', '423432423', '32423', 'asdsad', '2018-11-29', 'low', 'MOBILEAPP', '/tmp/phpoIsTBH', '2018-12-14 05:11:43', '2018-12-14 05:11:43'),
(19, '4234', 'a@gmail.com', '3423432', '423', 'sad', '2018-12-14', 'low', 'DESSKTOPAPP', '/tmp/phpazgATI', '2018-12-14 05:32:31', '2018-12-14 05:32:31'),
(20, '4234', 'a@gmail.com', '3423432', '423', 'sad', '2018-12-14', 'low', 'DESSKTOPAPP', '/tmp/phpmjuTmc', '2018-12-14 05:32:49', '2018-12-14 05:32:49'),
(21, '4234', 'a@gmail.com', '324234', '434', 'dsad', '2019-01-02', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 05:33:29', '2018-12-14 05:33:29'),
(22, '4234', 'a@gmail.com', '4543543', '44', 'dssad', '2018-12-14', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 05:37:21', '2018-12-14 05:37:21'),
(23, '34234', 'a@gmail.com', '3423432', '324', 'sadsad', '2018-12-13', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 05:39:25', '2018-12-14 05:39:25'),
(24, '4234', 'awa@gmail.com', '4234234', '4322', 'sd', '2018-12-21', 'low', 'MOBILEAPP', NULL, '2018-12-14 07:28:21', '2018-12-14 07:28:21'),
(25, 'er', 'dsf@gmail.com', 'rewr', '3', 'sdasa', '2018-12-14', 'low', 'DESSKTOPAPP', '/tmp/phpvDxLgg', '2018-12-14 07:33:31', '2018-12-14 07:33:31'),
(26, '4234', 'dsf@gmail.com', '32423', '4234', 'sad', '2018-11-30', 'low', 'DESSKTOPAPP', NULL, '2018-12-14 07:34:36', '2018-12-14 07:34:36'),
(27, '4234', 'dsf@gmail.com', 'rewrwr', '4323', 'ewqe', '2018-12-06', 'low', 'DESSKTOPAPP', '/tmp/phpfNl6Jl', '2018-12-14 07:42:35', '2018-12-14 07:42:35'),
(28, '4234', 'awa@gmail.com', '23424', '3243', 'sadsad', '2018-12-20', 'low', 'DESSKTOPAPP', '/tmp/phpghCmKS', '2018-12-14 07:43:36', '2018-12-14 07:43:36'),
(29, '4234', 'dsf@gmail.com', '34234', '3432', 'sadsad', '2018-12-12', 'low', 'MOBILEAPP', '/tmp/phpJRc3Le', '2018-12-14 07:45:00', '2018-12-14 07:45:00'),
(30, '4234', 'dsf@gmail.com', '4324324', '3432', 'sadsad', '2018-12-26', 'low', 'MOBILEAPP', '/tmp/phpgQZJm4', '2018-12-14 07:45:38', '2018-12-14 07:45:38'),
(31, '4234', 'dsf@gmail.com', '4324234', '22', 'dsad', '2018-12-14', 'low', 'DESSKTOPAPP', '/tmp/phpMgKBNU', '2018-12-14 08:09:01', '2018-12-14 08:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `send_resumes`
--

CREATE TABLE `send_resumes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `post` varchar(30) DEFAULT NULL,
  `resume` text,
  `total_experience` decimal(10,2) DEFAULT NULL,
  `current_ctc` decimal(10,2) DEFAULT NULL,
  `expected_ctc` decimal(10,2) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_resumes`
--

INSERT INTO `send_resumes` (`id`, `name`, `email`, `post`, `resume`, `total_experience`, `current_ctc`, `expected_ctc`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sfd', 'dsf@gmail.com', 'Software Developer', '/tmp/phpbQsiGU', '31.00', '33.00', '31.00', NULL, '2018-12-14 07:49:21', '2018-12-14 07:49:21'),
(2, 'sfd', 'dsf@gmail.com', 'Software Developer', '/tmp/phpmOmyMt', '31.00', '33.00', '31.00', NULL, '2018-12-14 07:49:59', '2018-12-14 07:49:59'),
(3, 'a', 'awa@gmail.com', 'Software Developer', '/tmp/phpOozMNQ', '1.00', '1.00', '1.00', NULL, '2018-12-14 07:50:16', '2018-12-14 07:50:16'),
(4, 'a', 'awa@gmail.com', 'Software Developer', '/tmp/phpQ08Sa1', '234.00', '22.00', '22.00', NULL, '2018-12-14 08:01:08', '2018-12-14 08:01:08'),
(5, 'sadsa', 'awa@gmail.com', 'Software Developer', '/tmp/phpbpuaqx', '234.00', '22.00', '22.00', NULL, '2018-12-14 08:03:35', '2018-12-14 08:03:35'),
(6, 'sfd', 'dsf@gmail.com', 'Software Developer', '/tmp/phpQxzDUo', '1.00', '1.00', '1.00', NULL, '2018-12-14 08:09:25', '2018-12-14 08:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_resumes`
--
ALTER TABLE `send_resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `send_resumes`
--
ALTER TABLE `send_resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
