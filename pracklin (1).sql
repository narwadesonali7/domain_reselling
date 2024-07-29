-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 02:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pracklin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_det`
--

CREATE TABLE `admin_det` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(250) NOT NULL,
  `a_email` varchar(250) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_det`
--

INSERT INTO `admin_det` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'sonali', 'sonali@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `b_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `b_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `b_amt` float(13,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_det`
--

CREATE TABLE `contact_det` (
  `cd_id` int(11) NOT NULL,
  `cd_name` varchar(250) NOT NULL,
  `cd_email` varchar(250) NOT NULL,
  `cd_mobile` varchar(20) NOT NULL,
  `cd_sub` varchar(300) NOT NULL,
  `cd_msg` text NOT NULL,
  `cd_status` int(4) NOT NULL DEFAULT 1,
  `cd_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cd_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_det`
--

INSERT INTO `contact_det` (`cd_id`, `cd_name`, `cd_email`, `cd_mobile`, `cd_sub`, `cd_msg`, `cd_status`, `cd_created_at`, `cd_updated_at`) VALUES
(6, 'sonali mahadev narwade', 'narwadesonali7@gmail.com', '07498364499', 'aaaaa', 'aaaa aaaa aaaa', 2, '2024-06-05 09:37:21', '2024-06-05 09:37:21'),
(7, 'bbbb', 'bbbb@gmail.com', '12345567890', 'bbbbb', 'bbbb bbbb bbbb', 1, '2024-06-05 11:24:33', '2024-06-05 11:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_det`
--

CREATE TABLE `customer_det` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_mobile` varchar(20) NOT NULL,
  `c_email` varchar(250) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `c_address` text NOT NULL,
  `c_status` text NOT NULL DEFAULT '1(active)',
  `c_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `c_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_det`
--

INSERT INTO `customer_det` (`c_id`, `c_name`, `c_mobile`, `c_email`, `c_password`, `c_address`, `c_status`, `c_created_at`, `c_updated_at`) VALUES
(3, 'aaaa', '1234567890', 'aaaa@gmail.com', '12345', 'aaaaaa\r\n                           ', '1(active)', '2024-06-04 11:58:29', '2024-06-04 11:58:29'),
(6, 'bbbb', '1234567890', 'bbbb@gmail.com', '12345', 'bbbbbb\r\n                           ', '1(active)', '2024-06-04 12:04:21', '2024-06-04 12:04:21'),
(7, 'aaaa', '9876543210', 'aaaa@gmail.com', '12345', 'aaaa aaaa aaaaa\r\n                           ', '1(active)', '2024-06-05 09:36:43', '2024-06-05 09:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `d_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `d_name` varchar(250) NOT NULL,
  `d_estimated_value` float(13,2) NOT NULL DEFAULT 0.00,
  `d_age` int(2) NOT NULL DEFAULT 2,
  `d_start_date` date NOT NULL,
  `d_end_date` date NOT NULL,
  `d_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`d_id`, `a_id`, `d_name`, `d_estimated_value`, `d_age`, `d_start_date`, `d_end_date`, `d_created_at`, `d_updated_at`) VALUES
(7, 0, 'aversa.com', 3.00, 2, '2024-06-05', '2024-07-06', '2024-06-05 11:37:06', '2024-06-03 16:45:46'),
(8, 0, 'aversa.com', 10.00, 5, '2024-06-05', '2024-06-13', '2024-06-05 11:36:40', '2024-06-03 16:48:26'),
(9, 0, ' hotgolf.com 	', 12.00, 5, '2024-06-05', '2024-06-30', '2024-06-05 11:36:09', '2024-06-03 16:50:37'),
(10, 0, 'aversa.com', 30.00, 4, '2024-06-04', '2024-06-01', '2024-06-05 11:34:45', '2024-06-03 16:51:26'),
(11, 0, '  rageon.com', 73.00, 2, '2024-06-20', '2024-06-20', '2024-06-05 09:41:44', '2024-06-03 17:16:11'),
(13, 0, '  hotgolf.com 	', 73.00, 2, '2024-06-15', '2024-06-15', '2024-06-05 07:21:42', '2024-06-04 15:28:45'),
(14, 0, 'aversa.com', 4.00, 5, '2024-06-04', '2024-07-06', '2024-06-05 11:54:16', '2024-06-04 15:31:44'),
(15, 0, 'aversa.com', 4.00, 3, '2024-06-05', '2024-06-30', '2024-06-05 07:39:58', '2024-06-05 13:09:58'),
(16, 0, 'aversa.com', 4.00, 3, '2024-06-01', '2024-07-07', '2024-06-05 10:20:25', '2024-06-05 15:50:25'),
(17, 0, 'aversa.com', 4.00, 3, '2024-06-06', '2024-07-07', '2024-06-06 10:57:50', '2024-06-06 16:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `support_det`
--

CREATE TABLE `support_det` (
  `sd_id` int(11) NOT NULL,
  `sd_query` text DEFAULT NULL,
  `sd_sub` text DEFAULT NULL,
  `sd_response` text NOT NULL,
  `sd_status` int(11) DEFAULT 2,
  `sd_created_at` datetime DEFAULT current_timestamp(),
  `sd_upadted_at` datetime DEFAULT current_timestamp(),
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_det`
--

INSERT INTO `support_det` (`sd_id`, `sd_query`, `sd_sub`, `sd_response`, `sd_status`, `sd_created_at`, `sd_upadted_at`, `c_id`) VALUES
(7, 'abcd', 'pqrs', 'okay', 2, '2024-06-06 14:48:11', '2024-06-06 14:48:11', 3),
(8, 'abcd', 'pqrs', 'okay', 1, '2024-06-06 14:53:56', '2024-06-06 14:53:56', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_det`
--
ALTER TABLE `admin_det`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact_det`
--
ALTER TABLE `contact_det`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `customer_det`
--
ALTER TABLE `customer_det`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `support_det`
--
ALTER TABLE `support_det`
  ADD PRIMARY KEY (`sd_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_det`
--
ALTER TABLE `admin_det`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_det`
--
ALTER TABLE `contact_det`
  MODIFY `cd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_det`
--
ALTER TABLE `customer_det`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `support_det`
--
ALTER TABLE `support_det`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `support_det`
--
ALTER TABLE `support_det`
  ADD CONSTRAINT `support_det_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer_det` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
