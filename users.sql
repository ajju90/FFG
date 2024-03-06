-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 11:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `mobilenum` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`username`, `fname`, `lname`, `address`, `state`, `city`, `pincode`, `mobilenum`) VALUES
('vraut0761@gmail.com', 'Abiuh', 'lj', 'll;d', 'Maharastra', 'Nagpur', 431104, '65555'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431104, '999999999999'),
('vraut0761@gmail.com', 'Vitthal', 'Raut', 'dnhsgdf', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'sham', 'v', 'vv', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 's', 's', 's', 'Maharastra', 'Aurangabad', 0, 's'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('janu@gmail.com', 'sanku', 'bhai', 'sonari , Aurangabad', 'Maharastra', 'Aurangabad', 431151, '999999999999'),
('janu@gmail.com', 'sanku', 'bhai', 'sonari , Aurangabad', 'Maharastra', 'Aurangabad', 431151, '999999999999'),
('janu@gmail.com', 'sanku', 'bhai', 'sonari , Aurangabad', 'Maharastra', 'Pune', 431104, '999999999999'),
('janu@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431151, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Nagpur', 431151, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'sonari , Aurangabad', 'Maharastra', 'Nagpur', 431005, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Nagpur', 431005, '65555'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431005, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431005, '65555'),
('ajay@gmail.com', 'Ajay', 'Wankhade', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '9834620464'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431005, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431005, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431005, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '999999999999'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431151, '999999999999'),
('shubham@gmail.com', 'shubham', 'kadam', 'beed', 'Maharastra', 'Pune', 431005, '999999999999'),
('shubham@gmail.com', 'Vitthal', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431151, '999999999999'),
('shubham@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Pune', 431104, '9834620464'),
('janu@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431104, '9834620464'),
('la@gmail.com', 's', 'd', 'sonari', 'Maharastra', 'Aurangabad', 431151, '9156850266'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431005, '9156850266'),
('Avinash', 'avinash', 'raut', 'sonari , Aurangabad', 'Maharastra', 'Aurangabad', 431104, '9834620464'),
('vraut0761@gmail.com', 'avinash', 'raut', 'aurangabad', 'Maharastra', '1', 431104, '999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Avinash', 'Admin@83083'),
('Avinash', 'Admin@83083');

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `username` varchar(20) NOT NULL,
  `id` varchar(10) NOT NULL,
  `grain` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`username`, `id`, `grain`, `price`, `weight`, `seller`, `photo`) VALUES
('Avinash', '24', 'Wheat', '450', '25kg', 'vraut0761@gmail.com', 'images (39).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ordrs`
--

CREATE TABLE `ordrs` (
  `username` varchar(20) NOT NULL,
  `id` varchar(10) NOT NULL,
  `grain` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Placed',
  `seller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordrs`
--

INSERT INTO `ordrs` (`username`, `id`, `grain`, `price`, `weight`, `photo`, `address`, `date`, `status`, `seller`) VALUES
('shubham@gmail.com', '1', 'Wheat', '200', '50kg', 'download.jpg', '.shubham kadam <br> beed <br> Pune Maharastra  431005<br> 999999999999', '2023-02-23 00:25:25', 'Delivered', ''),
('shubham@gmail.com', '21', 'Wheat', '1000000', '25kg', 'photo-1612869538502-b5baa439abd7.jpeg', '.avinash raut <br> aurangabad <br> Pune Maharastra  431104<br> 9834620464', '2023-02-23 01:40:28', 'Delivered', 'vraut0761@gmail.com'),
('shubham@gmail.com', '11', 'Wheat', '1500', '100kg', 'img2.jpg', '.avinash raut <br> aurangabad <br> Pune Maharastra  431104<br> 9834620464', '2023-02-23 01:40:28', 'Delivered', ''),
('janu@gmail.com', '3', 'sorghum(jawar)', '3200', '25kg', 'millets-16382675073x2.jpg', '.avinash raut <br> aurangabad <br> Aurangabad Maharastra  431104<br> 9834620464', '2023-02-23 03:18:43', 'Delivered', ''),
('vraut0761@gmail.com', '16', 'Wheat', '250', '50kg', 'pexels-samarth-singhai-2301903.jpg', '.avinash raut <br> aurangabad <br> Aurangabad Maharastra  431005<br> 9156850266', '2023-02-23 11:32:04', 'Delivered', 'vraut0761@gmail.com'),
('vraut0761@gmail.com', '24', 'Wheat', '450', '25kg', 'images (39).jpeg', '.avinash raut <br> aurangabad <br> 1 Maharastra  431104<br> 999999999999', '2023-03-02 23:55:48', 'placed', 'vraut0761@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `mobilenum` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`fname`, `lname`, `address`, `state`, `city`, `pincode`, `mobilenum`) VALUES
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara, Near Sai mandir', 'Maharastra', 'Jalna', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Aurangabad', 431003, '2147483647'),
('Vitthal', 'Raut', 'Behind Bibi ka maqbara', 'Maharastra', 'Nagpur', 431003, '+919373986978'),
('Abiuh', 'lj', 'll;d', 'Maharastra', 'Aurangabad', 0, 'mjgfjj'),
('Abiuh', 'lj', 'll;d', 'Maharastra', 'Aurangabad', 0, '65555'),
('vraut0761@gmail.comAbiuh', 'lj', 'll;d', 'Maharastra', 'Nagpur', 431104, '65555'),
('ss', 'jj', 'dnhsgdf', 'Maharastra', 'Pune', 431151, '9834620464'),
('ss', 'jj', 'dnhsgdf', 'Maharastra', 'Pune', 431151, '9834620464'),
('avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431005, '999999999999'),
('avinash', 'raut', 'aurangabad', 'Maharastra', 'Aurangabad', 431005, '999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `grain` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `verify` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`id`, `username`, `grain`, `photo`, `price`, `weight`, `verify`) VALUES
(24, 'vraut0761@gmail.com', 'Wheat', 'images (39).jpeg', 450, '25kg', 'verified'),
(25, 'vraut0761@gmail.com', 'millet(bajara)', 'images (43).jpeg', 670, '25kg', 'verified'),
(26, 'vraut0761@gmail.com', 'sorghum(jawar)', 'images (46).jpeg', 540, '25kg', 'verified'),
(27, 'vraut0761@gmail.com', 'Wheat', 'images (38).jpeg', 500, '25kg', 'verified'),
(29, 'vraut0761@gmail.com', 'Wheat', 'images (40).jpeg', 1010, '50kg', 'verified'),
(30, 'vraut0761@gmail.com', 'sorghum(jawar)', 'images (41).jpeg', 1499, '50kg', 'verified'),
(33, 'vraut0761@gmail.com', 'sorghum(jawar)', 'images (44).jpeg', 2900, '100kg', 'verified'),
(34, 'vraut0761@gmail.com', 'sorghum(jawar)', 'images (45).jpeg', 1200, '50kg', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `sno` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_info`
--

INSERT INTO `seller_info` (`sno`, `name`, `username`, `mobile`, `password`, `date`) VALUES
(1, 'Vitthal Suresh Raut', 'vraut0761@gmail.com', '09373986978', 'aaaa', '2023-02-11 16:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `username`, `mobile`, `password`, `dt`) VALUES
(39, 'Kamesh Modhe', 'vraut0761@gmail.com', '9834620464', 'aaaa', '2023-02-23 11:27:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
