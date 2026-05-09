-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2026 at 01:43 PM
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
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_des`) VALUES
(10, 'Nature', 'Write something about the beauty of nature'),
(11, 'Sports', 'Write something about Sports'),
(12, 'History', 'Write something about the beauty of history'),
(13, 'Food', 'Write something about the food'),
(14, 'Newspaper', 'Write something about the importance of newspaper');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(100) NOT NULL,
  `post_category` int(255) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` int(255) NOT NULL,
  `post_summary` varchar(200) NOT NULL,
  `post_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_img`, `post_category`, `post_author`, `post_date`, `post_comment_count`, `post_summary`, `post_status`) VALUES
(7, 'The Beauty of Nature', 'The beauty of nature can be seen in every corner of the world. The gentle sound of birds, the fresh air in the morning, and the sight of a golden sunset remind us how peaceful life can be. Nature not only refreshes our minds but also teaches us balance and harmony. Spending time in natural surroundings helps reduce stress and brings a sense of joy that is hard to find elsewhere. Protecting nature is important so that future generations can also experience its endless beauty.', 'nature.jpg', 10, 'admin', '2026-04-17', 0, 'Nature is a beautiful gift that surrounds us with peace, colors, and life. From green forests to flowing rivers, it inspires calmness and happiness in our daily lives.', 1),
(8, 'The importance of knowing history', 'Knowing history is essential because it gives us insight into how societies, cultures, and civilizations have developed. By studying past events, we can understand the causes of success and failure, which helps us avoid repeating mistakes. History also builds awareness of our identity and heritage, making us more connected to our culture. It encourages critical thinking by allowing us to analyze different perspectives and events. In a rapidly changing world, history acts as a guide, helping us make wiser choices and appreciate the journey that has shaped the present.', 'history.jpg', 12, 'admin', '2026-04-17', 0, 'Understanding history helps us learn from the past, shape better decisions, and build a more informed future. It connects us to our roots and shows how the world has evolved over time.', 1),
(9, 'The healthy food', 'Knowing history is essential because it gives us insight into how societies, cultures, and civilizations have developed. By studying past events, we can understand the causes of success and failure, which helps us avoid repeating mistakes. History also builds awareness of our identity and heritage, making us more connected to our culture. It encourages critical thinking by allowing us to analyze different perspectives and events. In a rapidly changing world, history acts as a guide, helping us make wiser choices and appreciate the journey that has shaped the present.', 'food.jpg', 13, 'admin', '2026-04-17', 0, 'Healthy food is essential for maintaining a strong body and a clear mind. It provides the nutrients needed for energy, growth, and overall well-being.', 1),
(10, 'The importance of sports', 'The importance of sports cannot be ignored in our daily lives. Engaging in physical activities like football, ক্রিকেট, or running helps improve physical fitness and strengthens our muscles and bones. Sports also teach valuable life skills such as teamwork, leadership, and time management. They reduce stress, increase confidence, and promote mental well-being. For students, participating in sports can improve focus and academic performance. Overall, sports are not just games—they are a powerful way to develop a healthy body and a strong character.', 'sport.jpg', 11, 'admin', '2026-04-17', 0, 'Sports play an important role in keeping our body fit and mind active. They help build discipline, teamwork, and a healthy lifestyle.', 1),
(24, 'The greatest show on earth, 2026', 'The year 2026 brings with it an extraordinary spectacle often referred to as “The Greatest Show on Earth.” This event is not just about entertainment; it represents a powerful gathering of cultures, ideas, and talents from across the globe. From breathtaking performances to groundbreaking innovations, the show offers something for everyone. It creates a space where art meets technology, and tradition blends seamlessly with modern creativity, leaving audiences inspired and amazed.\r\n\r\nBeyond the dazzling lights and performances, the true essence of the show lies in its ability to unite people. Regardless of language, nationality, or background, millions come together to witness and celebrate human potential at its finest. It serves as a reminder that even in a diverse world, shared experiences can create lasting connections. The 2026 edition promises to be bigger, more inclusive, and more unforgettable than ever before.', 'football.jpg', 11, 'admin', '2026-04-20', 0, 'The Greatest Show on Earth, 2026” showcases global talent, creativity, and unity in one unforgettable event.', 1),
(25, 'Rising Temperatures Ahead: A Warning for the Future', 'As global temperatures continue to rise, the future presents a concerning reality for humanity. Scientists warn that increasing heat levels will lead to more frequent heatwaves, water shortages, and environmental disruptions. These changes will not only affect ecosystems but also impact agriculture, health, and living conditions across the world.\r\n\r\nIf proper actions are not taken now, the consequences could become severe and irreversible. Reducing carbon emissions, adopting sustainable practices, and raising awareness are essential steps to slow down this growing crisis. The warning is clear—our future depends on the decisions we make today.', 'hot_temp.jpg', 12, 'Fahad', '2026-04-20', 0, 'Future temperature increases pose serious risks to the environment, human health, and daily life worldwide.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `term_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `pass`, `term_cond`) VALUES
(1, 'Fahad', 'mfahad@gmail.com', 1617118858, '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
