-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 06:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstores`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(255) NOT NULL,
  `action` text NOT NULL,
  `user_details` varchar(255) NOT NULL,
  `time_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `action`, `user_details`, `time_added`) VALUES
(1, 'Logged In', 'tolajide74@gmail.com', '2019-03-12 18:21:43'),
(2, 'Logged In', 'tolajide74@gmail.com', '2019-03-13 08:15:56'),
(3, 'Logged In', 'tolajide74@gmail.com', '2019-03-13 12:51:13'),
(4, 'Logged Out', 'tolajide74@gmail.com', '2019-03-13 14:24:39'),
(5, 'Logged In', 'tolajide74@gmail.com', '2019-03-13 14:24:50'),
(6, 'Logged In', 'tolajide74@gmail.com', '2019-03-14 06:24:12'),
(7, 'Added Olabisi Olatilo  to the Author List', 'tolajide74@gmail.com', '2019-03-14 06:55:25'),
(8, 'Added Olabisi Olatilo  to the Author List', 'tolajide74@gmail.com', '2019-03-14 06:55:40'),
(9, 'Added Adesina Taiwo Ola  to the Author List', 'tolajide74@gmail.com', '2019-03-14 06:56:05'),
(10, 'Added Adesina Taiwo Ola  to the Author List', 'tolajide74@gmail.com', '2019-03-14 07:02:48'),
(11, 'Added Adesina Taiwo Ola  to the Author List', 'tolajide74@gmail.com', '2019-03-14 07:03:21'),
(12, 'Added Kollade Teledemi  to the Author List', 'tolajide74@gmail.com', '2019-03-14 07:10:29'),
(13, 'Logged In', 'tolajide74@gmail.com', '2019-03-14 07:16:53'),
(14, 'Added Adesina Olajumoke  to the Author List', 'tolajide74@gmail.com', '2019-03-14 07:19:55'),
(15, 'Added Glorious Empire  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 07:31:36'),
(16, 'Added Macmillian  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 07:32:31'),
(17, 'Added Squib Media  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 07:36:16'),
(18, 'Added Story Book  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:52:01'),
(19, 'Added Literature Book  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:54:06'),
(20, 'Added Poem  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:54:43'),
(21, 'Added Fiction  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:59:08'),
(22, 'Added Non Fiction  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:59:31'),
(23, 'Added Text Books  to the Type List', 'tolajide74@gmail.com', '2019-03-14 07:59:50'),
(24, 'Added   to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:33:48'),
(25, 'Added Arts  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:35:52'),
(26, 'Added Artss  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:36:59'),
(27, 'Added Arts  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:40:07'),
(28, 'Added Literature  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:45:07'),
(29, 'Added Action and adventure  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:52:10'),
(30, 'Added Art  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:53:42'),
(31, 'Added Children\'s literature  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:54:30'),
(32, 'Added Drama  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:55:35'),
(33, 'Added Diary  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:56:19'),
(34, 'Added Journal  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:57:08'),
(35, 'Added Crime  to the Author List', 'tolajide74@gmail.com', '2019-03-14 10:58:39'),
(36, 'Added Text Book  to the Author List', 'tolajide74@gmail.com', '2019-03-14 11:12:24'),
(37, 'Added Literature  to the Author List', 'tolajide74@gmail.com', '2019-03-14 11:12:41'),
(38, 'Added Cadlinks  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:32:28'),
(39, 'Added Glorious Empire Tech  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:33:38'),
(40, 'Added Glorious Empire  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:38:47'),
(41, 'Added Macmillian  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:41:24'),
(42, 'Added Glorious Empire Tech  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:42:48'),
(43, 'Added Glorious Empire Tech  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:45:00'),
(44, 'Added Glorious Empire Tech  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:46:14'),
(45, 'Added Glorious Empire Tech  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:47:26'),
(46, 'Added Atlantic Books  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:53:42'),
(47, 'Added Harper Collins  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:54:19'),
(48, 'Added Walker Books  to the Publisher List', 'tolajide74@gmail.com', '2019-03-14 11:55:02'),
(49, 'Logged Out', 'tolajide74@gmail.com', '2019-03-14 12:43:43'),
(50, 'Logged Out', 'tolajide74@gmail.com', '2019-03-14 12:50:32'),
(51, 'Logged In', 'tolajide74@gmail.com', '2019-03-15 10:31:53'),
(52, 'Added Books  to the Author List', 'tolajide74@gmail.com', '2019-03-15 11:19:34'),
(53, 'Added Writing Materials  to the Author List', 'tolajide74@gmail.com', '2019-03-15 11:26:21'),
(54, 'Logged In', 'tolajide74@gmail.com', '2019-03-15 12:22:05'),
(55, 'Added Testing  to the Author List', 'tolajide74@gmail.com', '2019-03-15 16:44:19'),
(56, 'Added Mobile App  to the Author List', 'tolajide74@gmail.com', '2019-03-15 16:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` int(1) NOT NULL,
  `time_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `full_name`, `user_name`, `password`, `access_level`, `time_registered`) VALUES
(1, 'Adesina Taiwo Olajumoke', 'tolajide74@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', 1, '2018-12-12 08:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(255) UNSIGNED NOT NULL,
  `author_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `created`) VALUES
(1, 'Olabisi Olatilo', '2019-03-14 07:01:40'),
(5, 'Adesina Taiwo Ola', '2019-03-14 07:03:19'),
(6, 'Kollade Teledemi', '2019-03-14 07:10:29'),
(7, 'Adesina Olajumoke', '2019-03-14 07:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `registration_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `time_addes` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(255) NOT NULL,
  `genre_name` text NOT NULL,
  `type_id` int(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`, `type_id`, `time_added`) VALUES
(3, 'Action and adventure', 1, '2019-03-14 10:52:08'),
(4, 'Art', 2, '2019-03-14 10:53:41'),
(5, 'Children\'s literature', 1, '2019-03-14 10:54:30'),
(6, 'Drama', 1, '2019-03-14 10:55:34'),
(7, 'Diary', 2, '2019-03-14 10:56:18'),
(8, 'Journal', 2, '2019-03-14 10:57:07'),
(9, 'Crime', 1, '2019-03-14 10:58:39'),
(10, 'Text Book', 3, '2019-03-14 11:12:23'),
(11, 'Literature', 1, '2019-03-14 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` text NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `genre_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` text NOT NULL,
  `edition` varchar(222) NOT NULL,
  `publisher_id` int(222) NOT NULL,
  `publish` int(1) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_category`
--

INSERT INTO `products_category` (`category_id`, `category_name`, `time_added`) VALUES
(1, 'Books', '2019-03-15 11:19:34'),
(2, 'Writing Materials', '2019-03-15 11:26:21'),
(3, 'Testing', '2019-03-15 16:44:19'),
(4, 'Mobile App', '2019-03-15 16:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE `product_stock` (
  `stock_id` int(255) NOT NULL,
  `product_name` text NOT NULL,
  `category_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `publisher_id` int(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `type_id` int(255) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_id`, `type_name`, `time_added`) VALUES
(1, 'Fiction', '2019-03-14 07:59:08'),
(2, 'Non Fiction', '2019-03-14 07:59:31'),
(3, 'Text Books', '2019-03-14 07:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(255) UNSIGNED NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisher_name`, `publisher_logo`, `created_at`) VALUES
(6, 'Glorious Empire Tech', '1543068293469.jpg', '2019-03-14 11:47:26'),
(7, 'Atlantic Books', 'allantic.png', '2019-03-14 11:53:42'),
(8, 'Harper Collins', 'harpercolins.png', '2019-03-14 11:54:19'),
(9, 'Walker Books', 'walker.png', '2019-03-14 11:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_location_charge`
--

CREATE TABLE `shipping_location_charge` (
  `id` int(11) NOT NULL,
  `location_id` varchar(20) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `charge` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_location_charge`
--

INSERT INTO `shipping_location_charge` (`id`, `location_id`, `location`, `charge`) VALUES
(1, '1731753681', 'Lagos', 1500),
(2, '139102368', 'Ogun', 1500),
(3, '386370721', 'Osun', 1500),
(4, '1898995353', 'Ondo', 1500),
(5, '813524629', 'Ekiti', 1500),
(6, '2053036692', 'Oyo', 1000),
(7, '1934371029', 'Edo', 2500),
(38, 'A93DF1553E', 'Benue', 2500),
(39, '6DC8B603B7', 'Kogi', 2500),
(40, '870521C129', 'Kwara', 2500),
(41, 'FEB369B3A2', 'Nasarawa', 2500),
(42, '64926B42A3', 'Niger', 2500),
(43, '9C0890D7EB', 'Plateau', 2500),
(44, 'AC80B16328', 'Abuja', 2500),
(45, '2DF69FDC01', 'Abia', 2500),
(46, '625A40562E', 'Anambra', 2500),
(47, '1B448004E2', 'Ebonyi', 2500),
(48, '8DAB8E9AD9', 'Enugu', 2500),
(49, 'A180A2B011', 'Imo', 2500),
(50, '4684424955', 'Adamawa', 2500),
(51, '035434ED1B', 'Bauchi', 2500),
(52, 'C933900509', 'Borno', 2500),
(53, '8173273EEC', 'Gombe', 2500),
(54, '6AF7B8AD86', 'Taraba', 2500),
(55, '5092D2FEE9', 'Yobe', 2500),
(56, '44F5F74062', 'Akwa Ibom', 2500),
(57, 'AB153F448E', 'Cross River', 2500),
(58, '54032AB6F2', 'Bayelsa', 2500),
(59, 'E6D3F42725', 'Rivers', 2500),
(60, 'F62157F94F', 'Delta', 2500),
(61, '4B75765066', 'Jigawa', 2500),
(62, '3DC81ABBC9', 'Kaduna', 2500),
(63, '6DF72C9586', 'Kano', 2500),
(64, '42D44F12F6', 'Katsina', 2500),
(65, 'FDE4A62A53', 'Kebbi', 2500),
(66, 'E6EB4CBA20', 'Sokoto', 2500),
(67, 'F3F2AC0336', 'Zamfara', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `registration_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
