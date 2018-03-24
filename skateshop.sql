-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 09:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skateshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(6, 'Birdhouse'),
(7, 'Globe'),
(8, 'Almost'),
(9, 'Blind'),
(10, 'Darkstar');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(29, 'Deck', 0),
(30, 'Shortboard', 29),
(31, 'Cruiser', 29),
(32, 'Old School', 29),
(33, 'Longboard', 29),
(34, 'Trucks', 0),
(35, 'Wheels', 0),
(36, 'Bearings', 0),
(37, 'Hardware', 0),
(38, 'Griptape', 0),
(39, 'Low Trucks', 34),
(40, 'Mid Trucks', 34),
(41, 'High Trucks', 34),
(42, '50-53mm', 35),
(43, '54-59mm', 35),
(44, '60mm+', 35),
(45, 'Steal', 36),
(46, 'Ceramic', 36),
(47, 'No riser', 37),
(48, '1/8&quot; Riser', 37),
(49, '1/4&quot; Riser', 37),
(50, '1/2&quot; Riser', 37),
(51, 'Skateboard', 38),
(52, 'Longboard', 38);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `sizes` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `list_price`, `brand`, `categories`, `image`, `description`, `featured`, `sizes`, `deleted`) VALUES
(1, 'Levis Jeans', '29.99', '39.99', 1, '6', '/skateshop/images/products/men4.png', 'These jeans are amazing. They are super comfy and sexy! Buy them.', 0, '28:3,32:5,36:1', 0),
(2, 'Beautiful Shirt', '19.99', '24.99', 1, '5', '/skateshop/images/products/men1.png', 'What a beautiful blue colored polo-shirt.', 0, 'Small:3,Medium:6,Large:9', 0),
(3, 'Generic Shirt', '20.00', '15.00', 3, '13', '/skateshop/images/products/fbc3afb68d2b1f3203f3c1056879d2d5.png', 'This is a generic polo shirt for boys.', 0, 'Small:2,Medium:4,Large:6,', 0),
(4, 'Globe Bantam Evo Black Maple Cruiser Complete Skateboard - 6.75&quot; x 24&quot;', '0.00', '0.00', 7, '31', '/skateshop/images/products/31f002f4a1086317bb5bbce1b218468b.jpg', 'Globe Bantam Evo Black Maple Cruiser Complete Skateboard - 6.75&quot; x 24&quot;', 1, '6.75&quot; x 24&quot;:10,6.75&quot; x 24&quot;:5,', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
