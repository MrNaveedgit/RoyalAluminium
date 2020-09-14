-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 08:59 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalaluminium`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluminium_section_details`
--

CREATE TABLE `aluminium_section_details` (
  `id` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `thickness` varchar(30) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluminium_section_details`
--

INSERT INTO `aluminium_section_details` (`id`, `section`, `color`, `thickness`, `price`) VALUES
(4, 'DC26B', 'DULL', '1.2', 300),
(5, 'DC30B', 'DULL', '1.2', 208),
(6, 'DC26BA', 'DULL', '1.2', 271),
(7, 'DC30BA', 'DULL', '1.2', 226),
(8, 'DC26C', 'DULL', '1.2', 271),
(9, 'DC30C', 'DULL', '1.2', 226),
(10, 'DC26F', 'DULL', '1.2', 287),
(11, 'DC30F', 'DULL', '1.2', 250),
(12, 'M26F', 'DULL', '1.2', 223),
(13, 'M30F', 'DULL', '1.2', 200),
(14, 'M23', 'DULL', '1.2', 121),
(15, 'M23A', 'DULL', '1.2', 132),
(16, 'M24', 'DULL', '1.2', 139),
(17, 'M24A', 'DULL', '1.2', 136),
(18, 'M26', 'DULL', '1.2', 199),
(19, 'M28', 'DULL', '1.2', 144),
(20, 'M28A', 'DULL', '1.2', 170),
(21, 'M30', 'DULL', '1.2', 777),
(22, 'D29', 'DULL', '1.2', 95),
(23, 'DC26B', 'BROWN', '1.2', 252),
(24, 'DC30B', 'BROWN', '1.2', 214),
(25, 'DC26BA', 'BROWN', '1.2', 277),
(26, 'DC30BA', 'BROWN', '1.2', 231),
(27, 'DC26C', 'BROWN', '1.2', 271),
(28, 'DC30C', 'BROWN', '1.2', 226),
(29, 'DC26F', 'BROWN', '1.2', 297),
(30, 'DC30F', 'BROWN', '1.2', 258),
(31, 'M26F', 'BROWN', '1.2', 234),
(32, 'M30F', 'BROWN', '1.2', 209),
(33, 'M23', 'BROWN', '1.2', 129),
(34, 'M23A', 'BROWN', '1.2', 141),
(35, 'M24', 'BROWN', '1.2', 145),
(36, 'M24A', 'BROWN', '1.2', 141),
(37, 'M26', 'BROWN', '1.2', 203),
(38, 'M28', 'BROWN', '1.2', 149),
(39, 'M28A', 'BROWN', '1.2', 157),
(40, 'M30', 'BROWN', '1.2', 183),
(41, 'DC26B', 'SAHARA', '1.2', 265),
(42, 'DC30B', 'SAHARA', '1.2', 225),
(43, 'DC26BA', 'SAHARA', '1.2', 291),
(44, 'DC30BA', 'SAHARA', '1.2', 243),
(45, 'DC26C', 'SAHARA', '1.2', 291),
(46, 'DC30C', 'SAHARA', '1.2', 243),
(47, 'DC26F', 'SAHARA', '1.2', 312),
(48, 'DC30F', 'SAHARA', '1.2', 271),
(49, 'M26F', 'SAHARA', '1.2', 246),
(50, 'M30F', 'SAHARA', '1.2', 219),
(51, 'M23', 'SAHARA', '1.2', 135),
(52, 'M23A', 'SAHARA', '1.2', 148),
(53, 'M24', 'SAHARA', '1.2', 152),
(54, 'M24A', 'SAHARA', '1.2', 148),
(55, 'M26', 'SAHARA', '1.2', 213),
(56, 'M28', 'SAHARA', '1.2', 156),
(57, 'M28A', 'SAHARA', '1.2', 165),
(58, 'M30', 'SAHARA', '1.2', 192),
(59, 'D10', 'DULL', '1.2', 173),
(60, 'D10', 'DULL', '2.0', 279),
(61, 'D10A', 'DULL', '1.2', 225),
(62, 'D10A', 'DULL', '2.0', 308),
(63, 'D11', 'DULL', '1.2', 83),
(64, 'D14', 'DULL', '1.2', 117),
(65, 'D15', 'DULL', '1.2', 85),
(66, 'D16', 'DULL', '1.2', 205),
(67, 'D16', 'DULL', '1.6', 239),
(68, 'D16', 'DULL', '2.0', 293),
(69, 'D18', 'DULL', '1.2', 222),
(70, 'D18', 'DULL', '2.0', 352),
(71, 'D20', 'DULL', '1.2', 245),
(72, 'D29', 'DULL', '1.2', 95),
(73, 'D29B', 'DULL', '1.2', 64),
(74, 'D29D', 'DULL', '1.2', 95),
(75, 'D31', 'DULL', '1.2', 90),
(76, 'D32', 'DULL', '1.2', 39),
(77, 'D32A', 'DULL', '1.2', 64),
(78, 'D33', 'DULL', '1.6', 217),
(79, 'D33', 'DULL', '2.0', 327);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `contact`, `gender`, `description`) VALUES
(2, 'Naveed', 'Lalamsua', '03316316054', 0, ''),
(3, 'Faisal azeem', 'Sadcal', '03346933451', 0, ''),
(4, 'Muhammad Saim', 'Lalamusa', '03310049478', 1, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `glass_section_details`
--

CREATE TABLE `glass_section_details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `thickness` varchar(30) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glass_section_details`
--

INSERT INTO `glass_section_details` (`id`, `name`, `thickness`, `price`) VALUES
(3, 'SIMPLE', '5.0', 100),
(4, 'GREEN SIMPLE', '5.0', 110),
(5, 'GREEN MERCURY', '5.0', 125),
(6, 'BROWN SIMPLE', '5.0', 120),
(7, 'BROWN MERCURY', '5.0', 125),
(8, 'BLUE SIMPLE', '5.0', 120),
(9, 'BLUE MERCURY', '5.0', 135),
(10, 'GREY SIMPLE', '5.0', 115),
(11, 'GREY MERCURY', '5.0', 145),
(12, 'FROSTED', '5.0', 120);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `pannel` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `thickness` double NOT NULL,
  `color` varchar(255) NOT NULL,
  `area` float NOT NULL,
  `amountPer` double NOT NULL,
  `amount` double NOT NULL,
  `glassID` varchar(30) NOT NULL,
  `hardwarePrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `cid`, `type`, `pannel`, `width`, `height`, `section`, `thickness`, `color`, `area`, `amountPer`, `amount`, `glassID`, `hardwarePrice`) VALUES
(12, 2, 1, 2, 72, 60, '1', 1.2, 'DULL', 30, 609.6, 18288, '3', 120),
(13, 2, 3, 2, 72, 60, '1', 1.2, 'DULL', 30, 4, 120, '3', 120);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `contact`, `status`, `type`) VALUES
(1, 'qaiser', '1234', '03338471570', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluminium_section_details`
--
ALTER TABLE `aluminium_section_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glass_section_details`
--
ALTER TABLE `glass_section_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
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
-- AUTO_INCREMENT for table `aluminium_section_details`
--
ALTER TABLE `aluminium_section_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `glass_section_details`
--
ALTER TABLE `glass_section_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
