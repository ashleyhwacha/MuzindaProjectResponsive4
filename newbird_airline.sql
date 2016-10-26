-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 05:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newbird_airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Title` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TelephoneNumber` varchar(50) NOT NULL,
  `CellNumber` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Title`, `FirstName`, `Surname`, `Email`, `TelephoneNumber`, `CellNumber`, `Subject`, `Message`) VALUES
('Mr', 'asddd', 'asdf', 'assa@example.com', 'dancaj', 'kacs', 'akc asc k', 'adscknadcd'),
('Mr', 'asdkwc', 'jkjvcdf', 'fjkk@example.com', 'adfdsfef', 'erouuuuuuuuuuuu', 'ecfheehn', 'ndfvdfjkhvvfde'),
('Mr', 'csk', 'sddsc ', 'assa@example.com', 'k bhkik', 'kwfd', 'jkewwwwwwwwwww', 'k fwerfffffffffw'),
('Mr', 'ASAD', 'adsasdf', 'asada@john.com', '3254325', '342523453425', 'tree', 'grthrtgh');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `Detail_id` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Date_Of_Birth` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Meal` varchar(50) NOT NULL,
  `Special` varchar(50) NOT NULL,
  `Document` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Document_Number` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Payment_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`Detail_id`, `Title`, `First_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Meal`, `Special`, `Document`, `Nationality`, `Document_Number`, `Phone_Number`, `Email`, `Payment_Type`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'Mr', 'qetyweytu', 'ghdfhjdsgf', '12/03/92', 'male', 'Non-Vegan', 'Non', 'ETD', 'African', '4', '00498488', 'sdsbsiu@example.com', ''),
('', 'Mr', 'aSDASD', 'DFdfsv', '09/02/2016', 'male', 'Vegan', 'Non', 'ETD', 'Asian', '3', '908989098', 'asd@johny.com', 'Mobile Money'),
('', 'Mr', 'aSDASD', 'DFdfsv', '09/02/2016', 'male', 'Vegan', 'Non', 'ETD', 'Asian', '3', '908989098', 'asd@johny.com', 'Mobile Money'),
('', 'Mr', 'adsa', 'dsaasdf', '19/03/2006', 'male', 'Non-Vegan', 'Non', 'ETD', 'Australian', '2', '897021308724', 'aas@john.com', 'Male'),
('', 'Mr', '', '', '', 'male', 'Vegan', 'Blind Passenger', 'Passport', 'African', '', '', '', 'Master Card'),
('', 'Mr', '', '', '', 'male', 'Vegan', 'Blind Passenger', 'Passport', 'African', '', '', '', 'Mobile Money'),
('', 'Mr', '', '', '', 'male', 'Vegan', 'Blind Passenger', 'Passport', 'African', '', '', '', 'Mobile Money'),
('', 'Mr', 'agsdfgas', 'asdghg', '12/04/93', 'male', 'Vegan', 'Blind Passenger', 'Passport', 'American', '2', '56425632e4', 'asaghgh@gmail.com', 'Mobile Money');

-- --------------------------------------------------------

--
-- Table structure for table `round_trip`
--

CREATE TABLE `round_trip` (
  `id` int(11) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `departure date` date NOT NULL,
  `Return date` date NOT NULL,
  `class` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round_trip`
--

INSERT INTO `round_trip` (`id`, `departure`, `arrival`, `departure date`, `Return date`, `class`, `price`) VALUES
(1, 'Harare', 'Masvingo', '2016-10-03', '2016-11-06', 'Economy', '$7000'),
(2, 'Harare', 'Masvingo', '2016-10-03', '2016-11-06', 'Business', '$7000'),
(3, 'Harare', 'Pamushana', '2016-11-04', '2016-11-12', 'Economy', '$3000'),
(4, 'Harare', 'Pamushana', '2016-11-04', '2016-11-12', 'Business', '$3000'),
(5, 'Harare', 'Bulawayo', '2016-10-01', '2016-11-05', 'Economy', '$5000'),
(6, 'Harare', 'Bulawayo', '2016-10-01', '2016-11-05', 'Business', '$5000'),
(7, 'Masvingo', 'Harare', '2016-10-03', '2016-11-11', 'Economy', '$8000'),
(8, 'Masvingo', 'Pamushana', '2016-11-03', '2016-11-23', 'Economy', '$7500'),
(9, 'Masvingo', 'Pamushana', '2016-11-03', '2016-11-23', 'Business', '$7500'),
(10, 'Masvingo', 'Bulawayo', '2016-11-05', '2016-11-27', 'Economy', '$3300'),
(11, 'Masvingo', 'Bulawayo', '2016-11-05', '2016-11-27', 'Business', '$3300'),
(12, 'Pamushana', 'Harare', '2016-10-10', '2016-12-06', 'Economy', '$6500'),
(13, 'Pamushana', 'Harare', '2016-10-10', '2016-12-06', 'Business', '$7500'),
(14, 'Pamushana', 'Bulawayo', '2016-10-06', '2016-11-01', 'Economy', '$7100'),
(15, 'Pamushana', 'Bulawayo', '2016-10-06', '2016-11-01', 'Business', '$7700'),
(16, 'Pamushana', 'Masvingo', '2016-10-04', '2016-11-22', 'Economy', '$5500'),
(17, 'Pamushana', 'Masvingo', '2016-10-04', '2016-11-22', 'Business', '$7500'),
(18, 'Bulawayo', 'Harare', '2016-10-12', '2016-11-16', 'Economy', '$7700'),
(19, 'Bulawayo', 'Harare', '2016-10-12', '2016-11-16', 'Business', '$8700'),
(20, 'Bulawayo', 'Masvingo', '2016-11-02', '2016-11-29', 'Economy', '$6734'),
(21, 'Bulawayo', 'Masvingo', '2016-11-02', '2016-11-29', 'Business', '$7734'),
(22, 'Bulawayo', 'Pamushana', '2016-10-26', '2016-11-29', 'Economy', '$7885'),
(23, 'Bulawayo', 'Pamushana', '2016-10-26', '2016-11-29', 'Business', '$8885');

-- --------------------------------------------------------

--
-- Table structure for table `sampledb`
--

CREATE TABLE `sampledb` (
  `id` int(11) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampledb`
--

INSERT INTO `sampledb` (`id`, `departure`, `arrival`, `price`, `class`) VALUES
(12, 'Harare', 'Masvingo', '$8500', 'Economy'),
(13, 'Harare', 'Masvingo', '$10500', 'Business'),
(14, 'Harare', 'Pamushana', '$7654', 'Economy'),
(15, 'Harare', 'Pamushana', '$9654', 'Business'),
(16, 'Harare', 'Bulawayo', '$6354', 'Economy'),
(17, 'Harare', 'Bulawayo', '$7554', 'Business'),
(18, 'Masvingo', 'Harare', '$4357', 'Economy'),
(19, 'Masvingo', 'Harare', '$6752', 'Business'),
(20, 'Masvingo', 'Pamushana', '$10354', 'Economy'),
(21, 'Masvingo', 'Pamushana', '$12354', 'Business'),
(22, 'Masvingo', 'Bulawayo', '$10546', 'Economy'),
(23, 'Masvingo', 'Bulawayo', '$12762', 'Business'),
(24, 'Pamushana', 'Harare', '$11664', 'Economy'),
(25, 'Pamushana', 'Harare', '$13562', 'Business'),
(26, 'Pamushana', 'Bulawayo', '$11400', 'Economy'),
(27, 'Pamushana', 'Bulawayo', '$13400', 'Business'),
(28, 'Pamushana', 'Masvingo', '$5546', 'Economy'),
(29, 'Pamushana', 'Masvingo', '$7646', 'Business'),
(30, 'Bulawayo', 'Harare', '$7546', 'Economy'),
(31, 'Bulawayo', 'Harare', '$8626', 'Business'),
(32, 'Bulawayo', 'Masvingo', '$4500', 'Economy'),
(33, 'Bulawayo', 'Masvingo', '$7000', 'Business'),
(34, 'Bulawayo', 'Masvingo', '$8350', 'Economy'),
(35, 'Bulawayo', 'Pamushana', '$9650', 'Business'),
(36, 'Bulawayo', 'Pamushana', '$12346', 'Economy'),
(37, 'Bulawayo', 'Masvingo', '$13446', 'Business');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `round_trip`
--
ALTER TABLE `round_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampledb`
--
ALTER TABLE `sampledb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `round_trip`
--
ALTER TABLE `round_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sampledb`
--
ALTER TABLE `sampledb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
