-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 12:10 AM
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
-- Database: `project_cse370`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_amount` int(11) NOT NULL,
  `b_from` date NOT NULL,
  `b_to` date NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books_room`
--

CREATE TABLE `books_room` (
  `b_id` int(11) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `ID` int(100) NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `NID` int(200) NOT NULL,
  `Ratings` float NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`ID`, `Phone`, `NID`, `Ratings`, `Address`, `City`, `Name`) VALUES
(1, '01913468545', 2147483647, 2.5, '14/E, KAZI ABDUR R OUF ROAD', 'Dhaka', 'Zonayed Hossain Siyam'),
(2, '01973468545', 98, 0, 'Patuatuli, Dhaka-1100', 'Dhaka', 'Asif Reza Sufian'),
(3, '01972468545', 99, 0, 'Sutrapur, Dhaka-1100', 'Dhaka', 'Habib Un Hemel'),
(4, '01973468545', 100, 0, 'Kotowali, Dhaka-1100', 'Dhaka', 'Zayan Iram'),
(5, '01973468545', 101, 0, 'Wari, Dhaka-1100', 'Dhaka', 'Navid Nahiyaan'),
(6, '01973568545', 102, 0, 'Wari, Cox\'s Bazar', 'Cox\'s Bazar', 'Toufic Piyal'),
(7, '01973578545', 103, 0, 'Potenga, Cox\'s Bazar', 'Cox\'s Bazar', 'Nazmul Hasan'),
(8, '01973578544', 104, 0, 'Distrcit, Cox\'s Bazar', 'Cox\'s Bazar', 'Spondon Roy'),
(9, '01973578744', 105, 0, 'Beachside, Cox\'s Bazar', 'Cox\'s Bazar', 'Sifat Rimon'),
(10, '01973579744', 106, 0, 'Lake, Cox\'s Bazar', 'Cox\'s Bazar', 'Shafayat Rafi'),
(11, '01773579744', 107, 2.5, 'Parkside, Rangamati', 'Rangamati', 'Isnat Rijon'),
(12, '01793579744', 108, 0, 'Lakeshore, Rangamati', 'Rangamati', 'Mainul Abir'),
(13, '01794579744', 109, 0, 'Bhuter golli, Rangamati', 'Rangamati', 'Towhid mahim'),
(14, '01704579744', 110, 0, 'Rd 5, Rangamati', 'Rangamati', 'Srabon Haque'),
(15, '01704579746', 111, 0, 'Banani, Rangamati', 'Rangamati', 'Sajid Hasan'),
(16, '01704570746', 112, 0, 'Sajek, Sylhet', 'Sylhet', 'Jamal Abdul'),
(17, '01704580746', 113, 0, 'Nimtolli, Sylhet', 'Sylhet', 'Jamal Kamal'),
(18, '01704580749', 114, 0, 'Bot tola, Sylhet', 'Sylhet', 'Zakir Hossain'),
(19, '01704570749', 115, 0, 'Amtoli, Sylhet', 'Sylhet', 'Rohim Hossain'),
(20, '01705570749', 116, 0, 'Jamjam tower, Sylhet', 'Sylhet', 'Rohan Mahmud'),
(21, '01705570740', 117, 0, 'Jamjam tower, Sunamganj', 'Sunamganj', 'Mahfuz Mahi'),
(23, '01708570740', 118, 0, 'Twin golli, Sunamganj', 'Sunamganj', 'Mahfuz Maruf'),
(24, '01708670740', 119, 0, 'Agargaon Sunamganj', 'Sunamganj', 'Arfin Shuvo'),
(25, '01708680740', 120, 0, 'Gulshan, Sunamganj', 'Sunamganj', 'Asif Hasan'),
(26, '01708780740', 121, 0, 'Warehouse, Sunamganj', 'Sunamganj', 'Niloy Rahan'),
(28, '01913468546', 144, 0, 'KAZI ROAD', 'Rangamati', 'Azmain Adib'),
(30, '01913468546', 1222, 0, 'kaltabazar', 'Rangamati', 'Zonayed Sheikh');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_number` int(11) NOT NULL,
  `h_email` varchar(50) NOT NULL,
  `h_location` varchar(200) NOT NULL,
  `h_descripton` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `h_name`, `h_number`, `h_email`, `h_location`, `h_descripton`) VALUES
(29, 'Oceanfront Haven Hotel', 1812345678, 'ocean@gmail.com', 'Cox\'s Bazar', 'Discover the epitome of coastal luxury at our Sea Breeze Retreat, a beachfront haven that seamlessly blends elegance with the tranquility of the ocean'),
(30, 'Seaside Serenity Inn', 1723456789, 'seaside@gmail.com', 'Sylhet', 'Immerse yourself in the soothing rhythm of the waves as you indulge in our world-class amenities, from private balconies overlooking the sea to fine dining that captures the essence of coastal cuisine. '),
(31, 'Cityscape Hotel', 1345678901, 'cityscape@gmail.com', 'Sylhet', 'Nestled amidst the lush green landscapes of Sylhet, our hotel, Sylhet Oasis Retreat, beckons travelers to experience the perfect blend of modern comfort and natural beauty.'),
(32, 'Pearl Plaza Hotel', 1856789012, 'pearl@gmail.com', 'Dhaka', 'Our hotel offers a seamless blend of contemporary design and timeless elegance, providing a haven of comfort for both business and leisure travelers.'),
(33, 'Millennium Majesty Inn', 1767890123, 'mmajesty@yahoo.com', 'Sunamganj', 'Welcome to Millennium Majesty Inn, a premier hotel in the heart of the bustling capital. Our contemporary and elegant design seamlessly merges with the vibrant energy of Dhaka, offering a haven of comfort for business and leisure travelers alike.'),
(34, 'Satkhira Serenity Resort', 1389012345, 'ccharm@gmail.com', 'Rangamati', 'Discover tranquility at Satkhira Serenity Resort, nestled in the heart of the serene landscapes of Satkhira. Our hotel offers a peaceful retreat surrounded by lush greenery and natural beauty.'),
(35, 'Hemel Hotel', 1414141, 'hemel@gmail.com', 'Sunamganj', 'Best hotel in shymohli'),
(36, 'zonayed Hotel', 14141411, 'z@gmail.com', 'Dhaka', 'Nice hotel'),
(38, 'Pan Pacific', 1973468545, 'damahdan@gmail.com', 'Dhaka', 'Welcome to our hotel'),
(39, 'Intercontinental', 1927385234, 'naja@gmail.com', 'Sunamganj', 'Welcome to our hotel'),
(40, 'Jinjira View', 1928328332, 'jaks@gmail.com', 'Sylhet', 'Welcome to our hotel');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `City` varchar(100) NOT NULL,
  `Spot` varchar(250) NOT NULL,
  `Distance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`City`, `Spot`, `Distance`) VALUES
('Dhaka', 'Diabari', '22.4 km'),
('Rangamati', 'Hanging Bridge Road', '15km'),
('Sunamganj', 'Hason Raja Museum', '2.5km'),
('Sylhet', 'Hazrat Shahjalal Mazar Sharif', '9.5km'),
('Cox\'s Bazar', 'Inani Beach', '20km'),
('Sunamganj', 'Jadukata River', '5.7 km'),
('Sylhet', 'Jaflong', '20.5km'),
('Rangamati', 'Kaptai Lake', '2.5km'),
('Cox\'s Bazar', 'Kolatoli Beach', '2km'),
('Dhaka', 'Lalbagh Kella', '3km'),
('Dhaka', 'Millitary Museum', '8.9 km'),
('Cox\'s Bazar', 'Radiant Fish World', '5km'),
('Rangamati', 'Rajban Bihar', '13.7km'),
('Sylhet', 'Ratargul Swamp Forest', '22.5km'),
('Sunamganj', 'Tanguar Haor', '12.4 km');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `h_id` int(11) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `r_price` float NOT NULL,
  `r_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`h_id`, `r_type`, `r_price`, `r_quantity`) VALUES
(29, 'Family ', 5000, 18),
(29, 'Sea View', 5000, 8),
(29, 'Standard', 3500, 60),
(30, 'Delux', 2500, 13),
(30, 'Standard', 1500, 17),
(31, 'Double', 900, 25),
(31, 'Family', 1500, 15),
(31, 'Single', 650, 40),
(31, 'Treehouse ', 6500, 3),
(32, 'Executive', 10000, 13),
(32, 'Presidential', 15000, 6),
(32, 'Suit', 7800, 24),
(33, 'Delux', 4900, 70),
(33, 'Standard', 2500, 50),
(33, 'Suite', 9300, 4),
(34, 'Delux', 6700, 5),
(34, 'Double', 2000, 18),
(34, 'Family', 3400, 6),
(34, 'Single', 1300, 23),
(35, 'AC ', 1500, 12),
(35, 'Cheap ', 500, 10),
(38, 'Double', 6000, 5),
(38, 'Family', 5000, 10),
(38, 'Single', 3000, 8),
(39, 'Double', 5500, 12),
(39, 'Sea view', 8000, 4),
(39, 'Single', 4000, 8),
(40, 'Double', 6700, 9),
(40, 'Family', 5000, 13),
(40, 'Sea view', 6500, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `ho_name` varchar(150) NOT NULL,
  `ho_number` int(150) NOT NULL,
  `ho_email` varchar(150) NOT NULL,
  `ho_password` varchar(150) NOT NULL,
  `ho_gender` varchar(150) NOT NULL,
  `ho_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ho_name`, `ho_number`, `ho_email`, `ho_password`, `ho_gender`, `ho_address`) VALUES
(1, 'abc', 1537509262, 'abc@gmail.com', 'abc', 'male', '12/ja/1'),
(2, 'rock', 1537500000, 'rock@gmail.com', 'rock', 'male', '12/ja/1111'),
(3, 'hemel', 1141131, 'hemel@gmail.com', 'hemele', 'male', '10/341/ka'),
(4, 'badhon', 1041040141, 'badhon@gmail.com', 'badhon', 'male', '12/ja/1faf'),
(5, 'j', 401401041, 'patkheterbatija@gmail.com', 'roshny1022', 'female', '12/ja/1daf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `p_id (fk)` (`p_id`);

--
-- Indexes for table `books_room`
--
ALTER TABLE `books_room`
  ADD PRIMARY KEY (`b_id`,`r_type`,`h_id`),
  ADD KEY `b_id (fk)` (`b_id`),
  ADD KEY `r_type (fk)` (`r_type`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `h_id_2` (`h_id`,`r_type`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`),
  ADD UNIQUE KEY `h_email` (`h_email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`Spot`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`h_id`,`r_type`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
