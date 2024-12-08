-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2024 at 12:57 AM
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
(1, '8Track Earbuds Site', 'This was a school project done at Fanshawe where the goal was to make a website promoting a brand of earbuds that we design. ', 'we had to design and build the headphones ourselves, create all the branding and design the website.\n\nwe used Cinema4D to make the headphones, and the adobe suite to make the advertising materials. The site was built using HTML/CSS+SASS and Javascript. the model viewer framework and Greensock library to animate the different features on the site. ', 'the site itself turned out great, the features all function quite well and give the site appeal. find the repo here:\r\n\r\n<a class=\"button case-file-link\" href=\"https://github.com/Ramona-Lozon/Earbuds_site_ramona_lozon\">8Track Earbuds</a>'),
(2, 'SEVEN Makeup Brand', 'This was a school project done at Fanshawe where the goal was to create advertising for a makeup brand of our own design. i worked with another classmate on this assignment.', 'for this project we had to create branding for a makeup line, and create advertising for this line. we used Cinema4d to design the makeup products and the Adobe suite to create the branding and various advertisements including videos. me and my group member chose to act as models for the advertising.', 'we did very well on the project, the photos and promotional materials turned out great!'),
(3, 'Hackathon for Industry Night', 'We set out to build a website for our college program that would advertise the program and promote industry night, a chance for students to meet with industry professionals and present their work.', 'The website was designed to be fully responsive, from mobile to desktop, and built using HTML5, CSS3, and JavaScript. It features original media and custom code, created entirely without plugins like Tailwind.', 'The site achieves everything we aimed for and performs seamlessly. Check out the project here:\r\n<a class=\"button case-file-link\" href=\"https://github.com/veilofcrystal/HDT_katrina_kayla_meghan_ramona_showcase\">Hackathon Showcase</a>');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `org` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(250) NOT NULL,
  `msg` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `org`, `email`, `msg`, `created_at`) VALUES
(1, '.Ramona Lozon.', '.fanshawe.', '.lozonramona@gmail.com.', '.hello.', '2024-12-06 18:13:17'),
(2, '.george.', '.catpaws.', '.geargecatlover@hotmail.com.', '.hey i know you hear me.', '2024-12-06 18:19:03');

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
(2, 'Seven_logo_full.png', 'Makeup_project_sketches.png', 'we started with sketches and idea concepts, and built out a style guide, logo and branding. we designed the logo in adobe illustrator, and modeled some products in Cimena4d.', 'facebook-image-1.jpg', 'from there me and my group member organized a photoshoot where we acted as the models, and we took the assets we made for the project and made advertisements in photoshop.', 'ramona_cassidy_makeup_assignment_pt2_video.mp4', 'we then made a video using rendered 3d scenes and video that we filmed during the photoshoot, and organized it into a quick commercial.'),
(3, 'industry-night-banner.png', 'hackathon-figma.png', 'we started by prototyping the site in Figma and getting it conceptualized and getting the content laid out before we began coding and styling. i took the reigns on this, and it was my first Figma project. i had never used the program before, as my course taught us how to use Adobe XD instead, so it was a learning experience. You can check out the Figma prototype here:\r\n\r\n<a class=\"button case-file-link\" href=\"https://www.figma.com/design/hN2fQ1g184hCrGkpF2ifEs/Hackathon?m=dev&t=hfDEymV6eK3bItuF-1\">Hackathon Prototype</a>', 'trello-work.png', 'for this assignment i worked mainly as the web designer and project manager, I did my best to make the page look appealing and to organize my group into an effective team, using tools like Trello.', 'hackathon-product.png', 'the site was put together well and we received a decent grade, and we accomplished everything we set out to do.'),
(1, 'Earbuds-Retro-poster1.png', 'earbuds-sketches.png', 'The first part of the design process was sketching out the earbuds and designing a logo and some branding options.', 'Earbuds-Retro-poster2.png', 'after the earbuds were modeled we were tasked with creating branding and promotional images for our product.', 'Lozon_ramona_earbuds_ad.mp4', 'This is a small video ad I made, the original animation was made into a scrolling based animation on the website.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
