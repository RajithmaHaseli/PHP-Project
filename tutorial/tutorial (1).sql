-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 07:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `email`, `destination`, `departure_date`, `return_date`) VALUES
('Ranjani Senavirathne ', 'raji@gmail.com', 'America', '2024-01-26', '2024-01-28'),
('Ranjani Senavirathne ', 'raji@gmail.com', 'America', '2024-01-21', '2024-01-21'),
('Rajithma ', 'raji@gmail.com', 'jjj', '2024-01-20', '2024-01-28'),
('Yamesh Eshan', 'sasindilisara@gmail.com', 'America', '2024-01-21', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `employeers`
--

CREATE TABLE `employeers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `flight` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeers`
--

INSERT INTO `employeers` (`id`, `name`, `flight`, `rank`, `created_at`) VALUES
(12, 'N.C.Perera', 'F003', 'Pilot', '2024-01-07 16:43:00'),
(13, 'Tamidu Jayawardhane', 'F003', 'Pilot', '2024-01-07 16:43:45'),
(14, 'Rajithma Haseli', 'F009', 'AirHostes', '2024-01-07 16:43:59'),
(15, 'Yamesh Eshan', 'F009', 'Pilot', '2024-01-07 16:44:13'),
(16, 'Hashan Jasinghe', 'F006', 'Co-Pilot', '2024-01-07 16:44:30'),
(17, 'Kavindya Sandeepani', 'F006', 'AirHostes', '2024-01-07 16:44:47'),
(18, 'S.S.Amali', 'F002', 'AirHostes', '2024-01-07 16:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `flight_scheduling`
--

CREATE TABLE `flight_scheduling` (
  `id` int(255) NOT NULL,
  `flight_number` varchar(100) NOT NULL,
  `departure_place` varchar(100) NOT NULL,
  `departure_time` time NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_place` varchar(100) NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_scheduling`
--

INSERT INTO `flight_scheduling` (`id`, `flight_number`, `departure_place`, `departure_time`, `departure_date`, `arrival_place`, `arrival_date`, `arrival_time`) VALUES
(7, 'F001', 'Colombo', '22:12:00', '2024-01-04', 'Japan', '2024-01-12', '22:20:00'),
(15, 'F009', 'Colombo', '03:02:00', '2024-01-07', 'NewZeland', '2024-01-09', '22:32:00'),
(16, 'F009', 'Colombo', '03:00:00', '2024-01-09', 'Australia', '2024-01-10', '02:06:00'),
(17, 'F007', 'Colombo', '02:00:00', '2024-01-14', 'Japan', '2024-01-15', '02:06:00'),
(18, 'F007', 'Colombo', '04:00:00', '2024-01-10', 'Korea', '2024-01-17', '22:05:00'),
(19, 'F002', 'Colombo', '04:03:00', '2024-01-14', 'China', '2024-01-21', '04:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `register_new`
--

CREATE TABLE `register_new` (
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_new`
--

INSERT INTO `register_new` (`firstname`, `lastname`, `username`, `password`) VALUES
('Rajithma', 'Haseli', 'haseli', '1234'),
('hashan', 'miyuru', 'hmb2001', 'HM20011111'),
('Rajithma', 'Haseli', 'haseli', '12'),
('Rajithma', 'premarathne', 'haseli', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_rating` int(100) NOT NULL,
  `user_review` varchar(100) NOT NULL,
  `datetime` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(8, 'Emilila Jade', 4, 'I had a very good expierience with THERKY airline.The customer service is really good.The customer s', 1704630951),
(9, 'Jennifer Luna', 5, 'THERKY airline were efficient user friendly and everything that was plannned by them went smoothly.W', 1704631126),
(10, 'Adan Charlie', 5, 'Easy to book and you can pick and choose  hwo to build your holiday .Great service ,excellent value.', 1704631225);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeers`
--
ALTER TABLE `employeers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_scheduling`
--
ALTER TABLE `flight_scheduling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeers`
--
ALTER TABLE `employeers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `flight_scheduling`
--
ALTER TABLE `flight_scheduling`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
