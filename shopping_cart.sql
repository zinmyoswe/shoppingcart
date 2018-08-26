-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 06:52 PM
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
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat` int(11) NOT NULL,
  `summary` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `cover` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `category_id`, `sub_cat`, `summary`, `author`, `price`, `cover`, `qty`, `created_date`, `modified_date`) VALUES
(1, 'HTML&CSS', 1, 1, 'SQL for Microsoft Access is not as robust as Microsoft SQL Server or Oracle, to just name a few. Microsoft SQL has a good at security, easy to learn, exact data record, low cost and good performance.', 'David John', 12.22, 'B (2).png', 0, '2018-08-16 12:46:43', '2018-08-16 12:46:43'),
(2, 'Learning PHP,MYSQL&,Javascript', 1, 2, 'SQL for Microsoft Access is not as robust as Microsoft SQL Server or Oracle, to just name a few. Microsoft SQL has a good at security, easy to learn, exact data record, low cost and good performance.', 'Alice Thomas', 21.22, 'B (7).png', 7, '2018-08-16 12:46:43', '2018-08-16 12:46:43'),
(3, 'Thai Cuisine', 7, 0, 'exact data record, low cost and good performance. Whereas, Microsoft Access has limitations any sector whose usage goes beyond 2GB will hit a wall, limitation multi-user, slowing down reports, queries and form and low at security.', 'Khlad Phnom', 18.22, 'cook (4).png', 8, '2018-08-20 23:02:16', '2018-08-20 23:02:16'),
(4, 'Fundamental of Financial Management', 3, 5, 'exact data record, low cost and good performance. Whereas, Microsoft Access has limitations any sector whose usage goes beyond 2GB will hit a wall, limitation multi-user, slowing down reports, queries and form and low at security.', 'Christ Roberd', 23.22, 'Management (11).png', 5, '2018-08-20 23:02:16', '2018-08-20 23:02:16'),
(5, 'Adobe InDesignCC 2015Release', 1, 1, 'exact data record, low cost and good performance. Whereas, Microsoft Access has limitations any sector whose usage goes beyond 2GB will hit a wall, limitation multi-user, slowing down reports, queries and form and low at security.', 'Khird Martin', 28.22, 'bk (19).png', 5, '2018-08-21 01:05:40', '2018-08-21 01:05:40'),
(6, 'Adobe Creative Cloud IllustratorCC', 1, 1, 'exact data record, low cost and good performance. Whereas, Microsoft Access has limitations any sector whose usage goes beyond 2GB will hit a wall, limitation multi-user, slowing down reports, queries and form and low at security.', 'John Paul', 34.88, 'AI.png', 8, '2018-08-21 01:05:40', '2018-08-21 01:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created_date`, `modified_data`) VALUES
(1, 'Technology', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(2, 'Astrology', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(3, 'Business', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(4, 'Comedy', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(5, 'Language', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(6, 'Novels', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(7, 'Cooking', '2018-08-16 12:39:52', '2018-08-16 12:39:52'),
(8, 'Religion', '2018-08-16 12:39:52', '2018-08-16 12:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pass`, `created_date`, `modified_date`) VALUES
(1, 'suthinzarmaung', 'suthinzarmaung@gmail.com', '12345678', '2018-08-18 13:32:27', '2018-08-18 13:32:27'),
(2, 'saunghninoo', 'saunghninoo@gmail.com', '12345678', '2018-08-18 13:32:27', '2018-08-18 13:32:27'),
(3, 'phyu', 'phyu@gmail.com', '12345678', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'nadi', 'nadi@gmail.com', '12345678', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `total_amt` float NOT NULL,
  `total_qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer`, `status`, `total_amt`, `total_qty`, `created_date`, `modified_date`) VALUES
(1, 'saunghninoo@gmail.com', 1, 45.66, 3, '2018-08-20 22:51:05', '2018-08-20 22:51:05'),
(2, 'phyu@gmail.com', 1, 51.44, 2, '2018-08-26 09:48:30', '2018-08-26 09:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `units` int(11) NOT NULL,
  `total` float NOT NULL,
  `customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `book_id`, `book_title`, `price`, `units`, `total`, `customer`) VALUES
(1, 1, 2, 'Learning PHP,MYSQL&,Javascript', 21.22, 1, 21.22, 'saunghninoo@gmail.com'),
(2, 1, 1, 'HTML&CSS', 12.22, 2, 24.44, 'saunghninoo@gmail.com'),
(3, 2, 5, 'Adobe InDesignCC 2015Release', 28.22, 1, 28.22, 'phyu@gmail.com'),
(4, 2, 4, 'Fundamental of Financial Management', 23.22, 1, 23.22, 'phyu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `category_id`, `created_date`, `modified_date`) VALUES
(1, 'Web Design', 1, '2018-08-16', '2018-08-16 12:41:35'),
(2, 'Web Development', 1, '2018-08-16', '2018-08-16 12:41:35'),
(3, 'Software', 1, '2018-08-16', '2018-08-16 12:41:35'),
(4, 'Database', 1, '2018-08-16', '2018-08-16 12:41:35'),
(5, 'Management', 3, '2018-08-16', '2018-08-16 13:42:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
