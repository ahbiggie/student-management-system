-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 01:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `user_id`, `school_id`, `class_id`, `date`) VALUES
(6, 'J S S 1', 'shaibu.yusuf', 'B89uW4lhacD4g1vA7UN5R9juDkBirvpcKXJ01U7zkvWoJHgyslizf98lf0s8', 'zzNJLsxRYyN3B0W4r1RNfE77ra2mX1o9Xql0wIGhtt4P2F3tA8xSt5ZhrJVg', '2021-10-09 01:11:11'),
(7, 'J S S 2', 'shaibu.yusuf', 'B89uW4lhacD4g1vA7UN5R9juDkBirvpcKXJ01U7zkvWoJHgyslizf98lf0s8', '6R04cf3P0tSWCFwl4nyUXg9YfCFuTRok9xV9MFSlGo328A0RTh1KKVczQLtt', '2021-10-11 10:19:19'),
(8, 'SSS 1', 'shaibu.yusuf', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'W437c639SxvERrWh9NxgqOXrUnJYlNuioUx095bR1bIqACfS2hZuGtwwRXb3', '2021-10-14 01:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `class_students`
--

CREATE TABLE `class_students` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `school_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_students`
--

INSERT INTO `class_students` (`id`, `user_id`, `class_id`, `disabled`, `date`, `school_id`) VALUES
(12, 'naruto.uzumaki', 'W437c639SxvERrWh9NxgqOXrUnJYlNuioUx095bR1bIqACfS2hZuGtwwRXb3', 0, '2021-10-14 01:59:43', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH'),
(13, 'momoh.tohirah', 'UtBFwFgrYW1rpwKpK7KsFpGLwOVt1xSGDiw5tFhKKCA4BGNRVnf3gmgQvd9u', 1, '2021-10-22 16:45:16', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH');

-- --------------------------------------------------------

--
-- Table structure for table `class_teachers`
--

CREATE TABLE `class_teachers` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `school_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_teachers`
--

INSERT INTO `class_teachers` (`id`, `user_id`, `class_id`, `disabled`, `date`, `school_id`) VALUES
(1, 'mahmud.malik', 'UtBFwFgrYW1rpwKpK7KsFpGLwOVt1xSGDiw5tFhKKCA4BGNRVnf3gmgQvd9u', 0, '2021-10-22 16:38:26', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH'),
(2, 'sulieman.abdulwahab', 'UtBFwFgrYW1rpwKpK7KsFpGLwOVt1xSGDiw5tFhKKCA4BGNRVnf3gmgQvd9u', 0, '2021-10-24 14:01:59', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH');

-- --------------------------------------------------------

--
-- Table structure for table `class_tests`
--

CREATE TABLE `class_tests` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `test` varchar(100) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school`, `school_id`, `date`, `user_id`) VALUES
(4, 'DFA', 'q0G7EKJzanBSOOnRsuQiqM3qaeZ0hCSFVf6i5Lnngp2uXGL2JW9VxoHR0EAW', '2021-10-24 14:19:21', 'shaibu.yusuf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `admission_no` varchar(20) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `category` varchar(25) NOT NULL,
  `session` year(4) DEFAULT NULL,
  `abb_sch_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date`, `user_id`, `gender`, `school_id`, `rank`, `state`, `dob`, `admission_no`, `phone`, `password`, `image`, `category`, `session`, `abb_sch_name`) VALUES
(1, 'Shaibu', 'Yusuf', 'Yusuf@yahoo.com', '2021-10-14 01:43:24', 'shaibu.yusuf', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'super_admin', 'Katsina', '2021-10-29', 'DFA/SSS/18/9773', '2349051495949', '$2y$10$.T5U6JTbD.3oY4HPf5kzseQvqZ9sC3lQtDYN5dntIPLrRF/tNf0aa', 'uploads/photo.jpg', 'SSS', 2018, 'DAWAH'),
(2, 'Mahmud', 'Malik', 'Malik@yahoo.com', '2021-10-14 01:46:22', 'mahmud.malik', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'teacher', 'Gombe', '2021-10-14', 'DFA/SSS/12/7160', '09864576876', '$2y$10$WrMfFgrRHG7s8KiyfzVk3.QLecuOAxoRhBGCL9v0NtUCXlbU6uvAW', '', 'SSS', 2012, ''),
(3, 'Jeff', 'Bezos', 'Bezos@yahoo.com', '2021-10-14 01:53:42', 'jeff.bezos', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'admin', 'Edo', '2021-10-11', 'DFA/SSS/19/9604', '08144227356', '$2y$10$QhnGnjLhZGqeW3q/6Z2TBerOk6WKI1PCBG.czczOY8BZH7nJNWg3K', '', 'SSS', 2019, 'DAWAH'),
(4, 'Shehu', 'tijani', 'tj@yahoo.com', '2021-10-14 01:55:10', 'shehu.tijani', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'reception', 'Jigawa', '2021-10-12', 'DFA/SSS/13/3770', '08144227356', '$2y$10$yo6E6yiC7GzaZlSITtl0Kurlggdf8i2kUdQYnCkMnEfOdGXaBOeW6', '', 'SSS', 2013, ''),
(5, 'Momoh', 'tohirah', 'tohirah@yahoo.com', '2021-10-14 01:56:27', 'momoh.tohirah', 'female', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'student', 'Delta', '2021-10-11', 'DFA/SSS/12/1161', '08144227356', '$2y$10$adHRVofzdje6w6VpiOKn8umWeh9YFuxPTQY3vvfVTMrf9T..gL1xC', '', 'SSS', 2012, ''),
(6, 'Bob', 'marley', 'marley@yahoo.com', '2021-10-14 01:57:45', 'bob.marley', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'student', 'Adamawa', '2021-10-19', 'DFA/JSS/12/436', '08144227356', '$2y$10$J6zRsnQGgw6UNK0RqnyMQefoeICiUFOaLBce7JKdTtw.VkBNCunru', '', 'JSS', 2012, ''),
(7, 'Naruto', 'Uzumaki', 'Naruto@yahoo.com', '2021-10-14 01:58:38', 'naruto.uzumaki', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'student', 'Edo', '2021-10-20', 'DFA/BASIC/17/5481', '08144227356', '$2y$10$Vs5pHQ/.RCJ6mJUdNvMVvO5pu7Wt3Nw.FT2DxZ352tU2RBqnT5DfC', '', 'BASIC', 2017, ''),
(8, 'Shuaibu', 'Maryam', 'maryam@yahoo.com', '2021-10-23 14:32:53', 'shuaibu.maryam', 'female', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'student', 'Edo', '2021-10-04', 'DAWAH/JSS/19/317', '08144227356', '$2y$10$3Wlr/JElDGmpeouRpxuVAuyRu43EpvDQlArGe7z5yCfxxiKO.qJde', '', 'JSS', 2019, 'DAWAH'),
(9, 'Sulieman', 'Abdulwahab', 'wahab@yahoo.com', '2021-10-24 13:56:32', 'sulieman.abdulwahab', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'teacher', 'Anambra', '2021-10-23', NULL, '08144227356', '$2y$10$5FYI82ycToXHgmizUJQiWOqtco8NLmtL3cgwzEXq7k1Yoq8HqwGwC', '', 'SSS', 2013, 'DAWAH'),
(10, 'Shaka', 'Muhammed', 'shaka@yahoo.com', '2021-10-24 14:16:11', 'shaka.muhammed ish', 'male', '0PbzcOAALCLUytlGxNog9R3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH', 'student', 'Edo', '2021-10-12', 'DAWAH/SSS/21/8945', '08144227356', '$2y$10$tepsgGSZLbzN1GO5YALUNOdtkPqxN7z/yR.57IcuO1FH0L24pf7Wy', 'uploads/cardinal_1585485603.jpg', 'SSS', 2021, 'DFA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class` (`class`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `class_students`
--
ALTER TABLE `class_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `class_teachers`
--
ALTER TABLE `class_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `class_tests`
--
ALTER TABLE `class_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `date` (`date`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `test` (`test`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_url` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `rank` (`rank`),
  ADD KEY `email` (`email`),
  ADD KEY `state` (`state`),
  ADD KEY `dob` (`dob`),
  ADD KEY `category` (`category`),
  ADD KEY `abb_sch_name` (`abb_sch_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `class_students`
--
ALTER TABLE `class_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `class_teachers`
--
ALTER TABLE `class_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class_tests`
--
ALTER TABLE `class_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
