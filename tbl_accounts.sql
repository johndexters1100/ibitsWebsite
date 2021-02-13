-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 13, 2021 at 04:02 AM
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
  `account_Year` int(10) NOT NULL,
  `account_Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_ContactNumber` varchar(20) NOT NULL,
  `account_Address` varchar(255) NOT NULL,
  `account_Birthday` date NOT NULL,
  `account_Age` int(10) NOT NULL,
  `account_Password` varchar(50) NOT NULL,
  PRIMARY KEY (`account_StudentNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`account_StudentNumber`, `account_LastName`, `account_FirstName`, `account_MiddleName`, `account_Section`, `account_Year`, `account_Email`, `account_ContactNumber`, `account_Address`, `account_Birthday`, `account_Age`, `account_Password`) VALUES
('2018-00058-BN-0', 'Satsatin', 'John Dexter', 'Ortiz', 'BSIT', 3, 'johndexters1100@gmail.com', '09456515535', '9565 PASEO C.A. Ortiz St.', '2000-10-01', 20, 'pogiako');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
