-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2024 at 02:45 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_rgistration_form`
--

DROP TABLE IF EXISTS `user_rgistration_form`;
CREATE TABLE IF NOT EXISTS `user_rgistration_form` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_rgistration_form`
--

INSERT INTO `user_rgistration_form` (`id`, `name`, `username`, `email`, `password`) VALUES
(0, 'sana', 'sana123', 'safdsf', 'sfdsafsdf'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjk', 'sfdsf@gmail.com', ''),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfdgghfg'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'sanalkjh', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'sana', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk'),
(0, 'javed', 'asdfghjq', 'sfdsf@gmail.com', 'asdfghjk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
