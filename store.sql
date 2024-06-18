-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Catalytic Converter (Xcent,Verna,Elantra)', 19235),
(2, 'Clutch Plate MGP (Eeco,Swift,Alto800)', 1430),
(3, 'CABIN FILTER MGP (DZIRE,CIAZ,SWIFT)', 248),
(4, 'AIR FILTER HOUSING ASSY (GRAND VITARA,JIMNY)', 2230),
(5, 'EVAPORATOR ALU FINS MGP (WAGONR,STINGRAY)', 4170),
(6, 'FUEL PUMP MGP (ERTIGA,BALENO,IGNIS)', 4908),
(7, 'ENGINE CYLINDER BLOCK ASSY MGP (S-CROSS,CIAZ)', 321948),
(8, 'CONNECTING ROD MGP GENUINE *(ONLY FOR EECO)*', 2786),
(9, 'CONNECTING ROD MGP (ONLY FOR ALL 4 CYLINDER DIESEL )', 1020),
(10, 'CABIN FILTER HGS (AURA,CRETA,ELITE I20)', 489),
(11, 'OIL FILTER WITH ORING HGS (TUCSON,CRETA,SONATA)', 405),
(12, 'TIMING CHAIN KIT HGS (ONLY FOR SANTRO)', 6280),
(13, 'FUEL INJECTOR ASSY HGS (CRETA,TUCSON,VENUE) DIESEL ONLY', 9256),
(14, 'DIESEL FILTER ASSY WITH FILTER HGS (VERNA,XCENT,ELANTRA,I20)', 6458),
(15, 'GEAR TRANSMISSION ASSY (AUTOMATIC 4 CYLINDER PETROL EQUIP. WITH TURBO)', 7736),
(16, 'WINDOW REGULATOR W/O KNOBS (I10,I20 ACTIVE,I20 N LINE,SANTRO,EON)', 804);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `fname`, `email`, `number`, `chassis_no`, `problem`, `brand`, `model`) VALUES
(2, 'Ramhari Jadhav', 'ramu@gmail.com', 2147483647, 'VW12SG8528', 'Just want quotation for tyre change and repair with exchange of old tyres.', 'Jeep', 'Compass'),
(3, 'Sadik Ahemad', 'sadikahmed@gmail.com', 2147483647, 'MG18HE4512', 'AC servicing cost', 'MG', 'Hector'),
(4, 'Vikrant Gondkar', 'viki@gmail.com', 2147483647, 'MMTH121512', 'Stereo issue', 'Mahindra', 'Thar'),
(5, 'Shrutik shinde', 'shurtik@gmail.com', 2147483647, 'MS52DZ1512', 'Full engine service cost', 'Maruti_Suzuki', 'Dzire'),
(6, 'Aslam Khan', 'khan@gmail.com', 2147483647, 'SK848528OC', 'Fuse Box issue', 'Skoda', 'Octavia'),
(7, 'Pravin Ahir', 'pravin@gmail.com', 2147483647, 'TOY2HYD528', 'Timing chain cost and fitting labour charges', 'Toyota', 'Urban Cruiser Hyryder');

-- --------------------------------------------------------

--
-- Table structure for table `serv`
--

CREATE TABLE `serv` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serv`
--

INSERT INTO `serv` (`id`, `fname`, `lname`, `date`, `fuel`, `pack`, `make`, `model`) VALUES
(18, 'Aditya', 'Wavare', '2023-04-20', 'Petrol', 'basic', 'Maruti_Suzuki', 'Dzire'),
(19, 'sadik', 'ahemad', '2023-04-29', 'Diesel', 'Comprehensive', 'Skoda', 'Rapid'),
(20, 'Rahul', 'Dushing', '2023-04-25', 'Petrol', 'AC Servicing', 'Tata', 'Harrier'),
(22, 'Sandip', 'tunwal', '2023-04-22', 'Diesel', 'Comprehensive', 'Kia', 'Seltos'),
(23, 'Ramesh', 'Pujari', '2023-04-11', 'Petrol', 'AC Servicing', 'Honda', 'Mobilio'),
(24, 'Harpreet', 'Singh', '2023-04-30', 'CNG', 'AC Servicing', 'Maruti_Suzuki', 'Eeco'),
(25, 'Abhay', 'Shelke', '2023-05-07', 'Diesel', 'Premium', 'Ford', 'Endeavour'),
(26, 'Bhaiya', 'Yadav', '2023-04-18', 'Petrol', 'basic', 'Mahindra', 'Thar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Aditya', 'adi@mail.com', '3718215498913f64cd9490056a2e9c60', '7775946365', 'Shirdi', 'Pimplwadi Road,Mauli Nagar,Shirdi-423109'),
(2, 'Sadik Ahemad', 'sadik1@gmail.com', 'a31566e8b223911fe1befc7917b5481f', '8444852355', 'Ahemadnagar', 'Near Pump Station'),
(3, 'Rahul Shinde', 'rahul21@gmail.com', '64b0cf5c77ee45a0e04d3a225b29b271', '7778524621', 'Kopargaon', 'Bus Stand'),
(4, 'Akshay Gunjal', 'akashay@gmail.com', '5011aee26fcb2334cb66b5e93ce8e6b3', '9561432564', 'Shirdi', 'Near Hp Gas'),
(5, 'Abhilek Jadhav', 'abhi43@gmail.com', '326b0870a761e2ede3a05ae77d86e41e', '9851235741', 'Rahata', 'Near Town hall'),
(6, 'Pravin Ahir', 'ahir31@gmail.com', '39ff1e84ff3f2e3d0173e8fbc9b726fc', '8456123741', 'Astagaon', 'Temple street'),
(7, 'admin', 'admin@mail.com', '4de93544234adffbb681ed60ffcfb941', '7777534441', 'Shirdi', 'Bharat Petroleum'),
(8, 'ABC', 'abc2@mail.com', '', '1234567890', 'abcc', 'agga');

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_item`
--

INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`, `date_time`) VALUES
(34, 7, 15, 'Confirmed', '2023-04-02 14:16:06'),
(35, 8, 7, 'Confirmed', '2023-04-02 14:23:23'),
(36, 7, 1, 'Confirmed', '2023-04-19 20:19:33'),
(37, 7, 6, 'Confirmed', '2023-04-19 20:19:39'),
(38, 7, 2, 'Confirmed', '2023-04-19 20:30:23'),
(39, 7, 8, 'Confirmed', '2023-04-19 20:30:27'),
(40, 1, 1, 'Confirmed', '2023-05-11 19:15:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serv`
--
ALTER TABLE `serv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_item`
--
ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `serv`
--
ALTER TABLE `serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_item`
--
ALTER TABLE `user_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
