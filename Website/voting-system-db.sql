-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 12:39 PM
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
  `News_ID` int(5) NOT NULL,
  `Title` varchar(120) NOT NULL,
  `Description` text NOT NULL,
  `News_Picture` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_ID`, `Title`, `Description`, `News_Picture`) VALUES
(123231, 'لەسەر بانگهێشتی میری قەتەر نێچیرڤان بارزانی ئامادەی یاریی کۆتایی مۆندیال دەبێت', 'رووداو دیجیتاڵ  سەرۆکایەتیی هەرێمی کوردستان رایگەیاند، سەرۆکی هەرێمی کوردستان ئەمڕۆ لەسەر بانگهێشتی فەرمیی قەتەر دەچێتە ئەو وڵاتە و لەگەڵ ژمارەیەک لە سەرکردەکانی جیهان ئامادەی یاریی کۆتایی مۆندیال دەبێت.', '703538Image1.jpg'),
(123232, 'وەزیری ناوخۆی ئێران: بارودۆخی وڵات ئارام بووەتەوە', 'رووداو دیجیتاڵ   کچانی مەریوان بۆ رێزگرتن لە کوژراوانی ناڕەزایەتییەکانی رۆژهەڵاتی کوردستان کۆبوونەوە. 147 خۆپێشاندەری کورد گیانیان لەدەستداوە، بەپێی راپۆرتی کۆمەڵەی چالاکڤانانی مافەکانی مرۆڤ. ', '702808Image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `Party_Name` varchar(22) NOT NULL,
  `Candidates_ID` int(5) NOT NULL,
  `Votes` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`Party_Name`, `Candidates_ID`, `Votes`) VALUES
('Party1', 16, 2),
('Party2', 17, 1),
('Party3', 18, 1),
('Party4', 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `selectionparty`
--

CREATE TABLE `selectionparty` (
  `Party_Name` varchar(22) CHARACTER SET armscii8 NOT NULL,
  `Party_Pic` varchar(120) CHARACTER SET armscii8 DEFAULT NULL,
  `Candidates_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectionparty`
--

INSERT INTO `selectionparty` (`Party_Name`, `Party_Pic`, `Candidates_ID`) VALUES
('Party1', 'krg_logo_notrans_24802056.png', 16),
('Party2', 'krg_logo_notrans_24802056.png', 17),
('Party3', 'krg_logo_notrans_24802056.png', 18),
('Party4', 'krg_logo_notrans_24802056.png', 19),
('party5', 'KRG.png', 56);

-- --------------------------------------------------------

--
-- Table structure for table `selectiontimer`
--

CREATE TABLE `selectiontimer` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Hour` int(50) NOT NULL,
  `Minute` int(50) NOT NULL,
  `Second` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectiontimer`
--

INSERT INTO `selectiontimer` (`ID`, `Date`, `Hour`, `Minute`, `Second`) VALUES
(1, '2022-12-14', 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `VoterImage` varchar(100) DEFAULT NULL,
  `National_ID` varchar(12) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `BloodType` varchar(3) NOT NULL,
  `PlaceOfIssue` varchar(22) NOT NULL,
  `DateOfIssue` date NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PlaceOfBirth` varchar(22) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `ExpireDate` date NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`VoterImage`, `National_ID`, `FullName`, `Title`, `BloodType`, `PlaceOfIssue`, `DateOfIssue`, `DateOfBirth`, `PlaceOfBirth`, `Gender`, `ExpireDate`, `Status`) VALUES
('KRG.png', '12345', '12345', 'none', 'A+', 'suly', '2019-01-01', '2001-01-01', 'suly', 'M', '2029-01-01', 1),
('images.png', '2002001', 'Hana', 'None', 'A+', 'Sulaymaniah', '0000-00-00', '0000-00-00', 'Baghdad', 'F', '0000-00-00', 1),
('Avatar.png', '2002002', 'Pairaw', 'None', 'A+', 'sulaymaniyah', '0000-00-00', '0000-00-00', 'sulaymaniyah', 'M', '0000-00-00', 1),
('Avatar.png', '2002003', 'Danar', 'None', 'O-', 'sulaymaniyah', '0000-00-00', '0000-00-00', 'sulaymaniyah', 'M', '0000-00-00', 1),
('images.png', '2002005', 'Soz', 'none', 'O+', 'xanaqin', '0000-00-00', '0000-00-00', 'xanaqin', 'F', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD KEY `Candidates_ID` (`Candidates_ID`);

--
-- Indexes for table `selectionparty`
--
ALTER TABLE `selectionparty`
  ADD PRIMARY KEY (`Candidates_ID`);

--
-- Indexes for table `selectiontimer`
--
ALTER TABLE `selectiontimer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`National_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123242;

--
-- AUTO_INCREMENT for table `selectionparty`
--
ALTER TABLE `selectionparty`
  MODIFY `Candidates_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `ci` FOREIGN KEY (`Candidates_ID`) REFERENCES `selectionparty` (`Candidates_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `panel_ibfk_1` FOREIGN KEY (`Candidates_ID`) REFERENCES `selectionparty` (`Candidates_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
