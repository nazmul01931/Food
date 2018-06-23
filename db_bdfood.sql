-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2018 at 07:24 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bdfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add`
--

DROP TABLE IF EXISTS `tbl_add`;
CREATE TABLE IF NOT EXISTS `tbl_add` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_name` varchar(255) NOT NULL,
  `add_link` varchar(255) NOT NULL,
  `add_desc` varchar(255) NOT NULL,
  `add_position` text NOT NULL,
  `add_img` varchar(255) NOT NULL,
  `date_from` varchar(255) NOT NULL,
  `date_to` varchar(255) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add`
--

INSERT INTO `tbl_add` (`add_id`, `add_name`, `add_link`, `add_desc`, `add_position`, `add_img`, `date_from`, `date_to`) VALUES
(28, 'new add', 'er dtret ty ert1', 'dfg dfg', 'sidebar_bottom', 'acb6fbd9c5.jpg', '2018-05-04', '2018-05-01'),
(31, 'sdlkfjlsd', 'dfsg dfg dfg sdfg', 'dfg dfg', 'lsdfjkjf', '3bedba4402.png', '2018-05-01', '2018-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_type` int(32) NOT NULL,
  `cat_sub` int(32) NOT NULL,
  `cat_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_title`, `cat_type`, `cat_sub`, `cat_img`) VALUES
(1, 'International', 'International', 1, 0, '5.png'),
(2, 'Education', 'Education', 1, 0, '6.png'),
(3, 'Amazing CHICKEN SANDWICH 2', 'Amazing CHICKEN SANDWICH ', 1, 0, '2.png'),
(4, 'Amazing Burger Recipes', 'Amazing Burger Recipes', 1, 0, '4.png'),
(5, 'Different Types of Pizza', 'Different Types of Pizza ', 1, 0, '3.png'),
(6, 'Fresh Healthy Vegetables ', 'Fresh Healthy Vegetables ', 1, 0, '1.png'),
(7, 'Tuscan Chicken Sandwiches', 'Tuscan Chicken Sandwiches', 2, 2, ''),
(8, 'Chicken Waldorf Sandwiches', 'Chicken Waldorf Sandwiches', 2, 2, ''),
(9, 'Chicken Salad Sandwiches', 'Chicken Salad Sandwiches', 2, 1, ''),
(10, 'Chicken Salad on Waffles', 'Chicken Salad on Waffles', 2, 3, ''),
(11, 'Tuscan Chicken Sandwiches', 'Tuscan Chicken Sandwiches', 2, 4, ''),
(12, 'Chicken Caesar Burger', 'Chicken Caesar Burger', 2, 3, ''),
(13, 'Turkey Burger with a Twist', 'Turkey Burger with a Twist', 2, 4, ''),
(15, 'Campanelle', 'Campanelle', 2, 4, ''),
(16, 'Acini di Pepe', 'Acini di Pepe', 2, 1, ''),
(17, 'Chicago Thin Crust', 'Chicago Thin Crust', 2, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` varchar(255) NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `date` text,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment_sender_name`, `com_email`, `comment`, `post_id`, `date`) VALUES
(1, '0', 'dfgsd', 'csenazmul96@gmail.com', 'sdfsdf', 1, '0505 \"/\" 0808'),
(2, '0', 'fsdf', 'csenazmul96@gmail.com', 'sdfsdf', 4, '0505 \"/\" 0808'),
(3, '1', 'First Name', 'name@gmail.com', 'Not good productsd', 1, '0505 \"/\" 1010'),
(4, '0', 'robiul', 'robi@gmail.com', 'lksdjflsdkfj', 1, '0505 \"/\" 1515'),
(5, '4', 'dsfsdf', 'sdkfj@gmail.com', 'sdfsdf', 4, '0505 \"/\" 1515'),
(6, '0', 'erefgdfg', 'csenazmul96@gmail.com', 'asdasd', 4, '0505 \"/\" 1515'),
(7, '0', 'erefgdfg', 'csenazmul96@gmail.com', 'ggggggg', 6, '0505 \"/\" 1515'),
(8, '7', 'erefgdfg', 'sdkfj@gmail.com', 'sdfsf', 6, '0505 \"/\" 1515'),
(9, '0', 'erefgdfg', 'csenazmul96@gmail.com', 'sdfdf', 6, '0505 \"/\" 1515'),
(10, '8', 'sdfsd', 'sdkfj@gmail.com', 'sdfsdfdsf', 6, '0505 \"/\" 1515'),
(11, '4', 'erefgdfg', 'ratonmondal0@gmail.com', 'sdfsdf', 1, '0505 \"/\" 1515'),
(12, '7', 'wdfsdf', 'csenazmul96@gmail.com', 'sdfsdf', 6, '0505 \"/\" 1515'),
(13, '9', 'werwerewr', 'sdkfj@gmail.com', 'sdfsdf', 6, '0505 \"/\" 1515'),
(14, '0', 'Nazmul', 'csenazmul96@gmail.com', 'Nice Food', 10, '0505 \"/\" 1515'),
(15, '6', 'MIraz', 'miraz@gmail.com', 'skdlfjsldkfj ksjdf lksjdf jsdf ksdf ', 4, '0505 \"/\" 1515'),
(16, '0', 'Bokker', 'bokker@gmail.com', 'good item', 8, '0505 \"/\" 1515'),
(17, '0', 'Nazmul ', 'csenazmul96@gmail.com', 'Nice Pizza item', 3, '0505 \"/\" 1717'),
(18, '17', 'Raton', 'ratonmondal0@gmail.com', 'Not Bad', 3, '0505 \"/\" 1818'),
(19, '18', 'Asma Khan', 'asma@gmail.com', 'sdklfjlsdkf', 3, '0505 \"/\" 2626'),
(20, '0', 'hlwefjls', 'kjsldjsdflk@gmail.com', 'sdlfklsd lsdjf lksfd', 2, '0505 \"/\" 2727'),
(21, '0', 'erefgdfg', 'csenazmul96@gmail.com', 'dfvcvxzcxzcz zc zx zc ', 34, '0606 \"/\" 1717');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

DROP TABLE IF EXISTS `tbl_contactinfo`;
CREATE TABLE IF NOT EXISTS `tbl_contactinfo` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_num` int(255) NOT NULL,
  `con_location` text NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`con_id`, `con_name`, `con_email`, `con_num`, `con_location`) VALUES
(1, 'sdfsdf', 'csenazmul96@gmail.com', 1931039338, 'Sonadanga 12-173 R/A Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

DROP TABLE IF EXISTS `tbl_message`;
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_name` varchar(255) NOT NULL,
  `msg_email` varchar(255) NOT NULL,
  `msg_number` int(32) NOT NULL,
  `msg_mssage` text NOT NULL,
  `msg_date` varchar(255) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `msg_name`, `msg_email`, `msg_number`, `msg_mssage`, `msg_date`) VALUES
(1, 'dfsdf', 'sdfsdf@gmail.com', 234324, 'sdfdsaf sdf sdf sdf dsf ', '2018-05-01'),
(2, 'sdfsdf', 'sdfsdf@gmail.com', 345435, 'sdfsdafsdaf', '2018-05-01'),
(3, 'sdfsdf', 'sdfsdf@gmail.com', 345435, 'sdfsdafsdaf', '2018-05-01'),
(4, 'erefgdfg', 'csenazmul96@gmail.com', 435435, 'dsvsdfsdd', '2018/May/Fri'),
(5, 'erefgdfg', 'csenazmul96@gmail.com', 435435, 'dsvsdfsdd', '2018/May/Fri'),
(6, 'Nazmul', 'csenazmul96@gmail.com', 435435, 'sdfasdsad asd asd asd sa das', '2018/May/Fri'),
(7, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(8, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(9, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(10, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(11, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(12, 'sdfsd', 'csenazmul96@gmail.com', 435435, 'fsdf', '2018/May/Fri'),
(13, 'erefgdfg', 'sdkfj@gmail.com', 345, 'dfsfd', '2018/May/Fri'),
(14, 'erefgdfg', 'sdkfj@gmail.com', 345, 'dfsfd', '2018/May/Fri'),
(15, 'erefgdfg', 'sdkfj@gmail.com', 345, 'dfsfd', '2018/May/Fri'),
(16, 'erefgdfg', 'csenazmul96@gmail.com', 435435, 'sdfsdfsdf', '2018/Jun/Sun'),
(17, 'sdfsd', 'csenazmul960@gmail.com', 435435, 'dfgsdfsdf', '2018/Jun/Sun'),
(18, 'sdfsd', 'csenazmul960@gmail.com', 435435, 'dfgsdfsdf', '2018/Jun/Sun'),
(19, 'sdfsd', 'csenazmul960@gmail.com', 435435, 'dfgsdfsdf', '2018/Jun/Sun'),
(20, 'sdfsd', 'csenazmul906@gmail.com', 345, 'esfsfsdfdsf', '2018/Jun/Sun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

DROP TABLE IF EXISTS `tbl_page`;
CREATE TABLE IF NOT EXISTS `tbl_page` (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_name` varchar(255) NOT NULL,
  `pag_desc` text NOT NULL,
  `pag_con` int(32) DEFAULT NULL,
  `pag_slag` varchar(32) NOT NULL,
  `pag_section` text NOT NULL,
  `pag_content` varchar(255) NOT NULL,
  `pag_menu` int(255) NOT NULL,
  PRIMARY KEY (`pag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`pag_id`, `pag_name`, `pag_desc`, `pag_con`, `pag_slag`, `pag_section`, `pag_content`, `pag_menu`) VALUES
(1, 'Home', 'sdfsdf', 1, 'Home', 'sdf', 'sdfsdf', 2),
(2, 'About', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2, 'about', 'About Us', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \'Finibus Bonorum et \' \"de Finibus Bonorum et Malorum\" by', 2),
(4, 'Blog', 'Blog Page', 1, 'Blog', 'sdfsdf', '', 2),
(5, 'Login', 'This is login page', 1, 'Login', 'sdfsdfsdf', 'NULL', 2),
(38, 'Contact', 'Contact Information', 4, 'Contact', 'Contact ', 'sdfsdf', 2),
(35, 'New Page', 'The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.', 5, 'New page', 'The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.', 'The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.', 1),
(33, 'Glance', 'fsdf', 6, 'sdf', 'sdfsdf', 'dfgsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `postdesc` text NOT NULL,
  `cat` int(32) NOT NULL,
  `posted` int(32) NOT NULL,
  `postdate` varchar(32) NOT NULL,
  `price` int(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `post_type` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `name`, `postdesc`, `cat`, `posted`, `postdate`, `price`, `tag`, `img`, `post_type`) VALUES
(1, 'first Post', 'sdfsdf sfd sfd sf ', 7, 2, '2018-05-04', 213, 'pizza ', 'main1.png', 2),
(2, 'Lahma Bi Ajeen', 'erffsdfsdf #F6490D', 7, 2, '2018-05-02', 234, 'erffsdfsdf ', 'main.png', 2),
(3, 'The standard chunk of Lorem Ipsum used since the below for those interested.', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections</p> </br>\r\n\r\n							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections</p>', 8, 3, '2018-05-01', 345234, 'Deep ', 'about-me.png', 3),
(4, 'Deep Dish Pizza', 'Deep Dish', 8, 2, '2018-05-02', 400, 'Stromboli ', 'main3.png', 2),
(5, 'Chicago Thin Crust', 'Chicago Thin Crust', 12, 3, '2018-05-04', 345234, 'Crust ', 'main8.png', 2),
(6, 'Campanelle', 'Campanelle', 14, 2, '2018-05-08', 234, 'Campanelle ', 'main4.png', 2),
(7, 'Pizza Acini di Pepe', 'Acini di Pepe', 9, 3, '2018-05-06', 345234, 'koldsk ', 'main5.png', 2),
(8, 'Buffalo curd', 'Buffalo curd', 10, 2, '2018-05-02', 234, 'Turkey ', 'main9.png', 2),
(9, 'Bulgarian yogurt', 'Bulgarian yogurt', 12, 3, '2018-05-04', 345234, 'Bulgarian ', 'main.png', 2),
(10, 'Buttermilk koldskål', 'Buttermilk koldskål', 8, 2, '2018-05-08', 234, 'koldsk ', 'main6.png', 2),
(11, 'Turkey Burger with a Twist', 'Turkey Burger with a Twist', 7, 3, '2018-05-06', 345234, 'Twist curd ', 'main4.png', 2),
(12, 'Amazing Burger Recipes', 'Amazing Burger Recipes', 10, 2, '2018-05-09', 4543, 'Recipes ', 'main4.png', 2),
(39, 'Buttermilk koldskÃ¥l2 Ruby Tuesday', 'Campanelle', 15, 29, '2018-05-04', 134, 'Campanelle', '6a80905955.png', 2),
(36, 'Buttermilk koldskÃ¥l', 'Campanelle', 9, 29, '2018-05-04', 134, 'Campanelle', 'f9952bd8e6.jpg', 2),
(38, 'Buttermilk koldskÃ¥l2', 'Campanelle', 14, 29, '2018-05-04', 134, 'Campanelle', 'bdb8a21b58.jpg', 2),
(37, 'Buttermilk koldskÃ¥lTuscan Chicken Sandwiches', 'Campanelle', 9, 29, '2018-05-04', 134, 'Campanelle', 'e5713c0a8f.jpg', 2),
(33, 'Campanelle Angel Hair', 'Campanelle', 9, 29, '2018-05-04', 134, 'Campanelle', '485e3bef84.jpg', 2),
(34, 'The Cheesecake Factory', 'Campanelle', 9, 29, '2018-05-04', 134, 'Campanelle', 'd76b109a47.jpg', 2),
(35, 'The Cheesecake FactoryChicken Caesar Burger', 'Campanelle', 9, 29, '2018-05-04', 134, 'Campanelle', '2d1c74067c.gif', 2),
(40, 'If you&amp;#39;re not attracting people visually', 'If you&amp;#39;re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you&amp;#39;re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers .', 15, 29, '2018-05-04', 123, 'sdfsdf', '87925edf81.png', 2),
(41, 'how will you get them to take the nex', 'If you&amp;#39;re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you&amp;#39;re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers .', 15, 29, '2018-05-04', 123, 'sdfsdf', '6768e5e42e.png', 2),
(42, 'you still have the challenge of', 'If you&amp;#39;re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you&amp;#39;re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers .', 15, 29, '2018-05-04', 123, 'sdfsdf', 'a3acac85fa.png', 2),
(43, 'presenting it that clearly dictates what', 'If you&amp;#39;re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you&amp;#39;re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers .', 15, 29, '2018-05-04', 123, 'sdfsdf', '33d5a9c04b.png', 2),
(44, 'actually read (and, hopefully, subscribe to)', 'Not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you&amp;#39;re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers .', 15, 29, '2018-05-04', 123, 'sdfsdf', '31f16c9ecb.jpg', 2),
(46, 'sdgsdfdfg', 'kkkkkkkkkkkk', 10, 29, '2018-05-30', 2323, 'rrrrrrrrrr', 'eeb9b1b321.jpg', 2),
(47, 'jjjjjjjj', 'kkkkkkkkkkkk', 12, 29, '2018-05-30', 324, 'rrrrrrrrrr', '1b3b8aeb79.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sec_setting`
--

DROP TABLE IF EXISTS `tbl_sec_setting`;
CREATE TABLE IF NOT EXISTS `tbl_sec_setting` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_name` varchar(255) NOT NULL,
  `sec_img` varchar(255) DEFAULT NULL,
  `sec_con` int(32) NOT NULL,
  `sec_note` text NOT NULL,
  `sec_desc` text NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sec_setting`
--

INSERT INTO `tbl_sec_setting` (`sec_id`, `sec_name`, `sec_img`, `sec_con`, `sec_note`, `sec_desc`) VALUES
(1, 'Security', '5.jpg', 1, 'RFor your kind information you can share/like this site by facebook to get latest update', 'All ads are manually reviewed by our team for the sake of your safety. Read our suggestions on how to make a safe deal'),
(2, 'Breadcum', '5.jpg', 2, 'If you\'re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you\'re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers ', 'If you\'re not attracting people visually, how will you get them to take the next steps to actually read (and, hopefully, subscribe to) your content? Once you\'re done creating the quality content, you still have the challenge of presenting it that clearly dictates what your blog is about. Images, text, and links need to be shown off just right -- otherwise, readers '),
(3, 'Gmap Link', '', 3, 'Gmap', 'http://lgmap.glsdkf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

DROP TABLE IF EXISTS `tbl_social`;
CREATE TABLE IF NOT EXISTS `tbl_social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `scl_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `link` varchar(233) NOT NULL,
  `type` int(8) NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `scl_name`, `class`, `link`, `type`) VALUES
(1, 'facebook', 'fa-facebook', 'www.facebook.com', 1),
(2, 'twitter', 'fa-twitter', 'www.twitter.com.bd', 1),
(4, 'csenazmul96@gmail.com', '1931039338', 'Sonadanga 12-173 R/A Khulna.DBangladesh', 2),
(3, 'google', 'fa-google-plus', 'www.gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_sr`
--

DROP TABLE IF EXISTS `tbl_user_sr`;
CREATE TABLE IF NOT EXISTS `tbl_user_sr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(32) NOT NULL,
  `user_gender` int(32) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `user_active` int(32) DEFAULT NULL,
  `bann_img` varchar(255) DEFAULT NULL,
  `role` int(32) DEFAULT NULL,
  `uer_desc` text,
  `user_address` text,
  `social1` text,
  `social2` text,
  `social3` text,
  `social4` int(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_sr`
--

INSERT INTO `tbl_user_sr` (`id`, `name`, `username`, `email`, `number`, `user_gender`, `pass`, `img`, `user_active`, `bann_img`, `role`, `uer_desc`, `user_address`, `social1`, `social2`, `social3`, `social4`) VALUES
(2, 'Md.Shariful Islam', 'shariful', 'shariful@gmail.com', 1111111, 1, '827ccb0eea8a706c4c34a16891f84e7b', 't1.jpg', 1, '5.jpg', 2, NULL, 'Mokampur, Terokhada Khulna', 'www.facebook.com', 'www.gmail.com', 'www.twitter.com', NULL),
(3, 'Raton Kumer Mondal', 'raton', 'raton@gmail.com', 345345435, 1, '827ccb0eea8a706c4c34a16891f84e7b', 'big-logo.png', 1, NULL, 3, 'reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL, NULL, NULL, NULL),
(29, 'Mirazul', 'mirazul', 'mirarul4@gmail.com', 123456, 1, '827ccb0eea8a706c4c34a16891f84e7b', 'big-logo.png', 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ooooooo', 'root', 'nadia@gmail.com', 435435, 1, '827ccb0eea8a706c4c34a16891f84e7b', 'ead869ee21.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
