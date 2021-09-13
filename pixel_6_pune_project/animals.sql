-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 12:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animals`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal_info`
--

CREATE TABLE `animal_info` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(60) NOT NULL,
  `life` varchar(10) NOT NULL,
  `date_of_submission` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_info`
--

INSERT INTO `animal_info` (`id`, `name`, `category`, `img`, `description`, `life`, `date_of_submission`) VALUES
(1, 'pig.jpg', 'Omnivores', 'image/pig.jpg', 'pig is a omnivores animal', '1-5', '2021-09-12 06:57:41.758541'),
(2, 'DOG.jpg', 'Omnivores', 'image/DOG.jpg', 'Dog is a omnivores animal', '5-10', '2021-09-12 07:01:45.405078'),
(4, 'bear.jpg', 'Omnivores', 'image/bear.jpg', 'bear is a omnivores animal', '1-5', '2021-09-12 07:07:38.722470'),
(5, 'lion_image.jpg', 'Carnivores', 'image/lion_image.jpg', 'Lion is a carnivores animal', '1-5', '2021-09-12 07:38:21.202997'),
(6, 'cheetah.jpg', 'Carnivores', 'image/cheetah.jpg', 'cheetah is carnivorous animal', '5-10', '2021-09-12 07:39:41.615553'),
(7, 'panda.jpg', 'Carnivores', 'image/panda.jpg', 'panda is a canivores animal', '5-10', '2021-09-12 07:41:19.745066'),
(9, 'cow_image.jpg', 'herbivores', 'image/cow_image.jpg', 'cow is a herbivores animal', '10+', '2021-09-12 07:45:24.042443'),
(11, 'tiger.jpg', 'Carnivores', 'image/tiger.jpg', 'tiger is a carnivores animal', '10+', '2021-09-12 07:47:23.675698'),
(12, 'buffelo.jpg', 'herbivores', 'image/buffelo.jpg', 'buffello is a herbivores animal', '1-5', '2021-09-12 07:48:54.648115'),
(13, 'horse.jpg', 'herbivores', 'image/horse.jpg', 'horse is a herbivores animal', '5-10', '2021-09-12 07:50:11.109234'),
(14, 'zebra.jpg', 'herbivores', 'image/zebra.jpg', 'zebra is herbivores animal', '0-1', '2021-09-12 07:51:19.247361'),
(15, 'cat.jpg', 'Carnivores', 'image/cat.jpg', 'cat is carnivores animal', '1-5', '2021-09-12 07:52:27.220865'),
(18, 'crow.jpg', 'Carnivores', 'image/crow.jpg', 'crow  is carnivores animal', '0-1', '2021-09-12 07:54:30.442864');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(24, 'abc', 'abc123'),
(25, 'komal', 'komal123'),
(26, 'komal', 'komal123'),
(27, 'aditi', 'aditi1234'),
(28, 'akj@gmail.com', 'akj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal_info`
--
ALTER TABLE `animal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal_info`
--
ALTER TABLE `animal_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
