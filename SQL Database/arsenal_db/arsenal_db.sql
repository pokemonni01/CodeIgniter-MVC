-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 02:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsenal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` varchar(6) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `position` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `lastname`, `position`) VALUES
('ars001', 'Mathieu', 'Debuchy', 'DF'),
('ars002', 'Kieran', 'Gibbs', 'DF'),
('ars003', 'Alexis', 'Sánchez', 'FW'),
('ars004', 'Laurent', 'Koscielny', 'DF'),
('ars005', 'Aaron', 'Ramsey', 'MF'),
('ars006', 'Lucas', 'Pérez', 'FW'),
('ars007', 'Mesut', 'Özil', 'MF'),
('ars008', 'Olivier', 'Giroud', 'FW'),
('ars009', 'David', 'Ospina', 'GK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
