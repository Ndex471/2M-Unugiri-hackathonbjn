-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 05:54 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_bjc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bjc_user`
--

CREATE TABLE `bjc_user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bjc_user`
--

INSERT INTO `bjc_user` (`id`, `username`, `nama`, `email`, `jenis_kelamin`, `gambar`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'adminsuper', 'Admin Super', 'sisadaadm19@gmail.com', 'Laki-Laki', 'defaullt.jpg', '$2y$10$TAt8D4KuiBEA12DAJGS9Y.5o2Dhcri4B/QmWZ.iXMGQURLuwOZPIC', 1, 1, '1571059932'),
(2, 'admin', 'Admin', 'joko.riyadi97@gmail.com', 'Perempuan', 'default.jpg', '$2y$10$7ts46nrNe5Ggft06KBwjSuzziscyw1YhEwG.CzAZ57q1fmWKrHxm.', 2, 1, '1571059932'),
(3, 'jokorey', 'joko riyadi', 'joko.riyadi9@gmail.com', 'Laki-Laki', 'default.jpg', '$2y$10$fGRsejnw4/hy8m5axgpme..zwCMSAZDyzuRmgiuK.8cd8ioYA38A2', 1, 1, '1571059932'),
(6, 'riya', 'riya', 'riya@gmail.com', 'Perempuan', 'default.jpg', '$2y$10$.Bd.4zGaDs6Xwv8UyS2TGe.XrqYSdA.QWN/oGcAWRgq14PUq825oi', 1, 1, '1571060266');

-- --------------------------------------------------------

--
-- Table structure for table `bjc_user_role`
--

CREATE TABLE `bjc_user_role` (
  `id` int(100) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bjc_user_role`
--

INSERT INTO `bjc_user_role` (`id`, `role`) VALUES
(1, 'admin Super'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bjc_user_token`
--

CREATE TABLE `bjc_user_token` (
  `id` int(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bjc_user`
--
ALTER TABLE `bjc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bjc_user_role`
--
ALTER TABLE `bjc_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bjc_user_token`
--
ALTER TABLE `bjc_user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bjc_user`
--
ALTER TABLE `bjc_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bjc_user_role`
--
ALTER TABLE `bjc_user_role`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bjc_user_token`
--
ALTER TABLE `bjc_user_token`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
