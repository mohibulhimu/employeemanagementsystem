-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 08:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_contact_details`
--

CREATE TABLE `emp_contact_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `addressLine1` varchar(255) NOT NULL,
  `addressLine2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_contact_details`
--

INSERT INTO `emp_contact_details` (`id`, `user_id`, `addressLine1`, `addressLine2`, `city`, `thana`, `zip_code`, `country`, `mobile`) VALUES
(14, 44, 'address1', 'address2', 'city', 'thana', 1000, 'Bangladesh', '010000000');

-- --------------------------------------------------------

--
-- Table structure for table `emp_personal_details`
--

CREATE TABLE `emp_personal_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `emp_role_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `midle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_personal_details`
--

INSERT INTO `emp_personal_details` (`id`, `user_id`, `emp_role_id`, `first_name`, `midle_name`, `last_name`, `username`, `gender`, `nationality`, `marital_status`, `dob`, `avatar`) VALUES
(12, 44, 2, 'Employe', 'middle', 'last', 'employe1', 'Female', 'Bangladeshi', 'Married', '2000-01-01', 'http://[::1]/emp/uploads/fdsv_(17).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_qualifications`
--

CREATE TABLE `emp_qualifications` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `ssc` int(255) NOT NULL,
  `hsc` int(255) NOT NULL,
  `graduation` int(255) NOT NULL,
  `post_graduation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_qualifications`
--

INSERT INTO `emp_qualifications` (`id`, `user_id`, `ssc`, `hsc`, `graduation`, `post_graduation`) VALUES
(7, 44, 5, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_id` int(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `user_role_id`, `created`) VALUES
(1, 'admin', 'admin@mail.com', 'admin', 1, '2018-10-05 17:54:53'),
(44, 'employee', 'employee@mail.com', 'employee', 2, '2018-10-05 17:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(255) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_contact_details`
--
ALTER TABLE `emp_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_personal_details`
--
ALTER TABLE `emp_personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_qualifications`
--
ALTER TABLE `emp_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_contact_details`
--
ALTER TABLE `emp_contact_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_personal_details`
--
ALTER TABLE `emp_personal_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_qualifications`
--
ALTER TABLE `emp_qualifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
