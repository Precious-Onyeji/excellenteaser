-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 11:23 PM
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
-- Database: `excellent_easerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_text`
--

CREATE TABLE `about_us_text` (
  `id` int(11) NOT NULL,
  `description_header` varchar(120) NOT NULL,
  `description_body` varchar(6000) NOT NULL,
  `tested_header` varchar(100) NOT NULL,
  `professional_header` varchar(120) NOT NULL,
  `expert_header` varchar(120) NOT NULL,
  `tested_body` varchar(120) NOT NULL,
  `professional_body` varchar(120) NOT NULL,
  `expert_body` varchar(120) NOT NULL,
  `ceo_header` varchar(120) NOT NULL,
  `ceo_body` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us_text`
--

INSERT INTO `about_us_text` (`id`, `description_header`, `description_body`, `tested_header`, `professional_header`, `expert_header`, `tested_body`, `professional_body`, `expert_body`, `ceo_header`, `ceo_body`) VALUES
(1, 'WE ARE EXCELLENT EASERS', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'WE ARETRUSTED', 'WE ARE PROFESSIONAL', 'WE ARE EXPERT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'MEET OUR CEO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id er');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'segunzz', 'segman45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_text`
--

CREATE TABLE `contact_us_text` (
  `id` int(11) NOT NULL,
  `left_header` varchar(120) NOT NULL,
  `left_body` varchar(120) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `right_header` varchar(120) NOT NULL,
  `right_body` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_text`
--

INSERT INTO `contact_us_text` (`id`, `left_header`, `left_body`, `address`, `phone`, `email`, `right_header`, `right_body`) VALUES
(1, 'CONTACT INFO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id er', 'Address: Michael I. Days 3756Preston Street Wichita,KS 67213', '08068258134', 'contactinfo@gmail.com', 'GET IN TOUCH WITH US', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusc');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jjdsfkdsfl'),
(2, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jjdsfkdsfl'),
(3, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jjdsfkdsfl'),
(4, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jjdsfkdsfl'),
(5, 'Onyeji Precious', 'ifeanyionyeji444@gmail.com', 'jdjkdsf', 'kljlfsdijio'),
(6, 'Onyeji Precious', 'ifeanyionyeji444@gmail.com', 'jdjkdsf', 'kljlfsdijio'),
(7, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jkj'),
(8, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jkj'),
(9, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jkj'),
(10, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jkj'),
(11, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'jkj'),
(12, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'kjuiuk'),
(13, 'Onyeji Precious', 'onyejiprecious@gmail.com', 'jdjkdsf', 'kjuiuk');

-- --------------------------------------------------------

--
-- Table structure for table `footer_text`
--

CREATE TABLE `footer_text` (
  `id` int(11) NOT NULL,
  `about` varchar(120) NOT NULL,
  `strengths` varchar(120) NOT NULL,
  `contact` varchar(120) NOT NULL,
  `contact_icon` varchar(120) NOT NULL,
  `social_media_name` varchar(120) NOT NULL,
  `social_media` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_text`
--

INSERT INTO `footer_text` (`id`, `about`, `strengths`, `contact`, `contact_icon`, `social_media_name`, `social_media`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'ROI obtainable as at when due', 'Address: Michael I. Days 3756\r\nPreston Street Wichita,\r\nKS 67213', 'map-marker-alt', 'facebook', 'http://facebook.com/kolawolesegunsssz'),
(2, '', 'We deliver valuable services', 'Phone: +234-888 705 770', 'phone-square', 'twitter', 'http://facebook.com/kolawolesegunsssz'),
(3, '', '48 hours delivery', 'Email: contactinfo@gmail.com', 'envelope', 'linkedin', 'http://facebook.com/kolawolesegunsssz'),
(4, '', 'We have won a good reputation', '', '', 'google-plus', 'http://facebook.com/kolawolesegunsssz'),
(5, '', 'Tested and trusted', '', '', 'whatsapp', 'http://facebook.com/kolawolesegunsssz');

-- --------------------------------------------------------

--
-- Table structure for table `header_text`
--

CREATE TABLE `header_text` (
  `id` int(11) NOT NULL,
  `slider` varchar(120) NOT NULL,
  `reach` varchar(120) NOT NULL,
  `school_services` varchar(100) NOT NULL,
  `home_devices` varchar(100) NOT NULL,
  `clothing` varchar(100) NOT NULL,
  `accessories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_text`
--

INSERT INTO `header_text` (`id`, `slider`, `reach`, `school_services`, `home_devices`, `clothing`, `accessories`) VALUES
(1, 'Just an additional #500 for all purchases', 'Call US :  +234 900 800 100', 'School fees payment', 'All home appliances', 'Top Wears', 'Bags'),
(2, 'An additional token of #1500 for all registrations', '<a href:\"mailto:kolawolesegun@gmail.com\"> kolawolesegun@gmail.com </a>', 'Portal fee payment', 'Wardrobes', 'Party wears', 'Sunglasses'),
(3, '20% ROI on investing', '', 'Smart school payment', 'Shoe racks', 'Bottom Wears', 'Fragrances'),
(4, '50k Minimum capital for investment', '', 'GST, EST, Faculty and Department Payments', 'Beddings', 'Native Wears', 'Wallets'),
(5, '48 hours prompt delivery', '', 'JAMB, WAEC, GCE, NECO and P.UTME Registrations ', 'Bathing Materials', 'Foot wears', 'Telephone accessories'),
(6, 'All services affordable', '', 'And More...', 'More...', 'Much more...', 'Plenty plenty...');

-- --------------------------------------------------------

--
-- Table structure for table `home_text`
--

CREATE TABLE `home_text` (
  `id` int(11) NOT NULL,
  `big_banner` varchar(120) NOT NULL,
  `small_banner` varchar(120) NOT NULL,
  `banner_image` varchar(120) NOT NULL,
  `very_available` varchar(100) NOT NULL,
  `available_image` varchar(120) NOT NULL,
  `testimonials_header` varchar(100) NOT NULL,
  `testimonials_body` varchar(100) NOT NULL,
  `testimonials_image` varchar(120) NOT NULL,
  `testimony_header` varchar(120) NOT NULL,
  `testimony_body` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_text`
--

INSERT INTO `home_text` (`id`, `big_banner`, `small_banner`, `banner_image`, `very_available`, `available_image`, `testimonials_header`, `testimonials_body`, `testimonials_image`, `testimony_header`, `testimony_body`) VALUES
(1, 'We are <br>\r\nExcellent Easers', 'We ease you off every kind stress. Beyond your wildest imaginations', 'banner-01', 'Forex Investment', 'about-img', 'Fusce in augue non nisi fringilla', 'Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feu', '009', 'Some Testimonials', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.'),
(2, 'Welcome To <br>\r\nExcellent Easers', 'Easing you off your stress', '003', 'Painting Services', 'blog-img', 'Fusce in augue non nisi fringilla', 'Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feu', '006', '', ''),
(3, 'Excellent <br>\r\nEasers', '...Easing you off your stress', '002', 'School Payments', 'wallet-img', 'Fusce in augue non nisi fringilla', 'Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feu', '008', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nav_details`
--

CREATE TABLE `nav_details` (
  `id` int(11) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `menutitle` varchar(120) NOT NULL,
  `Menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_details`
--

INSERT INTO `nav_details` (`id`, `slug`, `menutitle`, `Menu`) VALUES
(1, 'about-us', 'ABOUT US', 'About Us'),
(2, 'our-service', 'OUR SERVICE', 'Our Service'),
(3, 'contact-us', 'CONTACT US', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `our_service_text`
--

CREATE TABLE `our_service_text` (
  `id` int(11) NOT NULL,
  `mission` varchar(120) NOT NULL,
  `mission_body` varchar(120) NOT NULL,
  `vision` varchar(120) NOT NULL,
  `vision_body` varchar(120) NOT NULL,
  `philosophy` varchar(100) NOT NULL,
  `philosophy_body` varchar(500) NOT NULL,
  `trusted` varchar(120) NOT NULL,
  `trusted_body` varchar(500) NOT NULL,
  `professional` varchar(120) NOT NULL,
  `professional_body` varchar(500) NOT NULL,
  `stories` varchar(120) NOT NULL,
  `stories_body` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_service_text`
--

INSERT INTO `our_service_text` (`id`, `mission`, `mission_body`, `vision`, `vision_body`, `philosophy`, `philosophy_body`, `trusted`, `trusted_body`, `professional`, `professional_body`, `stories`, `stories_body`) VALUES
(1, 'OUR MISSION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'OUR VISION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'OUR PHILOSOPHY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'WE ARE TRUSTED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'WE ARE PROFESSIONAL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'OUR STORIEZZZ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_text`
--
ALTER TABLE `about_us_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_text`
--
ALTER TABLE `contact_us_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_text`
--
ALTER TABLE `footer_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_text`
--
ALTER TABLE `header_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_text`
--
ALTER TABLE `home_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_details`
--
ALTER TABLE `nav_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service_text`
--
ALTER TABLE `our_service_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_text`
--
ALTER TABLE `about_us_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_text`
--
ALTER TABLE `contact_us_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `footer_text`
--
ALTER TABLE `footer_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header_text`
--
ALTER TABLE `header_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_text`
--
ALTER TABLE `home_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nav_details`
--
ALTER TABLE `nav_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_service_text`
--
ALTER TABLE `our_service_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
