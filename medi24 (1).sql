-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 07:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi24`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `about_us1` text NOT NULL,
  `about_us2` text NOT NULL,
  `about_us3` text NOT NULL,
  `about_us4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `about_us`, `about_us1`, `about_us2`, `about_us3`, `about_us4`) VALUES
(0, 'We are Semicolon and this is a project of ours.We take and build projects that develops human living as well as helps to make this world a little easier for you. We are a team of 4 members and trying to make a difference.Also, we take challenging jobs that makes a difference to human lives. If this little concern helps even a single person our hard work will be much more appreciated and meaningful.\r\n                                ', ' Site Created, Developed and maintained by', 'Semicolon', 'In Regards', 'Call us: 015 21 20 58 14');

-- --------------------------------------------------------

--
-- Table structure for table `bld_gp`
--

CREATE TABLE `bld_gp` (
  `ID` int(11) NOT NULL,
  `s_group` text NOT NULL,
  `f_group` text NOT NULL,
  `l_id` int(11) NOT NULL,
  `bag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bld_gp`
--

INSERT INTO `bld_gp` (`ID`, `s_group`, `f_group`, `l_id`, `bag`) VALUES
(1, 'A+', 'A positive', 1, '3 Bag(s)'),
(2, 'A+', 'A positive', 2, '7 Bag(s)'),
(3, 'A+', 'A Positive', 4, '32 Bag(s)'),
(8, 'A-', 'A negative', 1, '7 Bag(s)'),
(9, 'A-', 'A negative', 2, '11 Bag(s)'),
(10, 'A-', 'A negative', 4, '10 Bag(s)'),
(11, 'B+', 'B positive', 1, '2 Bag(s)'),
(12, 'B+', 'B positive', 2, '9 Bag(s)'),
(13, 'B-', 'B negative', 1, '2 Bag(s)'),
(14, 'B-', 'B negative', 2, '4 Bag(s)'),
(15, 'B-', 'B negative', 4, '28 Bag(s)'),
(16, 'O+', 'O positive', 1, '3 Bag(s)'),
(17, 'O+', 'O positive', 2, '1 Bag(s)'),
(18, 'O-', 'O negative', 1, '5 Bag(s)'),
(19, 'O-', 'O negative', 2, '8 Bag(s)'),
(20, 'O-', 'O negative', 3, '5 Bag(s)'),
(21, 'O-', 'O negative', 4, '20 Bag(s)'),
(22, 'AB+', 'AB positive', 1, '6 Bag(s)'),
(23, 'AB+', 'AB positive', 2, '10 Bag(s)'),
(24, 'AB+', 'AB positive', 3, '8 Bag(s)'),
(25, 'AB+', 'AB positive', 4, '22 Bag(s)'),
(26, 'AB-', 'AB negative', 1, '5 Bag(s)'),
(27, 'AB-', 'AB negative', 2, '7 Bag(s)'),
(28, 'AB-', 'AB negative', 3, '7 Bag(s)');

-- --------------------------------------------------------

--
-- Table structure for table `hadith`
--

CREATE TABLE `hadith` (
  `ID` int(11) NOT NULL,
  `hadith` text NOT NULL,
  `written_in` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hadith`
--

INSERT INTO `hadith` (`ID`, `hadith`, `written_in`) VALUES
(1, 'Ibn Abbas Narrates that the prophet (saw) said, \"There are two blessings which many people lose:(They are) health and free time for doing good.', '-Sahih Bukhari');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `ID` int(11) NOT NULL,
  `hospital_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`ID`, `hospital_name`) VALUES
(1, 'Dhaka Medical College & Hospital'),
(2, 'BIRDEM Hospital'),
(3, 'PG Hospital'),
(4, 'Kurmitola General Hospital'),
(5, 'Asgor Ali Hospital'),
(6, 'Apollo Hospital'),
(7, 'Islami Bank Hospital'),
(8, 'Neurology Hospital'),
(9, 'Sheikh Sohrawardi Hospital'),
(10, 'Anwer Khan Modern Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(11) NOT NULL,
  `place` text NOT NULL,
  `Tamount` text NOT NULL,
  `a_p` text NOT NULL,
  `a_n` text NOT NULL,
  `b_p` text NOT NULL,
  `b_n` text NOT NULL,
  `o_p` text NOT NULL,
  `o_n` text NOT NULL,
  `ab_p` text NOT NULL,
  `ab_n` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID`, `place`, `Tamount`, `a_p`, `a_n`, `b_p`, `b_n`, `o_p`, `o_n`, `ab_p`, `ab_n`) VALUES
(1, 'DIU Blood Circle', '33 bag(s)', '3 bag(s)', '7 bag(s)', '2 bag(s)', '2 bag(s)', '3 bag(s)', '5 bag(s)', '6 bag(s)', '5 bag(s)'),
(2, 'Shomorita Bloods', '57 bag(s)', '7 bag(s)', '11 bag(s)', '9 bag(s)', '4 bag(s)', '1 bag(s)', '8 bag(s)', '10 bag(s)', '7 bag(s)'),
(3, 'DMC Blood Vault', '20 bag(s)', '0 bag(s)', '0 bag(s)', '0 bag(s)', '0 bag(s)', '0 bag(s)', '5 bag(s)', '8 bag(s)', '7 bag(s)'),
(4, 'Red Crescent Society ', '112 bag(s)', '32 bag(s)', '10 bag(s)', '0 bag(s)', '28 bag(s)', '0 bag(s)', '20 bag(s)', '22 bag(s)', '0 bag(s)');

-- --------------------------------------------------------

--
-- Table structure for table `medi_loc`
--

CREATE TABLE `medi_loc` (
  `ID` int(11) NOT NULL,
  `place` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi_loc`
--

INSERT INTO `medi_loc` (`ID`, `place`, `map`) VALUES
(1, 'Lazz Pharma,Dhanmondi-32', 'https://www.google.com.bd/maps/search/Lazz+Pharma,Dhanmondi-32/@23.8165708,90.2992346,12z?hl=en'),
(2, 'Lifeline Drugs, Uttara sec-3', 'https://www.google.com.bd/maps/place/Sector+3,+Dhaka+1230/@23.8642063,90.3922209,16z/data=!3m1!4b1!4m5!3m4!1s0x3755c423d9e8629b:0xb812987fe32d9199!8m2!3d23.8654003!4d90.3972052?hl=en'),
(3, 'Popular Pharmacy,Science Lab', 'https://www.google.com.bd/maps/search/Popular+Pharmacy,Science+Lab/@23.8644664,90.2561556,11z/data=!3m1!4b1?hl=en'),
(4, 'ESK-F Medical,Mitford Hospital', 'https://www.google.com.bd/maps/place/Sir+Salimullah+Medical+College+Mitford+Hospital/@23.711078,90.3988387,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b91cf294d4d5:0xdb324ec1fa918631!8m2!3d23.7110731!4d90.4010328?hl=en');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `fback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `news`) VALUES
(1, 'eita TV na je sob somoy Breaking News thakbe, Nije jaiya khoj lon miya.');

-- --------------------------------------------------------

--
-- Table structure for table `rare_medi`
--

CREATE TABLE `rare_medi` (
  `ID` int(11) NOT NULL,
  `medi` text NOT NULL,
  `place` text NOT NULL,
  `map_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rare_medi`
--

INSERT INTO `rare_medi` (`ID`, `medi`, `place`, `map_id`) VALUES
(1, 'Dormitos(200mg)', 'Lazz Pharma,Dhanmondi-32', 1),
(2, 'Pentamak 50(injection)', 'Lifeline Drugs, Uttara sec-3', 2),
(3, 'Parasol-Pharma Aid', 'Lazz Pharma,Dhanmondi-32', 1),
(4, 'Lessaract pro', 'Lazz Pharma,Dhanmondi-32', 1),
(5, 'Lantifik 500', 'Popular Pharmacy,Science Lab', 3),
(6, 'Denfit(200mg)', 'ESK-F Medical,Mitford Hospital', 4),
(7, 'Pentimin 50', 'Lifeline Drugs, Uttara sec-3', 2),
(8, 'Zinfinite-Pharma Aid', 'Lazz Pharma,Dhanmondi-32', 1),
(9, 'Lessaract benfit', 'Lazz Pharma,Dhanmondi-32', 1),
(10, 'Lantifik 1000', 'Popular Pharmacy,Science Lab', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `ID` int(11) NOT NULL,
  `sector` text NOT NULL,
  `name` text NOT NULL,
  `place` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`ID`, `sector`, `name`, `place`, `map`) VALUES
(1, 'Medicine', 'Dr. Fazley Rabbi', 'Dhaka Medical College ||\r\nDoctor of Medicine||\r\nRoom: 202 ||\r\n\r\nTreatment Time: 9 am - 5 pm ||\r\n\r\nDay: Mon,Tue,Wed', 'https://www.google.com/maps/place/Dhaka+Medical+College+Hospital/@23.7259711,90.3963877,636m/data=!3m1!1e3!4m17!1m11!4m10!1m3!2m2!1d90.399292!2d23.726055!1m5!1m1!1s0x3755b8e6474187cf:0xb3d3783755659522!2m2!1d90.398072!2d23.7257551!3m4!1s0x3755b8e6474187cf:0xb3d3783755659522!8m2!3d23.7257551!4d90.398072'),
(2, 'Gynaecology', 'Dr. Amelia June', 'BIRDEM Hospital ||\r\nDoctor of Gynaecology ||\r\nRoom: 304 ||\r\n\r\nTreatment Time: 9 am - 5 pm ||\r\n\r\nDay: Mon,Tue,Wed,Thus', 'https://www.google.com/maps/dir/\'\'/Bangladesh+Institute+of+Research+and+Rehabilitation+in+Diabetes+Endocrine+and+Metabolic+Disorders,+122,Kazi+Nazrul+Islam+Avenue,Shahbagh,Dhaka+1000,+Bangladesh/@23.7392998,90.3264612,21492m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x3755b8eb2cd9b849:0x7c213c924dd2d324!2m2!1d90.3965016!2d23.7393156'),
(3, 'Surgery', 'Dr. Abdullah Mansur', 'Apollo Hospital ||\r\nDoctor of Surgery ||\r\nRoom: 404 ||\r\n\r\nTreatment Time: 9 am - 5 pm ||\r\n\r\nDay: Mon,Tue,Fri', 'https://www.google.com/maps/place/Apollo+Hospitals+Dhaka/@23.8099115,90.4288689,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c7caac66819b:0x92cd609525d76d64!8m2!3d23.8099066!4d90.4310576'),
(4, 'Neurology ', 'Dr. Robertson', 'Neurology Hospital ||\r\nDoctor of Neurology ||\r\nRoom: 501 ||\r\n\r\nTreatment Time: 9 am - 5 pm ||\r\n\r\nDay: Mon,Tue,Fri,Sat', 'https://www.google.com/maps/place/Neurology+Foundation+Hospital/@23.7490169,90.3808505,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b04205347d:0x87e79c033e4530d8!8m2!3d23.749012!4d90.3830392');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bld_gp`
--
ALTER TABLE `bld_gp`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `hadith`
--
ALTER TABLE `hadith`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medi_loc`
--
ALTER TABLE `medi_loc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rare_medi`
--
ALTER TABLE `rare_medi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `map_id` (`map_id`),
  ADD KEY `map_id_2` (`map_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bld_gp`
--
ALTER TABLE `bld_gp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `hadith`
--
ALTER TABLE `hadith`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medi_loc`
--
ALTER TABLE `medi_loc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rare_medi`
--
ALTER TABLE `rare_medi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bld_gp`
--
ALTER TABLE `bld_gp`
  ADD CONSTRAINT `BG` FOREIGN KEY (`l_id`) REFERENCES `location` (`ID`);

--
-- Constraints for table `rare_medi`
--
ALTER TABLE `rare_medi`
  ADD CONSTRAINT `m12` FOREIGN KEY (`map_id`) REFERENCES `medi_loc` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
