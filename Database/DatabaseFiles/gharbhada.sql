-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 06:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gharbhada`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rent` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` enum('residential','commercial') NOT NULL,
  `floor` int(11) NOT NULL,
  `entrance` varchar(255) NOT NULL,
  `for_whom` enum('family','single') NOT NULL,
  `road_size` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `living_rooms` int(11) NOT NULL,
  `restrooms` int(11) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `name`, `phone_number`, `title`, `rent`, `location`, `type`, `floor`, `entrance`, `for_whom`, `road_size`, `bedrooms`, `living_rooms`, `restrooms`, `image1`, `image2`, `image3`, `description`, `created_at`, `updated_at`) VALUES
(14, 10, 'Ram Laxman', '9712348237', '2BHK flat Available for Rent', 25000.00, 'Baluwatar', 'residential', 0, 'Main', '', 14, 2, 1, 1, '../PostImages/1+1.webp', '../PostImages/1+2.webp', '../PostImages/1+3.webp', 'Discover serenity and convenience in this charming room for rent nestled in the vibrant city of Kathmandu, Nepal. Perfectly situated near the bustling district of Thamel, this room offers a tranquil retreat amidst the city\'s lively atmosphere. The furnished bedroom features a comfortable bed, ample storage space with a wardrobe, and a study desk ideal for work or study sessions.', '2024-08-19 03:50:12', '2024-08-19 03:50:12'),
(15, 10, 'Ram Laxman', '9712348237', 'Room for rent at old Baneshwor', 22.00, 'Baneshwor', 'residential', 0, 'Seperated', '', 20, 1, 1, 1, '../PostImages/2+1.webp', '../PostImages/2+2.webp', '../PostImages/2+3.webp', 'You\'ll have access to a modern, shared bathroom equipped with hot water facilities. Enjoy the convenience of a shared kitchen where you can prepare meals with ease. High-speed internet, electricity, and water utilities are all included in the rent, ensuring a hassle-free living experience.', '2024-08-19 03:54:31', '2024-08-19 03:54:31'),
(16, 10, 'Ram Laxman', '9712348237', '2 bhk flat on rent at sanepa', 35.00, 'Sanepa', 'residential', 0, 'Main', '', 10, 2, 1, 1, '../PostImages/3+1.webp', '../PostImages/3+2.webp', '../PostImages/3+3.webp', 'With 24/7 security and CCTV surveillance, safety is prioritized. Take advantage of the rooftop terrace offering breathtaking views, perfect for relaxation or social gatherings. Whether you\'re a student or a professional, this room provides the ideal blend of comfort and accessibility in Kathmandu.', '2024-08-19 03:57:50', '2024-08-19 03:57:50'),
(17, 10, 'Ram Laxman', '9712348237', 'Flat on rent - Bagdol', 25000.00, 'Bagdol', 'residential', 0, 'Seperated', '', 14, 1, 1, 1, '../PostImages/4+1.webp', '../PostImages/4+2.webp', '../PostImages/4+3.webp', 'Discover serenity and convenience in this charming room for rent nestled in the vibrant city of Kathmandu, Nepal. Perfectly situated near the bustling district of Thamel, this room offers a tranquil retreat amidst the city\'s lively atmosphere. The furnished bedroom features a comfortable bed, ample storage space with a wardrobe, and a study desk ideal for work or study sessions. ', '2024-08-19 04:00:59', '2024-08-19 04:00:59'),
(18, 10, 'Ram Laxman', '9712348237', 'sunny 3bk 1st floor 26000', 26000.00, 'Manjushri Marg', 'residential', 0, 'Seperated', '', 20, 1, 1, 1, '../PostImages/5+1.webp', '../PostImages/5+2.webp', '../PostImages/5+3.webp', 'You\'ll have access to a modern, shared bathroom equipped with hot water facilities. Enjoy the convenience of a shared kitchen where you can prepare meals with ease. High-speed internet, electricity, and water utilities are all included in the rent, ensuring a hassle-free living experience.', '2024-08-19 04:05:03', '2024-08-19 04:05:03'),
(19, 11, 'Radha Krishna', '9723149793', '3 bhk flat on rent at jhamshikhel', 30000.00, 'Jhamshikhel', 'residential', 0, 'Main', '', 14, 3, 1, 1, '../PostImages/6+1.webp', '../PostImages/6+2.webp', '../PostImages/6+3.webp', 'You\'ll have access to a modern, shared bathroom equipped with hot water facilities. Enjoy the convenience of a shared kitchen where you can prepare meals with ease. High-speed internet, electricity, and water utilities are all included in the rent, ensuring a hassle-free living experience. ', '2024-08-19 04:10:40', '2024-08-19 04:10:40'),
(20, 11, 'Radha Krishna', '9723149793', 'Flat on Rent', 20000.00, ' Suryabinayak', 'residential', 0, 'Main', '', 14, 1, 1, 1, '../PostImages/7+1.webp', '../PostImages/7+2.webp', '../PostImages/7+3.webp', 'With 24/7 security and CCTV surveillance, safety is prioritized. Take advantage of the rooftop terrace offering breathtaking views, perfect for relaxation or social gatherings. Whether you\'re a student or a professional, this room provides the ideal blend of comfort and accessibility in Kathmandu.', '2024-08-19 04:14:21', '2024-08-19 04:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, '', '', '', '$2y$10$UI5OyA7XyGyqoNfYNm9onOZphtFTgiMbPrqbnqSO03HKpYHBxuW0e', '2024-08-18 12:18:10'),
(10, 'Ram Laxman', 'ramlaxman@gmail.com', '9712348237', '$2y$10$fjlDe3TQUIzgn115r2ASqeTCFm/8tRdNuNlvr0bhPdZm3rr7zddJq', '2024-08-18 12:46:04'),
(11, 'Radha Krishna', 'radhakrishna@gmail.com', '9723149793', '$2y$10$hh8OQgP8stwziBJOImwfeuDZYNVUu6I/zG1QphaQqn63jrA5amHKy', '2024-08-19 04:07:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
