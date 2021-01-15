-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 11:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zala_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'zakaria', '03zaki95@gmail.com', 'zaki1998', 'titrezaki.png', 'alg', 'qsdqsdqs', 'qsdqsdqsd', 'qsdqsdqs'),
(2, 'LAKHACHE Mohamed Abdeldjallil', 'lakhmoha1@gmail.com', '2019', 'illus_prenez-en-main-bootstrap.png', 'Algerie', 'dev web & mobile', '0540249029', 'Etudiant');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(6, '127.0.0.1', 1, 'S'),
(15, '::1', 2, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, ' Homme', 'bla bla bla ta3 catégories'),
(2, 'Femme', 'bla bla bla ta3 catégories'),
(3, 'Enfants', 'bla bla bla ta3 catégories'),
(4, ' Autres', 'bla bla bla ta3 catégories');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `confirmkey` varchar(255) NOT NULL,
  `confirme` int(1) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `confirmkey`, `confirme`) VALUES
(1, 'Zakaria', '03zaki95@gmail.com', 'Zaki1998', '', 'oran', 'Zaki', '11 rue de barge 75000', 'Sans titrezaki.png', '::1', '', 0),
(2, 'Aziz ', '03aziz95@gmail.com', 'zaki1998', 'algeria', 'saida', 'zakaria', '24 rue de barge 75000', '20180731_203541.jpg', '::1', '', 0),
(3, 'hocine', '03h95@gmail.com', 'zaki1998', 'algeria', 'saida', '', '24 rue de barge 75000 num 7', 'DSC_9614.jpg', '::1', '', 0),
(4, 'naili ', '03hama95@gmail.com', 'hama1998', 'saida', 'saida', '', '15 rue de barge 26000 n02', '', '::1', '', 0),
(5, 'Youness BENDAOUD', 'ybendaoud85@gmail.com', 'youness', 'Marrakech', 'Marrakech', '', 'Borj Zitoune', '', '127.0.0.1', '', 0),
(6, 'Malik', 'Malikhz1302@gmail.com', 'malik2020', 'Alger', 'alger', '', '12 rue alger', '', '::1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE IF NOT EXISTS `customer_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 1, 199, 2104446832, 1, 'Small', '2019-06-16', 'pending'),
(2, 1, 144, 2104446832, 1, 'Small', '2019-06-16', 'pending'),
(3, 2, 199, 718017174, 1, 'Small', '2019-06-16', 'pending'),
(4, 1, 250, 322219575, 1, 'Small', '2019-06-18', 'pending'),
(5, 1, 120, 322219575, 1, 'Small', '2019-06-18', 'pending'),
(6, 1, 250, 2101918442, 1, 'Small', '2019-06-19', 'pending'),
(7, 1, 399, 1591139489, 1, 'Small', '2019-06-20', 'pending'),
(8, 2, 160, 969969988, 2, 'M', '2019-06-21', 'pending'),
(9, 2, 120, 969969988, 1, '42', '2019-06-21', 'pending'),
(10, 2, 150, 2005930555, 1, '', '2019-06-21', 'pending'),
(11, 2, 50, 2005930555, 1, '', '2019-06-21', 'pending'),
(12, 2, 120, 2005930555, 1, '43', '2019-06-21', 'pending'),
(13, 1, 5000, 1506116819, 1, 'S', '2019-06-26', 'pending'),
(14, 4, 80, 496176748, 1, 'L', '2019-07-03', 'pending'),
(15, 1, 80, 1687152278, 1, 'S', '2019-07-15', 'pending'),
(16, 1, 20000, 1687152278, 4, 'L', '2019-07-15', 'pending'),
(17, 5, 5000, 986501499, 1, 'L', '2020-09-15', 'pending'),
(18, 6, 120, 1340545953, 1, '38', '2020-12-07', 'pending'),
(19, 6, 5000, 1340545953, 1, 'M', '2020-12-07', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE IF NOT EXISTS `pending_order` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(4, 1, 322219575, '7', 1, 'Small', 'pending'),
(5, 1, 322219575, '13', 1, 'Small', 'pending'),
(7, 1, 1591139489, '8', 1, 'Small', 'pending'),
(8, 2, 969969988, '12', 2, 'M', 'pending'),
(9, 2, 969969988, '13', 1, '42', 'pending'),
(10, 2, 2005930555, '9', 1, '', 'pending'),
(11, 2, 2005930555, '11', 1, '', 'pending'),
(12, 2, 2005930555, '13', 1, '43', 'pending'),
(13, 1, 1506116819, '15', 1, 'S', 'pending'),
(14, 4, 496176748, '10', 1, 'L', 'pending'),
(15, 1, 1687152278, '10', 1, 'S', 'pending'),
(16, 1, 1687152278, '15', 4, 'L', 'pending'),
(17, 5, 986501499, '15', 1, 'L', 'pending'),
(18, 6, 1340545953, '13', 1, '38', 'pending'),
(19, 6, 1340545953, '15', 1, 'M', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(3, 1, 1, '2019-05-18 18:10:19', 'jocking', 'product_1.png', 'product_1.png', 'product_1.png', 200, 'jocking', '<p>bla bla bla jocking ta3 200</p>'),
(6, 5, 2, '2019-05-19 18:59:36', 't-shirt', 'product_3.png', 'product_3.png', 'product_3.png', 80, 't-shirt', '<p>bla bla bla T-shirt pour femme&nbsp;</p>'),
(7, 2, 2, '2019-05-20 04:39:05', 'sac', 'product_2.png', 'product_2.png', 'product_2.png', 250, 'sac', '<p>bla bla bla sac&nbsp;</p>'),
(8, 2, 2, '2019-05-20 04:39:34', 'sac M', 'product_4.png', 'product_4.png', 'product_4.png', 399, 'sac', '<p>bla bla bla sac&nbsp;</p>'),
(9, 2, 1, '2019-05-20 04:40:18', 'jocking 3 ', 'product_1.png', 'product_1.png', 'product_1.png', 150, 'jocking', '<p>bla bla bla jocking&nbsp;</p>'),
(10, 5, 2, '2019-05-20 10:48:30', 't-shirt L', 'product_7.png', 'product_7.png', 'product_7.png', 80, 't-shirt', '<p>bla bla bla t-shirt</p>'),
(12, 5, 1, '2019-06-21 17:41:26', 'sweat homme', 'product_10.png', 'product_10.png', 'product_10.png', 2500, 't-shirt', '<p>bla bla bla&nbsp;T-shirt</p>'),
(13, 3, 4, '2019-05-20 18:15:47', 'baskette', 'product_5.png', 'product_5.png', 'product_5.png', 120, 'baskette', '<p>bla bla bla baskette</p>'),
(15, 5, 1, '2019-06-24 00:13:31', 'equipe nationnal', 'alg.jpg', 'alg.jpg', 'alg.jpg', 5000, 't-shirt', '<p>bla bla bla tshirt</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `p_cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL,
  PRIMARY KEY (`p_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Vestes', 'Retrouvez une large collection de vestes homme sur la boutique NewLook saida'),
(2, ' accessoires    ', 'Accessoires homme de mode : profitez de nos sÃ©lections de accessoires homme'),
(3, 'chaussures', 'DÃ©couvrez notre collection de chaussures pas chÃ¨res pour hommes'),
(4, ' Manteaux ', 'Vestes et manteaux : profitez des tendances et collections homme'),
(5, ' maillot', 'Commandez les t-shirts & polos homme en ligne dans la boutique NewLook saida');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'slide number 1', 'yezzy.jpg'),
(4, 'slide number 3', 'zaki.jpg'),
(6, 'slide number 5', 'slide-5.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
