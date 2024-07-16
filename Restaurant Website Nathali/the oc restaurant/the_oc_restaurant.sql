-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the oc restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `customer name` varchar(100) NOT NULL,
  `booking time` time(5) NOT NULL,
  `booking date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`customer name`, `booking time`, `booking date`) VALUES
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00'),
('', '00:00:00.00000', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `phone`, `date`, `quantity`) VALUES
('Hansini Godapala', 'fdzhh@gmail.com', 6786786, '2023-12-28', 4),
('Kamala Perera', 'Kamala@gmail.com', 771234569, '2023-12-30', 7),
('Gajan Fernando', 'Gajan123@gmail.com', 712384576, '2024-01-02', 10),
('Wageeshaa Dissanayaka', 'wagee@gmail.com', 779748265, '2024-01-06', 5),
('Hansini Godapala', 'fdzhh@gmail.com', 6786786, '2023-12-28', 4),
('Kamala Perera', 'Kamala@gmail.com', 771234569, '2023-12-30', 7),
('Gajan Fernando', 'Gajan123@gmail.com', 712384576, '2024-01-02', 10),
('Wageeshaa Dissanayaka', 'wagee@gmail.com', 779748265, '2024-01-06', 5),


-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Your Order` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Address`, `Email`, `Number`, `Quantity`, `Your Order`, `Name`) VALUES
('', '', 0, 0, '', ''),
('123,Kandy', 'anne@gmail.com', 2147483647, 2, '', 'Anne Fernando'),
('67,Polgolla', 'Vinon123@gmail.com', 771485976, 3, '', 'Vinon Thilakarathne'),
('67,Colombo', 'Jessi89@gmail.com', 114568729, 8, '', 'Jessica Rodrigo'),
('56, Polgolla', 'para23@gmail.com', 117894825, 5, '', 'Parami Thennakon'),
('45, Ampitiya', 'Anji@gmail.com', 114587925, 1, '', 'Anjalee'),
('mashi@gmail.com', 'mashii@gmail.com', 779845674, 6, '', 'Mashi'),
('', '', 0, 0, '', ''),
('237,Ampara', 'anny@gmail.com', 77123854, 5, '', 'Annaa');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`) VALUES
('Naduni', '$2y$10$QS/tMN4NiRvRgmMwNL6zy.onh3m2xKGBJ8ykc5q5XRg1lT0eLEJny'),
('Gimhani', '$2y$10$L831cVtshUDjD9hZuBPMA.QfoVa6/p0pzsZC379YUFyCg9OQ3kyd2'),
('Peter', '$2y$10$Hn6fpeNyaVCw0s4OOQOnmOU1RRvnYgEsqdDHnENlAJugOx.AgkRVK'),
('Joseph', '$2y$10$kT82l7n8vhotdXQGrDPo3uX5Lr2P11V1xH4IxqOvWwb1I7o7J6QXy'),
('Priya', '$2y$10$YPUu4oTh9eepLMo.syRm5.i4pM0i56RSG8xGms0NiuotkWlmPTEhC'),
('Priya', '$2y$10$nYN8HNh9LDoLq8AifsBZlOvKZYtBEsaQlM7K85FZCYexL8WZLVvTW'),
('Priya', '$2y$10$RkcFK8bOp4duuiGTKeUEremqSK09EFltNbZWa05s3sr3cw.KcHgRi'),
('Priya', '$2y$10$S/DnCGYHH0E9/zVQhjpFSOZnQqF0bjiUwtocxo5jO/VDQ.ZiSSnza'),
('Manisha', '$2y$10$AzhbyjQoWkE7Ocg3KUbwcekRBsdDaFZX322MWLsf9pG1deahqpF52'),
('Ama', '$2y$10$6Pk7IDoGWmpzCt0LEVtekei34LOmGeUxDeE07CG3IGE6iRoJEpfEy');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time(5) NOT NULL,
  `guests` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `email`, `phone`, `date`, `time`, `guests`) VALUES
('Hansini Godapala', 'fdzhh@gmail.com', 6786786, '2023-12-28', '12:47:00.00000', 4),
('Kamala Perera', 'Kamala@gmail.com', 771234569, '2023-12-30', '16:00:00.00000', 7),
('Gajan Fernando', 'Gajan123@gmail.com', 712384576, '2024-01-02', '18:55:00.00000', 10),
('Wageeshaa Dissanayaka', 'wagee@gmail.com', 779748265, '2024-01-06', '15:00:00.00000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user login`
--

CREATE TABLE `user login` (
  `Username` text NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user login`
--

INSERT INTO `user login` (`Username`, `Password`) VALUES
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password'),
('test_user', 'test_password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
