-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 06:42 PM
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
-- Database: `cr10_eva_bukli_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `second_name` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `nationality` varchar(55) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `second_name`, `nationality`) VALUES
(1, 'Stephen', 'King', 'american'),
(2, 'J.K.', 'Rowling', 'british'),
(3, 'Takami', 'Koushun Takami', 'japanese'),
(4, 'Sylvia', 'Plath', 'american'),
(5, 'William', 'Golding', 'british'),
(6, 'Christopher', 'Nolan', 'american'),
(7, NULL, 'In Flames', 'swedish'),
(23, 'second', 'test', 'hungarian');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `ISBN_code` int(11) NOT NULL,
  `title` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `img` varchar(1555) CHARACTER SET latin1 DEFAULT NULL,
  `short_description` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `available` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `publish_id` int(11) DEFAULT NULL,
  `date` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ISBN_code`, `title`, `img`, `short_description`, `available`, `type_id`, `author_id`, `publish_id`, `date`) VALUES
(3, 'Harry Potter - The Order of the Phoenix ', 'http://prodimage.images-bn.com/pimages/9781781100530_p0_v6_s1200x630.jpg', 'magic, adventure', 'reserved', 1, 2, 3, 2003),
(4, 'Harry Potter - The Half-Blood Prince', 'https://images-eu.ssl-images-amazon.com/images/I/519RmXyy9EL.jpg', 'magic, adventure', 'available', 1, 2, 3, 2005),
(5, 'Harry Potter - The Deathly Hallows', 'https://images-na.ssl-images-amazon.com/images/I/51d1HdwwlOL.jpg', 'magic, adventure', 'reserved', 1, 2, 3, 2007),
(6, 'Carrie', 'https://prodimage.images-bn.com/pimages/9780525565338_p0_v2_s550x406.jpg', 'horror', 'reserved', 1, 1, 2, 1974),
(7, 'Battle Royale', 'https://dynamic.indigoimages.ca/books/1421527723.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=0&lang=en', 'thriller, drama', 'available', 1, 3, 1, 1999),
(8, 'Bell Jar', 'https://images-na.ssl-images-amazon.com/images/I/51v-zo8SXkL._SX331_BO1,204,203,200_.jpg', 'drama', 'available', 1, 4, 5, 1963),
(9, ' Lord of the Flies', 'https://moly.hu/system/covers/big/covers_461134.jpg', 'drama, adventure', 'available', 1, 5, 4, 1954),
(10, 'Reroute to Remain', 'https://upload.wikimedia.org/wikipedia/en/thumb/e/ed/In_Flames_-_Reroute_to_Remain.png/220px-In_Flames_-_Reroute_to_Remain.png', 'heavy metal', 'available', 2, 7, 6, 2002),
(11, 'Soundtrack to your Escape', 'https://img.discogs.com/Qprbrn93EGP9LSk2dOetfdgvPc0=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-3151339-1318135746.jpeg.jpg', 'heavy metal', 'available', 2, 7, 6, 2004),
(12, 'Interstellar', 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg', 'sci-fi, drama', 'reserved', 3, 6, 7, 2014),
(42, 'Testing', 'https://cdn.pixabay.com/photo/2018/10/07/11/49/fallow-deer-3729821_960_720.jpg', 'testify', 'available', 1, 23, 11, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `publish`
--

CREATE TABLE `publish` (
  `publish_id` int(11) NOT NULL,
  `publisher_name` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `size` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(55) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`publish_id`, `publisher_name`, `size`, `address`) VALUES
(1, 'Ohta Publishing', 'medium', 'Tokio, Japan'),
(2, 'Doubleday', 'big', 'New York, US'),
(3, 'Bloomsbury Publishing', 'small', 'London, UK'),
(4, 'Faber and Faber', 'medium', 'London, UK'),
(5, 'Heinemann', 'small', 'Portsmouth, US'),
(6, 'Nuclear Blast', 'big', 'Göteborg, Sweden'),
(7, 'Cinema', 'big', 'everywhere'),
(11, 'pub', 'medium', 'Budapest, Hungary');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(55) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'book'),
(2, 'cd'),
(3, 'dvd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ISBN_code`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publish_id` (`publish_id`);

--
-- Indexes for table `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`publish_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ISBN_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `publish`
--
ALTER TABLE `publish`
  MODIFY `publish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`publish_id`) REFERENCES `publish` (`publish_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
