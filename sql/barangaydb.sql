-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 07:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `complainant` varchar(50) NOT NULL,
  `complainee` varchar(50) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `action` varchar(255) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `date`, `complainant`, `complainee`, `complaint`, `status`, `location`, `action`, `type`) VALUES
(1, '2022-06-15', 'De Belen, Kevin Villanueva', 'Reluya, Julius Cruz', 'Drunk behavior', 'Solved', 'Mc Arthur St. Brgy. Talaga, Capas, Tarlac', 'Will undergo rehabilitation for 1 week', 'active'),
(2, '2022-06-15', 'Fernandez, Jeffrey Busa', 'Rivera, Joseph Santos', 'Misbehavior', 'Solved', 'Jabson St. Brgy. Talaga Capas, Tarlac', 'Community Service for a week', 'active'),
(3, '2022-06-15', 'Dela Cruz, Carlos Joaquin', 'Dimaguiba, John Mark Ilagan', 'Theft', 'Unsolved', 'Rodrigues St. Brgy. Talaga, Capas, Tarlac', '', 'active'),
(4, '2022-06-15', 'Sison, Diana De Castro', 'Reyes, James Cruz', 'Estafa', 'Solved', 'Recto St. Brgy. Talaga, Capas, Tarlac', 'Will pay debt within 6 months', 'active'),
(5, '2022-06-15', 'Vergara, Nathan Andal', 'Domingo, Cherry Rose', 'Scammer', 'Unsolved', 'Mapua St. Brgy. Talaga, Capas, Tarlac', '', 'active'),
(6, '2022-06-15', 'Dimaguiba, Ellena Valdez', 'Fernandez, Veronica Asis', 'Violence', 'Unsolved', 'Magdiwang St. Brgy. Talaga, Capas, Tarlac', '', 'active'),
(7, '2022-06-15', 'Mohammad Janisa Ali', 'Ford, Chandrea Manuel', 'Estafa', 'Solved', 'Magdiwang St. Brgy. Talaga, Capas, Tarlac', 'Will pay debt within 3 months', 'active'),
(8, '2022-06-15', 'Quinto, Christina Flores', 'Delos Santos, Carlito Elago', 'Sexual Harassment', 'Unsolved', 'Mapua St. Brgy. Talaga, Capas, Tarlac', '', 'active'),
(9, '2022-06-15', 'Nielde, Beverly Vegas', 'Guytinco, Aries De Jesus', 'Sexual Harassment', 'Unsolved', 'Dela Rosa St. Brgy Talaga, Capas, Tarlac', '', 'active'),
(10, '2022-06-15', 'Reyes, James Cruz', 'Gonzales, Jeremiah Santiago', 'Misbehavior', 'Solved', 'Dela Rosa St. Brgy Talaga, Capas, Tarlac', 'Community Service for a month', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `clearanceno` varchar(11) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `orno` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `date`, `clearanceno`, `resident`, `purpose`, `orno`, `status`) VALUES
(1, '2022-06-14', ' 37662456', 'Borja, Lovely Cristobal', 'Business Permit', 23144, 'active'),
(2, '2022-06-14', ' ', 'Miranda Isabel Hernandez', 'Opening a Bank Account', 0, 'active'),
(3, '2022-06-14', ' 9437791', 'De Belen, Kevin Villanueva', 'For Employment', 15157, 'active'),
(4, '2022-06-14', ' ', 'De Belen, Mark Gumban', 'Applying for a loan', 0, 'active'),
(5, '2022-06-14', ' ', 'Mohammad, Janisa Ali', 'Applying for ID (Postal ID)', 0, 'active'),
(6, '2022-06-14', ' ', 'Paraiso, Angelica Banos', 'Applying for Scholarship', 0, 'active'),
(7, '2022-06-14', ' 94491686', 'Lennon, John Calma', 'Business Permit', 89286, 'active'),
(8, '2022-06-14', ' ', 'Dimaguiba, John Mark Ilagan', 'Requirements for NBI Clearance', 0, 'active'),
(9, '2022-06-14', ' ', 'Dimaguiba, Ellena Valdez', 'Job Requirement', 0, 'active'),
(10, '2022-06-14', ' ', 'Dela Cruz, Carlos Joaquin', 'Scholarship Requirement', 0, 'active'),
(11, '2022-06-14', ' 5269582', 'Vergara, Maria Irish Perez', 'Bank Loan', 84358, 'active'),
(12, '2022-06-14', ' 38876004', 'Vergara, Nathan Andal', 'Travel Clearance', 46571, 'active'),
(13, '2022-06-14', ' ', 'Reyes, James Cruz', 'Dance Practice', 0, 'active'),
(14, '2022-06-14', ' 97129518', 'Nielde, Beverly Vegas', 'Requirement for ID (License)', 16874, 'active'),
(15, '2022-06-14', ' 75781009', 'Buena, Nicole Custodio', 'For Employment', 93560, 'active'),
(16, '2022-06-14', ' 49685222', 'Fernandez, Jeffrey Busa', 'Business Permit', 25633, 'active'),
(17, '2022-06-14', ' 18763946', 'Quinto, Christina Flores', 'Requirement for ID (UMID)', 6161, 'active'),
(18, '2022-06-14', ' ', 'Fernandez, Veronica Asis', 'For NBI Clearance', 0, 'active'),
(19, '2022-06-15', ' 49064151', 'Sison, Diana Castro', 'Business Permit', 50983, 'active'),
(20, '2022-06-15', ' 56518865', 'Sanchez, Princess Eusebio', 'Requirement for ID (License)', 92236, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalmem` int(2) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`id`, `householdno`, `zone`, `totalmem`, `status`) VALUES
(1, 1, '1', 8, 'active'),
(2, 2, '1', 4, 'active'),
(3, 3, '1', 3, 'active'),
(4, 4, '2', 1, 'active'),
(5, 5, '2', 1, 'active'),
(6, 6, '2', 4, 'active'),
(7, 7, '2', 3, 'active'),
(8, 8, '3', 2, 'active'),
(9, 9, '3', 3, 'active'),
(10, 10, '4', 6, 'active'),
(11, 11, '4', 2, 'active'),
(12, 12, '4', 6, 'active'),
(13, 13, '4', 3, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `date`, `action`) VALUES
(1, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(2, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(3, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(4, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(5, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(6, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(7, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(8, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(9, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(10, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(11, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN BARANGAY OFFICIALS'),
(12, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(13, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(14, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(15, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(16, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(17, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(18, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(19, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN STAFF'),
(20, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN ZONE'),
(21, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN ZONE'),
(22, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN ZONE'),
(23, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN ZONE'),
(24, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(25, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(26, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(27, 'Administrator', '2022-06-14 00:00:00', 'UPDATED A RECORD IN RESIDENTS'),
(28, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(29, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(30, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(31, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(32, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(33, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(34, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(35, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(36, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(37, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(38, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(39, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(40, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(41, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(42, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(43, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(44, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN RESIDENTS'),
(45, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(46, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(47, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(48, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(49, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(50, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(51, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(52, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(53, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(54, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(55, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(56, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD'),
(57, 'Administrator', '2022-06-14 00:00:00', 'ADDED A RECORD IN HOUSEHOLD');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `pos`, `name`, `contact`, `address`, `start`, `end`, `status`) VALUES
(1, 'Barangay Captain', 'Aguila, Ryan Batumbakal', '09258266482', '13 Villa Jose St. Br', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(2, 'Barangay Kagawad (Ordinance)', 'Natividad, Marco De Vera', '09683618462', '26 San Juan St. Brgy', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(3, 'Barangay Kagawad (Public Safety)', 'Cruz, Victoria Santos', '09783647182', '78 E. Santos St. Brg', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(4, 'Barangay Kagawad (Tourism)', 'Aguirre, Jessa Cruz', '09261748263', '61 Villa Monica St. ', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(5, 'Barangay Kagawad (Budget & Finance)', 'Villas, Anthony Jose', '09111637281', '52 Batuhan St. Brgy.', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(6, 'Barangay Kagawad (Agriculture)', 'Marteja, Justine Crisostomo', '09818673222', '69 Feliciano St. Brg', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(7, 'Barangay Kagawad (Education)', 'Velasco, Clea Manio', '09561835173', '92 San Juan St. Brgy', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(8, 'Barangay Kagawad (Infrastracture)', 'Pablo, Christian Dela Fuente', '09973517261', '09 Dr. Pilapil St. B', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(9, 'Barangay Treasurer', 'Corazon, Mary Jean Arevalo', '09767682536', '48 Bagong Taon St. B', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(10, 'Barangay Secretary', 'Marquina, Eleanor Robles', '09337582617', '21 Villa Cuaresma St', '2022-07-01', '2025-06-30', 'Ongoing Term'),
(11, 'SK Chairman', 'Velasquez, Daniel Lincoln', '09853562184', '75 Baltazar St. Brgy', '2022-07-01', '2025-06-30', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `permit`
--

CREATE TABLE `permit` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `businessname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `orno` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permit`
--

INSERT INTO `permit` (`id`, `date`, `resident`, `businessname`, `address`, `type`, `orno`, `amount`, `status`) VALUES
(1, '2022-06-15', 'Borja, Lovely Cristobal', 'Totes N Things', 'Tiangge, Capas, Tarlac', 'Apparels', 23235, 500, 'active'),
(2, '2022-06-15', 'Lennon, John Calma', 'Music Stop Shop', '23 Riverside St. Brgy Talaga, Capas, Tarlac', 'Musical Instrument Store', 62100, 1000, 'active'),
(3, '2022-06-15', 'Fernandez, Jeffrey Busa', 'DejaBrew', '32 Jabson St. Brgy. Talaga, Capas, Tarlac', 'Coffee Shop', 84803, 500, 'active'),
(4, '2022-06-15', 'Sison, Diana Castro', 'Uncharted Books', '56 Recto St. Brgy. Talaga, Capas, Tarlac', 'Bookstore', 99351, 1000, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bdate` varchar(50) NOT NULL,
  `bplace` varchar(50) NOT NULL,
  `baranagay` varchar(120) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhousemem` int(5) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `housenum` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `ownership` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `baranagay`, `zone`, `totalhousemem`, `civilstatus`, `housenum`, `religion`, `nationality`, `gender`, `address`, `ownership`, `username`, `password`, `status`) VALUES
(1, 'Borja', 'Lovely', 'Cristobal', '1983-05-01', 'Quezon City', 'Brgy.Talaga', '1', 8, 'Married', 1, 'Roman Catholic', 'Filipino', 'Female', '104 Magdiwang St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'borja_lovely', '050183', 'active'),
(2, 'Miranda', 'Isabel', 'Hernandez', '1979-08-24', 'Tarlac City', 'Brgy.Talaga', '1', 4, 'Married', 2, 'Christian', 'Filipino', 'Female', '53 Del Rosario St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'miranda_isabel', '082479', 'active'),
(3, 'De Belen', 'Kevin', 'Villanueva', '1991-03-15', 'Capas City', 'Brgy.Talaga', '1', 3, 'Single', 3, 'Roman Catholic', 'Filipino', 'Male', '14 Mc. Arthur St. Brgy. Talaga, Capas, Tarlac', 'living', 'debelen_kevin', '031591', 'active'),
(4, 'De Belen', 'Mark', 'Gumban', '1969-02-28', 'Marikina City', 'Brgy.Talaga', '1', 3, 'Married', 3, 'Roman Catholic', 'Filipino', 'Male', '14 Mc. Arthur St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'debelen_mark', '022869', 'active'),
(5, 'Mohammad', 'Janisa', 'Ali', '1998-07-03', 'Butuan City', 'Brgy.Talaga', '1', 8, 'Single', 1, 'Muslim', 'Filipino', 'Female', '104 Magdiwang St. Brgy. Talaga, Capas, Tarlac', 'living', 'mohammad_janisa', '070398', 'active'),
(6, 'Paraiso', 'Angelica', 'Banos', '2000-04-04', 'Capas City', 'Brgy.Talaga', '2', 1, 'Single', 4, 'Born Again', 'Filipino', 'Female', '50 A. Tuazon St. Brgy. Talaga, Capas, Tarlac', 'rental', 'paraiso_angelica', '040400', 'active'),
(7, 'Lennon', 'John', 'Calma', '1994-12-21', 'Capas City', 'Brgy.Talaga', '2', 1, 'Single', 5, 'Roman Catholic', 'Filipino', 'Male', '17 Riverside St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'lennon_john', '122194', 'active'),
(8, 'Dimaguiba', 'John Mark', 'Ilagan', '1987-01-30', 'Capas City', 'Brgy.Talaga', '2', 4, 'Married', 6, 'Christian', 'Filipino', 'Male', '309 Magdiwang St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'dimaguiba_johnmark', '013087', 'active'),
(9, 'Dimaguiba', 'Ellena', 'Valdez', '1986-11-16', 'Capas City', 'Brgy.Talaga', '2', 4, 'Married', 6, 'Christian', 'Filipino', 'Female', '309 Magdiwang St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'dimaguiba_ellena', '111686', 'active'),
(10, 'Dela Cruz', 'Carlos', 'Joaquin', '2001-06-18', 'Tarlac City', 'Brgy.Talaga', '2', 3, 'Single', 7, 'Roman Catholic', 'Filipino', 'Male', '32 Rodriguez St. Brgy. Talaga, Capas, Tarlac', 'living', 'delacruz_carlos', '061801', 'active'),
(11, 'Vergara', 'Maria Irish', 'Perez', '1980-07-28', 'Capas City', 'Brgy.Talaga', '3', 6, 'Married', 7, 'Roman Catholic', 'Filipino', 'Female', '39 Mapua St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'vergara_maria', '072880', 'active'),
(12, 'Vergara', 'Nathan', 'Andal', '1979-09-11', 'Capas City', 'Brgy.Talaga', '3', 6, 'Married', 7, 'Roman Catholic', 'Filipino', 'Male', '39 Mapua St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'vergara_nathan', '091179', 'active'),
(13, 'Reyes', 'James', 'Cruz', '1999-02-05', 'Capas City', 'Brgy.Talaga', '3', 2, 'Single', 8, 'Christian', 'Filipino', 'Male', '58 Dela Rosa St. Brgy. Talaga, Capas, Tarlac', 'rental', 'reyes_james', '020599', 'active'),
(14, 'Nielde', 'Beverly', 'Vegas', '2001-11-20', 'Quezon City', 'Brgy.Talaga', '3', 2, 'Single', 8, 'Roman Catholic', 'Filipino', 'Female', '58 Dela Rosa St. Brgy. Talaga, Capas, Tarlac', 'rental', 'nielde_beverly', '112001', 'active'),
(15, 'Buena', 'Nicole', 'Custodio', '1996-05-07', 'Capas City', 'Brgy.Talaga', '3', 3, 'Single', 9, 'Roman Catholic', 'Filipino', 'Female', '98 Mayapis St. Brgy. Talaga, Capas, Tarlac', 'living', 'buena_nicole', '050796', 'active'),
(16, 'Fernandez', 'Jeffrey', 'Busa', '1988-07-14', 'Capas City', 'Brgy.Talaga', '4', 6, 'Married', 10, 'Christian', 'Filipino', 'Male', '32 Jabson St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'fernandez_jeffrey', '071488', 'active'),
(17, 'Quinto', 'Christina', 'Flores', '1997-03-06', 'Capas City', 'Brgy.Talaga', '4', 2, 'Single', 11, 'Roman Catholic', 'Filipino', 'Female', '67 Mapua St. Brgy. Talaga, Capas, Tarlac', 'living', 'quinto_christina', '030697', 'active'),
(18, 'Fernandez', 'Veronica', 'Asis', '1990-06-26', 'Capas City', 'Brgy.Talaga', '4', 6, 'Married', 10, 'Roman Catholic', 'Filipino', 'Female', '32 Jabson St. Brgy. Talaga, Capas, Tarlac', 'Ownhouse', 'fernandez_veronica', '062690', 'active'),
(19, 'Sison', 'Diana', 'De Castro', '1991-08-10', 'Capas City', 'Brgy.Talaga', '4', 6, 'Single', 12, 'Roman Catholic', 'Filipino', 'Female', '59 Recto St. Brgy. Talaga, Capas, Tarlac', 'living', 'sison_diana', '081091', 'active'),
(20, 'Sanchez', 'Princess', 'Eusebio', '1995-10-24', 'Capas City', 'Brgy.Talaga', '4', 3, 'Single', 13, 'Roman Catholic', 'Filipino', 'Female', '65 Gintong Daan St. Brgy. Talaga, Capas, Tarlac', 'living', 'sanchez_princess', '102495', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `username`, `password`, `Type`) VALUES
(1, 'Anderson, Alex Guevarra ', 'staff_01', 'staff_01', 'Active'),
(2, 'Mordo, Baron Jabson', 'staff_02', 'staff_02', 'Active'),
(3, 'Mason, Albert Sta. Rosa', 'staff_03', 'staff_03', 'Active'),
(4, 'Banner, Jessica Bautista', 'staff_04', 'staff_04', 'Active'),
(5, 'Guzman, Jacob Valencia', 'staff_05', 'staff_05', 'Active'),
(6, 'Delos Santos, Honey Grace Tajan', 'staff_06', 'staff_06', 'Active'),
(7, 'Alvero, Jiro Andrei Reyes', 'staff_07', 'staff_07', 'Active'),
(8, 'Rivera, Sean Corpuz', 'staff_08', 'staff_08', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'active'),
(2, 'admin', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone`, `username`, `password`, `Type`) VALUES
(1, '1', 'zone_01', 'zone_01', 'Active'),
(2, '2', 'zone_02', 'zone_02', 'Active'),
(3, '3', 'zone_03', 'zone_03', 'Active'),
(4, '4', 'zone_04', 'zone_04', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit`
--
ALTER TABLE `permit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `household`
--
ALTER TABLE `household`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permit`
--
ALTER TABLE `permit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
