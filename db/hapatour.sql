-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 01:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hapatour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `cli_id` int(11) NOT NULL,
  `Names` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `site` varchar(200) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `adult` int(11) NOT NULL,
  `youth` int(11) NOT NULL,
  `kids` int(11) NOT NULL,
  `status` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`cli_id`, `Names`, `phone`, `site`, `cin`, `cout`, `adult`, `youth`, `kids`, `status`) VALUES
(7, 'MUKUNZI Emery', '0788888888', 'NYUNGWE', '2020-05-12', '2020-06-06', 2, 1, 3, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `ma_id` int(11) NOT NULL,
  `names` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('read','unread') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`ma_id`, `names`, `phone`, `email`, `message`, `date`, `status`) VALUES
(1, 'John Doe', '0788665566', 'philbert@gmail.com', 'This website is very helpful to all the people around the world, and we really want to visit Rwanda in your services. Thank you very much!!!', '2020-05-08 13:56:21', 'read'),
(2, 'Peter Patrick', '0788665566', 'philbert@gmail.com', 'This website is very helpful to all the people around the world, and we really want to visit Rwanda in your services. Thank you very much!!!', '2020-07-31 14:37:46', 'read'),
(3, 'MUKIZA Aime', '0788665566', 'philbert@gmail.com', 'This website is very helpful to all the people around the world, and we really want to visit Rwanda in your services. Thank you very much!!!', '2020-05-08 13:56:21', 'read'),
(4, 'MUKUNZI Emery', '0788888888', 'MUKUNZI @gmail.com', 'This is a sample message', '2020-07-29 16:17:35', 'read'),
(5, 'Kayitare Olivier', '0780254568', 'olivikayitare@gmail.com', 'hello here', '2020-05-22 09:27:09', 'read'),
(6, 'Tumushime Leonard', '0789178645', 'leonard@gmail.com', 'Services and products provided by HAPA TOURS AND TRAVEL AGENCY will initially include pre-arranged tours, custom packages according to clients’ specifications, travel consultation, and as time progresses making reservations for lodging amongst other related services. HAPA TOURS AND TRAVEL AGENCY seeks to differentiate itself as a leading eco-photography and video coverage operator as an extra service to clients. ', '2020-07-29 16:19:01', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`ma_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
