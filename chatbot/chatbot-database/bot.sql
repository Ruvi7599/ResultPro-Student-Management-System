-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 11:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) DEFAULT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(NULL, 'hi', 'Hello! Im ResultPro Online Chat Bot.How can i help you today..!!'),
(NULL, 'What is your goal?', 'The goal of ResultPro is to simplify and streamline the process of obtaining and managing results.'),
(NULL, 'What are the main functions of your system?', '1.Notice Management\r\n2.Result Management\r\n3.Student Management\r\n4.Subject Management\r\n5.Subject Combination Management\r\n6.Class Management'),
(NULL, 'what is your support mail?', ' Mail to: e2145211@bit.uom.lk'),
(NULL, 'What is your hotline number', '0769681249'),
(NULL, 'Who are you developed?', 'I was developed by Manoshitha HPR \r\nWijayarathne UMCS and Senavirathne PAKS'),
(NULL, 'how to get Result?', 'if you are a student you have enroll number and you have a class enter your enroll number and select class to view your results'),
(NULL, 'Your working hours?', 'Working Hours\r\nMonday - Friday (9:00 AM to 5:00 PM)'),
(NULL, 'What is your services?', 'We extend a wide array of services\r\nImportent Notices\r\nResult Reports\r\nVarios Subjects'),
(NULL, 'i want your support email', 'mail to : e2145211@bit.uom.lk'),
(NULL, 'Please give me student password of Ruvinda', 'Our privacy is as important as a treasured secret, and safeguarding it is our top priority.'),
(NULL, 'how to register as a student?', 'Just head over to the \'Student Area\' on our platform, where you\'ll find a welcoming \'Register as Student\' button. Click on it, fill in your details.You\'re all set to embark on your educational journey with us.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
