-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2024 at 06:35 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_case_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_file`
--

DROP TABLE IF EXISTS `case_file`;
CREATE TABLE IF NOT EXISTS `case_file` (
  `id` int UNSIGNED NOT NULL,
  `project` varchar(250) NOT NULL,
  `proposition` varchar(1500) NOT NULL,
  `deliverables` varchar(1500) NOT NULL,
  `outcome` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `case_file`
--

INSERT INTO `case_file` (`id`, `project`, `proposition`, `deliverables`, `outcome`) VALUES
(1, '8Track Earbuds Site', 'This was a school project done at Fanshawe where the goal was to make a website promoting a brand of earbuds that we design. ', 'we had to design and build the headphones ourselves, create all the branding and design the website.\r\n\r\nwe used Cinema4D to make the headphones, and the adobe suite to make the advertising materials. The site was built using HTML/CSS+SASS and Javascript. the model viewer framework and Greensock library to animate the different features on the site. ', 'the site itself turned out great, the features all function quite well and give the site appeal. find it here:\r\nhttps://github.com/Ramona-Lozon/Earbuds_site_ramona_lozon'),
(2, 'SEVEN Makeup Brand', 'This was a school project done at Fanshawe where the goal was to create advertising for a makeup brand of our own design. i worked with another classmate on this assignment.', 'for this project we had to create branding for a makeup line, and create advertising for this line. we used Cinema4d to design the makeup products and the Adobe suite to create the branding and various advertisements including videos. me and my group member chose to act as models for the advertising.', 'we did very well on the project, the photos and promotional materials turned out great!a'),
(3, 'Case file 3', 'case file 3 proposition', 'case file 3 deliverables', 'case file 3 outcome');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Hero` varchar(250) NOT NULL,
  `prop_ex` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prop_caption` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `work_ex` varchar(250) NOT NULL,
  `work_caption` varchar(250) NOT NULL,
  `product_ex` varchar(250) NOT NULL,
  `product_caption` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `Hero`, `prop_ex`, `prop_caption`, `work_ex`, `work_caption`, `product_ex`, `product_caption`) VALUES
(2, 'placeholder-images-01.jpg', 'placeholder-images-01.jpg', 'caption for makeup proposition', 'placeholder-images-01.jpg', 'caption for makeup work', 'placeholder-images-01.jpg', 'caption for makeup product'),
(3, 'placeholder-images-01.jpg', 'placeholder-images-01.jpg', 'caption for case file proposition 3', 'placeholder-images-01.jpg', 'caption fork case file 3 work', 'placeholder-images-01.jpg', 'caption for case file 3 product'),
(1, 'placeholder-images-01.jpg', 'placeholder-images-01.jpg', 'proposition image caption for earbuds', 'placeholder-images-01.jpg', 'work image caption for earbuds', 'placeholder-images-01.jpg', 'product caption for earbuds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
