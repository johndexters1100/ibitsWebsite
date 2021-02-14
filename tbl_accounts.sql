-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 14, 2021 at 05:13 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ibits`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

DROP TABLE IF EXISTS `tbl_accounts`;
CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `account_StudentNumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_LastName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_FirstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_MiddleName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_Section` varchar(50) NOT NULL,
  `account_Year` varchar(10) NOT NULL,
  `account_Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_ContactNumber` varchar(20) NOT NULL,
  `account_Address` varchar(255) NOT NULL,
  `account_Birthday` date NOT NULL,
  `account_Age` int(10) NOT NULL,
  `account_Password` varchar(50) NOT NULL,
  `account_Images` blob,
  PRIMARY KEY (`account_StudentNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`account_StudentNumber`, `account_LastName`, `account_FirstName`, `account_MiddleName`, `account_Section`, `account_Year`, `account_Email`, `account_ContactNumber`, `account_Address`, `account_Birthday`, `account_Age`, `account_Password`, `account_Images`) VALUES
('2018-00058-BN-0', 'Satsatin', 'John Dexter', 'Ortiz', 'BSIT', '3-1', 'johndexters1100@gmail.com', '09456515535', '9565 PASEO C.A. Ortiz St.', '2000-10-01', 20, 'pogiako', NULL),
('2018-00177-BN-0', 'Gellaco', 'Miguel Carlos', 'Jamito', 'BSIT', '3-1', 'miggyjgellco@gmail.com', '09955398597', 'Narra St. Tulay Bato, Brgy. San Antonio, City of Biñan Laguna', '2000-04-14', 20, 'mjgellaco14', NULL),
('2018-00133-BN-0', 'Desquitado', 'Christian Emer Paolo', 'Manules', 'BSIT', '3-1', 'christian.desquitado09@gmail.com', '09613338420', 'Blk 131 Country Drive, Country Homes, Soro-soro, Biñan, Laguna', '1999-10-06', 21, 'cepmdesquitado06', NULL),
('2018-00139-BN-0', 'Lumagui', 'Christian Ace', 'Yaya', 'BSIT', '3-1', 'trance9081@gmail.com', '09664597877', 'Saint Rose 2, Malaban, Biñan, Laguna', '1999-08-14', 21, 'caylumagui14', NULL),
('2018-00171-BN-0', 'Seguerra', 'Vincent', 'Almedina', 'BSIT', '3-1', 'vinceseguerra@gmail.com', '09512381805', 'Soro-Soro, Biñan, Laguna', '1998-11-09', 22, 'vaseguerra09', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
