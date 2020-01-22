-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 08:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krstenja`
--

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

CREATE TABLE `raspored` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `telefon` int(10) NOT NULL,
  `mesto_krstenja` varchar(30) NOT NULL,
  `adresa_krstenja` varchar(30) NOT NULL,
  `datum_krstenja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raspored`
--

INSERT INTO `raspored` (`id`, `ime`, `prezime`, `telefon`, `mesto_krstenja`, `adresa_krstenja`, `datum_krstenja`) VALUES
(3, 'Milan', 'Bozic', 222222, 'Korenita', 'Mileticeva', '2019-06-12'),
(4, 'Miroslav ', 'Vrhovac', 43343443, 'Korenita', 'Pavla Simica', '2019-01-24'),
(5, 'Petar ', 'Petrovic', 43353, 'Korenita', 'Pavla Petrovica', '2019-06-12'),
(6, 'Petar ', 'Jelic', 33333, 'Korenita', 'Mileticeva', '2019-06-12'),
(7, 'Miroslav ', 'Petrovic', 3334332, 'Korenita', 'Fruskogorska', '2019-06-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raspored`
--
ALTER TABLE `raspored`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raspored`
--
ALTER TABLE `raspored`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
