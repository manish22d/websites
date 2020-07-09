-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 08:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `title`, `heading`, `button_text`, `page`) VALUES
(3, '1593605065.png', '#New Summer Collection 2020', 'Arrivals Sales', 'Shop Now', 'shop'),
(4, '1593604257.png', '#New Summer Collection 2020', 'Shop With Us', 'Shop Now', 'about'),
(9, '1593604900.png', '#New Summer Collection 2020', 'Arrivals Sales', 'Shop Now', 'product'),
(10, '1593604693.png', '#New Collection 2020', ' Arrivals Sales', 'Shop Now', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'green'),
(4, 'black'),
(5, 'yellow'),
(6, 'white'),
(11, 'multi'),
(12, 'MANGO'),
(13, 'black/blue/red'),
(14, 'grey'),
(15, 'PINK'),
(16, 'GREEN'),
(17, 'FON/GRAY/PISTA'),
(19, 'FON COLUAR'),
(20, 'NAVY'),
(21, 'MUSTURD');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `submit_date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `submit_date`, `name`, `email`, `phone`, `company`, `message`) VALUES
(20, '13-06-2020 20:40:15', 'MUDIT BAID', 'muditbaid2@gmail.com', '9315113049', 'rewo textile', 'information regarding clothes material '),
(21, '14-06-2020 20:00:18', 'abc', 'abc@gmail.com', '99999999999', 'ksdjk', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `upload_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `img`, `type`, `upload_date`) VALUES
(9, '1593438154.png', 'baba suit', '29-06-2020 19:12:33'),
(10, '1593438253.png', 'ethnic wear', '29-06-2020 19:14:12'),
(11, '1593438265.png', 'shirt', '29-06-2020 19:14:25'),
(12, '1593438277.png', 'infant', '29-06-2020 19:14:37'),
(14, '1593604451.png', 'tshirt', '01-07-2020 17:24:10'),
(15, '1593604506.png', 'pant', '01-07-2020 17:25:09'),
(16, '1593604562.png', 'trackpant', '01-07-2020 17:26:02'),
(17, '1593604562.png', 'capri', '01-07-2020 17:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `upload_date` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `other_img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `sku_id` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `collection` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '100',
  `rating` decimal(10,0) NOT NULL,
  `min_price` decimal(10,0) NOT NULL,
  `max_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `upload_date`, `img`, `other_img`, `name`, `size`, `color`, `gst`, `brand`, `sku_id`, `description`, `collection`, `category`, `tags`, `stock`, `rating`, `min_price`, `max_price`) VALUES
(63, '01-07-2020 15:27:01', '1593597422.jpg', '1593597432.jpg', 'AK 1129', '18', '', '5%', 'EMPIRE', 'AK 1129', '100 COTTON', 'babasuit', 'BABA SUITS', 'sale', 108, '5', '380', '380'),
(64, '01-07-2020 15:30:36', '1593597637.jpg', '1593597647.jpg', 'AK 3845', '16', '', '5%', 'EMPIRE', 'AK 3845', 'WASING ITEM 100 % COTTON', 'babasuit', 'BABA SUITS', 'sale', 108, '5', '365', '365'),
(65, '01-07-2020 15:42:13', '1593598333.jpg', '1593598343.jpg', 'AK 3847', '16', '', '5%', 'EMPIRE', 'AK 3847', 'DENIM JEAN WASING ', 'babasuit', 'COTI MODEL', 'sale', 108, '4', '370', '370'),
(66, '01-07-2020 15:48:19', '1593598699.jpg', '1593598709.jpg', 'AK 1130', '18', '', '5%', 'EMPIRE', 'AK 1130', 'RFD WASSING 100% COTTON', 'babasuit', 'COTI MODEL', 'sale', 216, '4', '385', '385'),
(67, '01-07-2020 15:51:39', '1593598899.jpg', '1593598909.jpg', 'AK 953', '18', '', '5%', 'EMPIRE', 'AK 953', '100% COTTON', 'babasuit', 'COTI MODEL', 'sale', 216, '5', '395', '395'),
(68, '01-07-2020 16:52:43', '1593602564.jpg', '1593602574.jpg', 'M 8', '22X26', '', '5%', 'EMPIRE', 'M 8', '100% COTTON', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '510', '510'),
(69, '01-07-2020 16:57:33', '1593602853.jpg', '1593602863.jpg', 'J 2563', '28*32', '', '5%', 'EMPIRE', 'J 2563', '100% COTTON', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '570', '570'),
(70, '01-07-2020 17:06:10', '1593603371.jpg', '1593603381.jpg', 'COTI 1282', '22X26', '', '5%', 'EMPIRE', 'COTI 1282', 'WASSING', 'babasuit', 'COTI MODEL', 'sale', 216, '4', '465', '465'),
(71, '01-07-2020 17:08:58', '1593603539.jpg', '1593603549.jpg', 'NTC 3311', '28*32', '', '5%', 'EMPIRE', 'NTC 3311', 'COTTON', 'babasuit', 'COTI MODEL', 'Choose...', 108, '4', '595', '595'),
(72, '01-07-2020 17:15:06', '1593603907.jpg', '1593603917.jpg', 'M 10', '22*26', '', '5%', 'EMPIRE', 'M 10', '100% COTTON', 'babasuit', 'COTI MODEL', 'sale', 108, '4', '510', '510'),
(73, '01-07-2020 17:27:21', '1593604641.jpg', '1593604651.jpg', 'AJ 3004', '22X26', '', '5%', 'EMPIRE', 'AJ 3004', 'HOSSIRY SARAG', 'babasuit', 'COTI MODEL', 'Choose...', 108, '4', '380', '380'),
(74, '01-07-2020 17:29:48', '1593604789.jpg', '1593604799.jpg', 'M 9', '28*32', '', '5%', 'EMPIRE', 'M 9', 'WASSING', 'babasuit', 'COTI MODEL', 'Choose...', 108, '5', '570', '570'),
(75, '01-07-2020 17:32:37', '1593604957.jpg', '1593604967.jpg', 'RK 2300', '28*32', '', '5%', 'EMPIRE', 'RK 2300', 'DENIM', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '575', '575'),
(76, '01-07-2020 17:35:16', '1593605116.jpg', '1593605126.jpg', 'AJ 3013', '28*32', '', '5%', 'EMPIRE', 'AJ 3013', 'DENIM SARAG', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '530', '530'),
(78, '01-07-2020 17:41:21', '1593605481.jpg', '1593605491.jpg', 'AJ 2995', '28*32', '', '5%', 'EMPIRE', 'AJ 2995', 'HOSSIRY SARAG', 'babasuit', 'COTI MODEL', 'sale', 108, '4', '465', '465'),
(79, '01-07-2020 17:43:41', '1593605622.jpg', '1593605632.jpg', 'AJ 2972', '22X26', '', '5%', 'EMPIRE', 'AJ 2972', 'HOSSIRY SARAG', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '410', '410'),
(80, '01-07-2020 17:49:48', '1593605988.jpg', '1593605998.jpg', 'VK 2631', '22X26', '', '5%', 'EMPIRE', 'VK 2631', 'COOTON', 'babasuit', 'SHIRT STYLE', 'sale', 108, '5', '330', '330'),
(81, '01-07-2020 17:53:38', '1593606219.jpg', '1593606229.jpg', 'COTI 194', '28*32', '', '5%', 'EMPIRE', 'COTI 194', 'DENIM ', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '540', '540'),
(82, '01-07-2020 17:56:04', '1593606365.jpg', '1593606375.jpg', 'RK 2298', '28*32', '', '5%', 'EMPIRE', 'RK 2298', 'SARAG', 'babasuit', 'COTI MODEL', 'sale', 108, '4', '590', '590'),
(83, '01-07-2020 18:00:46', '1593606646.jpg', '1593606656.jpg', 'M 7', '22X26', '', '5%', 'EMPIRE', 'M 7', 'WASSING', 'babasuit', 'COTI MODEL', 'sale', 108, '5', '510', '510'),
(85, '02-07-2020 11:07:22', '1593668242.jpeg', '1593668252.jpeg,1593668262.jpeg', 'MG 243', '22*26,28*32', '', '5%', 'EMPIRE', 'MG 243', 'HOSIERY SHIRT WITH PRINTED', 'shirt', 'MANGO SERIES HALF SLEEVES  SHIRT', 'popular', 180, '5', '220', '230'),
(86, '02-07-2020 11:16:24', '1593669102.jpeg', '1593669112.jpeg,1593669122.jpeg', 'TG 916', '20*24,26*30,32*36', 'red,blue,green,yellow,white,PINK', '5%', 'EMPIRE', 'TG 916', 'SATIN FABRIC\r\nPRINTED SHIRT', 'shirt', 'MANGO SERIES HALF SLEEVES  SHIRT', 'popular', 270, '5', '200', '220'),
(87, '02-07-2020 11:19:49', '1593669019.jpeg', '1593669029.jpeg,1593669039.jpeg', 'JA 2492', '26*30,32*36', 'multi', '5%', 'EMPIRE', 'JA 2492', 'LYCRA FABRIC PREMIUM SHIRT IN ROLL PACK', 'shirt', 'ROLL PACKING SHIRT ', 'popular', 180, '5', '310', '320'),
(88, '02-07-2020 11:26:46', '1593669407.jpeg', '1593669417.jpeg,1593669427.jpeg', '444 HALF SLEEVES', '20*24,26*30,32*36', '', '5%', 'EMPIRE', '444 HALF SLEEVES', 'WASHING SHIRT WITH MANY COLOURS', 'shirt', 'WASHING SHIRT H/S', 'popular', 480, '5', '135', '155'),
(89, '02-07-2020 11:32:37', '1593669758.jpeg', '1593669768.jpeg,1593669778.jpeg', '9J009 F/S', '20X24,26*30,32*36', '', '5%', 'EMPIRE', '9J009 F/S', 'WASHING SHIRT \r\nCROS CUT SHIRT', 'shirt', 'WASHING SHIRT F/S', 'popular', 480, '5', '170', '190'),
(90, '02-07-2020 11:35:40', '1593669940.jpeg', '1593669950.jpeg,1593669960.jpeg', 'VIRAT 4371', '26*30,32*36', '', '5%', 'EMPIRE', 'VIRAT 4371', 'PRINTED SHIRT WITH HOOD AND INNER INSIDE.\r\nOPEN SHIRT ', 'shirt', 'MANGO SERIES FULL SLEEVES SHIRT', 'popular', 180, '4', '240', '250'),
(91, '02-07-2020 11:41:58', '1593670319.jpeg', '1593670329.jpeg,1593670339.jpeg', 'HECTOR 2014', '26*30,32*36', 'red,green', '5%', 'EMPIRE', 'HECTOR 2014', 'WEDDING OUTFIT \r\nWITH TWO PCS SHIRT AND COTI ', 'shirt', 'MODI COTI ', 'popular', 180, '5', '420', '430'),
(92, '02-07-2020 11:46:16', '1593670576.jpeg', '1593670586.jpeg,1593670596.jpeg', 'KP 2605', '26*30,32*36', '', '5%', 'EMPIRE', 'KP 2605', '2 PCS PARTY  WEAR HANGER PACKING COAT AND SHIRT\r\nINDIGIO COTI AND SHIRT', 'shirt', 'HANGER PACKING', 'popular', 180, '5', '490', '500'),
(93, '02-07-2020 11:58:58', '1593671339.jpeg', '1593671349.jpeg,1593671359.jpeg', 'SILVER 344', '22*26,28*32', '', '5%', 'EMPIRE', 'SILVER 344', 'PRINTED SATIN SHIRT', 'shirt', 'MANGO SERIES HALF SLEEVES  SHIRT', 'popular', 180, '5', '230', '240'),
(94, '02-07-2020 12:06:14', '1593671775.jpeg', '1593671785.jpeg,1593671795.jpeg', 'VIVO 1295', '20*24,26*30,32*36', '', '5%', 'EMPIRE', 'VIVO 1295', 'COTTON SHIRT PRINTED', 'shirt', 'VIVO SERIES F/S', 'popular', 540, '5', '150', '170'),
(95, '02-07-2020 12:18:22', '1593672503.jpeg', '1593672513.jpeg,1593672523.jpeg', 'METRO 2135', '20*24,26*30,32*36', '', '5%', 'EMPIRE', 'METRO 2135', 'METRO SERIES ROLL PACKING \r\nLIGHT WEIGHT SHIRT PRINTED', 'shirt', 'ROLL PACKING SHIRT ', 'popular', 270, '5', '190', '210'),
(96, '02-07-2020 12:23:55', '1593672836.jpeg', '1593672846.jpeg,1593672856.jpeg', 'WIFI 711', '20*24,26*30,32*36', '', '5%', 'EMPIRE', 'WIFI 711', '2 PCS SARAG MODEL\r\n', 'shirt', 'SARAG HALF SLEEVES', 'popular', 270, '5', '230', '250'),
(97, '02-07-2020 13:35:12', '1593677623.jpg', '1593677633.jpg', '329589', '32X40', 'multi', '5%', 'BEETLE', '329589', '', 'pant', 'cotton cargo pant', 'popular', 100, '4', '252', '252'),
(98, '02-07-2020 13:43:00', '1593677580.jpg', '1593677590.jpg', '2254376', '22X30', '', '5%', 'BEETLE', '2254376', '', 'pant', 'PANT', 'popular', 100, '4', '375', '375'),
(99, '02-07-2020 13:50:15', '1593678016.jpg', '1593678026.jpg', '2283299', '22X30', '', '5%', 'BEETLE', '2283299', '', 'pant', 'PANT', 'popular', 100, '4', '330', '330'),
(100, '02-07-2020 14:05:12', '1593678912.jpg', '1593678922.jpg', '68556', '6X16', '', '5%', 'BEETLE', '68556', '', 'capri', 'capri', 'popular', 100, '4', '237', '237'),
(101, '02-07-2020 14:09:55', '1593679195.jpg', '1593679205.jpg', '2285252', '22X30', '', '5%', 'BEETLE', '2285252', '', 'pant', 'cotton cargo pant', 'popular', 100, '5', '265', '265'),
(102, '02-07-2020 14:14:01', '1593679441.jpg', '1593679451.jpg', '3254381', '32X40', '', '5%', 'BEETLE', '3254381', '', 'pant', 'PANT', 'popular', 100, '4', '395', '395'),
(103, '02-07-2020 14:26:53', '1593680214.jpg', '1593680224.jpg', '3254385', '32X40', '', '5%', 'BEETLE', '3254385', '', 'pant', 'PANT', 'popular', 100, '4', '270', '270'),
(104, '02-07-2020 14:29:05', '1593680345.jpg', '1593680355.jpg', '2266191', '22X30', '', '5%', 'BEETLE', '2266191', '', 'pant', 'PANT', 'popular', 100, '4', '308', '308'),
(105, '02-07-2020 14:39:03', '1593680944.jpg', '1593680954.jpg', '666112', '6X16', '', '5%', 'BEETLE', '666112', '', 'capri', 'capri', 'popular', 100, '4', '218', '218'),
(106, '02-07-2020 15:13:04', '1593682985.jpg', '1593682995.jpg', '2266251', '22X30', '', '5%', 'BEETLE', '2266251', '', 'pant', 'PANT', 'popular', 100, '4', '280', '280'),
(107, '02-07-2020 15:16:39', '1593683200.jpg', '1593683210.jpg', '2274470', '22X30', '', '5%', 'BEETLE', '2274470', '', 'pant', 'PANT', 'popular', 100, '4', '295', '295'),
(108, '02-07-2020 15:22:07', '1593683528.jpg', '1593683538.jpg', '62153', '6X16', '', '5%', 'BEETLE', '62153', '', 'capri', 'capri', 'popular', 100, '4', '335', '335'),
(109, '02-07-2020 16:07:16', '1593686236.jpg', '1593686246.jpg', '2241178', '22X30', '', '5%', 'BEETLE', '2241178', '', 'pant', 'PANT', 'popular', 100, '5', '250', '250'),
(110, '02-07-2020 16:11:04', '1593686465.jpg', '1593686475.jpg', '2274465', '22X30', '', '5%', 'BEETLE', '2274465', '', 'pant', 'PANT', 'popular', 100, '4', '237', '237'),
(111, '02-07-2020 16:13:24', '1593686605.jpg', '1593686615.jpg', '2285270', '22X30', '', '5%', 'BEETLE', '2285270', '', 'pant', 'PANT', 'popular', 100, '4', '270', '270'),
(112, '02-07-2020 16:16:23', '1593686784.jpg', '1593686794.jpg', '689950', '6X16', '', '5%', 'BEETLE', '689950', '', 'capri', 'capri', 'popular', 100, '4', '205', '205'),
(113, '02-07-2020 16:18:30', '1593686911.jpg', '1593686921.jpg', '654509', '6X16', '', '5%', 'BEETLE', '654509', '', 'capri', 'capri', 'popular', 100, '5', '235', '235'),
(114, '02-07-2020 16:20:40', '1593687040.jpg', '1593687050.jpg', '65902', '6X16', '', '5%', 'BEETLE', '65902', '', 'capri', 'capri', 'popular', 100, '4', '240', '240'),
(115, '02-07-2020 16:22:30', '1593687151.jpg', '1593687161.jpg', '62163', '6X16', '', '5%', 'BEETLE', '62163', '', 'capri', 'capri', 'popular', 100, '4', '325', '325'),
(116, '02-07-2020 16:26:02', '1593687363.jpg', '1593687373.jpg', '689962', '6X16', '', '5%', 'BEETLE', '689962', '', 'capri', 'capri', 'popular', 100, '4', '215', '215'),
(117, '02-07-2020 16:28:44', '1593687525.jpg', '1593687535.jpg', '2285148', '22X30', '', '5%', 'BEETLE', '2285148', '', 'pant', 'PANT', 'popular', 100, '4', '210', '210'),
(118, '02-07-2020 16:35:19', '1593687919.jpg', '1593687929.jpg', '3285187', '32X40', '', '5%', 'BEETLE', '3285187', '', 'pant', 'PANT', 'popular', 100, '4', '295', '295'),
(119, '02-07-2020 16:37:28', '1593688049.jpg', '1593688059.jpg', '3274464', '32X40', '', '5%', 'BEETLE', '3274464', '', 'pant', 'PANT', 'popular', 100, '4', '270', '270'),
(120, '03-07-2020 15:15:01', '1593770671.jpeg', '1593770681.jpeg', 'SJ014', '26*30,32*36', 'blue', '5%', 'EM-POWER', 'SJ014', 'VERY COMFORTABLE TO WEAR ', 'track pant', 'TRACKPANTS', 'popular', 100, '4', '147', '157'),
(121, '03-07-2020 15:26:12', '1593770172.jpeg', '1593770182.jpeg', 'RJ521', '26X36', '', '5%', 'EM-POWER', 'RJ521', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '230', '230'),
(122, '03-07-2020 15:33:22', '1593770603.jpeg', '1593770613.jpeg', 'SJ011', '26*30,32*36', '', '5%', 'EM-POWER', 'SJ011', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '215', '225'),
(123, '03-07-2020 15:38:34', '1593770915.jpeg', '1593770925.jpeg', 'RJ518', '26X36', '', '5%', 'EM-POWER', 'RJ518', '', 'track pant', 'TRACKPANT', 'popular', 100, '5', '215', '215'),
(124, '03-07-2020 15:41:44', '1593771105.jpeg', '1593771115.jpeg', 'DJ135', '26X36', '', '5%', 'EM-POWER', 'DJ135', '', 'track pant', 'TRACKPANT', 'popular', 100, '5', '175', '175'),
(125, '03-07-2020 15:45:28', '1593771328.jpeg', '1593771338.jpeg', 'RJ519', '26X36', '', '5%', 'EM-POWER', 'RJ519', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '215', '215'),
(126, '03-07-2020 15:52:09', '1593771729.jpeg', '1593771739.jpeg', 'AL2120', '32*36,38X40', '', '5%', 'EM-POWER', 'AL2120', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '185', '210'),
(127, '03-07-2020 15:54:52', '1593771893.jpeg', '1593771903.jpeg', 'RJ520', '26X36', '', '5%', 'EM-POWER', 'RJ520', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '240', '240'),
(128, '03-07-2020 15:59:26', '1593772166.jpeg', '1593772176.jpeg', 'RJ517', '26X36', '', '5%', 'EM-POWER', 'RJ517', '', 'track pant', 'TRACKPANT', 'popular', 100, '4', '240', '240'),
(129, '03-07-2020 16:05:49', '1593772549.jpeg', '1593772559.jpeg', 'DJ124', '16X26', '', '5%', 'EM-POWER', 'DJ124', '', 'track pant', 'TRACKPANT', 'popular', 100, '5', '88', '88'),
(131, '04-07-2020 09:14:20', '1593834261.jpeg', '1593834271.jpeg', 'NAMO 1005', '24X28,30X34', '', '5%', 'EMPIRE', 'NAMO 1005', '', 'tshirt', 'SHRUG F/S', 'popular', 540, '5', '165', '175'),
(132, '04-07-2020 10:49:41', '1593839981.jpeg', '1593839991.jpeg', 'NAMO 1007', '24X28,30X34', '', '5%', 'EMPIRE', 'NAMO 1007', '', 'tshirt', 'SHRUG F/S', 'popular', 540, '5', '165', '175'),
(133, '04-07-2020 10:54:13', '1593840253.jpeg', '1593840263.jpeg', '1538', '24X28,30X34', '', '5%', 'EMPIRE', '1538', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 144, '5', '255', '265'),
(134, '04-07-2020 10:56:08', '1593840368.jpeg', '1593840378.jpeg', '1535', '24X28,30X34', '', '5%', 'EMPIRE', '1535', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 144, '5', '242', '252'),
(135, '04-07-2020 10:58:50', '1593840530.jpeg', '1593840540.jpeg', '1515', '24X28,30X34', '', '5%', 'EMPIRE', '1515', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 72, '4', '235', '245'),
(136, '04-07-2020 11:03:12', '1593840792.jpeg', '1593840802.jpeg', 'AR 1231', '24X28,30X34', '', '5%', 'EMPIRE', 'AR 1231', '', 'tshirt', 'SHRUG F/S', 'popular', 90, '5', '275', '285'),
(137, '04-07-2020 11:05:37', '1593840937.jpeg', '1593840947.jpeg', 'SIMBA 1014', '24X28,30X34', '', '5%', 'EMPIRE', 'SIMBA 1014', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 288, '5', '140', '150'),
(138, '04-07-2020 11:07:19', '1593841039.jpeg', '1593841049.jpeg', 'SIMBA 1015', '24X28,30X34', '', '5%', 'EMPIRE', 'SIMBA 1015', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 180, '5', '140', '150'),
(139, '04-07-2020 11:10:11', '1593841211.jpeg', '1593841221.jpeg', 'AR 1219', '24X28,30X34', '', '5%', 'EMPIRE', 'AR 1219', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 144, '4', '227', '237'),
(140, '04-07-2020 11:11:50', '1593841310.jpeg', '1593841320.jpeg', 'AR 1228', '24X28,30X34', '', '5%', 'EMPIRE', 'AR 1228', '', 'tshirt', 'T-SHIRTS F/S', 'popular', 180, '4', '215', '225'),
(141, '04-07-2020 11:16:37', '1593841598.jpeg', '1593841608.jpeg', 'WAR 110', '24X28,30X34', '', '5%', 'EMPIRE', 'WAR 110', '', 'tshirt', 'T-SHIRTS H/S', 'popular', 144, '5', '125', '135'),
(143, '04-07-2020 11:24:00', '1593842041.jpeg', '1593842051.jpeg', 'HK 104', '24X28,30X34', '', '5%', 'EMPIRE', 'HK 104', '', 'tshirt', 'SHRUG H/S', 'popular', 144, '5', '160', '170'),
(144, '04-07-2020 11:38:01', '1593842882.jpeg', '1593842892.jpeg', 'WAR 105', '18X22,24X28,30X34', '', '5%', 'EMPIRE', 'WAR 105', '', 'tshirt', 'T-SHIRTS H/S', 'popular', 144, '5', '115', '135'),
(145, '04-07-2020 11:39:44', '1593842985.jpeg', '1593842995.jpeg', 'WAR 108', '24X28,30X34,36', '', '5%', 'EMPIRE', 'WAR 108', '', 'tshirt', 'T-SHIRTS H/S', 'popular', 210, '5', '125', '145'),
(146, '04-07-2020 11:41:56', '1593843117.jpeg', '1593843127.jpeg', 'HK 106', '18X22,24X28,30X34,36', '', '5%', 'EMPIRE', 'HK 106', '', 'tshirt', 'SHRUG H/S', 'popular', 288, '5', '150', '180'),
(147, '04-07-2020 11:44:01', '1593843241.jpeg', '1593843251.jpeg', '4293', '24X28,30X34', '', '5%', 'EMPIRE', '4293', '', 'tshirt', 'SHRUG H/S', 'popular', 288, '5', '300', '310'),
(148, '04-07-2020 11:45:32', '1593843333.jpeg', '1593843343.jpeg', '4300', '24X28,30X34', '', '5%', 'EMPIRE', '4300', '', 'tshirt', 'T-SHIRTS H/S', 'popular', 210, '4', '230', '240'),
(149, '04-07-2020 11:47:58', '1593843478.jpeg', '1593843488.jpeg', 'RH 112', '24X28,30X34,36', '', '5%', 'EMPIRE', 'RH 112', '', 'tshirt', 'T-SHIRTS H/S', 'popular', 180, '4', '190', '210'),
(150, '04-07-2020 16:27:20', '1593860241.jpeg', '1593860251.jpeg', 'WAR 105', '24X28,30X34', '', '5%', 'EMPIRE', 'WAR 105', '', 'shirt', 'T-SHIRTS H/S', 'popular', 144, '5', '125', '135'),
(151, '04-07-2020 16:28:39', '1593860319.jpeg', '1593860329.jpeg', 'AR 1187', '24X28,30X34', '', '5%', 'EMPIRE', 'AR 1187', '', 'shirt', 'T-SHIRTS F/S', 'popular', 144, '5', '230', '240');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(250) NOT NULL,
  `price_per_item` decimal(10,0) NOT NULL,
  `items_per_set` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size`, `color`, `price_per_item`, `items_per_set`) VALUES
(64, 24, 'XS', 'green,blue', '10', 10),
(65, 24, 'XL', 'green,blue,white', '100', 100),
(68, 23, 'XS', 'green,blue', '200', 200),
(69, 23, 'L', 'green,blue', '300', 300),
(70, 23, 'XL', 'green,blue', '500', 500),
(83, 49, '18X20', 'red,blue,green,black', '10', 100),
(90, 50, 'XS', 'red,blue', '10', 100),
(91, 50, 'XXL', 'green,black,yellow', '20', 100),
(102, 51, '22X26', 'red', '345', 3),
(103, 51, '20', 'red', '315', 3),
(110, 52, '22X26', 'red', '345', 3),
(111, 52, '20', 'red', '315', 3),
(112, 53, 'XS', 'blue,green,black', '10', 100),
(115, 54, 'XS', 'red,blue', '100', 100),
(116, 54, '20X22', 'green,black,yellow,white,multi', '50', 100),
(117, 54, '22', 'PINK,GREEN', '20', 100),
(122, 55, '26*30', 'black/blue/red', '250', 3),
(123, 55, '32*36', 'black/blue/red', '260', 3),
(124, 56, '20*24', 'yellow,white,MANGO', '100', 6),
(130, 57, '32X40', 'blue', '122', 8),
(131, 58, 'XXL', 'black', '140', 9),
(134, 59, '18X20', 'black/blue/red', '350', 3),
(135, 59, '22X26', 'black/blue/red', '315', 3),
(136, 60, '26', 'red,blue,green,black', '667', 4),
(137, 61, '20X24', 'black/blue/red', '300', 3),
(138, 61, '22X26', 'black/blue/red', '315', 3),
(139, 62, '22X26', 'black/blue/red', '450', 3),
(140, 62, '20', 'black/blue/red', '435', 3),
(141, 63, '18', 'black/blue/red', '380', 3),
(142, 64, '16', 'red', '365', 3),
(143, 65, '16', 'multi', '370', 3),
(144, 66, '18', 'FON/GRAY/PISTA', '385', 3),
(145, 67, '18', 'FON/GRAY/PISTA', '395', 3),
(146, 68, '22X26', 'grey', '510', 3),
(147, 69, '28*32', 'grey', '570', 3),
(148, 70, '22X26', 'black', '465', 3),
(149, 71, '28*32', 'blue', '595', 3),
(150, 72, '22*26', 'FON COLUAR', '510', 3),
(151, 73, '22X26', 'black/blue/red', '380', 3),
(152, 74, '28*32', 'grey', '570', 0),
(153, 75, '28*32', 'blue', '575', 3),
(154, 76, '28*32', 'blue', '530', 3),
(155, 77, '28*32', 'blue', '530', 3),
(156, 78, '28*32', 'multi', '465', 3),
(157, 79, '22X26', 'multi', '410', 3),
(158, 80, '22X26', 'multi', '330', 3),
(159, 81, '28*32', 'blue', '540', 3),
(160, 82, '28*32', 'grey', '590', 3),
(161, 83, '22X26', 'grey', '510', 3),
(171, 85, '22*26', 'red,blue,green', '220', 9),
(172, 85, '28*32', 'red,blue,green', '230', 9),
(176, 84, '20*24', 'red,blue,green,yellow,white,PINK', '200', 18),
(177, 84, '26*30', 'red,blue,green,yellow,white,PINK', '210', 18),
(178, 84, '32*36', 'red,blue,green,yellow,white,PINK', '220', 18),
(187, 87, '26*30', 'multi', '310', 12),
(188, 87, '32*36', 'multi', '320', 12),
(189, 86, '20*24', 'red,blue,green,yellow,white,PINK', '200', 18),
(190, 86, '26*30', 'red,blue,green,yellow,white,PINK', '210', 18),
(191, 86, '32*36', 'red,blue,green,yellow,white,PINK', '220', 18),
(192, 88, '20*24', 'red,blue,green,black,yellow,white,MANGO,PINK,GREEN,FON/GRAY/PISTA', '135', 3),
(193, 88, '26*30', 'red,blue,green,yellow,white,MANGO,black/blue/red,PINK,GREEN,FON/GRAY/PISTA', '145', 3),
(194, 88, '32*36', 'red,blue,green,yellow,white,MANGO,PINK,FON/GRAY/PISTA', '155', 3),
(195, 89, '20X24', 'blue,multi', '170', 3),
(196, 89, '26*30', 'multi', '180', 3),
(197, 89, '32*36', 'multi', '190', 3),
(198, 90, '26*30', 'multi', '240', 9),
(199, 90, '32*36', 'multi', '250', 9),
(202, 92, '26*30', 'red,green,yellow', '490', 9),
(203, 92, '32*36', 'red,green,yellow', '500', 9),
(204, 93, '22*26', 'multi', '230', 18),
(205, 93, '28*32', 'multi', '240', 18),
(206, 94, '20*24', 'red,yellow,white', '150', 9),
(207, 94, '26*30', 'red,yellow,white', '160', 9),
(208, 94, '32*36', 'white', '170', 9),
(209, 95, '20*24', 'blue,green,yellow', '190', 9),
(210, 95, '26*30', 'blue,green,yellow', '200', 9),
(211, 95, '32*36', 'blue,green,yellow', '210', 9),
(212, 96, '20*24', 'multi', '230', 18),
(213, 96, '26*30', 'multi', '240', 18),
(214, 96, '32*36', 'multi', '250', 18),
(216, 98, '22X30', 'multi', '375', 5),
(217, 97, '32X40', 'multi', '252', 5),
(218, 99, '22X30', 'multi', '330', 5),
(219, 100, '6X16', 'multi', '237', 5),
(220, 101, '22X30', 'multi', '265', 5),
(221, 102, '32X40', 'multi', '395', 5),
(222, 103, '32X40', 'black/blue/red', '270', 5),
(223, 104, '22X30', 'multi', '308', 5),
(224, 105, '6X16', 'multi', '218', 5),
(225, 106, '22X30', 'black/blue/red', '280', 5),
(226, 107, '22X30', 'blue', '295', 5),
(227, 108, '6X16', 'blue', '335', 5),
(228, 109, '22X30', 'multi', '250', 5),
(229, 110, '22X30', 'multi', '237', 5),
(230, 111, '22X30', 'multi', '270', 5),
(231, 112, '6X16', 'black/blue/red', '205', 5),
(232, 113, '6X16', 'grey', '235', 5),
(233, 114, '6X16', 'FON/GRAY/PISTA', '240', 5),
(234, 115, '6X16', 'blue', '325', 5),
(235, 116, '6X16', 'black/blue/red', '215', 5),
(236, 117, '22X30', 'multi', '210', 5),
(237, 118, '32X40', 'multi', '295', 5),
(238, 119, '32X40', 'multi', '270', 5),
(240, 121, '26X36', 'blue,black', '230', 5),
(243, 122, '26*30', 'blue,black,grey', '215', 2),
(244, 122, '32*36', 'blue,black,grey', '225', 2),
(245, 120, '26*30', 'blue', '147', 2),
(246, 120, '32*36', 'blue', '157', 2),
(247, 123, '26X36', 'blue,black,grey', '215', 5),
(248, 124, '26X36', 'blue,black,grey', '175', 5),
(249, 125, '26X36', 'blue,black', '215', 5),
(250, 126, '32*36', 'red,blue,green,black', '185', 2),
(251, 126, '38X40', 'red,blue,green,black', '210', 1),
(252, 127, '26X36', 'blue,black,grey', '240', 5),
(253, 128, '26X36', 'blue,black', '240', 5),
(254, 129, '16X26', 'red,blue,black,yellow,grey', '88', 5),
(255, 91, '26*30', 'red,green', '420', 6),
(256, 91, '32*36', 'red,green', '430', 6),
(260, 131, '24X28', 'multi', '165', 9),
(261, 131, '30X34', 'multi', '175', 9),
(265, 130, '18X22', 'red,green,white', '103', 9),
(266, 130, '24X28', 'red,black,white', '113', 9),
(267, 130, '30X34', 'red,black,white', '123', 9),
(268, 132, '24X28', 'multi', '165', 9),
(269, 132, '30X34', 'multi', '175', 9),
(270, 133, '24X28', 'red,NAVY,MUSTURD', '255', 9),
(271, 133, '30X34', 'red,NAVY,MUSTURD', '265', 9),
(272, 134, '24X28', 'red,NAVY,MUSTURD', '242', 9),
(273, 134, '30X34', 'red,NAVY,MUSTURD', '252', 9),
(274, 135, '24X28', 'red,GREEN,NAVY', '235', 9),
(275, 135, '30X34', 'red,GREEN,NAVY', '245', 9),
(276, 136, '24X28', 'multi', '275', 9),
(277, 136, '30X34', 'multi', '285', 9),
(278, 137, '24X28', 'red,yellow,NAVY', '140', 9),
(279, 137, '30X34', 'red,yellow,NAVY', '150', 9),
(280, 138, '24X28', 'multi', '140', 9),
(281, 138, '30X34', 'multi', '150', 9),
(282, 139, '24X28', 'multi', '227', 9),
(283, 139, '30X34', 'multi', '237', 9),
(284, 140, '24X28', 'multi', '215', 9),
(285, 140, '30X34', 'multi', '225', 9),
(286, 141, '24X28', 'multi', '125', 9),
(287, 141, '30X34', 'multi', '135', 9),
(292, 142, '24X28', 'multi', '160', 9),
(293, 142, '30X34', 'multi', '170', 9),
(294, 143, '24X28', 'multi', '160', 9),
(295, 143, '30X34', 'multi', '170', 9),
(296, 144, '18X22', 'multi', '115', 9),
(297, 144, '24X28', 'multi', '125', 9),
(298, 144, '30X34', 'multi', '135', 9),
(299, 145, '24X28', 'multi', '125', 9),
(300, 145, '30X34', 'multi', '135', 9),
(301, 145, '36', 'multi', '145', 3),
(302, 146, '18X22', 'multi', '150', 9),
(303, 146, '24X28', 'multi', '160', 9),
(304, 146, '30X34', 'multi', '170', 9),
(305, 146, '36', 'multi', '180', 3),
(306, 147, '24X28', 'multi', '300', 9),
(307, 147, '30X34', 'multi', '310', 9),
(308, 148, '24X28', 'multi', '230', 9),
(309, 148, '30X34', 'multi', '240', 9),
(310, 149, '24X28', 'multi', '190', 9),
(311, 149, '30X34', 'multi', '200', 9),
(312, 149, '36', 'multi', '210', 3),
(313, 150, '24X28', 'multi', '125', 9),
(314, 150, '30X34', 'multi', '135', 9),
(315, 151, '24X28', 'multi', '230', 9),
(316, 151, '30X34', 'multi', '240', 9);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(9, '34'),
(10, '20X24'),
(11, '18'),
(12, '20'),
(13, '22X26'),
(14, '18X20'),
(15, '20X22'),
(16, '26'),
(17, '28'),
(19, '16'),
(20, '22'),
(21, '24'),
(22, '26'),
(23, '32X40'),
(24, '22X30'),
(25, '26*30'),
(26, '32*36'),
(27, '22*26'),
(28, '28*32'),
(29, '20*24'),
(30, '24*28'),
(31, '30*34'),
(32, '6X16'),
(33, '26X36'),
(34, '38X40'),
(35, '16X26'),
(36, '18X22'),
(37, '24X28'),
(38, '30X34'),
(39, '36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `firm_name` varchar(255) NOT NULL,
  `gst_number` varchar(255) NOT NULL,
  `pan_number` varchar(255) NOT NULL,
  `full_address` longtext NOT NULL,
  `full_address2` longtext NOT NULL,
  `yearly_turnover` varchar(255) NOT NULL,
  `type_of_dealer` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `interested_in` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `booking_station` varchar(255) NOT NULL,
  `private_marka` varchar(255) NOT NULL,
  `transport_details` varchar(255) NOT NULL,
  `visiting_card` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `repass` varchar(255) NOT NULL,
  `password_reset` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `phone`, `email`, `status`, `firm_name`, `gst_number`, `pan_number`, `full_address`, `full_address2`, `yearly_turnover`, `type_of_dealer`, `contact_person`, `interested_in`, `whatsapp_number`, `booking_station`, `private_marka`, `transport_details`, `visiting_card`, `pass`, `repass`, `password_reset`) VALUES
(7, 'Ankita', 'mahaseth', '1234567890', 'kumariankita08ece@gmail.com', 'verified', '', '', '', '', '', '', '', '', '', '123452345', '', '', '', '1592805045.jpeg', '12345', '12345', 0),
(18, 'Manish', 'Dugar', '9873124428', 'manyavarmanish@gmail.com', 'verified', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mani1131', 'mani1131', 0),
(22, 'test', 'test', '12345', 'test@gmail.com', 'pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '123', 0),
(25, 'test', 'test', '123456', 'test1@gmail.com', 'verified', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '123', 0),
(26, 'mudit', 'baid', '9315113049', 'muditbaid2@gmail.com', 'verified', 'ABCD', '078888', 'ABHO', 'IX/6342', '110031', '', 'MANU', 'RAMJI', 'KIDS', '9315113049', 'NAGPUR', 'AKRAM', 'NFC', '1593021347.png', '123456', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_notloggedin`
--

CREATE TABLE `user_notloggedin` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` varchar(11) NOT NULL,
  `c_company` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `remark` longtext NOT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `products` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notloggedin`
--

INSERT INTO `user_notloggedin` (`id`, `c_name`, `c_email`, `c_phone`, `c_company`, `order_date`, `remark`, `status`, `products`) VALUES
(34, 'Ankita Mahaseth', 'ankita@gmail.com', '123456789', 'test', '14-06-2020 21:31:43', 'test', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":5,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":4,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(35, 'MUDIT BAID', 'muditbaid2@gmail.com', '9315113049', 'rewo textile', '15-06-2020 21:35:08', 'please sand goods', 'served', '[{\"product_id\":\"48\",\"name\":\"118 H/S\",\"size\":\"18\",\"color\":\"blue\",\"inCart\":4,\"imgName\":\"1591896160.jpg\",\"collection\":\"children\",\"category\":\"3 Pcs. BOYS SUIT\",\"stock\":\"108\",\"gst\":\"5%\",\"price_per_set\":900}]'),
(36, 'vinod', 'eapl@gmail.com', '9811318687', 'ABCD', '18-06-2020 10:48:11', 'ASDGG', 'pending', '[{\"product_id\":\"51\",\"name\":\"3 PCS SHIRT\",\"size\":\"18x20\",\"color\":\"blue\",\"inCart\":1,\"imgName\":\"1591941475.jpg\",\"collection\":\"children\",\"category\":\"SHIRTS\",\"stock\":\"200\",\"gst\":\"5%\",\"price_per_set\":600},{\"product_id\":\"51\",\"name\":\"3 PCS SHIRT\",\"size\":\"20x22\",\"color\":\"yellow\",\"inCart\":2,\"imgName\":\"1591941475.jpg\",\"collection\":\"children\",\"category\":\"SHIRTS\",\"stock\":\"200\",\"gst\":\"5%\",\"price_per_set\":660},{\"product_id\":\"51\",\"name\":\"3 PCS SHIRT\",\"size\":\"20x24\",\"color\":\"MANGO\",\"inCart\":4,\"imgName\":\"1591941475.jpg\",\"collection\":\"children\",\"category\":\"SHIRTS\",\"stock\":\"200\",\"gst\":\"5%\",\"price_per_set\":780}]'),
(37, 'Ankita Mahaseth', 'ankita@gmail.com', '1234567890', 'My Company', '18-06-2020 11:32:12', 'Thanks', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(38, 'test', 'test@gmail.com', '123456789', 'myself', '18-06-2020 11:46:05', 'ok', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"48\",\"name\":\"118 H/S\",\"size\":\"18\",\"color\":\"blue\",\"inCart\":1,\"imgName\":\"1591896160.jpg\",\"collection\":\"children\",\"category\":\"3 Pcs. BOYS SUIT\",\"stock\":\"108\",\"gst\":\"5%\",\"price_per_set\":900},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(39, 'hi', 'HiHI@GMAIL.COM', '123456789', 'my', '18-06-2020 11:49:39', 'thanks', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(40, 'test', 'terst@gm.com', '1234567890', 'my', '18-06-2020 12:00:55', 'ok', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(41, 'test', 'TEST@g.com', '1234567890', 'my', '18-06-2020 12:04:32', 'ok', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(42, 'w', 'w@g.com', '1234567', 'h', '18-06-2020 12:07:31', 'h', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(43, 'hello', 'hello@gmail.com', '1234567890', 'f', '18-06-2020 13:50:51', 'g', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(44, 'hello', 'hello@gmail.com', '1234567890', 'f', '18-06-2020 13:53:02', 'g', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(45, 'hello', 'hello@gmail.com', '123456789', 'a', '18-06-2020 13:54:20', 'a', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(46, 'test', 'test@gmail.com', '12345678', 'w', '18-06-2020 14:37:02', 'e', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(47, 'hgjhk', 'fhj@h.co', '12345678', 'drfdgv', '18-06-2020 14:48:55', 'rdg', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(48, 'w', 'd@g.v', '12345', 'w', '18-06-2020 14:59:02', 'w', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(49, 'q', 'w2F@c.f', '1234', '234tSDF', '18-06-2020 15:04:26', 'DFB', 'pending', '[{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(50, 'ankita', 'ankita@gmail.com', '1234567890', 'my', '18-06-2020 15:06:17', 'ok', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(51, 'ankita', 'ankita@gmail.com', '123456789', 'wertyu', '18-06-2020 15:10:59', 'werty', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(52, 'qe', 'ewtr@fhg.cjom', '1234567', 'eyuk', '18-06-2020 15:13:45', 'rehj', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100}]'),
(53, 'qwerty', 'werty@sdfghj.ffy', '12345678', 'rdtfyghujk', '18-06-2020 15:16:20', 'sdfgjhkl', 'pending', '[{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(54, 'q', 'q@d.com', '12345', 'wergh', '18-06-2020 15:22:23', 'wer', 'pending', '[{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(55, 'q', 'q@d.com', '12345', 'wergh', '18-06-2020 15:23:10', 'wer', 'pending', '[{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(56, 'qqwwe', 'wer@dfghj.com', '1234567', 'werty', '18-06-2020 15:29:39', 'wertgyhj', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":4000}]'),
(57, 'MUDIT BAID', 'muditbaid2@gmail.com', '9315113049', 'ABCD', '19-06-2020 21:59:49', 'XYX', 'pending', '[{\"product_id\":\"64\",\"name\":\"TG 916\",\"size\":\"20*24\",\"color\":\"multi\",\"inCart\":2,\"imgName\":\"1592563270.jpeg\",\"collection\":\"children\",\"category\":\"MANGO SERIES HALF SLEEVES  SHIRT\",\"stock\":\"270\",\"gst\":\"5%\",\"price_per_set\":3384},{\"product_id\":\"64\",\"name\":\"TG 916\",\"size\":\"32*36\",\"color\":\"multi\",\"inCart\":3,\"imgName\":\"1592563270.jpeg\",\"collection\":\"children\",\"category\":\"MANGO SERIES HALF SLEEVES  SHIRT\",\"stock\":\"270\",\"gst\":\"5%\",\"price_per_set\":3744}]'),
(58, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:35:05', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(59, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:36:29', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(60, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:36:57', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(61, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:39:01', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(62, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:43:17', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(63, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:43:24', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(64, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:45:40', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(65, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:48:01', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(66, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:50:40', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(67, 'test', 'atewg@gmail.com', '1234567890', 'dfghj', '22-06-2020 00:52:06', 'vbnm', 'pending', '[{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":720}]'),
(68, 'Ankita mahaseth', 'ankita@example.com', '1234567890', 'myok', '22-06-2020 14:22:35', '', 'pending', '[{\"product_id\":\"48\",\"name\":\"118 H/S\",\"size\":\"S\",\"color\":\"yellow\",\"inCart\":1,\"imgName\":\"1591896160.jpg\",\"collection\":\"children\",\"category\":\"3 Pcs. BOYS SUIT\",\"stock\":\"108\",\"gst\":\"5%\",\"price_per_set\":182},{\"product_id\":\"48\",\"name\":\"118 H/S\",\"size\":\"S\",\"color\":\"white\",\"inCart\":1,\"imgName\":\"1591896160.jpg\",\"collection\":\"children\",\"category\":\"3 Pcs. BOYS SUIT\",\"stock\":\"108\",\"gst\":\"5%\",\"price_per_set\":182},{\"product_id\":\"48\",\"name\":\"118 H/S\",\"size\":\"M\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1591896160.jpg\",\"collection\":\"children\",\"category\":\"3 Pcs. BOYS SUIT\",\"stock\":\"108\",\"gst\":\"5%\",\"price_per_set\":195}]'),
(69, 'test test', 'test1@gmail.com', '123456', 'abcd', '23-06-2020 10:54:09', 'need to buy', 'pending', '[{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":15129},{\"product_id\":\"47\",\"name\":\"Jacket\",\"size\":\"M\",\"color\":\"blue\",\"inCart\":1,\"imgName\":\"1591805636.jpg\",\"collection\":\"children\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":15129},{\"product_id\":\"49\",\"name\":\"ankitTest\",\"size\":\"18X20\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1592889665.jpg\",\"collection\":\"men\",\"category\":\"ankitNewCat\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":1000},{\"product_id\":\"49\",\"name\":\"ankitTest\",\"size\":\"18X20\",\"color\":\"blue\",\"inCart\":2,\"imgName\":\"1592889665.jpg\",\"collection\":\"men\",\"category\":\"ankitNewCat\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":1000},{\"product_id\":\"49\",\"name\":\"ankitTest\",\"size\":\"18X20\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1592889665.jpg\",\"collection\":\"men\",\"category\":\"ankitNewCat\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":1000}]'),
(70, 'mudit baid', 'muditbaid2@gmail.com', '9315113049', 'abc', '24-06-2020 23:20:41', '', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"green\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":40000},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"L\",\"color\":\"green\",\"inCart\":2,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":90000},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"L\",\"color\":\"blue\",\"inCart\":3,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":90000},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XL\",\"color\":\"green\",\"inCart\":4,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":250000}]'),
(71, 'mudit baid', 'muditbaid2@gmail.com', '9315113049', 'abc', '26-06-2020 14:26:20', 'urgent', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"green\",\"inCart\":3,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":40000},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"L\",\"color\":\"green\",\"inCart\":2,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":90000},{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"L\",\"color\":\"blue\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":90000}]'),
(72, 'mudit baid', 'muditbaid2@gmail.com', '9315113049', 'abc', '30-06-2020 17:15:02', '', 'pending', '[{\"product_id\":\"55\",\"name\":\"SMART 1031\",\"size\":\"26*30\",\"color\":\"black/blue/red\",\"inCart\":3,\"imgName\":\"1593517350.jpeg\",\"collection\":\"shirt\",\"category\":\"MODI COTI \",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":750},{\"product_id\":\"55\",\"name\":\"SMART 1031\",\"size\":\"32*36\",\"color\":\"black/blue/red\",\"inCart\":2,\"imgName\":\"1593517350.jpeg\",\"collection\":\"shirt\",\"category\":\"MODI COTI \",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":780}]'),
(73, 'mudit baid', 'muditbaid2@gmail.com', '9315113049', 'RAMLAL SHYAM KUMAR', '30-06-2020 20:32:51', '', 'pending', '[{\"product_id\":\"56\",\"name\":\"Boys Printed Boxers\",\"size\":\"20*24\",\"color\":\"yellow\",\"inCart\":2,\"imgName\":\"1593529164.JPG\",\"collection\":\"track pant\",\"category\":\"Boys Boxer\",\"stock\":\"50\",\"gst\":\"5%\",\"price_per_set\":600},{\"product_id\":\"56\",\"name\":\"Boys Printed Boxers\",\"size\":\"20*24\",\"color\":\"white\",\"inCart\":2,\"imgName\":\"1593529164.JPG\",\"collection\":\"track pant\",\"category\":\"Boys Boxer\",\"stock\":\"50\",\"gst\":\"5%\",\"price_per_set\":600},{\"product_id\":\"56\",\"name\":\"Boys Printed Boxers\",\"size\":\"20*24\",\"color\":\"MANGO\",\"inCart\":2,\"imgName\":\"1593529164.JPG\",\"collection\":\"track pant\",\"category\":\"Boys Boxer\",\"stock\":\"50\",\"gst\":\"5%\",\"price_per_set\":600}]'),
(74, 'mudit baid', 'muditbaid2@gmail.com', '9315113049', 'SUMAN', '01-07-2020 11:20:57', '', 'pending', '[{\"product_id\":\"62\",\"name\":\"AJ1303\",\"size\":\"22X26\",\"color\":\"black/blue/red\",\"inCart\":2,\"imgName\":\"1593582497.jpg\",\"collection\":\"babasuit\",\"category\":\"HOSIERY COTY\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":1350},{\"product_id\":\"62\",\"name\":\"AJ1303\",\"size\":\"20\",\"color\":\"black/blue/red\",\"inCart\":3,\"imgName\":\"1593582497.jpg\",\"collection\":\"babasuit\",\"category\":\"HOSIERY COTY\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":1305}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notloggedin`
--
ALTER TABLE `user_notloggedin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_notloggedin`
--
ALTER TABLE `user_notloggedin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
