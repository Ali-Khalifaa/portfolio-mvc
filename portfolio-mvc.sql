-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 10:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description_one` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `description_two` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description_one`, `user_id`, `description_two`) VALUES
(1, 'I always aspire to develop my skills as I love my job as a web developer. Skills (HTML, HTML5, CSS, CSS3, java Script, jQuery, Bootstrap and AngularJS)', 1, 'Now i can work aback end developer, skills(PHP, ERD, Data base normalization, SQL, OOP,  API, MVC, Laravel) ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'ali', 'ali689_kh@yahoo.com', '01122897651', 'ahla portfolio wla a7'),
(2, 'ali', 'ali689_kh@yahoo.com', '01122897651', 'sadas'),
(3, 'ali', 'alikh@busineks.com', '01122897651', 'asdas'),
(4, 'assa', 'ali689_kh@yahoo.com', '011221', 'asdajksas'),
(5, 'food', 'assd@02.com', '011221', '0axklasklx');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `img`, `description`, `title`, `user_id`) VALUES
(2, 'scrnli_8__12__2020 10-46-30 م.png', 'I Design it ', 'Steel', 1),
(4, 'scrnli_8__12__2020 10-52-33 م.png', 'I work it by(HTML, CSS, JS, Boot strap)', 'Port', 1),
(5, 'scrnli_8__12__2020 10-57-10 م.png', 'I work it by(HTML, CSS, JS, Boot strap)', 'Pixl', 1),
(6, 'scrnli_8__12__2020 11-00-05 م.png', 'I work it by(HTML, CSS, JS, Boot strap)', 'portfolio', 1),
(7, 'scrnli_8__12__2020 11-02-01 م.png', 'I work it by(HTML, CSS, JS, Boot strap)', 'portfolio', 1),
(8, 'scrnli_8__12__2020 11-02-49 م.png', 'I work it by(HTML, CSS, JS, Boot strap)', 'Conrad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `about` varchar(500) NOT NULL,
  `img` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `netlife` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `cv` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `about`, `img`, `user_id`, `address`, `facebook`, `github`, `linkedin`, `netlife`, `gmail`, `phone`, `cv`) VALUES
(1, 'Ali Khalifa', 'Web Devolepor', 'IMG-20200306-WA0003.jpg', 1, 'Dora Cairo Compound - First Settlement - New Cairo, Egypt', 'https://www.facebook.com/profile.php?id=100002397863469', 'https://github.com/Ali-Khalifaa', 'https://www.linkedin.com/in/ali-khalifa-303b241b3/', 'https://app.netlify.com/teams/ali-khalifaa/sites', 'ali689.kh@gmail.com', '01122897651', 'https://docs.google.com/document/d/11FUXq_uwbOyVkMKd5l4ii0rUjqGgHhiuQiVsgxLi_Uk/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'ali', 'ali689_kh@yahoo.com', '123456'),
(2, 'alaa', 'alaa689.kh@yahoo.vom', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
