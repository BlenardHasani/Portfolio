-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 10:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janartest`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirmpassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`ID`, `name`, `lastname`, `email`, `password`, `confirmpassword`) VALUES
(9, 'blend', 'blend', 'blend', '$2y$10$CzIZE.tVZES66HkYwrPDAOFMJVVUkjSRUR0bN3NRagJPCMl90zUnm', '$2y$10$Y4kerTo3U84Wpx57IpnNZOHKrQTMji/M14Sw.LpZPkwW4S1jASHie'),
(10, 'blenard', 'blenard', 'blenard', '$2y$10$.ngT5MSw.LI0cpNBepi42uH1DVeHmgzKBwYh70T0e4JCEVhvyirja', '$2y$10$pKAiDOhm0sLYuFU72p6rauUaZZQx.XRmiHJRKoA/hsLFfiiNLonIC'),
(11, '1', '1', '1', '$2y$10$/KSWzGHHsPUsHpT1StT2quf4n8j2dGx81lX6Qb/xpYJjFvbIr2Eba', '$2y$10$ilDShSP.20G0mV0.i3eo1uTDmyBFUj160paTeCvW4NUTTu/P8/hIe'),
(12, 'blenard', 'hasani', '12', '$2y$10$obHAJZfNQqCEf.SY7T2q..WY0xoKrLXdiCWPJuQqCoJknzuISzYsK', '$2y$10$osB8QKgYdV5QJ81Hg5jU8.kej1AL0Im.2.l6JSYAhPBFp56axN4hi'),
(13, 'blenard', 'hasani', '321', '$2y$10$ykyJKAyYLllm6PfULmGnyuJFMUTNmTB5rqNTVCcxwYclQxZhF44Zy', '$2y$10$9U415Ea1ZT83kQL4KKeHDu9Ml9EFP7APp965l0VkPF1dfCl4qfm8W'),
(14, '1', '1', '1', '$2y$10$YxrDjGEwa6E7WQYdi7EyguiIwHadR6wMWbJyfEqgecHuhwrQc.7lO', '$2y$10$AFdCiqukoc3lM1gbxZ2rmuotVLc5VGGpbt9vqlwnam41O9JfDtbsq'),
(15, '1', '1', '1', '$2y$10$yTtp.mSwk5R/FMQcxWpvnOulQhVW.x95bWzz1HpDfO8PzE6az0PIu', '$2y$10$vRd41M0NYAzQ.J7IyYMExuyb8T9uJ3c7TbpJc76f8tY9UroxkM8Tm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
