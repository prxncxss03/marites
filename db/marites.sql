-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 06:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marites`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `text`, `post_image`, `created_at`) VALUES
(9, 11, '...', '\"Sa mga panahon na pakiramdam mo ay hindi kana halos makatayo, huwag mong pilitin tumayo. Lumuhod ka kapatid.\"-Kuya Daniel♡', '1653908401192257011_1464126747260302_4785008348765763254_n.jpg', '2022-05-30 19:00:01'),
(10, 10, 'Nba Finals 2022', 'Waited all season for this\r\nThe NBA Finals are set.', '1653913142nbafinalsschedule.jpg', '2022-05-30 20:19:02'),
(11, 11, 'KEEP the FAITH', 'Mangilag kayo sa pagibig sa salapi; mangagkasiya kayo sa inyong tinatangkilik: sapagka\'t siya rin ang nagsabi, Sa anomang paraan ay hindi kita papagkukulangin, sa anomang paraan ni hindi kita pababayaan.\r\nHebreo 13:5 (ADB)', '1653928573284088848_153406360532075_4631434514137400416_n.jpg', '2022-05-31 00:36:13'),
(12, 11, 'Verse of the Day 📖 ', 'Kawikaan 17:1\r\n\r\n- Maigi ang isang tuyong subo at may katahimikan, kay sa bahay na may laging pistahan na may kaalitan.', '1653970002284845037_514438637133457_9103294013541937961_n.jpg', '2022-05-31 12:06:42'),
(13, 11, 'But What Gods', '\"Let\'s not follow what you want nor what I want, but what God wants.\" - Bro. Daniel Razon, Thanksgiving of God\'s People, May 28, 2017', '165397006918700609_1523606721012368_2368489231656668871_o.jpg', '2022-05-31 12:07:49'),
(14, 10, 'SC30', 'Stephen curry 30 🔥', '1653992762stephen-curry-gettyimages-538912798_1600jpg.jpg', '2022-05-31 18:26:02'),
(15, 13, '#First post', 'This is my first post in marites', '1654005841cathy profile.jpg', '2022-05-31 22:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `post_id`, `user_id`, `message`, `created_at`) VALUES
(100, 14, 11, 'Lodi ko yan', '2022-05-31 22:18:20'),
(103, 15, 10, 'nice one haha', '2022-05-31 22:31:08'),
(104, 14, 10, 'hahahaha', '2022-05-31 22:56:57'),
(105, 15, 11, 'naol', '2022-05-31 23:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `mobile`, `username`, `password`, `image`, `bio`, `created_at`) VALUES
(10, 'Omar Morales', 'omarmorales810@gmail.com', NULL, 'omarmorales810', '09272162227', '1653905341stephen-curry-gettyimages-538912798_1600jpg.jpg', NULL, '2022-05-30 18:09:01'),
(11, 'Marlon Adova', 'marlonadova@gmail.com', NULL, 'marlonadova', 'adovamarlon', '1653906432kai.jpg', NULL, '2022-05-30 18:27:12'),
(12, 'Eldrian Rabajante', 'eldrianrabajante@gmail.com', NULL, 'eldrian', '0909', '1653993038eldrian.jpg', NULL, '2022-05-31 18:30:38'),
(13, 'Cathy Quiza', 'cathyquiza@gmail.com', NULL, 'cathyquiza', 'quizacathy', 'cathy_profile.jpg', NULL, '2022-05-31 18:46:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `post_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
