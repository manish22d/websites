-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(3, '1590758623.png', '#New Summer Collection 2020', 'Arrivals Sales', 'Shop Now', 'home'),
(4, '1590759101.png', '#New Summer Collection 2020', 'Shop With Us', 'Shop Now', 'about'),
(5, '1590760015.png', '#New Summer Collection 2020', 'Arrivals', 'Shop Now', 'shop'),
(6, '1590760382.png', '#New Summer Collection 2020	', 'Arrivals Sales', 'Shop Now', 'men'),
(7, '1590760617.png', '#New Summer Collection 2020', 'Arrivals', 'Shop Now', 'women'),
(8, '1590760671.jpg', '#New Summer Collection 2020', 'Arrivals Sales', 'Shop Now', 'children');

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
(6, 'white');

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
(16, '29-05-2020 16:34:26', 'test', 'test@gmail.com', '1234567890', '', 'hello'),
(17, '15-06-2020 08:57:35', 'test', 'test@gmail.com', '123456789', 'my company', 'thanks');

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
(4, '1590760970.png', 'women', '29-05-2020 16:02:49'),
(5, '1590760988.png', 'men', '29-05-2020 16:03:07');

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
  `stock` int(11) NOT NULL DEFAULT 100,
  `rating` decimal(10,0) NOT NULL,
  `min_price` decimal(10,0) NOT NULL,
  `max_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `upload_date`, `img`, `other_img`, `name`, `size`, `color`, `gst`, `brand`, `sku_id`, `description`, `collection`, `category`, `tags`, `stock`, `rating`, `min_price`, `max_price`) VALUES
(23, '', '1590491185.jpeg', '1590491195.jpeg,1590491205.jpeg,1590491215.jpeg,1590491225.jpeg,1590491235.jpeg,1590491245.jpeg', 'Printed Boxer', 'XS,L,XL', 'red,blue,green,black', '5%', 'test', 'test', 'this is a very comfortable printed boxer', 'men', 'boxer', 'popular', 100, '5', '200', '500'),
(24, '', '1590556483.jpg', '1590556493.jpg,1590556503.jpg,1590556513.jpg,1590556523.jpg', 'Cold Fusion Printed Mens Boxer ', 'XS,XL', 'red,blue,green', '5%', 'test', 'test', '100% cotton printed mens boxer', 'men', 'Mens Boxer', 'popular', 100, '5', '10', '100'),
(32, '29-05-2020 17:40:22', '1590766822.jpeg', '1590937062.png', 'beautiful rose', 'XS,XL', 'red,blue,green', '5%', 'test', 'test', 'qwertyuiop', 'children', 'rose', 'sale', 55, '5', '100', '200'),
(36, '09-06-2020 21:52:46', '1591732366.jpeg', '1591732376.jpeg,1591732386.jpeg', 'jacket', 'XS,XL', 'blue,green,black', '12%', 'abc', 'ayx', 'test', 'men', 'JAcket', 'popular', 100, '5', '100', '200'),
(37, '09-06-2020 21:53:29', '1591732410.jpeg', '1591732420.jpeg,1591732430.jpeg', 'jacket', 'S,XS', 'blue,green,black,yellow', '12%', 'abc', 'ayx', 'test', 'men', 'JAcket', 'popular', 100, '5', '100', '200'),
(38, '09-06-2020 21:55:00', '1591732500.jpeg', '1591732510.jpeg,1591732520.jpeg,1591732530.jpeg', 'test', 'XS', 'blue,green,black', '5%', 'test', 'test', 'qwertyui', 'men', 'Test', 'popular', 100, '5', '10', '10'),
(39, '09-06-2020 21:55:37', '1591732537.jpeg', '1591732547.jpeg,1591732557.jpeg,1591732567.jpeg', 'test', 'XS,S', 'blue,green,black', '5%', 'test', 'test', 'qwertyu\r\n', 'men', 'Test', 'popular', 100, '5', '10', '30'),
(40, '10-06-2020 06:42:07', '1591786553.jpeg', '1591786563.jpeg,1591786573.jpeg', 'jacket', 'XXL,M', 'blue,yellow', '12%', 'ABC', 'XYZ', 'Test', 'women', 'Jacket', 'popular', 100, '2', '50', '60'),
(41, '10-06-2020 06:45:02', '1591764302.jpeg', '1591764312.jpeg,1591764322.jpeg', 'jacket', 'XS,M', 'blue,yellow', '12%', 'ABC', 'XYZ', 'Test', 'women', 'Jacket', 'popular', 100, '2', '20', '65'),
(45, '10-06-2020 16:34:51', '1591787092.jpeg', '1591787102.jpeg,1591787112.jpeg,1591787122.jpeg', 'test', 'XS,XL', 'black,yellow,white', '12%', 'puma', 'qwer', 'qwertgy', 'men', 'test', 'popular', 100, '5', '10', '30'),
(46, '10-06-2020 16:56:42', '1591788402.jpeg', '1591788412.jpeg,1591788422.jpeg,1591788432.jpeg,1591788442.jpeg,1591788452.jpeg', 'test', 'XS,S', 'green,black,yellow', '5%', 'test', 'test', 'qwertyuiop', 'men', 'test', 'popular', 100, '5', '6', '10'),
(47, '20-06-2020 22:05:53', '1592670954.png', '1592670964.png,1592670974.png', 'testProduct', 'XS,XL', 'red,blue,black,yellow', '12%', 'new', 'xyz', 'Test Product', 'men', 'popular', 'popular', 100, '5', '12', '15'),
(48, '20-06-2020 22:08:25', '1592671105.png', '1592671115.png,1592671125.png,1592671135.jpeg', 'sample', 'S,M', 'yellow,white,green,black', '12%', 'YRF', 'AVBC', 'Test', 'children', 'new', 'popular', 1000, '5', '13', '14'),
(49, '20-06-2020 22:12:22', '1592671342.jpeg', '1592671352.png,1592671362.jpg', 'asafq', 'XS,S', 'blue,green,yellow,white', '5%', 'MNC', 'ABC', 'Test', 'men', 'YES', 'popular', 100, '1', '12', '123'),
(50, '21-06-2020 00:07:30', '1592678251.jpg', '1592678261.png', 'qwe', 'XS,XS', '', '5%', 'qwerf', '', '', 'men', '14', 'popular', 127, '1', '12', '123'),
(51, '21-06-2020 00:08:33', '1592678314.jpg', '1592678324.png', 'manish', 'XS,S', '', '12%', 'ancb', 'qwer', 'test', 'women', 'xyz', 'popular', 100, '1', '10', '123'),
(52, '21-06-2020 00:12:50', '1592678571.jpg', '1592678581.png', 'test', 'XS,M', '', '12%', 'asdf', 'zxcv', 'dfghj', 'men', 'asdfg', 'popular', 0, '1', '12', '89'),
(53, '21-06-2020 00:16:12', '1592678773.jpg', '1592678783.png', 'test', 'XS,XL', '', '12%', 'asdf', 'zxcv', 'dfghj', 'men', 'asdfg', 'popular', 0, '1', '12', '12');

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
(36, 46, 'XS', 'green,black', '6', 6),
(37, 46, 'S', 'green,black', '10', 10),
(46, 45, 'XS', 'green,black', '10', 11),
(47, 45, 'XL', 'green,blue', '30', 32),
(48, 41, 'XS', 'green,blue', '20', 10),
(49, 41, 'M', 'green,blue', '65', 600),
(50, 40, 'XXL', 'green,blue', '50', 5),
(51, 40, 'M', 'green,blue', '60', 6),
(57, 38, 'XS', 'green,blue', '10', 10),
(58, 37, 'S', 'green,blue', '100', 100),
(59, 37, 'XS', 'green,blue', '200', 200),
(62, 36, 'XS', 'yellow,White', '100', 100),
(63, 36, 'XL', 'green,blue', '200', 200),
(64, 24, 'XS', 'green,blue', '10', 10),
(65, 24, 'XL', 'green,blue', '100', 100),
(66, 32, 'XS', 'green,blue', '100', 100),
(67, 32, 'XL', 'green,blue', '200', 200),
(68, 23, 'XS', 'green,blue', '200', 200),
(69, 23, 'L', 'green,blue', '300', 300),
(70, 23, 'XL', 'green,blue', '500', 500),
(71, 39, 'XS', 'green,blue', '10', 100),
(72, 39, 'S', 'green,blue', '30', 300),
(73, 48, 'S', 'yellow,white,green,black', '14', 13),
(74, 48, 'M', 'yellow,white,green,black', '13', 15),
(75, 50, 'XS', 'red,blue', '123', 123),
(76, 50, 'XS', 'green,black', '12', 12),
(77, 51, 'XS', 'red,blue', '123', 123),
(78, 51, 'S', 'green,black', '10', 11),
(79, 52, 'XS', 'blue,green', '12', 12),
(80, 52, 'M', 'black,yellow', '89', 78),
(81, 53, 'XS', 'red,blue', '12', 12),
(82, 53, 'XL', 'green,black', '12', 12);

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
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(9, '20 x 30');

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
  `pass` varchar(255) NOT NULL,
  `repass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `phone`, `email`, `status`, `firm_name`, `gst_number`, `pan_number`, `full_address`, `full_address2`, `yearly_turnover`, `type_of_dealer`, `contact_person`, `interested_in`, `whatsapp_number`, `booking_station`, `private_marka`, `transport_details`, `pass`, `repass`) VALUES
(7, 'Ankita', 'mahaseth', '1234567890', 'ankita@example.com', 'verified', 'Sapna garments', '123456789', '23456789o', '3456789', '3456789', '3456789', '345678', 'ertyui', '4567', '456789', '1234', 'wertyui567', '456789', '123', '123'),
(18, 'Manish', 'Dugar', '9873124428', 'manyavarmanish@gmail.com', 'verified', '', '', '', '', '', '', '', '', '', '0', '', '', '', 'mani1131', 'mani1131'),
(22, 'test', 'test', '12345', 'test@gmail.com', 'pending', '', '', '', '', '', '', '', '', '', '0', '', '', '', '123', '123'),
(25, 'test', 'test', '123456', 'test1@gmail.com', 'verified', '', '', '', '', '', '', '', '', '', '0', '', '', '', '123', '123');

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
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `products` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notloggedin`
--

INSERT INTO `user_notloggedin` (`id`, `c_name`, `c_email`, `c_phone`, `c_company`, `order_date`, `remark`, `status`, `products`) VALUES
(11, 'Ankita Mahaseth', 'ankita@gmail.com', '1234567890', '', '14-06-2020 16:00:38', 'hello', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":40000},{\"product_id\":\"24\",\"name\":\"Cold Fusion Printed Mens Boxer \",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590556483.jpg\",\"collection\":\"men\",\"category\":\"Mens Boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":100},{\"product_id\":\"37\",\"name\":\"jacket\",\"size\":\"S\",\"color\":\"blue\",\"inCart\":1,\"imgName\":\"1591732410.jpeg\",\"collection\":\"men\",\"category\":\"JAcket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":10000},{\"product_id\":\"32\",\"name\":\"beautiful rose\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":2,\"imgName\":\"1590766822.jpeg\",\"collection\":\"children\",\"category\":\"rose\",\"stock\":\"55\",\"gst\":\"5%\",\"price_per_set\":10000}]'),
(12, 'Ankita', 'ankita@gmail.com', '12345678', '', '14-06-2020 16:08:51', 'THANKS', 'pending', '[{\"product_id\":\"23\",\"name\":\"Printed Boxer\",\"size\":\"XS\",\"color\":\"red\",\"inCart\":1,\"imgName\":\"1590491185.jpeg\",\"collection\":\"men\",\"category\":\"boxer\",\"stock\":\"100\",\"gst\":\"5%\",\"price_per_set\":40000}]'),
(13, 'manish', 'test@gmail.com', '1234567890', 'test', '14-06-2020 16:32:15', 'test', 'pending', '[{\"product_id\":\"41\",\"name\":\"jacket\",\"size\":\"M\",\"color\":\"yellow\",\"inCart\":2,\"imgName\":\"1591764302.jpeg\",\"collection\":\"women\",\"category\":\"Jacket\",\"stock\":\"100\",\"gst\":\"12%\",\"price_per_set\":39000}]');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_notloggedin`
--
ALTER TABLE `user_notloggedin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
