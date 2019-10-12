-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 07:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtosc2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dadus`
--

CREATE TABLE `tb_dadus` (
  `id` int(5) NOT NULL,
  `naran` varchar(60) NOT NULL,
  `dm` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `n_estudu` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `no_tlf` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dadus`
--

INSERT INTO `tb_dadus` (`id`, `naran`, `dm`, `sexo`, `n_estudu`, `municipio`, `no_tlf`, `email`) VALUES
(28, 'Elizito dos Santos', '2019-07-13', 'Mane', 'Universitariu', 'Aileu', 676767, 'eti.elizitosantos@gm'),
(43, 'twertwertw fgsg sdfgs', '2019-07-10', 'Mane', 'gsgsdf', 'Aileu', 5345435, 'gdfgsdfgsdfg'),
(44, 'David Gomes de Araujo', '2019-08-05', 'Mane', 'sdgfsdgf  ', 'Aileu', 656453563, 'xbvcbxvb'),
(45, 'Achylis', '2019-07-23', 'Mane', 'Secundario', 'Ainaro', 75767, 'davidebergomes@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`) VALUES
('david', '172522ec1028ab781d9dfd17eaca4427');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dadus`
--
ALTER TABLE `tb_dadus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dadus`
--
ALTER TABLE `tb_dadus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
