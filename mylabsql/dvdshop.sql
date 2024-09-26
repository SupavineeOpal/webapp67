-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:36 AM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` varchar(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='action information';

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `address`, `telephone`) VALUES
('901', 'lolo', 'momo', 'Peru', 203256589),
('902', 'minni', 'yusu', 'India', 958986583),
('903', 'opal', 'porkyong', 'uk', 802376045),
('904', ' loty', 'liliy', 'Iceland', 765484578),
('905', 'supavinee', 'vijittamee', 'Thailand', 802376045);

-- --------------------------------------------------------

--
-- Table structure for table `actorinmovie`
--

CREATE TABLE `actorinmovie` (
  `count` int(10) NOT NULL,
  `movid` varchar(3) NOT NULL,
  `aid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actor action in movie';

--
-- Dumping data for table `actorinmovie`
--

INSERT INTO `actorinmovie` (`count`, `movid`, `aid`) VALUES
(1, '101', '901');

-- --------------------------------------------------------

--
-- Table structure for table `buymovie`
--

CREATE TABLE `buymovie` (
  `count` varchar(10) NOT NULL,
  `mid` varchar(3) NOT NULL,
  `movid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member buy movie';

--
-- Dumping data for table `buymovie`
--

INSERT INTO `buymovie` (`count`, `mid`, `movid`) VALUES
('2', '001', '101'),
('', '001', '104');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member information';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('001', 'daniel', 'craig', 'thailand', 504444144),
('002', 'will', 'smith', 'usa', 568874589),
('003', 'julia', 'roberts', 'thailand', 254478954),
('004', 'mark', 'wahlberg', 'usa', 504489875),
('005', 'opal', 'vijittamee', 'japan', 589647562);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movid` varchar(3) NOT NULL,
  `movname` varchar(20) NOT NULL,
  `movinformation` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='movie information';

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movid`, `movname`, `movinformation`, `time`, `date`) VALUES
('101', 'tee yod', 'horror movies', '121 min', '2023-10-26'),
('102', 'mae nak', 'horrorandcomedy', '90 min', '2022-04-27'),
('103', 'lahn mah', 'drama and comedy', '120 min', '2024-04-04'),
('104', 'barbie', 'funny', '108 min', '2023-03-05'),
('105', 'kitty', 'funny', '140 min', '2020-10-14'),
('106', 'popi', 'funny', '100 min', '2024-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `actorinmovie`
--
ALTER TABLE `actorinmovie`
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `buymovie`
--
ALTER TABLE `buymovie`
  ADD KEY `mid` (`mid`),
  ADD KEY `movid` (`movid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
