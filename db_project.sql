-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2014 at 04:14 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`admin_id` int(10) unsigned NOT NULL,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE IF NOT EXISTS `tb_cart` (
`cart_id` int(11) unsigned NOT NULL,
  `cart_session` varchar(32) DEFAULT NULL,
  `cart_date` date DEFAULT NULL,
  `cart_qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`cart_id`, `cart_session`, `cart_date`, `cart_qty`, `product_id`) VALUES
(72, '0ehv2831o2jpg54ltke72c2t45', '2014-12-05', 1, 0),
(78, '6pd7c9et8msfmem3amb32kaln0', '2014-12-06', 90, 17),
(79, 'ncdie8alp6nnt6ae0p8b5ghbp2', '2014-12-08', 2, 15),
(80, 'ncdie8alp6nnt6ae0p8b5ghbp2', '2014-12-08', 1, 17),
(81, 'ncdie8alp6nnt6ae0p8b5ghbp2', '2014-12-08', 1, 18),
(82, 'ncdie8alp6nnt6ae0p8b5ghbp2', '2014-12-08', 3, 16),
(90, 'qng59b0jj7ckelu21t8dr442f2', '2014-12-10', 1, 14),
(92, '7djnj16rshqu46naiapgn2k9h3', '2014-12-18', 3, 14),
(94, '7djnj16rshqu46naiapgn2k9h3', '2014-12-18', 1, 18),
(95, '459pjsn4ch2bdg5vnakur452c4', '2014-12-18', 2, 13),
(96, '459pjsn4ch2bdg5vnakur452c4', '2014-12-18', 1, 14),
(97, 'o9pbo33f9om1irofkdh8bl8n07', '2014-12-25', 4, 18),
(102, 't96g9ir7d0e2qiul01bmdpl4j7', '2014-12-25', 4, 15),
(105, '8069tijofjcp1rr4qe9b45ikb2', '2014-12-27', 1, 15),
(108, 's0fside0kvsc902d7cute4mth7', '2014-12-27', 1, 14),
(109, 'dqpg5tdcvjtg8grhj43k9197o5', '2014-12-29', 4, 14),
(111, 'dqpg5tdcvjtg8grhj43k9197o5', '2014-12-29', 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
`category_id` int(10) unsigned NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(8, 'Wlangger'),
(14, 'Cardinal'),
(15, 'Nevada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_confirm`
--

CREATE TABLE IF NOT EXISTS `tb_confirm` (
`confirm_id` int(11) unsigned NOT NULL,
  `confirm_name` varchar(30) DEFAULT NULL,
  `confirm_email` varchar(50) DEFAULT NULL,
  `confirm_bukti` varchar(100) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE IF NOT EXISTS `tb_customer` (
`customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) DEFAULT NULL,
  `customer_address` text,
  `customer_phone` varchar(12) DEFAULT NULL,
  `customer_email` varchar(32) DEFAULT NULL,
  `customer_jam` time DEFAULT NULL,
  `customer_status` varchar(12) DEFAULT NULL,
  `customer_date` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_jam`, `customer_status`, `customer_date`) VALUES
(31, 'Edi Setiawan', 'Jl mawar 44', '08199922222', 'edi2992@gmail.com', '07:31:00', 'baru', '2014-12-27'),
(32, '333', '333', '333', '333', '03:10:00', 'baru', '2014-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_image`
--

CREATE TABLE IF NOT EXISTS `tb_image` (
`image_id` int(11) NOT NULL,
  `imge_name` text,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_image`
--

INSERT INTO `tb_image` (`image_id`, `imge_name`, `product_id`) VALUES
(1, 'dsdsdsd', 1),
(2, 'eeeeeeeeeeeeeeeee', 1),
(3, 'ssssssssssss', 1),
(4, 'SDaSDfra', 2),
(5, 'SDaSDfra09', 2),
(6, 'SDaSDfra545\r\n', 2),
(7, 'SDaSDfral;', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
`order_id` int(11) NOT NULL,
  `order_qty` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_qty`, `customer_id`, `product_id`) VALUES
(45, 5, 31, 13),
(46, 2, 31, 14),
(47, 4, 32, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
`product_id` int(10) unsigned NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_desc` text,
  `product_images` text,
  `product_stock` int(11) DEFAULT NULL,
  `product_date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_images`, `product_stock`, `product_date`, `category_id`) VALUES
(13, 'Cardinal Jeas 0918', 400000, 'Cardinal Jeas asli jogja', 'product2.jpg', 4, '2014-12-27 04:56:00', 14),
(14, 'Tas Mewah', 500000, 'Tak ini terbuat dari bahan kulit Buaya', 'girl2.jpg', 23, '2014-12-27 04:53:00', 14),
(15, 'Wlangger Jawa', 170000, 'Wlanger ini terbuat dari bahan sutera\r\n', 'product6.jpg', 12, '2014-12-27 04:54:00', 8),
(16, 'Wlangger Jogja', 90000, ' Jogja jeans good lok   ', 'product1.jpg', 7, '2014-12-27 04:58:00', 8),
(17, 'Cardinal Jeas 0918', 120000, 'Cardinal jean ini sangat keren  ', 'gallery3.jpg', 6, '2014-12-27 04:56:00', 14),
(18, 'Tas Kejawen', 120000, 'Tas ini terbuat dari bahan rota dengan ukuran 34 x 34 cm ', 'girl1.jpg', 4, '2014-12-27 04:57:00', 8),
(19, 'Nevada Jeans', 120000, 'Nevada ini keren brooww', 'gallery2.jpg', 3, '2014-12-27 04:44:00', 15),
(20, 'eee', 0, 'eee', 'girl2.jpg', 0, '2014-12-28 03:11:00', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
 ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_confirm`
--
ALTER TABLE `tb_confirm`
 ADD PRIMARY KEY (`confirm_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_image`
--
ALTER TABLE `tb_image`
 ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
MODIFY `cart_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_confirm`
--
ALTER TABLE `tb_confirm`
MODIFY `confirm_id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_image`
--
ALTER TABLE `tb_image`
MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
MODIFY `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
