-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 07:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `admin_email`, `admin_pass`) VALUES
(1, 'Nemy_Admin', 'nemyclothing@gmail.com', '$2y$10$Qwnt9Ed9Krk.a62NeBzFveIfWp0jXemfQny82N2fuISfPKGhuIVOO');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` int(11) DEFAULT NULL,
  `ip_add` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customer_id`, `ip_add`, `product_id`, `qty`) VALUES
(NULL, '::1', 82, 1),
(NULL, '::1', 79, 1),
(NULL, '::1', 78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Macbook'),
(2, 'Cocoa drink'),
(3, 'macbess'),
(4, 'Haya clothing');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(100) NOT NULL,
  `customer_lname` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`) VALUES
(14, 'isaac', 'kumi', 'isaac.kumi@ashesi.edu.gh', '$2y$10$S52zeNsGEpOyzfROBTi4VuiYPM19nviigZ59ah3eRDawxwMcdxo46'),
(15, 'Nana', 'Kobina', 'nk@gmail.com', '$2y$10$LSaJ2HstNdq5kXduVXx5WeLZnPQ.E0X5Cz2zJsja6gk0m4u2FJDTe'),
(16, 'sdfg', 'scoff', 'asc@asc.com', '$2y$10$R3Jd62Xzo8o27D7lI9bRyOkUH02BlCAzf26fSXzrBlWOw713GqOXa'),
(17, ',jdjhv', 'asc', 'asc1@asc.com', '$2y$10$PCCGU.PlmxcWekYoiN5dg.QECKfoiLmD5Zu1qLYFI6HdhzW.fSkq6'),
(18, 'test', 'test', 'test@test.com', '$2y$10$3AAEU0fo2U9ZH4VaziTLu.gT9sPFzo32iH8fVbLJcbfPle1lXemMq'),
(19, 'Isaac', 'Kumi', 'iyzekkummy29@gmail.com', '$2y$10$nAjlf3tSX.zB8rc9cnQQMeMW5ziRYUMg7P6Nr0WQMqOLKFac9Rdae');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageid` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageid`, `image`) VALUES
(1, '../gallery/images/kentehoodie1.jpeg'),
(2, '../gallery/images/hoodie3.jpeg'),
(3, '../gallery/images/jeansjacket3.jpeg'),
(4, '../gallery/images/hoodie4.jpeg'),
(5, '../gallery/images/Jacket1.jpeg'),
(6, '../gallery/images/Kentehoodie2.jpeg'),
(7, '../gallery/images/t1.jpeg'),
(8, '../gallery/images/t2.jpeg'),
(9, '../gallery/images/t3.jpeg'),
(10, '../gallery/images/t4.jpeg'),
(11, '../gallery/images/t5.jpeg'),
(12, '../gallery/images/t6.jpeg'),
(13, '../gallery/images/t7.jpeg'),
(14, '../gallery/images/t8.jpeg'),
(15, '../gallery/images/t9.jpeg'),
(16, '../gallery/images/t10.jpeg'),
(17, '../gallery/images/t11.jpeg'),
(19, '../gallery/images/back1.jpg'),
(20, '../gallery/images/banner.jpeg'),
(21, '../gallery/images/back3.jpg'),
(22, '../gallery/images/JeansJacket.jpeg'),
(23, '../gallery/images/4syte.JPG'),
(24, '../gallery/images/BWJR1079.JPG'),
(25, '../gallery/images/CFJO6740.JPG'),
(26, '../gallery/images/EJAW4372.JPG'),
(27, '../gallery/images/FDZC7562.JPG'),
(28, '../gallery/images/FDAU3159.JPG'),
(29, '../gallery/images/FOAK6144.JPG'),
(30, '../gallery/images/FUKY9422.JPG'),
(31, '../gallery/images/HSZS1392.JPG'),
(32, '../gallery/images/IMG_0231.JPG'),
(33, '../gallery/images/IMG_0288.JPG'),
(34, '../gallery/images/IMG_0289.JPG'),
(35, '../gallery/images/IMG_0338.JPG'),
(36, '../gallery/images/IMG_0540.JPG'),
(37, '../gallery/images/IMG_0654.JPG'),
(38, '../gallery/images/IMG_0657.JPG'),
(39, '../gallery/images/IMG_0703.JPG'),
(40, '../gallery/images/IMG_0724.JPG'),
(41, '../gallery/images/IMG_0985.JPG'),
(42, '../gallery/images/IMG_1074.JPG'),
(43, '../gallery/images/IMG_1099.JPG'),
(44, '../gallery/images/IMG_1702.JPG'),
(45, '../gallery/images/IMG_1828.JPG'),
(46, '../gallery/images/IMG_4179.JPG'),
(47, '../gallery/images/IMG_4242.JPG'),
(48, '../gallery/images/IMG_4569.JPG'),
(49, '../gallery/images/IMG_4781.JPG'),
(50, '../gallery/images/IMG_5185.JPG'),
(51, '../gallery/images/IMG_6205.JPG'),
(52, '../gallery/images/IMG_8277.JPG'),
(53, '../gallery/images/IMG_7089.JPG'),
(54, '../gallery/images/KLCM5354.JPG'),
(55, '../gallery/images/LMFW6740.JPG'),
(56, '../gallery/images/IMG_8288.JPG'),
(57, '../gallery/images/IMG_7477.JPG'),
(58, '../gallery/images/IMG_2347.PNG'),
(59, '../gallery/images/IMG_9069.JPG'),
(60, '../gallery/images/IMG_5562.JPG'),
(61, '../gallery/images/OUOD6497.JPG'),
(62, '../gallery/images/IMG_8293.JPG'),
(63, '../gallery/images/KAFK8850.JPG'),
(65, '../gallery/images/XWBC5412.JPG'),
(66, '../gallery/images/IMG_6825.JPG'),
(67, '../gallery/images/XLDS8133.JPG'),
(68, '../gallery/images/KQQI6583.JPG'),
(69, '../gallery/images/VXHE1652.JPG'),
(70, '../gallery/images/IMG_8659.JPG'),
(71, '../gallery/images/m1.jpeg'),
(72, '../gallery/images/m2.jpeg'),
(73, '../gallery/images/m3.jpeg'),
(74, '../gallery/images/m4.jpeg'),
(75, '../gallery/images/m5.jpeg'),
(76, '../gallery/images/m6.jpeg'),
(77, '../gallery/images/m7.jpeg'),
(78, '../gallery/images/m8.jpeg'),
(79, '../gallery/images/m9.jpeg'),
(80, '../gallery/images/m10.jpeg'),
(81, '../gallery/images/m11.jpeg'),
(82, '../gallery/images/m12.jpeg'),
(83, '../gallery/images/m12.jpeg'),
(84, '../gallery/images/m13.jpeg'),
(85, '../gallery/images/m14.jpeg'),
(86, '../gallery/images/m15.jpeg'),
(87, '../gallery/images/m16.jpeg'),
(88, '../gallery/images/m17.jpeg'),
(89, '../gallery/images/m19.jpeg'),
(90, '../gallery/images/m20.jpeg'),
(91, '../gallery/images/m21.jpeg'),
(92, '../gallery/images/m22.jpeg'),
(93, '../gallery/images/m23.jpeg'),
(94, '../gallery/images/m24.jpeg'),
(95, '../gallery/images/m25.jpeg'),
(96, '../gallery/images/m27.jpeg'),
(97, '../gallery/images/m28.jpeg'),
(98, '../gallery/images/m29.jpeg'),
(99, '../gallery/images/m30.jpeg'),
(100, '../gallery/images/m31.jpeg'),
(101, '../gallery/images/ladies1.jpeg'),
(102, '../gallery/images/ladies2.jpeg'),
(103, '../gallery/images/ladies3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) VALUES
(58, 81, 1),
(58, 82, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(45, 19, 'FANK_2087575419', '2020-11-22', 'paid'),
(46, 19, 'FANK_231886710', '2020-11-22', 'paid'),
(47, 19, 'FANK_231886710', '2020-11-22', 'paid'),
(48, 19, 'FANK_1582065036', '2020-11-22', 'paid'),
(49, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(50, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(51, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(52, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(53, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(54, 19, 'FANK_1317765496', '2020-11-22', 'paid'),
(55, 19, 'FANK_553273774', '2020-11-22', 'paid'),
(56, 19, 'FANK_553273774', '2020-11-22', 'paid'),
(57, 19, 'FANK_735746859', '2020-11-22', 'paid'),
(58, 19, 'FANK_900111196', '2020-11-22', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `customer_id`, `invoice_number`, `payment_date`) VALUES
(1, 333, 19, 'FANK_292251542', '2020-11-18'),
(2, 333, 19, 'FANK_1306300708', '2020-11-18'),
(3, 112, 19, 'FANK_810595168', '2020-11-18'),
(4, 112, 19, 'FANK_1172184957', '2020-11-18'),
(5, 1665, 19, 'FANK_356604677', '2020-11-18'),
(6, 624, 19, 'FANK_2015185716', '2020-11-19'),
(7, 624, 19, 'FANK_1866339639', '2020-11-19'),
(8, 321, 19, 'FANK_2087575419', '2020-11-22'),
(9, 3, 19, 'FANK_1317765496', '2020-11-22'),
(10, 3, 19, 'FANK_1317765496', '2020-11-22'),
(11, 3, 19, 'FANK_1317765496', '2020-11-22'),
(12, 3, 19, 'FANK_1317765496', '2020-11-22'),
(13, 3, 19, 'FANK_1317765496', '2020-11-22'),
(14, 3, 19, 'FANK_1317765496', '2020-11-22'),
(15, 3, 19, 'FANK_553273774', '2020-11-22'),
(16, 3, 19, 'FANK_553273774', '2020-11-22'),
(17, 12, 19, 'FANK_735746859', '2020-11-22'),
(18, 12, 19, 'FANK_900111196', '2020-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_desc`, `category`, `img1`, `img2`, `img3`) VALUES
(81, 'wefrtre', 3, 'sc', '', './assets/images/uploads/voters_id.jpeg', NULL, NULL),
(82, 'anoth t', 9, 'this', '', './assets/images/uploads/voters_id.jpeg', NULL, NULL),
(83, 'fin', 312, 'third test', 'macbess', './assets/images/uploads/kmi.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment` varchar(2550) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `subscription_fee` varchar(255) NOT NULL,
  `business_location` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `user_id`, `business_name`, `business_email`, `contact`, `account_name`, `account_number`, `subscription_fee`, `business_location`, `date`) VALUES
(1, 15, 'Fank', 'fank@gmail.com', '0548769251', 'MTN', '0548769251', '1', 'Ashesi', '2020-11-09 15:09:48'),
(9, 19, 'quiknote', 'iyzekkummy29@gmail.com', '0548769251', 'MTN', '12345678', '10', '10', '2020-11-17 09:04:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
