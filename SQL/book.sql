-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 09:47 AM
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
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `BookName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TypeID` char(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `StatusID` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Publish` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `UnitPrice` int(4) NOT NULL,
  `UnitRent` int(2) NOT NULL,
  `DayAmount` int(2) DEFAULT NULL,
  `Picture` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `BookDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`, `BookDate`) VALUES
('00001', 'Doraemon', '001', '01', 'Kpn', 150, 3, 2, '-', '2554-02-01'),
('00002', 'เก็บตะวัน', '002', '03', 'WRP', 250, 5, 3, '-', '2554-03-20'),
('00003', 'สิ่งมีชีวติ', '002', '01', 'YPR', 185, 3, 3, '-', '2553-03-25'),
('00004', 'คู่สร้างคู่สม', '003', '01', 'DDR', 20, 1, 2, '-', '2552-01-15'),
('00005', 'Conan', '001', '02', 'Kpn', 80, 2, 2, '-', '2554-04-08'),
('0006', 'Test', '001', '01', '1', 1, 1, 1, 'Capture.jpg', '2025-02-10'),
('1234', 'IIII', '001', '01', '123', 2000, 200, 20, '1213.jpg', '2025-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `TypeID` (`TypeID`),
  ADD KEY `StatusID` (`StatusID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`TypeID`) REFERENCES `typebook` (`TypeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`StatusID`) REFERENCES `statusbook` (`StatusID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
