-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 08:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`title`, `description`, `link`) VALUES
('Group Portfolio', 'This lab will have you create a portfolio website for your group, which will include a portfolio site/page for each individual member of the group within.', 'https://docs.google.com/document/d/1gfBFgyWVZ4HrudNXn4h_TCicEtdywLBdQxfIEZl-U98/edit'),
('Constitution App', 'Each group will make their own interactive Constitution web app/site.', 'https://docs.google.com/document/d/1oOEMKBc2Dq6C69Y_pkXRipkVYB5-b-UskvswnTOiNV0/edit'),
('ITWS Site', 'Have you seen the ITWS web page? It’s not very good… https://science.rpi.edu/itws/ Your job this week (as individuals, this is not a group lab) is to make us a new site', 'https://docs.google.com/document/d/1TAqC_JIZ70o3bf87aCTPtFJxXB4k-VSQzesWzNDsMJI/edit'),
('GNH Site', 'This is not a drill: you have gotten your very first commission to create a website for a real client! The client is Gamma Nu Eta, the ITWS Honors Society. They have an immediate need for a new website, and they’ve agreed to let you make it!', 'https://docs.google.com/document/d/1VBy44Ts1Zly14JJPiFk1LeQnqEVVVHxbZQJzgRjrVfo/edit'),
('Front End Optimization', 'We are going to optimize a game I made called Free Bee game as found at https://freebee.fun/play/', 'https://docs.google.com/document/d/19fi99OeR6RFPDIMtio7xAyk7EkbvWlhiQzxi5LrS8hs/edit'),
('Php Calculator', 'Your (individual) lab is to recreate this calculator that recreates mathematical functions. ', 'https://docs.google.com/document/d/1Aur3WmROp_lYT6UIIs1HjlZrc450VoORUXVzrXajZ8c/edit'),
('PhpMyAdmin Gradebook', 'Create an interactive web page (using HTML/CSS/JS/PHP) that allows the user to do all the steps in part 2 through a web interface. Basically, make me a grade book for class :)', 'https://docs.google.com/document/d/1ILpyD9LtNgXQ_g8-9bNV9DOgjZkL25Nup69x2wX0dHg/edit'),
('Front and Back End', 'Web Application including front and back end for WebSystems Course Data', 'https://docs.google.com/document/d/1SIF9NwMwpI3HgYLhjoM0kAUpI5Pwp2-QefjjfE3FxBo/edit');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`title`, `description`, `link`) VALUES
('9/3: The Basics', 'Lecture on the basics of how servers work', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit#slide=id.p'),
('9/10: Apache', 'Lecture on how Apache works and how its implemented', 'https://docs.google.com/presentation/d/1yqESGRC_v59VDIAUw1u3IsKPFFrqjrxQdD04I6cw6W0/edit#slide=id.p'),
('9/14: HTML5', 'Lecture on the rundown of HTML5', 'https://docs.google.com/presentation/d/1Mib4YI837526U_VMoOE6M9tBFY2DxWO6581VZuYzrEo/edit?usp=sharing'),
('9/21: CSS', 'Lecture on the rundown of CSS', 'https://docs.google.com/presentation/d/1usbhG9skLKmKpiMtA7udt36f2mzbscXT/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),
('9/24: Advanced CSS', 'Taking CSS to the next step and learning more ways to use it', 'https://docs.google.com/presentation/d/1Vp_-_fqCBtwhlgT3HhqMbXx-7Piv7OPiQvblxyznPZE/edit#slide=id.gf2af6860b3_0_118'),
('9/28: Javascript', 'Lecture on the rundown of Javascript', 'https://docs.google.com/presentation/d/108yq32gLsn9Dn6_pjdpku9YagWjpaDuVY86BHfCB1KM/edit?usp=sharing'),
('10/1: AJAX & JSON', 'Lecture on how AJAX & JSON work (and how they are used concurrently)', 'https://docs.google.com/presentation/d/1CuKTZPsaJQs1DRgKbKHlObP_rTXv0HtAhm_wLFpEYfM/edit?usp=sharing'),
('10/5: jQuery', 'Lecture on how jQuery can be used to perform actions on a webpage to enhance the interface', 'https://docs.google.com/presentation/d/1TOpBmwdZF1cUNfzcZ8t2DT237vvm5yFnqqi9mUzNBYw/edit?usp=sharing'),
('10/12: Frontend optimization/UX', 'Lecture on how we can improve and optimize our web apps', 'https://docs.google.com/presentation/d/1xnWSdl3QlAJhhYZJB-L9qulDC2VGb67Ye5jGF5A0NTk/edit?usp=sharing'),
('10/29: PHP', 'Lecture on the rundown of the PHP language', 'https://docs.google.com/presentation/d/1FQrs6bCzF6lyfCXYm--leU81zl9uMwLz/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),
('11/5: MySQL', 'Lecture on MySQL and introduction to databases', 'https://docs.google.com/presentation/d/1b9FUdOQxXLWUB_tNlShdqN695tt8nwMh/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),
('11/9: PHP and MySQL Sessions & Persistence', 'Lecture on how PHP and MySQL work together to form a back-end for a web app', 'https://docs.google.com/presentation/d/1hdchGQdRVq_vmLc4Ot1TbyDADWahZ15f/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),
('11/12: Authentication & Authorization', 'Lecture on what is Authentication & Authorization including their differences', 'https://docs.google.com/presentation/d/1IVV09GiwEho8KN4j3XFa9oVdIkz1t9LW/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),
('11/16: Quiz 2 review, Login and Logout', 'Slide deck covering the topics on quiz 2', 'https://docs.google.com/presentation/d/1i7WQnXzdwIccKC86zU3DmP_thmMgRpa7U2O-XjEEK88/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'tant3', '!@#$%', 'Tobey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
