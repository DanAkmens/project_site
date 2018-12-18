-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arlington_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `sector_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `salary_min` varchar(100) DEFAULT NULL,
  `salary_max` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `sector_name`, `title`, `description`, `salary_min`, `salary_max`, `type`, `city`, `created`) VALUES
(6, NULL, 'Driver', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', '15000', NULL, NULL, 'Hull', '2018-11-27 12:00:55'),
(7, NULL, 'Head Nurse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', '24000', NULL, NULL, 'Hull', '2018-11-27 12:00:55'),
(11, NULL, 'Blade Runner', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', '50000', NULL, NULL, 'New York', '2018-11-27 12:00:55'),
(39, NULL, 'waiter', '<p>If you have strong legs, come work for us.</p>', '14000', '24000', NULL, 'Hoboken', '2018-11-30 20:25:31'),
(40, NULL, 'PHP developer', '<p>PerfectÂ job for developer</p>', '55000', NULL, NULL, 'London', '2018-12-01 19:11:45'),
(42, '1', 'Accountant', '<p>Accountant with experience, 2 - 5 years.</p>', '20000', NULL, 'full-time', 'Hull', '2018-12-11 22:30:28'),
(43, '8', 'Web developer', '<p>CSS Boot Strap JavaScript</p>', '30000', NULL, 'part-time', 'Hull', '2018-12-11 22:32:48'),
(44, '2', 'Engineer', '<p>Software Solid Works, Experience 3 years,&nbsp;responsible. Ability to learn quickly, Iron Man. Capital &pound;3 000 000. Unmarried, no kids, Military service considered an advantage. Speak 3 language fluently. Runner, nonsmoker, positive attitude. If you have those skills and more you are welcome to apply.&nbsp;</p>', '5000', '6000', 'full-time', 'Greensby', '2018-12-18 11:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `post_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `post_image`, `created_at`) VALUES
(1, 'Mars is Closer than you think', 'The space shuttle close commander.Â  Prepare laser guns, the enemy will pay for our friends.', 'Dan Strong', 'uni.jpg', '2018-11-27 21:40:47'),
(4, 'The bright future of Robotics', 'Hello iRobot, we are happy about you. Thank you, master, said shiny robot.', 'Master John Doe', '61.jpg', '2018-11-28 00:41:32'),
(5, 'Candidates Attraction - why is it so important?', '<p>Because, because we are. They are, not because. Candidates are strong, smart, yes, no.</p>', 'Dragon Snout', '61.jpg', '2018-11-28 00:55:59'),
(6, 'Turnover is vanity, profit is sanity, but cash flow is king', '<p>yes no yes no yes no yes no yes no yes no yes no yes no yes no yes no</p>', 'Crazy Frog', '510225-PI34BN-784.jpg', '2018-11-28 01:28:44'),
(8, 'Only tonight the moon is Red', '<p>Moon is rad what a phenomena</p>', 'Simple Dude', '61.jpg', '2018-11-29 21:48:28'),
(9, 'Hello', 'To be or not to be! Give me my money and you can be or not, said angrily Dragon.  ', 'Bigy.', '645.jpg', '2018-12-01 19:09:45'),
(10, 'some post', '<p>Some post</p>', 'Dragon Big', '510225-PI34BN-784.jpg', '2018-12-01 19:14:29'),
(13, 'The Palms', 'When I see Palm Trees, I plunge into the dream, where I swimÂ in the blue Ocean with dolphins. You are crazy man, dolphins will eat you alive, they are predators. Not they are not said old man, they are our friends the same as dogs.', 'Tatu Frog', 'Dainis-2.jpg', '2018-12-12 13:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`) VALUES
(1, 'Accountancy'),
(2, 'Aerospace'),
(4, 'Agriculture Fishing Forestry'),
(5, 'Banking Insurance Finance'),
(6, 'Catering & Hospitality'),
(7, 'Construction'),
(8, 'IT & Internet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'dan', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
