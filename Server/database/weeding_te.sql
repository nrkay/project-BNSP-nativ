-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 06:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weeding_te`
--

-- --------------------------------------------------------

--
-- Table structure for table `brides`
--

CREATE TABLE `brides` (
  `id` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Partner` varchar(100) NOT NULL,
  `Date` date DEFAULT NULL,
  `Address` varchar(1000) NOT NULL,
  `Produk_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brides`
--

INSERT INTO `brides` (`id`, `Name`, `Partner`, `Date`, `Address`, `Produk_id`) VALUES
(12, 'Nur Khairiyah', 'Mr Perfect', '0000-00-00', 'Rindam', 3),
(13, 'Nur Azizah', 'Mr X', '2023-08-17', 'Jalan Raya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(11, 'Wedding Arch Fabric Drape _ Georgette Draping Fabric for - Etsy.jpg'),
(10, '30+ Excellent Fall Wedding Ideas without Pumpkins.jpg'),
(6, 'Rachel and Sagar, Mahabaleshwar.webp'),
(7, 'Pretty in Pink Theme Party.jpg'),
(8, 'How to make a Pink Wedding feel Cool Girl Chic.jpg'),
(9, 'Windows on the Water at Frogbridge Wedding Shannon and Chris.jpg'),
(12, 'Rose Gold Wedding Theme Wedding Ideas By Colour CHWV.jpg'),
(14, 'Modern wedding table in different shades of pink Imogen Eve Photography.jpg'),
(15, 'An Enchanting Wedding At Calamigos Ranch - Feathered Arrow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `name`, `harga`) VALUES
(1, 'Basic', 3000000),
(2, 'Intermadiate', 4000000),
(3, 'Premium', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `profil_company`
--

CREATE TABLE `profil_company` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `profit` varchar(1000) NOT NULL,
  `information` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil_company`
--

INSERT INTO `profil_company` (`id`, `title`, `profit`, `information`) VALUES
(1, 'Information About Us', '\"Realizing Dreams, One Wedding at a Time. Let Us Craft Your Perfect Moment with Elegance and Joy.\"', 'Khairiyah\'s Wedding Organizer: Turning Dreams into Unforgettable Moments. From concept to execution, we create your ideal wedding experience. Let us make your day truly special.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Nur Khairiyah', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brides`
--
ALTER TABLE `brides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Produk_id` (`Produk_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_company`
--
ALTER TABLE `profil_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brides`
--
ALTER TABLE `brides`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil_company`
--
ALTER TABLE `profil_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brides`
--
ALTER TABLE `brides`
  ADD CONSTRAINT `brides_ibfk_1` FOREIGN KEY (`Produk_id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
