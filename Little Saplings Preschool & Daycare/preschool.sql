-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 04:28 PM
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
-- Database: `preschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(9) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `username`, `password`) VALUES
(1, 'preschool', 'Manisha@72');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_title` longtext,
  `blog_description` longtext,
  `blog_small` int(11) NOT NULL,
  `blog_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(9) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `phone` text,
  `email` varchar(1000) DEFAULT NULL,
  `message` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `phone`, `email`, `message`) VALUES
(2, 'Ankita Mahaseth', '1234567890', 'Ankita@gmail.com', 'hello India'),
(3, 'Manish', '1234568890', 'abc@gmail.com', 'this is part of test');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(9) NOT NULL,
  `event_date` date NOT NULL,
  `event_title` longtext NOT NULL,
  `event_location` varchar(1000) NOT NULL DEFAULT 'Ravet',
  `event_description` longtext NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_date`, `event_title`, `event_location`, `event_description`, `event_image`) VALUES
(1, '2019-08-23', 'Gokulashtami', 'Ravet', 'Krishna Janmashtami, also known simply as Janmashtami or Gokulashtami, is an annual Hindu festival that celebrates the birth of Krishna, the eighth avatar of Vishnu.It is an important festival particularly to the Vaishnavism tradition of Hinduism.It is celebrated particularly in Mathura and Vrindavan, along with major Vaishnava and non-sectarian communities found in Manipur, Assam, Bihar, West Bengal and all other states of India.', 'gokul_astmi.jpg'),
(2, '2019-08-15', 'Independence Day', 'Ravet', 'Independence Day is annually celebrated on 15 August, as a national holiday in India commemorating the nation\'s independence from the United Kingdom on 15 August 1947.On each subsequent Independence Day, the incumbent Prime Minister customarily raises the flag and gives an address to the nation.Independence Day is observed throughout India with flag-hoisting ceremonies, parades and cultural events.', 'independence_day.jpg'),
(3, '2019-10-07', 'Navaratri', 'Ravet', 'Navaratri[a] is a Hindu festival that spans nine nights (and ten days) and is celebrated every year in the autumn. It is observed for different reasons and celebrated differently in various parts of the Indian cultural sphere. The common theme is the battle and victory of Good over Evil based on a regionally famous epic or legend such as the Ramayana or the Devi Mahatmya.', 'navratri.jpg'),
(4, '2019-10-18', 'Diwali Party', 'Ravet', 'Diwali (Deepavali or Deepawali or Dipawali) is one of the India\'s biggest festivals. Diwali means rows of lighted lamps. It is a festival of lights and every Indian celebrates it with joy. During this festival, people light up their houses and shops. They worship Lord Ganesha for good welfare and prosperity and Goddess Lakshmi for wealth and wisdom. Hindus light up their homes and shops, to welcome the goddess of wealth and fortune, Goddess Lakshmi , to give them good luck for the year ahead. ', 'musical chair.jpg'),
(5, '2019-11-14', 'Children\'s Day', 'Ravet', 'All the kids, chin up, smile and celebrate the day dedicated specially to you! November 14 is celebrated as Childrenâ€™s Day (also called Bal Diwas) in our country and the occasion also commemorates the birth anniversary of Jawaharlal Nehru, the first Prime Minister of India. As the schools and colleges gear up to celebrate this day, here is all you need to know about the history, importance and significance of the occasion.', 'children day.jpg'),
(6, '2019-12-24', 'Christmas Party', 'Ravet', 'Among all the festivals in the world, Christmas is very popular and is celebrated by billions of people around the world. Christmas is celebrated on 25 December. It is a holiday to celebrate the birth of Jesus Christ, who, according to the Christian religion, is the son of God. The name is a joining of â€œChristâ€ and â€œmassâ€ which means the holy mass (supper, celebration or festival) of Christ.', 'chirstmas.jpeg'),
(7, '2020-01-26', 'Republic Day', 'Ravet', 'Republic day is not just like any other holiday! Probably one of the most significant days for the country but very few know the actual importance of this Historic Day. Hereâ€™s something you should know and you can teach your kids too on this special holiday! Kids often tend to get confused between Independence Day and Republic Day, so a good place to start would be to tell them the difference between the two most historic days in Indian history.', 'republic.jpg'),
(8, '2020-01-14', 'Mahashivratri', 'Ravet', 'Maha Shivaratri Festival or the â€˜The Night of Shivaâ€™ is celebrated with devotion and religious fervor in honor of Lord Shiva, one of the deities of Hindu Trinity. Shivaratri falls on the moonless 14th night of the new moon in the Hindu month of Phalgun, which corresponds to the month of February â€“ March in English Calendar. Celebrating the festival of Shivaratri devotees observe day and night fast and perform ritual worship of Shiva Lingam to appease Lord Shiva.', 'mahashivratri.png'),
(9, '2020-02-15', 'Annual Day', 'Ravet', 'The beginning of a year is an eventful time for schools and students. It is also the time when most schools organise the most important event of the year, the annual day. Celebrating the school annual day provides the school with an opportunity to showcase its achievements. This function also gives students an opportunity to showcase their various talents and interact with their teachers in a more informal environment.', 'annual.jpg'),
(10, '2020-02-15', 'Annual Day', 'Little Saplings Preschool Ravet', 'Children and Parents had a very good time on Annual day of Little Saplings Preschool Ravet', 'Song video.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(9) NOT NULL,
  `gallery_image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_image`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, 'School Picnic 23.12.jpg'),
(21, 'IMG-20200215-WA0020.jpg'),
(22, 'DSC_0007.jpg'),
(23, 'IMG-20200215-WA0110.jpg'),
(24, 'IMG_20191114_121535.jpg'),
(25, 'Group photo.jpg'),
(26, 'Group photo.jpg'),
(27, 'nursery class photo.jpg'),
(28, 'play group photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `gallery_id` int(11) NOT NULL,
  `gallery_date` date NOT NULL,
  `gallery_video` varchar(255) NOT NULL,
  `gallery_video_description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`gallery_id`, `gallery_date`, `gallery_video`, `gallery_video_description`) VALUES
(1, '2020-04-14', 'video (1).mp4', 'this is demo video'),
(4, '2020-04-16', 'Song video.mp4', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
