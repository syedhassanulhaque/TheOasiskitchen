-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 12:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_oasis_kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(5) NOT NULL,
  `category` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `dish_name`, `price`, `discount`, `category`, `type`) VALUES
(1, 'OvenstoryPizza', 300, 5, 'Pizza', 'Veg'),
(2, 'Domino\'s Pizza', 300, 10, 'Pizza', 'Veg'),
(4, 'Kwality Wall’s Dessert', 150, 30, 'Dessert', 'Veg'),
(5, 'Chicken Roll', 50, 10, 'Fast food', 'Non Veg'),
(6, 'Egg Roll', 40, 10, 'Fast food', 'Non Veg'),
(7, 'Cheese Roll', 50, 4, 'Roll', 'Veg'),
(8, 'Butter Scotch ice cream', 100, 8, 'Dessert', 'Non Veg'),
(9, 'Chicken Biryani', 150, 7, 'Biryani', 'Non Veg'),
(11, 'Veg Biryani', 100, 4, 'Biryani', 'Veg'),
(12, 'Mutton Biryani', 300, 10, 'Biryani', 'Non Veg'),
(13, 'Dosas', 199, 6, 'Fast Food', 'Veg'),
(14, 'Idli Sambar', 300, 38, 'south food', 'Veg'),
(15, 'Medu Vada', 95, 6, 'south food', 'Veg'),
(16, 'Uttapam', 658, 22, 'south food', 'Veg'),
(17, 'Hyderabadi Biryani', 455, 23, 'Biryani', 'Veg'),
(18, 'Sushi', 199, 4, 'Japanese food', 'Non Veg'),
(19, 'Tempura', 875, 33, 'Japanese food', 'Non Veg'),
(20, 'Kaiseki', 300, 23, 'Japanese food', 'Non Veg'),
(21, 'Haleem', 300, 10, 'Meal', 'Non Veg'),
(22, 'Nihari', 455, 56, 'Meal', 'Non Veg'),
(23, 'Shwarma', 234, 30, 'Fast Food', 'Non Veg'),
(24, 'Pasanda', 390, 78, 'south food', 'Non Veg');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `employee_password` varchar(300) NOT NULL,
  `mobile_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_password`, `mobile_no`) VALUES
(1, 'Rohan', '1', 980987564),
(2, 'Mohd Adil', '2', 905849708),
(3, 'FARHAN', '3', 87608095),
(4, 'Kshitij', '4', 449665607),
(5, 'Kumar', '5', 86757),
(6, 'Binod', '6', 7438888);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(15) NOT NULL,
  `ordered_by` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `mobileno` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `otp` int(10) NOT NULL,
  `reponded_by` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_email` text NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
