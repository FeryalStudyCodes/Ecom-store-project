-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(60) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `is_active` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `is_active`) VALUES
(5, 'samsung ', 1),
(88, 'LG', 1),
(89, 'hc', 1),
(90, 'apple', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(60) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `is_active` int(6) NOT NULL,
  `creation_date` datetime(6) NOT NULL,
  `parent_catergory` int(3) NOT NULL,
  `modification_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `is_active`, `creation_date`, `parent_catergory`, `modification_date`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(60) NOT NULL,
  `color_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(1, 'أبيض'),
(2, 'أسود'),
(3, 'أحمر'),
(4, 'رمادي');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int(60) NOT NULL,
  `product_id` int(60) NOT NULL,
  `user_id` int(60) NOT NULL,
  `date_of_addition` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(60) NOT NULL,
  `product_id` int(60) NOT NULL,
  `offer_type` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `creation_date` datetime(6) NOT NULL,
  `modification_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offer_discount`
--

CREATE TABLE `offer_discount` (
  `offer_discount_id` int(60) NOT NULL,
  `discount_percentage` decimal(60,0) NOT NULL,
  `product_id` int(60) NOT NULL,
  `offers_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer_extra_gift`
--

CREATE TABLE `offer_extra_gift` (
  `offer_extra_gift_id` int(60) NOT NULL,
  `extra_gift` varchar(255) NOT NULL,
  `product_id` int(60) NOT NULL,
  `offers_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer_free_gift`
--

CREATE TABLE `offer_free_gift` (
  `offer_Free_gift_id` int(60) NOT NULL,
  `Free_gift` varchar(255) NOT NULL,
  `product_id` int(60) NOT NULL,
  `offers_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(60) NOT NULL,
  `user_id` int(60) NOT NULL,
  `order_no` int(80) NOT NULL,
  `payment_id` int(60) NOT NULL,
  `order_date` datetime(6) NOT NULL,
  `status` int(2) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `modification_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(60) NOT NULL,
  `order_id` int(60) NOT NULL,
  `product_id` int(60) NOT NULL,
  `quantity` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(60) NOT NULL,
  `user_id` int(60) NOT NULL,
  `payment_type` int(60) NOT NULL,
  `account_number` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(60) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_details` varchar(60) NOT NULL,
  `category_id` int(60) NOT NULL,
  `brand_id` int(60) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `product_main_image` varchar(255) NOT NULL,
  `product_images` longtext NOT NULL,
  `color_id` int(60) NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_long_desc` varchar(255) NOT NULL,
  `product_price` double(60,2) NOT NULL DEFAULT 0.00,
  `is_active` int(2) NOT NULL,
  `creation_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_details`, `category_id`, `brand_id`, `product_quantity`, `product_main_image`, `product_images`, `color_id`, `product_short_desc`, `product_long_desc`, `product_price`, `is_active`, `creation_date`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `shoping_cart`
--

CREATE TABLE `shoping_cart` (
  `shoping_cart_id` int(60) NOT NULL,
  `product_id` int(60) NOT NULL,
  `amount` int(60) NOT NULL,
  `total_price` decimal(60,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(60) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `id_group` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` datetime(6) NOT NULL,
  `modification_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_name`, `id_group`, `email`, `address`, `phone`, `password`, `creation_date`, `modification_date`) VALUES
(4, 'hamas', 'hamas', 0, 'hamas1464@gmail.com', 'ghgjlg', '789765567890', '123', '2020-10-25 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(5, 'plkkln', 'hgjjjjjjjj', 0, 'ggg@gg.hhh', 'v nvm', '4567890', '123asd', '2020-10-26 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `offer_discount`
--
ALTER TABLE `offer_discount`
  ADD PRIMARY KEY (`offer_discount_id`);

--
-- Indexes for table `offer_extra_gift`
--
ALTER TABLE `offer_extra_gift`
  ADD PRIMARY KEY (`offer_extra_gift_id`),
  ADD KEY `offers_id` (`offers_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `offer_free_gift`
--
ALTER TABLE `offer_free_gift`
  ADD PRIMARY KEY (`offer_Free_gift_id`),
  ADD KEY `offers_id` (`offers_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  ADD PRIMARY KEY (`shoping_cart_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`


--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_discount`
--
ALTER TABLE `offer_discount`
  MODIFY `offer_discount_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_extra_gift`
--
ALTER TABLE `offer_extra_gift`
  MODIFY `offer_extra_gift_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_free_gift`
--
ALTER TABLE `offer_free_gift`
  MODIFY `offer_Free_gift_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`

--
-- AUTO_INCREMENT for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `shoping_cart_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `offer_extra_gift`
--
ALTER TABLE `offer_extra_gift`
  ADD CONSTRAINT `offer_extra_gift_ibfk_1` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`offer_id`),
  ADD CONSTRAINT `offer_extra_gift_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `offer_free_gift`
--
ALTER TABLE `offer_free_gift`
  ADD CONSTRAINT `offer_free_gift_ibfk_1` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`offer_id`),
  ADD CONSTRAINT `offer_free_gift_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
