-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 06:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hd_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `total_cart` int(11) NOT NULL DEFAULT '0',
  `is_shipped` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `userid`, `created_date`, `total_cart`, `is_shipped`) VALUES
(1, 11, '2016-12-15', 1, 1),
(2, 11, '2016-12-15', 2, 1),
(3, 11, '2016-12-15', 3, 1),
(4, 11, '2016-12-18', 1, 1),
(5, 3, '2017-11-06', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_product`
--

CREATE TABLE `tbl_cart_product` (
  `id` int(11) NOT NULL,
  `product_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart_product`
--

INSERT INTO `tbl_cart_product` (`id`, `product_cart_id`, `product_id`, `product_price`, `quantity`, `color_id`, `size_id`, `ip`) VALUES
(1, 1, 12, 500, 1, 5, 6, '127.0.0.1'),
(2, 2, 11, 200, 1, 5, 4, '127.0.0.1'),
(3, 2, 14, 100, 1, 5, 3, '127.0.0.1'),
(4, 3, 16, 100, 3, 3, 3, '127.0.0.1'),
(5, 4, 16, 100, 1, 3, 3, '127.0.0.1'),
(6, 5, 31, 2125, 1, 2, 2, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(1, 'men', 1, NULL, NULL, '2017-04-13 21:03:53', '0'),
(3, 'women', 3, NULL, NULL, '2017-11-06 13:47:51', '0'),
(4, 'mobiles', 3, NULL, NULL, '2017-11-06 15:03:00', '0'),
(5, 'electronics', 3, NULL, NULL, '2017-11-06 15:08:22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `checkout_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `sale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`checkout_id`, `firstname`, `lastname`, `address1`, `address2`, `phone`, `email`, `country`, `city`, `province`, `postcode`, `customer_id`, `payment_option`, `order_date`, `sale_id`) VALUES
(1, 'sindhu', 'm', 'dsd', 'dwde', '9490997859', 'sindhum527@gmail.com', 'India', 'AP', 'hyd', '50005', 3, 'cash', '2017-11-06 16:37:32', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` bigint(20) NOT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `colorcode` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `color_name`, `colorcode`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`, `status_delete`) VALUES
(2, 'blue', '1F35FF', 3, NULL, NULL, '2017-11-06 13:54:43', '', ''),
(3, 'red', 'FF2D0D', 3, NULL, NULL, '2017-11-06 13:54:51', '', ''),
(4, 'green', '18FF20', 3, NULL, NULL, '2017-11-06 15:28:10', '', ''),
(5, 'yellow', 'FFF71C', 3, NULL, NULL, '2017-11-06 15:28:38', '', ''),
(6, 'pink', 'FF1CD2', 3, NULL, NULL, '2017-11-06 15:28:51', '', ''),
(7, 'black', '000000', 3, NULL, NULL, '2017-11-06 15:29:05', '', ''),
(8, 'white', 'FFFFFF', 3, NULL, NULL, '2017-11-06 15:29:11', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `billing_address1` varchar(255) NOT NULL,
  `billing_address2` varchar(255) NOT NULL,
  `billing_city` int(11) NOT NULL,
  `billing_state` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `shipping_address1` varchar(255) NOT NULL,
  `shipping_address2` varchar(255) NOT NULL,
  `shipping_city` int(11) NOT NULL,
  `shipping_state` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `customer_type` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL,
  `credit_card_number` varchar(25) NOT NULL,
  `credit_card_cw` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `credit_card_type` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `social_networks` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `googlePlus` varchar(255) NOT NULL,
  `uploadFile` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` int(11) NOT NULL,
  `is_member` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `phone`, `billing_address1`, `billing_address2`, `billing_city`, `billing_state`, `billing_country`, `billing_zip`, `shipping_address1`, `shipping_address2`, `shipping_city`, `shipping_state`, `shipping_country`, `shipping_zip`, `customer_type`, `tax_id`, `year`, `credit_card_number`, `credit_card_cw`, `month`, `credit_card_type`, `website`, `social_networks`, `facebook`, `twitter`, `linkdin`, `googlePlus`, `uploadFile`, `status`, `created_by`, `modified_by`, `created_date`, `modified_date`, `is_member`) VALUES
(1, '', 'Meher', 'Babu', 'meherbabu540@gmail.com', '8886464888', '8886464888', '', '', 0, 0, 0, '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2017-11-03 19:50:08', 0, 0),
(2, '', 'sindhu', 'm', 'sindhu@ingresos.in', '123', '9876543210', '', '', 0, 0, 0, '', '', '', 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2017-11-14 18:55:17', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` bigint(20) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` text,
  `product_price` double NOT NULL,
  `product_type` int(1) NOT NULL,
  `product_image` varchar(5000) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` varchar(500) NOT NULL,
  `color_id` varchar(500) NOT NULL,
  `size_id` varchar(500) NOT NULL,
  `related_product` varchar(200) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `net` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_code`, `product_name`, `product_description`, `product_price`, `product_type`, `product_image`, `category_id`, `sub_category_id`, `color_id`, `size_id`, `related_product`, `quantity`, `discount`, `gross_amount`, `net`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, '647348024159444', 'Levi''s Men''s 505 Regular Fit Jean', 'Levi''s Men''s 505 Regular Fit Jean', 500, 1, '41e3n4r8cul__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '', '10', '10', '5000.00', '4500.00', '2017-04-13 21:11:08', 1, NULL, NULL, '0'),
(2, '153033173415536', 'Levi''s Men''s 514 Straight Fit Jeans', 'Levi''s Men''s 514 Straight Fit Jeans', 299, 1, '41g2nti9lbl__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '1', '10', '10', '2990.00', '2691.00', '2017-04-13 21:12:04', 1, NULL, NULL, '0'),
(3, '466613514863036', 'Levi''s Men''s 569 Loose Straight-Leg Jean', 'Levi''s Men''s 569 Loose Straight-Leg Jean', 399, 1, '41ha96qz96l__sy220_.jpg', 1, '1', '', '', '1,2', '10', '10', '3990.00', '3591.00', '2017-04-13 21:12:44', 1, NULL, NULL, '0'),
(4, '436846686601537', 'Wrangler Authentics Men''s Classic Regul', 'Wrangler Authentics Men''s Classic Regul', 699, 1, '41im7a59pzl__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '1,2,3', '10', '10', '6990.00', '6291.00', '2017-04-13 21:13:19', 1, NULL, NULL, '0'),
(5, '181100608331317', 'Levi''s Men''s 513 Slim-Straight Jean', 'Levi''s Men''s 513 Slim-Straight Jean', 799, 1, '41iq3kdpzol__sy220_.jpg', 1, '1', '', '', '1,2,3,4', '2', '5', '1598.00', '1518.10', '2017-04-13 21:13:53', 1, NULL, NULL, '0'),
(6, '571198810056611', 'HUF Men''s 5 Pocket Bull Denim', 'HUF Men''s 5 Pocket Bull Denim', 299, 1, '91wdndnui1l__sp500,500,0_.jpg', 1, '1', '', '', '1,2,3,4,5', '10', '20', '2990.00', '2392.00', '2017-04-13 21:14:37', 1, NULL, NULL, '0'),
(7, '382531323544490', 'Levi''s Men''s 527 Slim Bootcut Jean', 'Levi''s Men''s 527 Slim Bootcut Jean', 725, 1, '91hvlqyzb3l__sp500,500,0_.jpg', 1, '1', '', '', '3,4,5,6', '10', '10', '7250.00', '6525.00', '2017-04-13 21:15:18', 1, NULL, NULL, '0'),
(8, '448451599018304', 'Haggar Men''s Work To Weekend Hidden Exp', 'Haggar Men''s Work To Weekend Hidden Exp', 200, 1, '91dpb2y+j8l__sp500,500,0_.jpg', 1, '1', '', '', '1,2,3', '3', '20', '600.00', '480.00', '2017-04-13 21:15:59', 1, NULL, NULL, '0'),
(9, '22222', 'top', 'test test', 5000, 1, 'product-thumb-4.jpg', 3, '', '2', '', '13', '', '', '', '', '2017-11-06 13:22:56', 3, '2017-11-06 13:59:12', NULL, '0'),
(10, '234567', 'jeans', 'sample', 3000, 1, 'product-6.jpg', 1, '1', '', '', '', '', '', '', '', '2017-11-06 13:41:16', 3, '2017-11-06 13:43:08', NULL, '0'),
(11, '345567', 'product1', 'sample product', 4444, 2, 'product-2.jpg', 1, '1', '', '', '', '', '', '', '', '2017-11-06 13:42:27', 3, NULL, NULL, '0'),
(12, '123', 'shirts', 'mens shirts', 1223, 0, 'product-thumb-4.jpg', 1, '', '', '', '', '', '', '', '', '2017-11-06 13:45:12', 3, NULL, NULL, '0'),
(13, '1233', 'tops', 'sample', 3424, 1, 'product-thumb-3.jpg', 3, '', '2,3', '', '', '', '', '', '', '2017-11-06 13:48:56', 3, '2017-11-06 13:57:58', 3, '0'),
(14, '442814895638578', 'top', 'test product', 3432, 1, 'product-thumb-4.jpg', 1, '1', '3', '1', '1', '1', '0', '3432.00', '3432.00', '2017-11-06 14:02:01', 3, NULL, NULL, '0'),
(15, '596775712150798', 'new arrivals', 'new designs', 456, 3, 'h4-slide7.png', 3, '', '3', '1', '13', '1', '2', '456.00', '446.88', '2017-11-06 14:50:21', 3, NULL, NULL, '0'),
(16, '552478650182398', 'new arrivals', 'new designs', 4354, 1, 'photo2.jpg', 3, '3', '3', '1', '9', '', '2', '', '0.00', '2017-11-06 15:16:35', 3, NULL, NULL, '0'),
(17, '576843002988440', 'new arrivals', 'erfgdfg', 435, 2, 'photo11.jpg', 3, '3', '2', '1', '', '', '', '', '', '2017-11-06 15:17:25', 3, NULL, NULL, '0'),
(18, '983577423984522', 'wgre', 'reyht', 4365, 1, 'photo7@2x.jpg', 3, '4', '2', '1', '12', '', '5', '', '0.00', '2017-11-06 15:19:23', 3, NULL, NULL, '0'),
(19, '678301469476170', 'sandles', 'sandles', 799, 1, 'avatar1.jpg', 3, '6', '3', '2', '17', '', '4', '', '0.00', '2017-11-06 15:27:00', 3, NULL, NULL, '0'),
(20, '334791194164838', 'Mobiles', 'Smart mobile', 7899, 2, 'product-4.jpg', 4, '7', '7', '', '', '', '0', '', '0.00', '2017-11-06 15:31:29', 3, NULL, NULL, '0'),
(21, '604182356393329', 'Mobiles', 'New Model with 64GB', 1599, 3, 'product-6.jpg', 4, '7', '2,3,4,5,6,7,8', '', '', '', '', '', '', '2017-11-06 15:34:13', 3, NULL, NULL, '0'),
(22, '181787289929934', 'regf', 'sagfdrfg', 599, 0, 'avatar2.jpg', 3, '4', '2,3,4,5,6,7,8', '1,2,3,4', '17', '12', '', '7188.00', '', '2017-11-06 15:35:58', 3, NULL, NULL, '0'),
(23, '100649232417707', 'woman shirts', 'new arrivals', 499, 3, 'avatar7.jpg', 3, '4', '2,3,4,5,6,7,8', '1,2,3,4', '', '', '', '', '', '2017-11-06 15:38:15', 3, NULL, NULL, '0'),
(24, '444482773923799', 'Mobiles', 'newly launched', 8999, 3, 'product-2.jpg', 4, '7', '2,3,7,8', '', '21', '', '', '', '', '2017-11-06 15:39:34', 3, NULL, NULL, '0'),
(25, '960770581230440', 'new arrivals', 'new designs', 679, 3, 'ecom_product4.png', 3, '6', '2,3,4,5,6,7,8', '1,2,3,4', '11', '', '', '', '', '2017-11-06 15:41:13', 3, NULL, NULL, '0'),
(26, '783079117062519', 'Laptop', 'High speed laptop', 34450, 2, 'product-thumb-3.jpg', 5, '5', '2,7,8', '', '', '', '', '', '', '2017-11-06 15:43:40', 3, NULL, NULL, '0'),
(27, '609345246427614', 't-shirts', 'new arrivals', 799, 1, 'avatar13.jpg', 1, '2', '2,3,4,5,6,7,8', '', '12', '', '', '', '', '2017-11-06 15:46:03', 3, NULL, NULL, '0'),
(28, '349546042958929', 'new arrivals', 'New arrivals', 600, 2, 'avatar14.jpg', 1, '2', '2,3,4,5,6,7,8', '1,2,3,4', '12', '', '', '', '', '2017-11-06 15:47:03', 3, NULL, NULL, '0'),
(29, '312191462223239', 'new arrivals', 'new arrivals', 561, 2, 'avatar16.jpg', 1, '2', '2,3,4,5,6,7,8', '', '', '', '', '', '', '2017-11-06 15:48:25', 3, NULL, NULL, '0'),
(30, '161571420178555', 'sandles', 'new arrivals', 2512, 2, 'little-monster.png', 3, '6', '2,3,4,5,6,7,8', '1,2,3,4', '', '', '', '', '', '2017-11-06 15:50:37', 3, NULL, NULL, '0'),
(31, '643742611190707', 'top', 'new arrivals', 2125, 2, 'avatar2.jpg', 3, '3', '2,3,4,5,6,7,8', '1,2,3,4', '', '', '', '', '', '2017-11-06 15:52:05', 3, NULL, NULL, '0'),
(32, '756749005028998', 'new arrivals', 'new arrivals', 1324, 2, 'ecom_product6_a.png', 3, '3', '2,3,4,5,6,7,8', '1,2,3,4', '', '', '', '', '', '2017-11-06 15:53:13', 3, NULL, NULL, '0'),
(33, '104228475640489', 'new arrivals', 'new arrivals', 34555, 2, 'hero1.jpg', 5, '5', '7', '3', '', '', '', '', '', '2017-11-06 15:55:02', 3, NULL, NULL, '0'),
(34, '743011852555200', 'new arrivals', 'new arrivals', 897, 1, 'ecom_product10.png', 3, '4', '2,3,4,5,6,7,8', '1,2,3,4', '', '', '', '', '', '2017-11-06 15:55:50', 3, NULL, NULL, '0'),
(35, '290512310603422', 'sandles', 'new arrivals', 5463, 1, 'photo4@2x.jpg', 4, '7', '', '', '', '', '', '', '', '2017-11-06 15:57:27', 3, NULL, NULL, '0'),
(36, '026705886250080', 'Watches', 'new arrivals', 1299, 1, 'apple-touch-icon-60x60.png', 3, '9', '2,3,4,5,6,7,8', '', '', '11', '0', '14289.00', '14289.00', '2017-11-06 16:00:41', 3, '2017-11-06 16:44:59', 3, '0'),
(37, '356044475767376', 'new arrivals', 'new arrivals', 7679, 1, 'apple-touch-icon-57x57.png', 3, '9', '2,3,4,5,6,7,8', '1,2,3,4', '16', '', '', '', '', '2017-11-06 16:43:27', 3, NULL, NULL, '0'),
(38, '382584400326640', 'new arrivals', 'new arrivals', 1899, 1, 'apple-touch-icon-57x57.png', 1, '8', '', '', '', '', '', '', '', '2017-11-06 17:33:41', 3, NULL, NULL, '0'),
(39, '666291365177138', 'sample', 'sample product', 1232, 1, 'photo15.jpg', 1, '8', '', '', '', '', '', '', '', '2017-11-08 10:31:10', 3, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `cash_discount` int(11) NOT NULL,
  `grand_amount` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `shipped_status` int(11) NOT NULL COMMENT 'orderpace=0,'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_detail`
--

CREATE TABLE `tbl_sales_detail` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `selling_rate` double NOT NULL,
  `discount` int(2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` bigint(20) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`id`, `size`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`, `status_delete`) VALUES
(1, '28', 3, 3, '2017-11-06 14:00:09', '2017-11-06 14:00:01', '', ''),
(2, '30', 3, NULL, NULL, '2017-11-06 15:19:58', '', ''),
(3, '32', 3, NULL, NULL, '2017-11-06 15:20:06', '', ''),
(4, '34', 3, NULL, NULL, '2017-11-06 15:20:16', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_images`
--

CREATE TABLE `tbl_slider_images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_images`
--

INSERT INTO `tbl_slider_images` (`id`, `name`, `created_by`, `created_date`, `modified_by`, `modified_date`, `status`, `views`) VALUES
(2, 'h4-slide.png', 3, '2017-11-06 14:45:56', 0, '0000-00-00 00:00:00', 'active', 0),
(3, 'photo10@2x.jpg', 3, '2017-11-06 15:20:29', 0, '0000-00-00 00:00:00', 'active', 0),
(4, 'photo4@2x.jpg', 3, '2017-11-06 15:20:37', 0, '0000-00-00 00:00:00', 'active', 0),
(5, 'photo8@2x.jpg', 3, '2017-11-06 15:20:44', 0, '0000-00-00 00:00:00', 'active', 0),
(6, 'photo9@2x.jpg', 3, '2017-11-06 15:20:51', 0, '0000-00-00 00:00:00', 'active', 0),
(7, 'photo11@2x.jpg', 3, '2017-11-06 15:21:07', 0, '0000-00-00 00:00:00', 'active', 0),
(8, 'photo7.jpg', 3, '2017-11-06 15:21:22', 0, '0000-00-00 00:00:00', 'active', 0),
(9, 'photo16@2x.jpg', 3, '2017-11-06 15:21:31', 0, '0000-00-00 00:00:00', 'active', 0),
(10, 'photo27.jpg', 3, '2017-11-06 15:21:41', 0, '0000-00-00 00:00:00', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcat_id` bigint(20) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcat_id`, `parent_category_id`, `subcategory_name`, `image`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(1, 1, 'Jeans', 'spring2_m_clothing_vd_set1_4__v534219377_.jpg', 1, 1, '2017-04-13 21:08:37', '2017-04-13 21:06:54', '0'),
(2, 1, 'T-Shirts', 'product-thumb-3.jpg', 3, NULL, NULL, '2017-11-06 15:09:45', '0'),
(3, 3, 'Tops', 'product-thumb-4.jpg', 3, NULL, NULL, '2017-11-06 15:14:34', '0'),
(4, 3, 'T-Shirts', 'photo23@2x.jpg', 3, NULL, NULL, '2017-11-06 15:18:26', '0'),
(5, 5, 'Laptops', 'product-thumb-3.jpg', 3, NULL, NULL, '2017-11-06 15:23:06', '0'),
(6, 3, 'FootWear', 'ecom_product7.png', 3, NULL, NULL, '2017-11-06 15:23:55', '0'),
(7, 4, 'Smart Mobiles', 'product-6.jpg', 3, NULL, NULL, '2017-11-06 15:30:31', '0'),
(8, 1, 'Watches', 'apple-touch-icon-180x180.png', 3, NULL, NULL, '2017-11-06 15:58:26', '0'),
(9, 3, 'Women Watches', 'favicon-192x192.png', 3, NULL, NULL, '2017-11-06 15:58:57', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`wish_id`, `user_id`, `product_id`, `product_price`, `created_date`) VALUES
(1, 1, 7, 725, '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `secondary_address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `profile`, `mobile`, `whatsapp`, `room_no`, `floor`, `building`, `street`, `area`, `city`, `pincode`, `state`, `country`, `secondary_address`, `created_date`, `status`, `created_by`) VALUES
(1, 'hardik', '', 'dayani', 'hardik123@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:29:56', '0', '1'),
(3, 'tushal', '', 'dayani', 'user@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:45:23', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cart_product`
--
ALTER TABLE `tbl_cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_detail`
--
ALTER TABLE `tbl_sales_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider_images`
--
ALTER TABLE `tbl_slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_cart_product`
--
ALTER TABLE `tbl_cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sales_detail`
--
ALTER TABLE `tbl_sales_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_slider_images`
--
ALTER TABLE `tbl_slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
