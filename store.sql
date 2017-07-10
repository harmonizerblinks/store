-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 05:35 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `resident` varchar(500) NOT NULL,
  `pix` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `date_of_birth`, `phone`, `email`, `gender`, `position`, `resident`, `pix`, `employee_id`, `salary`, `date`) VALUES
(1, 'Harmony Alabi Ubani', '03/04/1995', '+233209279447', 'harmonizer@gmail.com', 'male', 'Manager', 'No 11 old sapele road, benin city, edo state. ', 'hh.jpg', 'EMP/120518', '200000', '17-04-21'),
(2, 'KELEBU FAVOUR', '03/07/1991', '08074066224', 'favour@gmail.com', 'male', 'IT manager', 'no 11 olympic street, off caprice street, accra', '6909_1113554675346714_2775982422674322681_n.jpg', 'EMP/050811', '80000', '17-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `purchase_price` varchar(100) NOT NULL,
  `gain` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_id`, `items_name`, `price`, `purchase_price`, `gain`, `date`, `time`, `user`) VALUES
(1, 'ITM0703073725', 'Milk', '25', '20', '5', '2017-07-03', '07:47:41', 'Steve Osei'),
(2, 'ITM0703081957', 'Iphone', '2500', '2000', '500', '2017-07-03', '08:20:25', 'innocent'),
(3, 'ITM0703105031', 'Coke 1.5 ltrs', '250', '200', '50', '2017-07-03', '10:51:19', 'Steve Osei'),
(4, 'ITM0706013759', 'fanta', '15', '10', '5', '2017-07-06', '01:38:14', 'Inventory Staff'),
(5, 'ITM0706013814', 'wine', '20', '15', '5', '2017-07-06', '01:38:30', 'Inventory Staff'),
(6, 'ITM0706013830', 'geremi', '120', '100', '20', '2017-07-06', '01:38:49', 'Inventory Staff'),
(7, 'ITM0706013849', 'Favour', '2', '1', '1', '2017-07-06', '01:39:11', 'Inventory Staff'),
(8, 'ITM0706013911', 'innocent', '30', '20', '10', '2017-07-06', '01:40:03', 'Inventory Staff'),
(9, 'ITM0706014003', 'something', '100', '50', '50', '2017-07-06', '01:40:13', 'Inventory Staff'),
(10, 'ITM0706014013', 'Steve', '120', '100', '20', '2017-07-06', '01:40:35', 'Inventory Staff'),
(11, 'ITM0706014035', 'credit', '100', '50', '50', '2017-07-06', '01:41:16', 'Inventory Staff'),
(12, 'ITM0706014116', 'computer', '300', '200', '100', '2017-07-06', '01:41:26', 'Inventory Staff'),
(13, 'ITM0706014126', 'spoon', '30', '20', '10', '2017-07-06', '01:41:36', 'Inventory Staff'),
(14, 'ITM0706014136', 'drink', '600', '500', '100', '2017-07-06', '01:41:58', 'Inventory Staff');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE IF NOT EXISTS `returns` (
  `id` int(11) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `crate_quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`id`, `item_id`, `items_name`, `price`, `crate_quantity`, `amount`, `date`) VALUES
(1, 'ITM0420094325', 'MALTAL GU', '166.66666666667', '24', '4000', '2017-04-20/Thursday/09:49:57am'),
(2, 'ITM0420094648', 'MALT', '125', '24', '3000', '2017-04-20/Thursday/09:47:04pm'),
(3, 'ITM0420094704', 'COKE', '50', '24', '1200', '2017-04-20/Thursday/09:47:27pm'),
(4, 'ITM0420094727', 'FANTA', '50', '24', '1200', '2017-04-20/Thursday/09:48:15pm'),
(5, 'ITM0421102239', 'SPIRIT', '50', '24', '1200', '2017-04-21/Friday/10:23:03am'),
(6, 'ITM0421105537', 'MALTAL', '125', '24', '3000', '2017-04-21/Friday/10:55:55am');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL,
  `sales_id` varchar(100) NOT NULL,
  `cust_phone` varchar(50) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `gain` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_id`, `cust_phone`, `items_name`, `price`, `quantity`, `total_amount`, `gain`, `date`, `time`, `user`) VALUES
(1, 'SAL0703104402', '0238288675', 'Iphone', '2500', '20', '50000', '10000', '2017-07-03', '10:44:06', 'Inventory Staff'),
(2, 'SAL0703105235', 'steve', 'Coke 1.5 ltrs', '250', '2', '500', '100', '2017-07-03', '10:53:35', 'Steve Osei'),
(3, 'SAL0703111849', '0238288675', 'Iphone', '2500', '20', '50000', '10000', '2017-07-03', '11:19:56', 'Inventory Staff'),
(4, 'SAL0703112248', '', 'Coke 1.5 ltrs', '250', '1', '250', '50', '2017-07-03', '11:23:13', 'Steve Osei'),
(5, 'SAL0704070116', '0238288675', 'Iphone', '2500', '10', '25000', '5000', '2017-07-04', '07:09:21', 'Inventory Staff'),
(6, 'SAL0704084444', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-04', '08:45:49', 'Inventory Staff'),
(7, 'SAL0704092617', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-04', '09:26:29', 'Inventory Staff'),
(8, 'SAL0704092813', '0238288675', 'Coke 1.5 ltrs', '250', '1', '250', '50', '2017-07-04', '09:28:49', 'Inventory Staff'),
(9, 'SAL0704092932', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-04', '09:29:40', 'Inventory Staff'),
(10, 'SAL0704093343', '0238288675', 'Milk', '25', '1', '25', '5', '2017-07-04', '09:33:52', 'Inventory Staff'),
(11, 'SAL0704093416', '356789034567', 'Milk', '25', '1', '25', '5', '2017-07-04', '09:34:32', 'Inventory Staff'),
(12, 'SAL0704094225', '356789034567', 'Milk', '25', '1', '25', '5', '2017-07-04', '09:42:34', 'Inventory Staff'),
(13, 'SAL0704095100', '0238288675', 'Milk', '25', '1', '25', '5', '2017-07-04', '09:51:16', 'Inventory Staff'),
(14, 'SAL0705124741', '023828867554', 'Milk', '25', '1', '25', '5', '2017-07-05', '01:37:16', 'Inventory Staff'),
(15, 'SAL0705013717', '356789034567', 'Coke 1.5 ltrs', '250', '1', '250', '50', '2017-07-05', '01:37:40', 'Inventory Staff'),
(16, 'SAL0705014555', '023828', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '01:46:10', 'Inventory Staff'),
(17, 'SAL0705014610', '356789034567', 'Milk', '25', '1', '25', '5', '2017-07-05', '01:46:52', 'Inventory Staff'),
(18, 'SAL0705020050', '0238288675', 'Iphone', '2500', '2', '5000', '1000', '2017-07-05', '02:01:10', 'Inventory Staff'),
(19, 'SAL0705020347', '023828', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '02:03:55', 'Inventory Staff'),
(20, 'SAL0705020938', '2514', 'Milk', '25', '1', '25', '5', '2017-07-05', '02:10:02', 'Inventory Staff'),
(21, 'SAL0705021553', '23798246', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '02:17:27', 'Inventory Staff'),
(22, 'SAL0705022934', 'harmony', 'Iphone', '2500', '2', '5000', '1000', '2017-07-05', '02:30:00', 'Inventory Staff'),
(23, 'SAL0705024838', 'fhgbdjk', 'Iphone', '2500', '2', '5000', '1000', '2017-07-05', '02:48:53', 'Inventory Staff'),
(24, 'SAL0705024951', 'steve', 'Milk', '25', '2', '50', '10', '2017-07-05', '02:50:29', 'Inventory Staff'),
(25, 'SAL0705025900', 'harmony', 'Iphone', '2500', '2', '5000', '1000', '2017-07-05', '03:03:44', 'Inventory Staff'),
(26, 'SAL0705044832', 'steve', 'iphone', '2500', '2', '5000', '1000', '2017-07-05', '04:48:52', 'Inventory Staff'),
(27, 'SAL0705045018', 'dsgs', 'Iphone', '2500', '2', '5000', '1000', '2017-07-05', '04:50:47', 'Inventory Staff'),
(28, 'SAL0705053039', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '06:01:39', 'Inventory Staff'),
(29, 'SAL0705060340', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '06:03:49', 'Inventory Staff'),
(30, 'SAL0705060350', '356789034567', 'Milk', '25', '2', '50', '10', '2017-07-05', '06:04:32', 'Inventory Staff'),
(31, 'SAL0705064954', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '08:05:55', 'Inventory Staff'),
(32, 'SAL0705080705', '0238288675', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '08:07:15', 'Inventory Staff'),
(33, 'SAL0705081541', 'steve', 'Iphone', '2500', '1', '2500', '500', '2017-07-05', '08:16:46', 'Inventory Staff'),
(34, 'SAL0705092507', '023828', 'Coke 1.5 ltrs', '250', '1', '250', '50', '2017-07-05', '09:25:29', 'Inventory Staff'),
(35, 'SAL0705101844', 'romeo', 'Coke 1.5 ltrs', '250', '2', '500', '100', '2017-07-05', '10:19:05', 'Inventory Staff');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `gain` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `stock_id`, `items_name`, `quantity`, `gain`, `amount`, `date`) VALUES
(1, 'STk0703081455', 'Milk', '59', '295', '1475', '2017-07-03'),
(2, 'STk0703090000', 'Iphone', '127', '63500', '317500', '2017-07-03'),
(3, 'STk0703105135', 'Coke 1.5 ltrs', '2', '100', '500', '2017-07-03'),
(4, 'STK0706015141', 'computer', '120', '12000', '36000', '2017-07-06'),
(5, 'STK0706015150', 'credit', '540', '27000', '54000', '2017-07-06'),
(6, 'STK0706015159', 'drink', '400', '40000', '240000', '2017-07-06'),
(7, 'STK0706025237', 'Favour', '40', '40', '80', '2017-07-06'),
(8, 'STK0706041525', 'wine', '20', '100', '400', '2017-07-06'),
(9, 'STK0706041703', 'spoon', '1000', '10000', '30000', '2017-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `stock_record`
--

CREATE TABLE IF NOT EXISTS `stock_record` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `gain` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_record`
--

INSERT INTO `stock_record` (`id`, `stock_id`, `items_name`, `quantity`, `gain`, `amount`, `date`, `time`, `user`) VALUES
(1, 'STk0703081455', 'Milk', '20', '100', '500', '2017-07-03', '00:00:00', ''),
(2, 'STk0703090000', 'Iphone', '200', '100000', '500000', '2017-07-03', '00:00:00', ''),
(3, 'STK0706025237', 'Favour', '20', '20', '40', '2017-07-06', '04:15:00', ''),
(4, 'STK0706041508', 'Favour', '20', '20', '40', '2017-07-06', '04:15:25', 'inventory'),
(5, 'STK0706041525', 'wine', '20', '100', '400', '2017-07-06', '04:16:10', 'inventory'),
(6, 'STK0706041703', 'spoon', '1000', '10000', '30000', '2017-07-06', '04:17:12', 'inventory');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE IF NOT EXISTS `supply` (
  `id` int(11) NOT NULL,
  `supply_id` varchar(100) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `gain` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `supply_id`, `cust_name`, `cust_phone`, `items_name`, `price`, `quantity`, `gain`, `total_amount`, `address`, `status`, `date`) VALUES
(6, 'SUP0511080254', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '120', '10', '20000', 'accra ghana ', 1, '2017-05-11/Thursday/08:03:27pm'),
(7, 'SUP0511080504', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '120', '10', '20000', 'no 11 flower aveune benin city ', 0, '2017-05-11/Thursday/08:09:24pm'),
(8, 'SUP0511082302', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '120', '10', '20000', 'no 11 flower aveune benin city ', 1, '2017-05-11/Thursday/08:24:14pm'),
(9, 'SUP0511082423', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '144', '12', '24000', 'no 11 flower aveune benin city ', 0, '2017-05-11/Thursday/08:24:31pm'),
(10, 'SUP0511083408', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '144', '12', '24000', 'no 11 flower aveune benin city ', 1, '2017-05-11/Thursday/08:34:23pm'),
(11, 'SUP0511083744', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '144', '12', '24000', 'no 11 flower aveune benin city ', 1, '2017-05-11/Thursday/08:37:47pm'),
(12, 'SUP0511083751', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '180', '15', '30000', 'no 11 flower aveune benin city ', 0, '2017-05-11/Thursday/08:39:17pm'),
(13, 'SUP0511084046', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '180', '15', '30000', 'no 11 flower aveune benin city ', 1, '2017-05-11/Thursday/08:40:49pm'),
(14, 'SUP0511084318', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '180', '15', '30000', 'no 11 flower aveune benin city ', 1, '2017-05-11/Thursday/08:43:28pm'),
(15, 'SUP0511084433', 'Harmony Alabi Ubani', '0238288675', 'HARMONY', '', '180', '15', '30000', 'no 11 flower aveune benin city ', 0, '2017-05-11/Thursday/08:44:46pm'),
(16, 'SUP0511091818', 'john kofo', '0865445672', 'Queen', '5000', '240', '10', '50000', '11 labadi road, accra ghana.', 0, '2017-05-11/Thursday/09:19:41pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `emails`, `password`, `privilege`, `full_name`) VALUES
(1, 'EMP/120518', 'Blinks', 'odions', 1, 'Harmony Alabi'),
(2, 'EMP/120518', 'inventory', 'inventory', 1, 'Inventory Admin'),
(3, '', 'blinkz', 'password', 3, 'Bliks Alabi'),
(4, '1234567', 'innodb', 'inno', 2, 'innocent'),
(5, '1234567', 'stevie', 'stevie1', 2, 'Steve Osei');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kjkjd` (`employee_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_record`
--
ALTER TABLE `stock_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `h` (`emails`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stock_record`
--
ALTER TABLE `stock_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
