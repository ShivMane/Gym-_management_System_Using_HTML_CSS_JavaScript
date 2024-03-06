-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 11:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'vs@gmail.com', 'vs');

-- --------------------------------------------------------

--
-- Table structure for table `gym_add_acc`
--

CREATE TABLE `gym_add_acc` (
  `ID` int(2) NOT NULL,
  `Gym_name` varchar(20) NOT NULL,
  `Gym_mob` bigint(20) NOT NULL,
  `Gym_tele` bigint(20) NOT NULL,
  `Gym_email` varchar(65) NOT NULL,
  `Gym_open` time(6) NOT NULL,
  `Gym_close` time(6) NOT NULL,
  `Gym_city` varchar(20) NOT NULL,
  `Gym_address` varchar(75) NOT NULL,
  `Owner_name` varchar(60) NOT NULL,
  `Owner_mob` bigint(20) NOT NULL,
  `Owner_email` varchar(65) NOT NULL,
  `Owner_city` varchar(20) NOT NULL,
  `Owner_address` varchar(75) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_add_acc`
--

INSERT INTO `gym_add_acc` (`ID`, `Gym_name`, `Gym_mob`, `Gym_tele`, `Gym_email`, `Gym_open`, `Gym_close`, `Gym_city`, `Gym_address`, `Owner_name`, `Owner_mob`, `Owner_email`, `Owner_city`, `Owner_address`, `uname`, `pass`) VALUES
(6, 'muscle', 123456799, 23825456, 'muscle@gmail.com', '05:00:00.000000', '21:00:00.000000', 'LATUR', 'latur', 'shiv', 12346445, 'shiv@gmail.com', 'latur', 'laytur', 'gym1', 'gym1'),
(7, 'CrossFit', 1234546789, 2382255000, 'crossfit@gmail.com', '05:00:00.000000', '21:00:00.000000', 'Pune', 'Pune', 'Saif', 7894561230, 'saif@gmail.com', 'Pune', 'Pune,Maharashtra', 'gym2', 'gym2');

-- --------------------------------------------------------

--
-- Table structure for table `gym_equip`
--

CREATE TABLE `gym_equip` (
  `ID` int(3) NOT NULL,
  `Equip_name` varchar(100) NOT NULL,
  `Equip_qty` varchar(50) NOT NULL,
  `OID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_equip`
--

INSERT INTO `gym_equip` (`ID`, `Equip_name`, `Equip_qty`, `OID`, `image`) VALUES
(1, 'rr', '09', 6, 'upload/1_equipment.png');

-- --------------------------------------------------------

--
-- Table structure for table `gym_facili`
--

CREATE TABLE `gym_facili` (
  `ID` int(11) NOT NULL,
  `Facili_name` varchar(300) NOT NULL,
  `Facili_price` int(6) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_facili`
--

INSERT INTO `gym_facili` (`ID`, `Facili_name`, `Facili_price`, `OID`) VALUES
(2, 'Luxurious Changing Room', 2000, 0),
(4, 's', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gym_service`
--

CREATE TABLE `gym_service` (
  `ID` int(3) NOT NULL,
  `name_service` varchar(50) NOT NULL,
  `service_info` varchar(300) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_service`
--

INSERT INTO `gym_service` (`ID`, `name_service`, `service_info`, `OID`) VALUES
(1, 'Cardio area/exercise theatre', '  A cardio theater or cardio area includes many types of cardiovascular training-related equipment such as rowing machines, stationary exercise bikes, elliptical trainers and treadmills.', 0),
(3, 'yyy', '555 gsgws whgfww ytyfqw                     ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `gym_type`
--

CREATE TABLE `gym_type` (
  `ID` int(11) NOT NULL,
  `gym_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_type`
--

INSERT INTO `gym_type` (`ID`, `gym_type`) VALUES
(1, 'Body Building Gym'),
(3, 'Yoga Training');

-- --------------------------------------------------------

--
-- Table structure for table `mem_attendance`
--

CREATE TABLE `mem_attendance` (
  `ID` int(11) NOT NULL,
  `mem_id` int(100) NOT NULL,
  `In_time` varchar(100) NOT NULL,
  `out_time` varchar(100) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mem_attendance`
--

INSERT INTO `mem_attendance` (`ID`, `mem_id`, `In_time`, `out_time`, `OID`) VALUES
(1, 21, '2022-05-08 13:23:11', '', 7),
(2, 22, '2022-05-08 13:28:19', '2022-05-08 13:28:24', 7),
(3, 20, '2022-05-08 13:29:02', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ID` int(3) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ID`, `uname`, `pass`) VALUES
(1, 'shiv@gmail.com', 'shiv');

-- --------------------------------------------------------

--
-- Table structure for table `owner_add_mem`
--

CREATE TABLE `owner_add_mem` (
  `ID` int(3) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Occupation` varchar(60) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Emergency_mobile` bigint(20) NOT NULL,
  `Health_issue` varchar(100) NOT NULL,
  `Email` varchar(65) NOT NULL,
  `In_time` time(6) NOT NULL,
  `Out_time` time(6) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `OID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_add_mem`
--

INSERT INTO `owner_add_mem` (`ID`, `Firstname`, `Lastname`, `DOB`, `Occupation`, `Mobile`, `Emergency_mobile`, `Health_issue`, `Email`, `In_time`, `Out_time`, `City`, `Address`, `Gender`, `OID`, `image`) VALUES
(1, 'Vishwa', 'Khelage', '2003-03-17', 'student', 9970877284, 9518309568, 'None', 'vishwakhelage1703@gmail.com', '17:00:00.000000', '18:00:00.000000', 'Latur', 'Latur,Maharashtra', 'Male', 6, 'upload/1_member.png'),
(2, 'Shiv', 'Mane', '2004-12-08', 'student', 80108233681, 123456789, 'none', 'shivmane@gmail.com', '18:00:00.000000', '19:00:00.000000', 'Latur', 'Latur', 'Male', 6, 'upload/2_member.png');

-- --------------------------------------------------------

--
-- Table structure for table `owner_add_staff`
--

CREATE TABLE `owner_add_staff` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Work` varchar(60) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `emergency mob` bigint(20) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `email` varchar(65) NOT NULL,
  `duty start` time NOT NULL,
  `duty end` time NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `OID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_add_staff`
--

INSERT INTO `owner_add_staff` (`ID`, `firstname`, `lastname`, `DOB`, `Work`, `mobile`, `emergency mob`, `experience`, `email`, `duty start`, `duty end`, `city`, `address`, `gender`, `OID`, `image`) VALUES
(1, 'Shiv', 'Mane', '2004-12-08', 'Manager', 8010823681, 9970877284, '5yrs', 'shivmane@gmail.com', '10:00:00', '15:00:00', 'Latur', 'Latur', 'Male', 6, 'upload/2_staff.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `ID` int(11) NOT NULL,
  `staff_id` int(100) NOT NULL,
  `In_time` varchar(100) NOT NULL,
  `out_time` varchar(100) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`ID`, `staff_id`, `In_time`, `out_time`, `OID`) VALUES
(2, 5, '2022-05-03 15:16:31', '2022-05-03 15:16:43', 0),
(3, 2, '2022-05-03 15:16:52', '', 0),
(4, 5, '2022-05-03 15:16:58', '2022-05-03 15:17:21', 0),
(5, 5, '2022-05-03 15:24:34', '2022-05-03 15:24:55', 0),
(6, 8, '2022-05-08 13:34:43', '', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_add_acc`
--
ALTER TABLE `gym_add_acc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_equip`
--
ALTER TABLE `gym_equip`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_facili`
--
ALTER TABLE `gym_facili`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_service`
--
ALTER TABLE `gym_service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_type`
--
ALTER TABLE `gym_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mem_attendance`
--
ALTER TABLE `mem_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `owner_add_mem`
--
ALTER TABLE `owner_add_mem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `owner_add_staff`
--
ALTER TABLE `owner_add_staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gym_add_acc`
--
ALTER TABLE `gym_add_acc`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gym_equip`
--
ALTER TABLE `gym_equip`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gym_facili`
--
ALTER TABLE `gym_facili`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gym_service`
--
ALTER TABLE `gym_service`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gym_type`
--
ALTER TABLE `gym_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mem_attendance`
--
ALTER TABLE `mem_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_add_mem`
--
ALTER TABLE `owner_add_mem`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_add_staff`
--
ALTER TABLE `owner_add_staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
