-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 10:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colour_touch`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_about_footer`
--

CREATE TABLE `ct_about_footer` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_about_footer`
--

INSERT INTO `ct_about_footer` (`id`, `title`, `content`) VALUES
(1, 'About  Printify', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet lorem quam. Sed ut libero libero. Sed vel semper odio. Phasellus elementum mollis enim,');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner1`
--

CREATE TABLE `ct_banner1` (
  `id` int(11) NOT NULL,
  `banner_title` text NOT NULL,
  `banner_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner1`
--

INSERT INTO `ct_banner1` (`id`, `banner_title`, `banner_content`) VALUES
(1, 'we believe in the power of great design', ' Quality\r\nPrinting\r\nService     '),
(3, 'we believe in the power of great design', ' Quality Printing Service');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner2`
--

CREATE TABLE `ct_banner2` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `iconstyle1` text NOT NULL,
  `iconheading1` text NOT NULL,
  `iconstyle2` text NOT NULL,
  `iconheading2` text NOT NULL,
  `iconstyle3` text NOT NULL,
  `iconheading3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner2`
--

INSERT INTO `ct_banner2` (`id`, `title`, `content`, `description`, `iconstyle1`, `iconheading1`, `iconstyle2`, `iconheading2`, `iconstyle3`, `iconheading3`) VALUES
(1, 'Next printing level', 'Printify Unique  Features', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, metus sit amet pulvinar tristique, odio erat laoreet odio, eu dignissim velit leo eu massa. Ut vel faucibus elit, elementum euismod risus.', 'printify-icon-white-sheets', 'Business </br> Cards', 'printify-icon-brochure-folded', 'Flyer</br> Printing', 'printify-icon-circular-sticker', 'Sticker </br>Printing');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner3`
--

CREATE TABLE `ct_banner3` (
  `id` int(11) NOT NULL,
  `iconstyle1` text NOT NULL,
  `icontitle1` text NOT NULL,
  `iconstyle2` text NOT NULL,
  `icontitle2` text NOT NULL,
  `iconstyle3` text NOT NULL,
  `icontitle3` text NOT NULL,
  `iconstyle4` text NOT NULL,
  `icontitle4` text NOT NULL,
  `iconstyle5` text NOT NULL,
  `icontitle5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner3`
--

INSERT INTO `ct_banner3` (`id`, `iconstyle1`, `icontitle1`, `iconstyle2`, `icontitle2`, `iconstyle3`, `icontitle3`, `iconstyle4`, `icontitle4`, `iconstyle5`, `icontitle5`) VALUES
(1, 'printify-icon-t-shirt-with-square', 'T-Shirt</br>  Printing', 'printify-icon-brochure-folded', 'Flyer </br> Printing', 'printify-icon-continuous-feed-paper', 'Poster</br>  Printing', 'printify-icon-circular-sticker', 'Sticker</br>  Printing', 'printify-icon-white-sheets', 'Postcard </br>Printing');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner4`
--

CREATE TABLE `ct_banner4` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `content` text NOT NULL,
  `footercontent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner4`
--

INSERT INTO `ct_banner4` (`id`, `img`, `content`, `footercontent`) VALUES
(1, '1574322434colourtouch.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, metus sit amet pulvinar tristique, odio erat laoreet odio, eu dignissim velit leo eu massa. ', 'Lorem ipsum'),
(2, '1574322477colourtouch.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, metus sit amet pulvinar tristique, odio erat laoreet odio, eu dignissim velit leo eu massa.', 'Lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner5`
--

CREATE TABLE `ct_banner5` (
  `id` int(11) NOT NULL,
  `bg_image` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner5`
--

INSERT INTO `ct_banner5` (`id`, `bg_image`, `title`, `content`) VALUES
(1, '1574250026Bgimage.png', 'Thickest business card', 'Try Our New  </br> Premium Extra </br> Thick Cards');

-- --------------------------------------------------------

--
-- Table structure for table `ct_banner6`
--

CREATE TABLE `ct_banner6` (
  `id` int(11) NOT NULL,
  `logo_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banner6`
--

INSERT INTO `ct_banner6` (`id`, `logo_images`) VALUES
(1, '1574406399colourtouch.jpg'),
(2, '1574406408colourtouch.jpg'),
(3, '1574406416colourtouch.jpg'),
(4, '1574406425colourtouch.jpg'),
(5, '1574406436colourtouch.jpg'),
(6, 'brand-1-1.png'),
(7, '1574406444colourtouch.jpg'),
(8, '1574406436colourtouch.jpg'),
(9, '1574406436colourtouch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ct_contact_details`
--

CREATE TABLE `ct_contact_details` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `tele` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_contact_details`
--

INSERT INTO `ct_contact_details` (`id`, `address`, `tele`, `mobile`, `email`) VALUES
(1, 'Near Naif Souq, Opp Florida Al Souk Hotel\r\nAl Jaziri Bldg, Deira, PO Box: 376490  \r\nDubai, United Arab Emirates', '+971 4 221 2202', '+971 55 7699 663', 'colourtouchad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ct_map`
--

CREATE TABLE `ct_map` (
  `id` int(11) NOT NULL,
  `map_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_map`
--

INSERT INTO `ct_map` (`id`, `map_url`) VALUES
(1, 'https://www.maps.ie/coordinates.html');

-- --------------------------------------------------------

--
-- Table structure for table `ct_settings`
--

CREATE TABLE `ct_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `twitter_url` text NOT NULL,
  `pinterest_url` text NOT NULL,
  `facebook_url` text NOT NULL,
  `youtube_url` text NOT NULL,
  `company_tele` bigint(20) NOT NULL,
  `company_mob` bigint(20) NOT NULL,
  `company_email` text NOT NULL,
  `company_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_settings`
--

INSERT INTO `ct_settings` (`id`, `logo`, `twitter_url`, `pinterest_url`, `facebook_url`, `youtube_url`, `company_tele`, `company_mob`, `company_email`, `company_address`) VALUES
(2, '1574167302logo.png', 'https://twitter.com', 'https://www.pinterest.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 97142212202, 971557699663, 'colourtouchad@gmail.com', '  near Naif souq, opp Florida al souk hotel\r\nAl Jaziri bldg , Deira , P O Box: 376490\r\nDubai, United Arab Emirates');

-- --------------------------------------------------------

--
-- Table structure for table `ct_welcome`
--

CREATE TABLE `ct_welcome` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_welcome`
--

INSERT INTO `ct_welcome` (`id`, `img`, `title`, `content`, `body`) VALUES
(1, '1574236051Image.png', 'Welcome to printify', 'Dream it. Print it.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, velit eu accumsan tempor, lacus neque eleifend leo, vitae mattis dui libero eu sem. Mauris in dignissim magna. Nunc sed est gravida, efficitur lorem ac, tincidunt enim.<p>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, velit eu accumsan tempor, lacus neque eleifend leo, vitae mattis dui libero eu sem. Mauris in dignissim magna. Nunc sed est gravida, efficitur lorem ac, tincidunt enim.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_about_footer`
--
ALTER TABLE `ct_about_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner1`
--
ALTER TABLE `ct_banner1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner2`
--
ALTER TABLE `ct_banner2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner3`
--
ALTER TABLE `ct_banner3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner4`
--
ALTER TABLE `ct_banner4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner5`
--
ALTER TABLE `ct_banner5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_banner6`
--
ALTER TABLE `ct_banner6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_contact_details`
--
ALTER TABLE `ct_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_map`
--
ALTER TABLE `ct_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_settings`
--
ALTER TABLE `ct_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_welcome`
--
ALTER TABLE `ct_welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_about_footer`
--
ALTER TABLE `ct_about_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_banner1`
--
ALTER TABLE `ct_banner1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ct_banner2`
--
ALTER TABLE `ct_banner2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_banner3`
--
ALTER TABLE `ct_banner3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_banner4`
--
ALTER TABLE `ct_banner4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ct_banner5`
--
ALTER TABLE `ct_banner5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_banner6`
--
ALTER TABLE `ct_banner6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ct_contact_details`
--
ALTER TABLE `ct_contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_map`
--
ALTER TABLE `ct_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_settings`
--
ALTER TABLE `ct_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ct_welcome`
--
ALTER TABLE `ct_welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
