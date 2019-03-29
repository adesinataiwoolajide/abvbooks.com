-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 01:04 AM
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
(56, 'Added Mobile App  to the Author List', 'tolajide74@gmail.com', '2019-03-15 16:52:44'),
(57, 'Logged In', 'tolajide74@gmail.com', '2019-03-16 07:34:38'),
(58, 'Added HOPE FOR ALL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:32:26'),
(59, 'Added HOPE FOR ALL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:33:59'),
(60, 'Added HOPE FOR ALL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:34:33'),
(61, 'Added LOGO with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:47:44'),
(62, 'Added LOGO with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:48:19'),
(63, 'Added LOGO with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:53:59'),
(64, 'Added LOGO with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 08:54:25'),
(65, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:00:13'),
(66, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:01:34'),
(67, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:02:39'),
(68, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:06:04'),
(69, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:06:53'),
(70, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:07:42'),
(71, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:09:50'),
(72, 'Added NEW GENERAL MATHEMATICS with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:10:28'),
(73, 'Added PENCIL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:12:17'),
(74, 'Added PENCIL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:13:09'),
(75, 'Added PENCIL with  to the stock list', 'tolajide74@gmail.com', '2019-03-16 09:13:40'),
(76, 'Logged Out', 'tolajide74@gmail.com', '2019-03-17 15:53:48'),
(77, 'Logged In', 'tolajide74@gmail.com', '2019-03-18 13:59:00'),
(78, 'Added MACMILLIAN BIOLOGY with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 15:48:45'),
(79, 'Added Accessories  to the Type List', 'tolajide74@gmail.com', '2019-03-18 15:54:40'),
(80, 'Added Stationary  to the Author List', 'tolajide74@gmail.com', '2019-03-18 15:55:02'),
(81, 'Added HELIX MATHEMATICAL SET with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 15:56:02'),
(82, 'Added CASIO CALCULATOR with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 16:08:21'),
(83, 'Added WHITE BOARD MARKER with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 16:50:34'),
(84, 'Added SCIENTIFIC RULLER with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 16:51:34'),
(85, 'Added PERMANENT MARKER with  to the stock list', 'tolajide74@gmail.com', '2019-03-18 16:53:25'),
(86, 'Logged Out', 'tolajide74@gmail.com', '2019-03-19 06:02:24'),
(87, 'Logged Out', 'kolade@gmail.com', '2019-03-22 17:28:28'),
(88, 'Logged In', 'tolajide74@gmail.com', '2019-03-22 20:20:03'),
(89, 'Logged Out', 'tolajide74@gmail.com', '2019-03-22 21:28:27'),
(90, 'Logged In', 'tolajide74@gmail.com', '2019-03-22 21:32:34'),
(91, 'Logged Out', 'tolajide74@gmail.com', '2019-03-22 22:08:57'),
(92, 'Logged In', 'tolajide74@gmail.com', '2019-03-23 11:05:19'),
(93, 'Added LOGO with  to the stock list', 'tolajide74@gmail.com', '2019-03-23 11:52:10'),
(94, 'Added POLITICIAN with  to the stock list', 'tolajide74@gmail.com', '2019-03-23 11:54:57'),
(95, 'Added Test to the Category List', 'tolajide74@gmail.com', '2019-03-25 06:28:21'),
(96, 'Deleted Test From The Category List', 'tolajide74@gmail.com', '2019-03-25 06:28:51'),
(97, 'Deleted Testing From The Category List', 'tolajide74@gmail.com', '2019-03-25 06:29:06'),
(98, 'Added Test  to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:29:47'),
(99, 'Deleted Test  to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:34:09'),
(100, 'Added Leather  to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:34:23'),
(101, 'Deleted Test From to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:35:08'),
(102, 'Deleted Leather From to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:35:19'),
(103, 'Added Leather  to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:39:05'),
(104, 'Deleted Leather From to the Type List', 'tolajide74@gmail.com', '2019-03-25 06:40:07'),
(105, 'Added Hybrid Applications to the Category List', 'tolajide74@gmail.com', '2019-03-25 06:40:23'),
(106, 'Deleted Mobile App From The Category List', 'tolajide74@gmail.com', '2019-03-25 06:40:35'),
(107, 'Added Artssssssssssss  to the Author List', 'tolajide74@gmail.com', '2019-03-25 06:41:06'),
(108, 'Deleted Artssssssssssss From the Sub Types List', 'tolajide74@gmail.com', '2019-03-25 06:50:19'),
(109, 'Added Artsweqqqqqqqqqqqq to the Sub Types List', 'tolajide74@gmail.com', '2019-03-25 06:50:40'),
(110, 'Deleted Artsweqqqqqqqqqqqq From the Sub Types List', 'tolajide74@gmail.com', '2019-03-25 06:50:49'),
(111, 'Added Kolade Sola  to the Supplier List', 'tolajide74@gmail.com', '2019-03-25 06:58:27'),
(112, 'Deleted Kolade Sola From the Supplier List', 'tolajide74@gmail.com', '2019-03-25 06:59:31'),
(113, 'Added Squib Media  to the Publisher List', 'tolajide74@gmail.com', '2019-03-25 07:03:35'),
(114, 'Deleted  From the Manufacturer List', 'tolajide74@gmail.com', '2019-03-25 07:07:48'),
(115, 'Deleted Squib Media From the Manufacturer List', 'tolajide74@gmail.com', '2019-03-25 07:08:25'),
(116, 'Deleted Hybrid Applications From The Category List', 'tolajide74@gmail.com', '2019-03-25 07:10:43'),
(117, 'Added Presidential Suits  to the Type List', 'tolajide74@gmail.com', '2019-03-25 07:11:03'),
(118, 'Deleted Presidential Suits From to the Type List', 'tolajide74@gmail.com', '2019-03-25 07:11:14'),
(119, 'Logged In', 'tolajide74@gmail.com', '2019-03-25 08:46:54'),
(120, 'Updated THe Category Name From Writing Materials to Writing Materialsss', 'tolajide74@gmail.com', '2019-03-25 08:57:49'),
(121, 'Updated THe Category Name From Writing Materials to Writing Materialssssssssss', 'tolajide74@gmail.com', '2019-03-25 08:58:33'),
(122, 'Updated The Category Name From Books to Bookss', 'tolajide74@gmail.com', '2019-03-25 08:59:24'),
(123, 'Updated The Category Name From Bookss to Books', 'tolajide74@gmail.com', '2019-03-25 09:00:23'),
(124, 'Added Paper to the Category List', 'tolajide74@gmail.com', '2019-03-25 09:00:32'),
(125, 'Updated The Category Name From Paper to Papers', 'tolajide74@gmail.com', '2019-03-25 09:00:53'),
(126, 'Updated The Type Name From Fictions to Fictions', 'tolajide74@gmail.com', '2019-03-25 09:14:13'),
(127, 'Updated The Type Name From Fictions to Fictions', 'tolajide74@gmail.com', '2019-03-25 09:14:36'),
(128, 'Updated The Type Name From Fiction to Fiction', 'tolajide74@gmail.com', '2019-03-25 09:14:59'),
(129, 'Updated Sub type Name From Action and adventure to Action and adventuress', 'tolajide74@gmail.com', '2019-03-25 09:40:12'),
(130, 'Updated Sub type Name From Action and adventuress to Action and adventure', 'tolajide74@gmail.com', '2019-03-25 09:40:33'),
(131, 'Updated Sub type Name From Action and adventure to Action and adventure', 'tolajide74@gmail.com', '2019-03-25 09:40:50'),
(132, 'Updated Sub type Name From Diary to Diarym', 'tolajide74@gmail.com', '2019-03-25 09:42:24'),
(133, 'Updated Sub type Name From Diarym to Diary', 'tolajide74@gmail.com', '2019-03-25 09:42:42'),
(134, 'Changed The Supplier Name From Olabisi Olatilo tp Olabisi Olatilo Samuel', 'tolajide74@gmail.com', '2019-03-25 09:54:09'),
(135, 'Changed The Supplier Name From Olabisi Olatilo Samuel tp Olabisi Olatilo', 'tolajide74@gmail.com', '2019-03-25 09:54:42'),
(136, 'Changed The Supplier Name From Adesina Taiwo Ola tp Adesina Taiwo Olajide', 'tolajide74@gmail.com', '2019-03-25 09:55:00'),
(137, 'Changed The Manufacturer Name from Glorious Empire Tech to Glorious Empire Technologies', 'tolajide74@gmail.com', '2019-03-25 10:11:51'),
(138, 'Changed The Manufacturer Name from Glorious Empire Technologies to Glorious Empire Technologies and Changed The Manufacturer Logo', 'tolajide74@gmail.com', '2019-03-25 10:13:11'),
(139, 'Changed The Manufacturer Name from Glorious Empire Technologies to Glorious Empire Technologies Limited', 'tolajide74@gmail.com', '2019-03-25 10:13:47'),
(140, 'Changed The Manufacturer Name from Glorious Empire Technologies Limited to Glorious Empire Technologies', 'tolajide74@gmail.com', '2019-03-25 10:14:07'),
(141, 'Added Primary School  to the Type List', 'tobi@gmail.com', '2019-03-25 10:45:23'),
(142, 'Added Secondary School  to the Type List', 'tobi@gmail.com', '2019-03-25 10:45:43'),
(143, 'Added Dictionaries  to the Type List', 'tobi@gmail.com', '2019-03-25 10:45:58'),
(144, 'Added Novels/Plays  to the Type List', 'tobi@gmail.com', '2019-03-25 10:46:20'),
(145, 'Added Exam Papers  to the Type List', 'tobi@gmail.com', '2019-03-25 10:46:33'),
(146, 'Updated The Type Name From Stationaries and Accessories to Stationaries and Accessories', 'tobi@gmail.com', '2019-03-25 10:47:01'),
(147, 'Deleted Fiction From to the Type List', 'tobi@gmail.com', '2019-03-25 10:47:35'),
(148, 'Deleted Non Fiction From to the Type List', 'tobi@gmail.com', '2019-03-25 10:47:44'),
(149, 'Deleted Text Books From to the Type List', 'tobi@gmail.com', '2019-03-25 10:47:51'),
(150, 'Added Arts Materials to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:48:56'),
(151, 'Added Calculator to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:49:10'),
(152, 'Added Copies to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:49:22'),
(153, 'Added Covering to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:49:35'),
(154, 'Added Folders to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:50:07'),
(155, 'Added Ring Binders to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:50:25'),
(156, 'Added Hardback Copies to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:50:44'),
(157, 'Added Paper and Card to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:51:10'),
(158, 'Added Pencils and Pencil Cases to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:51:31'),
(159, 'Added Technical Graphic Equipment to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:51:59'),
(160, 'Added Pens to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:52:12'),
(161, 'Added Refil Pads/ Spiral Pads to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:52:46'),
(162, 'Added Junior Infants to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:53:42'),
(163, 'Added Senior Infants to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:53:56'),
(164, 'Added First Class to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:54:10'),
(165, 'Added Second Type to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:54:21'),
(166, 'Added Third Class to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:54:35'),
(167, 'Added Forth Class to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:55:02'),
(168, 'Added Fifth Class to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:55:27'),
(169, 'Added General to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:56:07'),
(170, 'Added Atlas Primary to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:56:30'),
(171, 'Added Spellings and Grammer to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:56:48'),
(172, 'Added Glance Card to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:57:02'),
(173, 'Added Junior Cert to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:59:01'),
(174, 'Added Leaving Cert to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:59:14'),
(175, 'Added Transition Year to the Sub Types List', 'tobi@gmail.com', '2019-03-25 10:59:32'),
(176, 'Added Atlases Post-Primary to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:00:02'),
(177, 'Added English to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:01:03'),
(178, 'Added French to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:01:16'),
(179, 'Added German to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:01:29'),
(180, 'Added Irish to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:04:25'),
(181, 'Added Italian to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:04:41'),
(182, 'Added Yoruba to the Sub Types List', 'tobi@gmail.com', '2019-03-25 11:04:56'),
(183, 'Logged Out', 'tobi@gmail.com', '2019-03-25 11:27:58'),
(184, 'Logged In', 'tolajide74@gmail.com', '2019-03-28 18:02:43'),
(185, 'Logged In', 'tolajide74@gmail.com', '2019-03-28 19:46:27'),
(186, 'Deleted Action and adventure From the Sub Types List', 'tolajide74@gmail.com', '2019-03-28 20:25:31'),
(187, 'Added 2.1 with amount 600 to the List', 'tolajide74@gmail.com', '2019-03-28 21:00:18'),
(188, 'Added 3.1 with amount 1000 to the List', 'tolajide74@gmail.com', '2019-03-28 21:04:23'),
(189, 'Deleted 2.1 From to the Weight List', 'tolajide74@gmail.com', '2019-03-28 21:29:21'),
(190, 'Added 0.1 with amount 200 to the List', 'tolajide74@gmail.com', '2019-03-28 21:29:49'),
(191, 'Updated The Weight Details From 3.1 to 3.1', 'tolajide74@gmail.com', '2019-03-28 21:58:05'),
(192, 'Updated The Weight Details From 3.1 to 3.1', 'tolajide74@gmail.com', '2019-03-28 21:58:42'),
(193, 'Added 1.1 with amount 809 to the List', 'tolajide74@gmail.com', '2019-03-28 21:59:05'),
(194, 'Added SCHOOL EXTRA with  to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:26:46'),
(195, 'Added SCHOOL EXTRA with  to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:46:40'),
(196, 'Added SCHOOL EXTRA with school-extra-15412112 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:47:11'),
(197, 'Added SCHOOL EXTRA with school-extra-21809029 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:47:34'),
(198, 'Added SCHOOL EXTRA with school-extra-56950200 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:48:20'),
(199, 'Added SCHOOL EXTRA with school-extra-77110911 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:48:25'),
(200, 'Added SCHOOL EXTRA with school-extra-22961000 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:50:19'),
(201, 'Added SCHOOL EXTRA with school-extra-40792020 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:50:26'),
(202, 'Added SCHOOL EXTRA with school-extra-63122109 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:55:55'),
(203, 'Added SCHOOL EXTRA with school-extra-58112002 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:56:29'),
(204, 'Added SCHOOL EXTRA with school-extra-91890922 to the stock list', 'tolajide74@gmail.com', '2019-03-28 22:56:34'),
(205, 'Updated SCHOOL EXTRA stock with 3 quantity', 'tolajide74@gmail.com', '2019-03-28 22:57:48'),
(206, 'Updated SCHOOL EXTRA stock with 3 quantity', 'tolajide74@gmail.com', '2019-03-28 22:57:59'),
(207, 'Updated SCHOOL EXTRA stock with 30 quantity', 'tolajide74@gmail.com', '2019-03-28 22:58:54'),
(208, 'Updated SCHOOL EXTRA stock with 30 quantity', 'tolajide74@gmail.com', '2019-03-28 22:59:33'),
(209, 'Updated SCHOOL EXTRA stock with 30 quantity', 'tolajide74@gmail.com', '2019-03-28 22:59:53'),
(210, 'Added TEST with test-62509909 to the stock list', 'tolajide74@gmail.com', '2019-03-28 23:02:47'),
(211, 'Added LOGO with logo-74791021 to the stock list', 'tolajide74@gmail.com', '2019-03-28 23:07:51'),
(212, 'Updated LOGO stock with 10 quantity', 'tolajide74@gmail.com', '2019-03-28 23:15:36'),
(213, 'Updated LOGO stock with 10 quantity', 'tolajide74@gmail.com', '2019-03-28 23:15:43'),
(214, 'Updated LOGO stock with 10 quantity', 'tolajide74@gmail.com', '2019-03-28 23:17:37');

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
(1, 'Olabisi Olatilo', '2019-03-25 09:54:42'),
(2, 'Adesina Taiwo Olajide', '2019-03-28 23:50:04'),
(3, 'Kollade Teledemi', '2019-03-28 23:50:09'),
(4, 'Adesina Olajumoke', '2019-03-28 23:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `paystack_reference` varchar(100) DEFAULT NULL,
  `paid_status` int(1) DEFAULT NULL,
  `order_status` int(1) DEFAULT NULL,
  `subtotal` varchar(10) DEFAULT NULL,
  `shipping_charge` varchar(20) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customer_id`, `order_id`, `paystack_reference`, `paid_status`, `order_status`, `subtotal`, `shipping_charge`, `amount`, `time_created`) VALUES
(12, 'F349F21C7A', '3F33D5127548F84A', 'c536b610f966852b124d', 0, 0, '1', '1', '2', '2019-03-22 17:26:44'),
(14, '19022FEDFF', 'CA8398E698869A0A', '0c80b6e99fa914850243', 0, 0, '8000', '2500', '10500', '2019-03-22 21:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE `customer_order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order_details`
--

INSERT INTO `customer_order_details` (`id`, `order_id`, `product_id`, `quantity`, `amount`) VALUES
(43, '3F33D5127548F84A', 'macmillian-biology-68860991', ' 1', 1),
(46, 'CA8398E698869A0A', 'white-board-marker-13551200', ' 1', 5000),
(47, 'CA8398E698869A0A', 'permanent-marker-63559201', ' 1', 3000);

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

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`registration_id`, `full_name`, `user_name`, `password`, `reg_number`, `time_addes`) VALUES
(1, 'Goke Olamide', 'kolade@gmail.com', '2be1b1ba7267672671282cd782d7dde38f2c9e7a', 'F349F21C7A', '2019-03-22 10:10:36'),
(2, 'Olajide', 'olajide@gmail.com', 'a3b1b77d41323af5704bfc2c34282dd9b40e5fdc', '19022FEDFF', '2019-03-22 21:29:10'),
(3, 'Tobi', 'tobi@gmail.com', 'c219c4dc4b7ff6be7a7090459bc6d06a879a1577', '2F8126A297', '2019-03-25 10:33:47'),
(4, 'Taiwo Fola', 'taiwo@gmail.com', '0eba7922f38e00fe4bdcf47138eddb7347248730', '5322F22BF0', '2019-03-26 06:28:59');

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
(12, 'Stationary', 4, '2019-03-18 15:55:02'),
(13, 'Arts Materials', 4, '2019-03-25 10:48:56'),
(14, 'Calculator', 4, '2019-03-25 10:49:10'),
(15, 'Copies', 4, '2019-03-25 10:49:22'),
(16, 'Covering', 4, '2019-03-25 10:49:34'),
(17, 'Folders', 4, '2019-03-25 10:50:07'),
(18, 'Ring Binders', 4, '2019-03-25 10:50:25'),
(19, 'Hardback Copies', 4, '2019-03-25 10:50:44'),
(20, 'Paper and Card', 4, '2019-03-25 10:51:10'),
(21, 'Pencils and Pencil Cases', 4, '2019-03-25 10:51:31'),
(22, 'Technical Graphic Equipment', 4, '2019-03-25 10:51:59'),
(23, 'Pens', 4, '2019-03-25 10:52:12'),
(24, 'Refil Pads/ Spiral Pads', 4, '2019-03-25 10:52:46'),
(25, 'Junior Infants', 5, '2019-03-25 10:53:42'),
(26, 'Senior Infants', 5, '2019-03-25 10:53:56'),
(27, 'First Class', 5, '2019-03-25 10:54:10'),
(28, 'Second Type', 5, '2019-03-25 10:54:21'),
(29, 'Third Class', 5, '2019-03-25 10:54:35'),
(30, 'Forth Class', 5, '2019-03-25 10:55:02'),
(31, 'Fifth Class', 5, '2019-03-25 10:55:27'),
(32, 'General', 5, '2019-03-25 10:56:07'),
(33, 'Atlas Primary', 5, '2019-03-25 10:56:30'),
(34, 'Spellings and Grammer', 5, '2019-03-25 10:56:48'),
(35, 'Glance Card', 5, '2019-03-25 10:57:02'),
(36, 'Junior Cert', 6, '2019-03-25 10:59:01'),
(37, 'Leaving Cert', 6, '2019-03-25 10:59:14'),
(38, 'Transition Year', 6, '2019-03-25 10:59:32'),
(39, 'Atlases Post-Primary', 6, '2019-03-25 11:00:02'),
(40, 'English', 7, '2019-03-25 11:01:03'),
(41, 'French', 7, '2019-03-25 11:01:16'),
(42, 'German', 7, '2019-03-25 11:01:29'),
(43, 'Irish', 7, '2019-03-25 11:04:25'),
(44, 'Italian', 7, '2019-03-25 11:04:41'),
(45, 'Yoruba', 7, '2019-03-25 11:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `merchant_reference` varchar(255) DEFAULT NULL,
  `response_code` varchar(5) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date_paid` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `weight_id` int(255) NOT NULL,
  `author_id` int(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `slug`, `image`, `genre_id`, `category_id`, `amount`, `quantity`, `description`, `edition`, `publisher_id`, `publish`, `weight_id`, `author_id`, `time_added`) VALUES
(1, 'MACMILLIAN BIOLOGY', 'macmillian-biology-68860991', 'biology.jpg', 10, 1, '90000', 20, 'This is a text book for JSS2', 'First Edition', 6, 0, 2, 1, '2019-03-28 23:50:43'),
(2, 'HELIX MATHEMATICAL SET', 'helix-mathematical-set-61759012', 'mathsset.jpg', 12, 2, '5000', 50, 'This is used for Mathematics', 'Null', 7, 0, 3, 2, '2019-03-28 23:50:48'),
(3, 'CASIO CALCULATOR', 'casio-calculator-83942001', 'cal.jpg', 12, 2, '1000', 10, 'This is for computation', 'Null', 7, 0, 4, 3, '2019-03-28 23:50:51'),
(4, 'WHITE BOARD MARKER', 'white-board-marker-13551200', 'marker.jpg', 12, 1, '5000', 300, 'This is for white board marker and is available in different colors', 'Null', 9, 0, 2, 4, '2019-03-28 23:50:55'),
(5, 'SCIENTIFIC RULLER', 'scientific-ruller-50322120', 'ruler.jpg', 12, 1, '3000', 20, 'This is used by the scientist', 'Null', 8, 0, 3, 1, '2019-03-28 23:51:04'),
(6, 'PERMANENT MARKER', 'permanent-marker-63559201', 'perma.jpg', 12, 2, '3000', 20, 'This is a permanent Marker', 'Null', 8, 0, 4, 3, '2019-03-28 23:51:09');

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
(1, 'Books', '2019-03-25 09:00:23'),
(2, 'Writing Materials', '2019-03-15 11:26:21'),
(3, 'Papers', '2019-03-25 09:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE `product_stock` (
  `stock_id` int(255) NOT NULL,
  `product_name` text NOT NULL,
  `category_id` int(255) NOT NULL,
  `genre_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `publisher_id` int(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_stock`
--

INSERT INTO `product_stock` (`stock_id`, `product_name`, `category_id`, `genre_id`, `quantity`, `publisher_id`, `edition`, `time_added`) VALUES
(1, 'MACMILLIAN BIOLOGY', 1, 10, 20, 6, 'First Edition', '2019-03-18 15:48:45'),
(2, 'HELIX MATHEMATICAL SET', 2, 12, 50, 7, 'Null', '2019-03-18 15:56:02'),
(3, 'CASIO CALCULATOR', 2, 12, 10, 7, 'Null', '2019-03-18 16:08:21'),
(4, 'WHITE BOARD MARKER', 1, 12, 300, 9, 'Null', '2019-03-18 16:50:33'),
(5, 'SCIENTIFIC RULLER', 1, 12, 20, 8, 'Null', '2019-03-18 16:51:34'),
(6, 'PERMANENT MARKER', 2, 12, 20, 8, 'Null', '2019-03-18 16:53:24'),
(17, 'SCHOOL EXTRA', 1, 45, 33, 6, 'Third Edition', '2019-03-28 23:01:35'),
(18, 'SCHOOL EXTRA', 1, 45, 33, 6, 'Third Edition', '2019-03-28 23:01:35'),
(19, 'SCHOOL EXTRA', 1, 45, 33, 6, 'Third Edition', '2019-03-28 23:01:35'),
(20, 'TEST', 1, 45, 65, 6, 'Null', '2019-03-28 23:05:58'),
(21, 'LOGO', 2, 24, 70, 6, 'Null', '2019-03-28 23:17:37');

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
(4, 'Stationaries and Accessories', '2019-03-25 10:47:01'),
(5, 'Primary School', '2019-03-25 10:45:23'),
(6, 'Secondary School', '2019-03-25 10:45:43'),
(7, 'Dictionaries', '2019-03-25 10:45:58'),
(8, 'Novels/Plays', '2019-03-25 10:46:20'),
(9, 'Exam Papers', '2019-03-25 10:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_weight`
--

CREATE TABLE `product_weight` (
  `weight_id` int(255) NOT NULL,
  `weight_name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_weight`
--

INSERT INTO `product_weight` (`weight_id`, `weight_name`, `amount`, `time_added`) VALUES
(2, '3.1', 1000, '2019-03-28 21:04:23'),
(3, '0.1', 200, '2019-03-28 21:29:48'),
(4, '1.1', 809, '2019-03-28 21:59:05');

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
(6, 'Glorious Empire Technologies', '1543068292880.jpg', '2019-03-25 10:14:07'),
(7, 'Atlantic Books', 'allantic.png', '2019-03-14 11:53:42'),
(8, 'Harper Collins', 'harpercolins.png', '2019-03-14 11:54:19'),
(9, 'Walker Books', 'walker.png', '2019-03-14 11:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `landmark` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `customer_id`, `phone`, `address`, `landmark`, `state`, `city`) VALUES
(1, 'F349F21C7A', '08138139321', 'Ikeja Lagos State Nigeria', 'Foodco Bodija', 'Lagos', 'Lagos'),
(2, '19022FEDFF', '08034073170', 'My House', 'Foodco Bodija Ikirubn', 'Abia', 'Abia'),
(3, '5322F22BF0', '09088767789', 'This is our house', 'Home', 'Adamawa', 'Adamawa');

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
(1, '1731753681', 'Lagos', 1),
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

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `list_id` int(255) NOT NULL,
  `customer_id` text NOT NULL,
  `slug` text NOT NULL,
  `action` varchar(25) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`list_id`, `customer_id`, `slug`, `action`, `time_added`) VALUES
(1, '19022FEDFF', 'permanent-marker-63559201', 'Compare', '2019-03-22 22:11:27'),
(2, 'F349F21C7A', 'permanent-marker-63559201', 'Wishlist', '2019-03-28 16:24:09'),
(3, '5322F22BF0', 'permanent-marker-63559201', 'Wishlist', '2019-03-26 06:31:54'),
(4, '5322F22BF0', 'permanent-marker-63559201', 'Compare', '2019-03-26 06:32:21'),
(5, 'F349F21C7A', 'casio-calculator-83942001', 'Compare', '2019-03-28 15:31:27'),
(7, 'F349F21C7A', 'white-board-marker-13551200', 'Wishlist', '2019-03-28 16:45:53');

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
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `product_stock`
--
ALTER TABLE `product_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `product_weight`
--
ALTER TABLE `product_weight`
  ADD PRIMARY KEY (`weight_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

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
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `registration_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_stock`
--
ALTER TABLE `product_stock`
  MODIFY `stock_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_weight`
--
ALTER TABLE `product_weight`
  MODIFY `weight_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `list_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
