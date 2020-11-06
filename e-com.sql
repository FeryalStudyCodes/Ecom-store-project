-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
(90, 'apple', 1),
(92, 'lenovo', 1),
(93, 'Dell', 1),
(94, 'Toshiba', 1),
(95, 'HP', 1),
(96, 'Huawei', 1);

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
(25, 'أجهزة لابتوب و كمبيوتر', 1, '2020-11-03 00:00:00.000000', 0, '0000-00-00 00:00:00.000000'),
(29, 'أجهزة لابتوب', 1, '2020-11-04 00:00:00.000000', 25, '0000-00-00 00:00:00.000000'),
(30, 'أجهزة كمبيوتر', 1, '2020-11-04 00:00:00.000000', 25, '0000-00-00 00:00:00.000000'),
(31, 'اكسسوارات الكمبيوتر', 1, '2020-11-04 00:00:00.000000', 25, '0000-00-00 00:00:00.000000'),
(32, 'ماسحات ضوئية', 1, '2020-11-04 00:00:00.000000', 25, '0000-00-00 00:00:00.000000'),
(33, 'كاميرات', 1, '2020-11-04 00:00:00.000000', 0, '0000-00-00 00:00:00.000000'),
(34, 'ذواكر كاميرا', 1, '2020-11-04 00:00:00.000000', 33, '0000-00-00 00:00:00.000000'),
(35, 'كاميرات درونز', 1, '2020-11-04 00:00:00.000000', 33, '0000-00-00 00:00:00.000000'),
(36, 'كاميرات أكشن', 1, '2020-11-04 00:00:00.000000', 33, '0000-00-00 00:00:00.000000'),
(38, 'جوالات وأجهزة تابلت', 1, '2020-11-05 11:07:33.000000', 0, '2020-11-05 11:07:33.000000'),
(40, 'جوالات', 1, '2020-11-05 11:08:39.000000', 38, '2020-11-05 11:08:39.000000'),
(41, 'تابلت', 1, '2020-11-05 11:09:38.000000', 38, '2020-11-05 11:09:38.000000'),
(42, 'اكسسورات', 1, '2020-11-05 11:09:38.000000', 38, '2020-11-05 11:09:38.000000');

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
(91, 'أبل كمبيوتر محمول', 'أبل كمبيوتر محمول ماك ', 25, 90, '6', 'apple1.jpg', 'apple1.jpg,apple1.jpg,apple6.jpg,', 1, 'أبل كمبيوتر محمول ماك بوك بشاشة مقاس 12 بوصة ومعالج كور m3/ ذاكرة وصول عشوائي سعة 8 غيغابايت/', 'أبل كمبيوتر محمول ماك بوك بشاشة مقاس 12 بوصة ومعالج كور m3/ ذاكرة وصول عشوائي سعة 8 غيغابايت/', 324.97, 1, '2020-11-03 00:00:00.000000'),
(92, 'أبل كمبيوتر محمول', 'أبل كمبيوتر محمول ماك', 25, 90, '20', 'apple6.jpg', 'lenovo3.jpg,lenovo2.jpg,apple6.jpg,', 4, 'أبل كمبيوتر محمول ماك بوك برو بشريط يعمل باللمس وشاشة مقاس 13.3 بوصة ومعالج كور i5 وذاكرة وصول عشوائي سعة 8', 'أبل كمبيوتر محمول ماك بوك برو بشريط يعمل باللمس وشاشة مقاس 13.3 بوصة ومعالج كور i5 وذاكرة وصول عشوائي سعة 8', 49999.00, 1, '2020-11-03 00:00:00.000000'),
(98, 'ديل لابتوب', 'لابتوب لاتيتيود 5400', 25, 93, '20', 'dell-1-20-300x203.jpg', 'dell3-3.jpg,dell3-2.jpg,dell3-1.jpg,Dell3.jpg,', 2, 'لابتوب لاتيتيود 5400 بشاشة مقاس 14 بوصة ومعالج إنتل كور i7/ وذاكرة رام سعة 8 جيجابايت/ محرك أقراص صلبة ‏سعة 1 تيرابايت/ بطاقة رسومات إيه إم دي راديون 540X سعة 2 جيجابايت أسود', 'لابتوب لاتيتيود 5400 بشاشة مقاس 14 بوصة ومعالج إنتل كور i7/ وذاكرة رام سعة 8 جيجابايت/ محرك أقراص صلبة ‏سعة 1 تيرابايت/ بطاقة رسومات إيه إم دي راديون 540X سعة 2 جيجابايت أسود', 22000.00, 1, '2020-11-05 00:00:00.000000'),
(101, 'إتش بي', 'Da3002ne Laptop', 25, 95, '5', 'hp1-3.jpg', 'hp1-4jpg.jpg,hp1-3.jpg,hp1-2.jpg,hp1-1.jpg,hp1.jpg,', 2, '15-Da3002ne Laptop With 15.6-Inch Display, Core i3 Processor/4GB RAM/1TB HDD/Intel UHD Graphics رمادي داكن', '15-Da3002ne Laptop With 15.6-Inch Display, Core i3 Processor/4GB RAM/1TB HDD/Intel UHD Graphics رمادي داكن', 8299.00, 1, '2020-11-05 00:00:00.000000'),
(102, 'إتش بي لابتوب ', 'لابتوب برو بوك 440 G6', 25, 95, '9', 'hp2.jpg', 'hp2.5jpg.jpg,hp2-4.jpg,hp2-3.jpg,hp2-2.jpg,hp2.jpg,', 4, 'لابتوب برو بوك 440 G6 بشاشة 14 بوصة، ومعالج كور i5/ ذاكرة رام 8 جيجابايت/ محرك أقراص صلبة 1 تيرابايت/ بطاقة رسومات إيه إم دي راديون 2 جيجابايت فضي', 'لابتوب برو بوك 440 G6 بشاشة 14 بوصة، ومعالج كور i5/ ذاكرة رام 8 جيجابايت/ محرك أقراص صلبة 1 تيرابايت/ بطاقة رسومات إيه إم دي راديون 2 جيجابايت فضي', 12499.00, 1, '2020-11-05 00:00:00.000000'),
(103, 'DA2001NE Laptop', 'DA2001NE Laptop With 15.6-inch', 25, 95, '14', 'hp3.jpg', 'hp3-3.jpg,hp3-2.jpg,hp3.jpg,', 2, ' 15-DA2001NE Laptop With 15.6-inch Display, Core i5 Processor/8GB RAM/1TB HDD/4GB NVIDIA GeForce MX130 Graphic Card أسود فحمي', ' 15-DA2001NE Laptop With 15.6-inch Display, Core i5 Processor/8GB RAM/1TB HDD/4GB NVIDIA GeForce MX130 Graphic Card أسود فحمي', 19999.00, 1, '2020-11-05 00:00:00.000000'),
(104, 'لينوفو', ' Lenovo Ideapad L340 Laptop ', 25, 92, '5', 'lenovo3.jpg', 'lenovo3-5jpg.jpg,lenovo3-3.jpg,lenovo3-4.jpg,lenovo3-2.jpg,lenovo3-1.jpg,lenovo3.jpg,', 4, 'Lenovo Ideapad L340 Laptop With 15.6-Inch HD Display, AMD Ryzen 5 3500U Processor/ 4GB DDR4 RAM/ 1TB HDD/ Integrated AMD Radeon Vega 8 Graphics Card/DOS البلاتين الرمادي', 'Lenovo Ideapad L340 Laptop With 15.6-Inch HD Display, AMD Ryzen 5 3500U Processor/ 4GB DDR4 RAM/ 1TB HDD/ Integrated AMD Radeon Vega 8 Graphics Card/DOS البلاتين الرمادي', 10445.00, 1, '2020-11-05 00:00:00.000000'),
(105, 'لينوفو IdeaPad', 'IdeaPad S145 Laptop', 25, 92, '2', 'lenovo2.jpg', 'lenovo2-4.jpg,lenovo2-3.jpg,lenovo2-1.jpg,lenovo2.jpg,lenovo2.png,', 2, 'IdeaPad S145 Laptop With 15.6-Inch Display, Core i3 Processor/4GB RAM/1TB HDD/Integrated Graphics أسود', 'IdeaPad S145 Laptop With 15.6-Inch Display, Core i3 Processor/4GB RAM/1TB HDD/Integrated Graphics أسود', 9399.00, 1, '2020-11-05 00:00:00.000000'),
(106, 'لينوفو', 'IdeaPad L3 Laptop', 25, 92, '6', 'lenovo1.jpg', 'lenovo1-3.jpg,lenovo1-5.jpg,lenovo1-4.jpg,lenovo1-2.jpg,lenovo1.jpg,', 4, 'IdeaPad L3 Laptop With 15.6-Inch Display, Core i7 Processor/8GB RAM/256GB SSD+1TB HDD Hybrid Drive/2 GB NVIDIA GeForce MX330 Graphics Card البلاتين الرمادي', 'IdeaPad L3 Laptop With 15.6-Inch Display, Core i7 Processor/8GB RAM/256GB SSD+1TB HDD Hybrid Drive/2 GB NVIDIA GeForce MX330 Graphics Card البلاتين الرمادي', 14777.00, 1, '2020-11-05 00:00:00.000000'),
(107, 'نيكون كاميرا ', 'كاميرا رقمية بعدسة أحادية عاكسة D3500', 33, 89, '5', 'camer1.jpg', 'camer1-5.jpg,camer1-4.jpg,camer1-2.jpg,camer1-1.jpg,', 2, 'كاميرا رقمية بعدسة أحادية عاكسة D3500 مزودة بعدسة AF-P DX نيكور مقاس 18-55 سم ببعد بؤري f/3.55.6G وتقنية تقليل الاهتزاز بدقة 24.2 ميجابكسل وتدعم تقنية البلوتوث', 'كاميرا رقمية بعدسة أحادية عاكسة D3500 مزودة بعدسة AF-P DX نيكور مقاس 18-55 سم ببعد بؤري f/3.55.6G وتقنية تقليل الاهتزاز بدقة 24.2 ميجابكسل وتدعم تقنية البلوتوث', 6199.00, 1, '2020-11-05 00:00:00.000000'),
(108, 'هواوي', 'Y9A Dual SIM', 38, 96, '3', 'hawie2.jpg', 'hawie2-4jpg.jpg,hawie2-3jpg.jpg,hawie2-2.jpg,hawie2-1.jpg,hawie2.jpg,', 1, 'Y9A Dual SIM Sakura Pink 8GB RAM 128GB 4G LTE', 'Y9A Dual SIM Sakura Pink 8GB RAM 128GB 4G LTE', 4530.00, 1, '2020-11-05 00:00:00.000000'),
(109, 'هواوي', 'Y9A Dual SIM ', 38, 96, '3', 'hawie1.jpg', 'hawie1-4.jpg,hawie1-3.jpg,hawie1-2.jpg,hawie1-1.jpg,', 4, 'Y9A Dual SIM Space Silver 8GB RAM 128GB 4G LTE', 'Y9A Dual SIM Space Silver 8GB RAM 128GB 4G LTE', 4699.00, 1, '2020-11-05 00:00:00.000000'),
(111, 'هاتف آيفون', 'هاتف آيفون 12 برو', 38, 90, '2', 'Apple.jpg', 'Apple1-4.jpg,Apple1-3.jpg,Apple1-2.jpg,Apple1-1.jpg,', 2, 'هاتف آيفون 12 برو بذاكرة داخلية سعة 256 جيجابايت وبلون ذهبي ويدعم تقنية 5G - إصدار الشرق الأوسط', 'هاتف آيفون 12 برو بذاكرة داخلية سعة 256 جيجابايت وبلون ذهبي ويدعم تقنية 5G - إصدار الشرق الأوسط', 32999.00, 1, '2020-11-05 00:00:00.000000'),
(112, 'سامسونج', 'Galaxy S20 FE ', 38, 5, '8', 'samsung1.jpg', 'samsung1-4.jpg,samsung1-5.jpg,samsung1-3.jpg,samsung1-2.jpg,samsung1-1.jpg,', 1, 'Galaxy S20 FE Dual SIM Cloud Mint 8GB RAM 128GB 5G - Middle East Version', 'Galaxy S20 FE Dual SIM Cloud Mint 8GB RAM 128GB 5G - Middle East Version', 11900.00, 1, '2020-11-05 00:00:00.000000'),
(113, 'سامسونج Galaxy', 'Galaxy M51', 38, 5, '1', 'samsung2.jpg', 'samsung2-5.jpg,samsung2-4.jpg,samsung2-3.jpg,samsung2-2.jpg,samsung2-1.jpg,', 2, 'Galaxy M51 Dual SIM Black 8GB RAM 128GB 4G LTE - International Version', 'Galaxy M51 Dual SIM Black 8GB RAM 128GB 4G LTE - International Version', 6666.00, 1, '2020-11-05 00:00:00.000000'),
(114, 'سامسونج', 'Galaxy M11 ', 38, 5, '9', 'samsung3.jpg', 'samsung3-5.jpg,samsung3-4.jpg,samsung3-3.jpg,samsung3-2.jpg,samsung3-1.jpg,', 2, 'Galaxy M11 Dual SIM Black 4GB RAM 64GB 4G LTE', 'Galaxy M11 Dual SIM Black 4GB RAM 64GB 4G LTE', 4999.00, 1, '2020-11-05 00:00:00.000000'),
(116, 'هاتف آيفون', 'هاتف آيفون 12', 38, 90, '10', 'Apple2-1.jpg', 'Apple2-4.jpg,Apple2-3.jpg,Apple2-2.jpg,Apple2-1.jpg,', 2, 'هاتف آيفون 12 بذاكرة داخلية سعة 128 جيجابايت بلون أزرق ويدعم تقنية 5G - إصدار الشرق الأوسط', 'هاتف آيفون 12 بذاكرة داخلية سعة 128 جيجابايت بلون أزرق ويدعم تقنية 5G - إصدار الشرق الأوسط', 22499.00, 1, '2020-11-05 00:00:00.000000'),
(118, 'هاتف آيفون', 'هاتف آيفون 12', 38, 90, '5', 'Apple3.jpg', 'Apple3-5.jpg,Apple3_4.jpg,Apple3-3.jpg,Apple3-1.jpg,apple3.jpg,', 3, 'هاتف آيفون 12 بذاكرة داخلية سعة 128 جيجابايت (منتج) بلون أحمر ويدعم تقنية 5G - إصدار الشرق الأوسط', 'هاتف آيفون 12 بذاكرة داخلية سعة 128 جيجابايت (منتج) بلون أحمر ويدعم تقنية 5G - إصدار الشرق الأوسط', 22499.00, 1, '2020-11-05 00:00:00.000000'),
(119, 'ديل لابتوب', 'لابتوب إنسبايرون 3593', 25, 93, '9', 'dell2-2.jpg', 'dell2-4.jpg,dell2-3.jpg,dell2-1.jpg,dell2-2.jpg,dell2.jpg,', 2, 'لابتوب إنسبايرون 3593 بشاشة مقاس 15.6 بوصة ومعالج كور I5/ذاكرة رام سعة 4 جيجابايت/ومحرك أقراص صلبة سعة 1 تيرابايت/بطاقة رسومات إنفيديا جي فورس MX230 سعة 2 جيجابايت أسود', 'لابتوب إنسبايرون 3593 بشاشة مقاس 15.6 بوصة ومعالج كور I5/ذاكرة رام سعة 4 جيجابايت/ومحرك أقراص صلبة سعة 1 تيرابايت/بطاقة رسومات إنفيديا جي فورس MX230 سعة 2 جيجابايت أسود', 15999.00, 1, '2020-11-05 00:00:00.000000');

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
  MODIFY `brand_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `product_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

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
