-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 02:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting-system-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_id` int(12) NOT NULL,
  `Title` varchar(120) NOT NULL,
  `DC` text NOT NULL,
  `Picture` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_id`, `Title`, `DC`, `Picture`) VALUES
(123231, 'لەسەر بانگهێشتی میری قەتەر نێچیرڤان بارزانی ئامادەی یاریی کۆتایی مۆندیال دەبێت', 'رووداو دیجیتاڵ  سەرۆکایەتیی هەرێمی کوردستان رایگەیاند، سەرۆکی هەرێمی کوردستان ئەمڕۆ لەسەر بانگهێشتی فەرمیی قەتەر دەچێتە ئەو وڵاتە و لەگەڵ ژمارەیەک لە سەرکردەکانی جیهان ئامادەی یاریی کۆتایی مۆندیال دەبێت.', '703538Image1.jpg'),
(123232, 'وەزیری ناوخۆی ئێران: بارودۆخی وڵات ئارام بووەتەوە', 'رووداو دیجیتاڵ   کچانی مەریوان بۆ رێزگرتن لە کوژراوانی ناڕەزایەتییەکانی رۆژهەڵاتی کوردستان کۆبوونەوە. 147 خۆپێشاندەری کورد گیانیان لەدەستداوە، بەپێی راپۆرتی کۆمەڵەی چالاکڤانانی مافەکانی مرۆڤ. ', '702808Image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `PNAME` varchar(32) NOT NULL,
  `CID` int(12) NOT NULL,
  `Votes` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`PNAME`, `CID`, `Votes`) VALUES
('Party4', 19, 2),
('Party1', 16, 2),
('Party2', 17, 1),
('Party3', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setelectionparty`
--

CREATE TABLE `setelectionparty` (
  `PNAME` varchar(30) CHARACTER SET armscii8 NOT NULL,
  `PPIC` varchar(120) CHARACTER SET armscii8 DEFAULT NULL,
  `CID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setelectionparty`
--

INSERT INTO `setelectionparty` (`PNAME`, `PPIC`, `CID`) VALUES
('Party1', 'krg_logo_notrans_24802056.png', 16),
('Party2', 'krg_logo_notrans_24802056.png', 17),
('Party3', 'krg_logo_notrans_24802056.png', 18),
('Party4', 'krg_logo_notrans_24802056.png', 19);

-- --------------------------------------------------------

--
-- Table structure for table `setelectiontimer`
--

CREATE TABLE `setelectiontimer` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setelectiontimer`
--

INSERT INTO `setelectiontimer` (`id`, `date`, `h`, `m`, `s`) VALUES
(1, '2022-12-01', 5, 46, 0),
(1, '2022-12-01', 5, 46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `v_image` varchar(100) DEFAULT NULL,
  `nationalid` varchar(12) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `bloodtype` varchar(30) NOT NULL,
  `placeofissue` varchar(30) NOT NULL,
  `dateofissue` varchar(30) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `placeofbirth` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `v_expiredate` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`v_image`, `nationalid`, `Fullname`, `title`, `bloodtype`, `placeofissue`, `dateofissue`, `dateofbirth`, `placeofbirth`, `gender`, `v_expiredate`, `status`) VALUES
('Avatar.png', '12345', '12345', 'none', 'A+', 'suly', '1/1/2009', '1/1/2001', 'suly', 'M', '1/1/2029', 1),
('images.png', '2002001', 'Hana', 'None', 'A+', 'Sulaymaniah', '1/1/2019', '1/1/2002', 'Baghdad', 'F', '1/1/2029', 1),
('Avatar.png', '2002002', 'Pairaw', 'None', 'A+', 'sulaymaniyah', '1/1/2019', '1/1/2001', 'sulaymaniyah', 'M', '1/1/2029', 1),
('Avatar.png', '2002003', 'Danar', 'None', 'O-', 'sulaymaniyah', '1/1/2019', '1/1/2002', 'sulaymaniyah', 'M', '1/1/2029', 1),
('Avatar.png', '2002004', 'Aran Adham', 'None', 'A+', 'sulaymaniyah', '1/1/2019', '1/1/2001', 'sulaymaniyah', 'M', '1/1/2029', 1),
('images.png', '2002005', 'Soz', 'none', 'O+', 'xanaqin', '1/1/2019', '31/10/2002', 'xanaqin', 'F', '1/1/2029', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_id`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `setelectionparty`
--
ALTER TABLE `setelectionparty`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nationalid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123241;

--
-- AUTO_INCREMENT for table `setelectionparty`
--
ALTER TABLE `setelectionparty`
  MODIFY `CID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `ci` FOREIGN KEY (`CID`) REFERENCES `setelectionparty` (`CID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
