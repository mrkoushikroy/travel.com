-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 10:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simla`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityID` int(8) UNSIGNED NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityID`, `activity_name`, `description`, `price`, `location`) VALUES
(12345, 'Best Of Shimla & Manali Tour Package', 'Explore the beautiful hill stations of the state of Himachal Pradesh in this 6-day tour package. Shimla is the first destination on your itinerary. This city one of the most popular hill stations in India and is famous for its snow-capped hills, old temples and clean roads. Kufri is another hill station, which glitters in pristine beauty and is less crowded than Shimla. The last city you shall will visit is Manali. This town is famous for the many adventure activities and some attractions like the Hidimba Devi Temple, Tibetan Monastery Van Vihar and much more! So experience the best all Shimla and Manali on this fantastic holiday', '11700.00', 'Shimla (2N) - Manali (3N)'),
(12346, 'Honeymoon Special Shimla & Kasauli Ex Chandigarh', 'Shimla is one of the most popular hill stations among holiday goers because of its pleasant climate, scenic surroundings, colonial charm and accessibility from Chandigarh. ', '12999.00', 'Shimla (2N) - Kasauli (1N)'),
(12347, 'Incredible Himachal Ex Delhi Land Only', 'Shimla was discovered by the British as their summer capital. Even today the hill station continues to be patronized by holidaymakers who come here to escape the heat of the plains and revel in its scenic surroundings. The road to Manali is as breathtaking as the destination itself. The little town of Manali is surrounded by mighty snow-clad peaks and deodar forests. Dalhousie is a beautiful and serene hill station with wooded valleys and mountain springs. ', '23799.00', 'Shimla (2N) - Manali (3N) - Dalhousie (2N)'),
(12348, 'Scenic Shimla and Manali Land Only', 'Shimla is one of the most popular hill stations among holiday goers because of its pleasant climate, scenic surroundings, colonial charm and accessibility from Delhi. The road to Manali is as breathtaking as the destination itself. The little town of Manali is surrounded by mighty snow-clad peaks and deodar forests.', '18699.00', 'Shimla (2N) - Manali (3N) - Chandigarh (1N)'),
(12349, 'The Best Of Himachal, Shimla, Manali & Chandigarh - Honeymoon Delight', 'Take a break from the crazy of daily life and embark on a sojourn to the scenic hill stations of Shimla and Manali, a traveler\'s destination that will leave you to spell bound with its incredible beauty. Explore the bustling markets of Mall Road, visit Rohtang Pass and indulge in exciting activities at Solang Valley. Take a look at the intricately woven shawls and traditional dresses displayed at the roadside shops and buy something exquisite for your loved ones back at home. Enjoy the drive to Chandigarh through Kullu Valley which offers alluring vistas.', '16500.00', 'Shimla (2N) - Manali (3N) - Chandigarh (1N)'),
(12350, 'Blissful Shimla and Manali - Ex Chandigarh', 'Take a trip to Himachal Pradesh for a holiday like never before with visits to scenic destinations – Shimla and Manali and excursion to Kufri and Rohtang Pass. During the tour, indulge in various adventurous and recreational activities on offer to make your vacation truly memorable. Spend time at the Mall Roads of Shimla and Manali to shop for gifts, souvenirs and local items for your family, friends and loved ones.', '17699.00', 'Shimla (2N) - Manali (3N)');

-- --------------------------------------------------------

--
-- Table structure for table `booked_activities`
--

CREATE TABLE `booked_activities` (
  `activityID` int(8) UNSIGNED NOT NULL,
  `customerID` int(8) UNSIGNED NOT NULL,
  `date_of_activity` text NOT NULL,
  `number_of_tickets` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_activities`
--

INSERT INTO `booked_activities` (`activityID`, `customerID`, `date_of_activity`, `number_of_tickets`) VALUES
(12345, 2, '2021-01-11', '4'),
(12345, 4, '2021-01-21', '1'),
(12346, 2, '2021-01-14', '6'),
(12346, 4, '2021-01-19', '1'),
(12347, 2, '2021-01-13', '7'),
(12350, 0, '2021-01-27', '7');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'koushik', 'kk@kk.com', '9999999999', 'hihi', '2020-09-17 18:03:15'),
(3, 'koushik', 'kk@kk.com', '9999999999', 'hihi', '2020-09-17 18:06:35'),
(4, 'koushik', 'kk@kk.com', '9999999999', 'hihi', '2020-09-17 18:07:34'),
(5, 'koushik', 'kk@kk.com', '9999999999', 'hihi', '2020-09-17 18:08:30'),
(8, 'kkkkk', 'ggg@gg.com', '9999999999', 'kkkkkk', '2020-09-18 13:25:20'),
(10, 'koushik', 'ee@ee.com', '7555555555', 'hiu tkjsdfhjafdsadfasd', '2021-01-03 13:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(8) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_postcode` varchar(255) NOT NULL,
  `customer_address1` varchar(255) NOT NULL,
  `customer_address2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `password_hash`, `customer_forename`, `customer_surname`, `customer_postcode`, `customer_address1`, `customer_address2`) VALUES
(1, 'koushik', 'koushik', 'koushik', 'roy', '722207', 'bankura', 'sonamukhi'),
(2, 'admin@admin.com', '$2y$10$oauF3ZHmxVPoqBTqCR1Xhe9J/8kg3t561VCv6L/8Xl8pHCuJ2acS2', 'admin', 'admin', '722207', 'admin', 'admin'),
(3, 'tony@tony.com', '$2y$10$4z2xNZk3yl9waRAo48ZQOOzXxf3bDRPDCiSaiPaOZEqvQAvbZF0FS', 'tony', 'roy', '722207', 'tony', 'tony'),
(4, 'harry@harry.com', '$2y$10$7VX030G.rS5bHiqDbslfWedHx1.lI2yMCDk8vtyITUsyLqjj5t0nC', 'harry', 'roy', '722207', 'harry', 'harry'),
(5, 'kous@kous.com', '$2y$10$2bF/meoKW5KdAgs6P3NnnOqjGbBLh48hVmqY6t/9Fzifq5s7a1nGO', 'kous', 'kous', '722207', 'kous', 'kous');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `booked_activities`
--
ALTER TABLE `booked_activities`
  ADD PRIMARY KEY (`activityID`,`customerID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12351;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
