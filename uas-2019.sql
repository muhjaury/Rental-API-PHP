-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 05:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_a` int(11) NOT NULL,
  `foreign_id_u` int(11) NOT NULL,
  `ntempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_a`, `foreign_id_u`, `ntempat`, `alamat`, `no_telp`) VALUES
(1, 1, 'Raja Oto', 'Jl. Gunung Bawakaraeng No. 414', '+6281222333444'),
(2, 2, 'Farah Rental', 'Jl. Torpedo III No. 13', '+6281255255255');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_r` int(11) NOT NULL,
  `foreign_id_u` int(11) NOT NULL,
  `nmobil` varchar(255) NOT NULL,
  `fotomobil` varchar(255) DEFAULT NULL,
  `harga` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id_r`, `foreign_id_u`, `nmobil`, `fotomobil`, `harga`, `status`) VALUES
(1, 1, 'Kijang Innova G MT', '', 500000, 'Ada'),
(4, 2, 'Daihatsu Gran Max', 'Dummy', 300000, 'Ada'),
(5, 1, 'Xenia R', '', 500000, 'Ada'),
(6, 1, 'Toyota All New Avanza', '', 325000, 'Ada'),
(7, 1, 'Toyota Fortuner', '', 1124000, 'Ada'),
(8, 2, 'Toyota New Alphard', '', 2352000, 'Ada'),
(9, 2, 'Toyota Ginza', '', 2352000, 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `or_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_u`, `nama`, `email`, `password`, `or_key`) VALUES
(1, 'user1', 'user1@gmail.com', 'user1', 'USJsN3ugnPdMiI6vVCQe7L2z4DFck0Eq'),
(2, 'user2', 'user2@gmail.com', 'user2', 'jd2yQuAEZJPU1MSO6I4HBzamnGDlTvhr'),
(3, 'user3', 'user3@gmail.com', 'user3', 'xt0i5skCrHm31jng6QJByLbFOcoTX8IK'),
(4, 'user4', 'user4@gmail.com', 'user4', NULL),
(5, 'user5', 'user5@gmail.com', 'user5', NULL),
(7, 'user7', 'user7@gmail.com', 'user7', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `foreign_id_u` (`foreign_id_u`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `foreign_id_u` (`foreign_id_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`foreign_id_u`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`foreign_id_u`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
