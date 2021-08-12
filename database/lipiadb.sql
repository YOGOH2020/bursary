-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 08:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lipiadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `applicant_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `county` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `ugroup` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_id`, `first_name`, `middle_name`, `last_name`, `email`, `county`, `username`, `passwd`, `ugroup`) VALUES
(1, 'Michael', 'Njenga', 'Mbuthia', 'mikenjenga2019@gmail.com', 'Kisumu', 'mike', 'mike2019', 'Applicant'),
(2, 'Anthony', 'Injila', 'Dev', 'injilaanthony@gmail.com', 'Siaya', 'injila', 'injila2019', 'Applicant'),
(3, 'Stephen', 'Njenga', 'Mwangi', 'steveminds@yahoo.com', 'Siaya', 'steve', 'steve2019', 'Applicant'),
(4, 'Walter', 'Anyika', 'Indeche', 'walter@gmail.com', 'Busia', 'walter', 'walter2019', 'Applicant');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_approvals`
--

CREATE TABLE `applicant_approvals` (
  `approval_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `ugroup` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `approval_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_approvals`
--

INSERT INTO `applicant_approvals` (`approval_id`, `applicant_id`, `first_name`, `middle_name`, `last_name`, `email`, `county`, `username`, `passwd`, `ugroup`, `status`, `approval_date`) VALUES
(1, 1, 'Michael', 'Njenga', 'Mbuthia', 'mikenjenga2019@gmail.com', 'Kisumu', 'mike', 'mike2019', 'Applicant', 'Approved', '2019-07-19'),
(2, 3, 'Stephen', 'Njenga', 'Mwangi', 'steveminds@yahoo.com', 'Siaya', 'steve', 'steve2019', 'Applicant', 'Declined', '2019-07-21'),
(3, 4, 'Walter', 'Anyika', 'Indeche', 'walter@gmail.com', 'Busia', 'walter', 'walter2019', 'Applicant', 'Declined', '2019-07-22'),
(4, 4, 'Walter', 'Anyika', 'Indeche', 'walter@gmail.com', 'Busia', 'walter', 'walter2019', 'Applicant', 'Approved', '2019-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `bursary_applicants`
--

CREATE TABLE `bursary_applicants` (
  `applicant_id` int(11) NOT NULL,
  `application_date` date NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `tel_number` varchar(50) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `nok_name` varchar(50) DEFAULT NULL,
  `nok_tel_number` varchar(50) DEFAULT NULL,
  `nok_relationship` varchar(50) DEFAULT NULL,
  `county` varchar(50) NOT NULL,
  `institution_name` varchar(50) DEFAULT NULL,
  `fees_payable` bigint(20) DEFAULT NULL,
  `fees_paid` bigint(20) DEFAULT NULL,
  `balance` bigint(20) DEFAULT NULL,
  `reasons` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bursary_applicants`
--

INSERT INTO `bursary_applicants` (`applicant_id`, `application_date`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `tel_number`, `email_address`, `nok_name`, `nok_tel_number`, `nok_relationship`, `county`, `institution_name`, `fees_payable`, `fees_paid`, `balance`, `reasons`) VALUES
(34, '2019-07-22', 'Walter', 'Anyika', 'Indeche', 'Male', '1990-07-20', '0706814228', 'walter@gmail.com', 'sdfasddaSD', '32465763213', 'Father', 'Busia', 'jkuat', 150000, 50000, 0, ''),
(35, '2019-07-22', 'Walter', 'Anyika', 'Indeche', 'Male', '1990-07-20', '0706814228', 'walter@gmail.com', 'sdfasddaSD', '32465763213', 'Father', 'Busia', 'jkuat', 150000, 50000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `user_group` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `county`, `username`, `passwd`, `user_group`) VALUES
(1, 'Jackson', 'Mbuthia', 'Mwangi', 'Nairobi', 'jack', 'jack2019', 'Systems Administrator'),
(2, 'George', 'Gichimu', 'Njenga', 'Mombasa', 'george', 'george2019', 'Staff'),
(3, 'Michael', 'Otieno', 'Okumu', 'Kisumu', 'mike', 'mike2019', 'Staff'),
(4, 'Lucy', 'Koi', 'Karanja', 'Busia', 'lucy', 'lucy2019', 'Staff'),
(5, 'Vincent', 'Wambua', 'Muli', 'Kisumu', 'vincent', 'vincent2019', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `applicant_approvals`
--
ALTER TABLE `applicant_approvals`
  ADD PRIMARY KEY (`approval_id`);

--
-- Indexes for table `bursary_applicants`
--
ALTER TABLE `bursary_applicants`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applicant_approvals`
--
ALTER TABLE `applicant_approvals`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bursary_applicants`
--
ALTER TABLE `bursary_applicants`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
