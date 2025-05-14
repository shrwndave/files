-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 09:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leyte_tdestination`
--

-- --------------------------------------------------------

--
-- Table structure for table `brgy_tb`
--

CREATE TABLE `brgy_tb` (
  `brgy_id` int(11) NOT NULL,
  `brgy_name` text NOT NULL,
  `brgy_mncp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_tb`
--

INSERT INTO `brgy_tb` (`brgy_id`, `brgy_name`, `brgy_mncp_id`) VALUES
(1, 'Marasbaras', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `cont_id` int(11) NOT NULL,
  `cont_wlcm_heading` varchar(50) NOT NULL,
  `cont_wlcm_msg` varchar(50) NOT NULL,
  `cont_sec_heading` varchar(50) NOT NULL,
  `cont_address` varchar(100) NOT NULL,
  `cont_num` bigint(13) NOT NULL,
  `cont_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`cont_id`, `cont_wlcm_heading`, `cont_wlcm_msg`, `cont_sec_heading`, `cont_address`, `cont_num`, `cont_email`) VALUES
(1, 'weerqre', 'weeqeq', 'eeqeqwe', 'qeqeqeqeq', 12123131, 'wdasdadadasd');

-- --------------------------------------------------------

--
-- Table structure for table `dest_tb`
--

CREATE TABLE `dest_tb` (
  `dest_id` int(11) NOT NULL,
  `dest_brgy_id` int(11) NOT NULL,
  `dest_name` text NOT NULL,
  `dest_description` text NOT NULL,
  `dest_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dest_tb`
--

INSERT INTO `dest_tb` (`dest_id`, `dest_brgy_id`, `dest_name`, `dest_description`, `dest_logo`) VALUES
(3, 1, 'eifel', '....', 'Screenshot 2024-09-20 113811.png');

-- --------------------------------------------------------

--
-- Table structure for table `feed_tb`
--

CREATE TABLE `feed_tb` (
  `fb_id` int(11) NOT NULL,
  `fb_name` text NOT NULL,
  `fb_user_id` int(11) NOT NULL,
  `fb_description` text NOT NULL,
  `fb_res_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `img_tb`
--

CREATE TABLE `img_tb` (
  `image_id` int(11) NOT NULL,
  `image_dest_id` int(11) NOT NULL,
  `image_img` int(11) NOT NULL,
  `image_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mncp_tb`
--

CREATE TABLE `mncp_tb` (
  `mncp_id` int(11) NOT NULL,
  `mncp_prov_id` int(11) NOT NULL,
  `mncp_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mncp_tb`
--

INSERT INTO `mncp_tb` (`mncp_id`, `mncp_prov_id`, `mncp_name`) VALUES
(1, 3, 'Tacloban ');

-- --------------------------------------------------------

--
-- Table structure for table `pack_tb`
--

CREATE TABLE `pack_tb` (
  `pack_id` int(11) NOT NULL,
  `pack_name` text NOT NULL,
  `pack_price` int(11) NOT NULL,
  `pack_description` text NOT NULL,
  `pack_dest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_tb`
--

CREATE TABLE `promo_tb` (
  `promo_id` int(11) NOT NULL,
  `promo_name` text NOT NULL,
  `promo_description` text NOT NULL,
  `promo_pack_id` int(11) NOT NULL,
  `promo_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prov_tb`
--

CREATE TABLE `prov_tb` (
  `prov_id` int(11) NOT NULL,
  `prov_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prov_tb`
--

INSERT INTO `prov_tb` (`prov_id`, `prov_name`) VALUES
(3, 'Leyte'),
(4, ''),
(5, 'Leyte'),
(6, 'Leyte'),
(7, 'Leyte'),
(8, 'Leyte'),
(9, 'Leyte'),
(10, 'Leyte'),
(11, 'Leyte'),
(12, 'Leyte'),
(13, 'Leyte'),
(14, 'Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_tb`
--

CREATE TABLE `reserve_tb` (
  `res_id` int(11) NOT NULL,
  `res-date` date NOT NULL,
  `res_time` time(6) NOT NULL,
  `res_prom_id` int(11) NOT NULL,
  `res_status` int(100) NOT NULL,
  `res_user_id` int(11) NOT NULL,
  `res_remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_mname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_type` text NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_fname`, `user_mname`, `user_lname`, `user_type`, `user_username`, `user_password`) VALUES
(1, 'Sherwin Dave', 'Belleza', 'Parado', 'admin', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brgy_tb`
--
ALTER TABLE `brgy_tb`
  ADD PRIMARY KEY (`brgy_id`),
  ADD KEY `brgy_mncp_id` (`brgy_mncp_id`);

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `dest_tb`
--
ALTER TABLE `dest_tb`
  ADD PRIMARY KEY (`dest_id`),
  ADD KEY `dest_brgy_id` (`dest_brgy_id`);

--
-- Indexes for table `feed_tb`
--
ALTER TABLE `feed_tb`
  ADD PRIMARY KEY (`fb_id`),
  ADD KEY `fb_res_id` (`fb_res_id`),
  ADD KEY `fb_user_id` (`fb_user_id`);

--
-- Indexes for table `img_tb`
--
ALTER TABLE `img_tb`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `image_dest_id` (`image_dest_id`) USING BTREE;

--
-- Indexes for table `mncp_tb`
--
ALTER TABLE `mncp_tb`
  ADD PRIMARY KEY (`mncp_id`),
  ADD KEY `mncp_prov_id` (`mncp_prov_id`);

--
-- Indexes for table `pack_tb`
--
ALTER TABLE `pack_tb`
  ADD PRIMARY KEY (`pack_id`),
  ADD KEY `pack_dest_id` (`pack_dest_id`) USING BTREE;

--
-- Indexes for table `promo_tb`
--
ALTER TABLE `promo_tb`
  ADD PRIMARY KEY (`promo_id`),
  ADD KEY `promo_pack_id` (`promo_pack_id`);

--
-- Indexes for table `prov_tb`
--
ALTER TABLE `prov_tb`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `reserve_tb`
--
ALTER TABLE `reserve_tb`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_prom_id` (`res_prom_id`),
  ADD KEY `res_user_id` (`res_user_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brgy_tb`
--
ALTER TABLE `brgy_tb`
  MODIFY `brgy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dest_tb`
--
ALTER TABLE `dest_tb`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feed_tb`
--
ALTER TABLE `feed_tb`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_tb`
--
ALTER TABLE `img_tb`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mncp_tb`
--
ALTER TABLE `mncp_tb`
  MODIFY `mncp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pack_tb`
--
ALTER TABLE `pack_tb`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_tb`
--
ALTER TABLE `promo_tb`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prov_tb`
--
ALTER TABLE `prov_tb`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reserve_tb`
--
ALTER TABLE `reserve_tb`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brgy_tb`
--
ALTER TABLE `brgy_tb`
  ADD CONSTRAINT `brgy_tb_ibfk_1` FOREIGN KEY (`brgy_mncp_id`) REFERENCES `mncp_tb` (`mncp_id`);

--
-- Constraints for table `dest_tb`
--
ALTER TABLE `dest_tb`
  ADD CONSTRAINT `dest_tb_ibfk_1` FOREIGN KEY (`dest_brgy_id`) REFERENCES `brgy_tb` (`brgy_id`);

--
-- Constraints for table `feed_tb`
--
ALTER TABLE `feed_tb`
  ADD CONSTRAINT `feed_tb_ibfk_1` FOREIGN KEY (`fb_res_id`) REFERENCES `reserve_tb` (`res_id`);

--
-- Constraints for table `img_tb`
--
ALTER TABLE `img_tb`
  ADD CONSTRAINT `img_tb_ibfk_1` FOREIGN KEY (`image_dest_id`) REFERENCES `dest_tb` (`dest_id`);

--
-- Constraints for table `mncp_tb`
--
ALTER TABLE `mncp_tb`
  ADD CONSTRAINT `mncp_tb_ibfk_1` FOREIGN KEY (`mncp_prov_id`) REFERENCES `prov_tb` (`prov_id`);

--
-- Constraints for table `pack_tb`
--
ALTER TABLE `pack_tb`
  ADD CONSTRAINT `pack_tb_ibfk_1` FOREIGN KEY (`pack_dest_id`) REFERENCES `dest_tb` (`dest_id`);

--
-- Constraints for table `promo_tb`
--
ALTER TABLE `promo_tb`
  ADD CONSTRAINT `promo_tb_ibfk_1` FOREIGN KEY (`promo_pack_id`) REFERENCES `pack_tb` (`pack_id`);

--
-- Constraints for table `reserve_tb`
--
ALTER TABLE `reserve_tb`
  ADD CONSTRAINT `reserve_tb_ibfk_1` FOREIGN KEY (`res_prom_id`) REFERENCES `promo_tb` (`promo_id`),
  ADD CONSTRAINT `reserve_tb_ibfk_2` FOREIGN KEY (`res_user_id`) REFERENCES `user_tb` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
