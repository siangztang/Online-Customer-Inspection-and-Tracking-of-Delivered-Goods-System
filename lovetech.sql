-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 09:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovetech`
--
CREATE DATABASE IF NOT EXISTS `lovetech` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lovetech`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmins`
--

CREATE TABLE `tbladmins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dtCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(8) NOT NULL,
  `postal_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmins`
--

INSERT INTO `tbladmins` (`username`, `password`, `full_name`, `email`, `phone`, `dtCreated`, `address`, `city`, `country`, `postal_code`) VALUES
('demoadmin', 'Admin12345', 'Tang Zhi Siang', 'siangztang@gmail.com', '0167863524', '2022-04-06 10:45:49', '27 Solok Relau 2 Relau', 'Bayan Lepas', 'Malaysia', '11900'),
('kienhaw01', 'Wongkh2001', 'Wong Kien Haw', 'jackiewong@hotmail.com', '0191247284', '2021-10-15 02:32:51', '34 Hussin Onn', 'Cheras', 'Malaysia', '43200'),
('siangztang', 'Tangzsiang123', 'Tang Zhi Siang', 'siangztang@gmail.com', '0167863524', '2021-08-11 17:38:50', '27 Solok Relau 2 Relau', 'Bayan Lepas', 'Malaysia', '11900'),
('yam021015', 'ZQuan1015', 'Yam Zhi Quan', 'zachyam@gmail.com', '0175154643', '2021-09-13 15:22:40', '932 Lagenda Heights', 'Sungai Petani', 'Malaysia', '08000');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedbacks`
--

CREATE TABLE `tblfeedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfeedbacks`
--

INSERT INTO `tblfeedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'Albertine Pratton', 'apratton0@amazon.com', 'The website is pretty good:)'),
(2, 'Elmer Bradtke', 'ebradtke1@bloglines.com', 'Never seen such clean interface!!'),
(3, 'Rebeka Downes', 'rdownes2@mlb.com', 'Boooo, diploma level website~'),
(4, 'Brande Farres', 'bfarres3@elegantthemes.com', 'It will be better if u let me manage the website'),
(5, 'Cortie Le land', 'cle4@yahoo.com', 'OMG Love It!!!!'),
(6, 'Clari Simmell', 'csimmell5@google.com.au', 'Hi Im Clari Simmell, Nice 2 meet you >.<'),
(7, 'Albrecht Pettko', 'apettko6@plala.or.jp', 'I would give a 4 star to this website'),
(8, 'Gabriello Duke', 'gduke7@kickstarter.com', 'Can have some improvement on the interface'),
(9, 'Roshelle Borell', 'rborell8@businessweek.com', 'Nice design!!!'),
(10, 'Catharine MacKnocker', 'cmacknocker9@dell.com', 'WOWWWWW ITS KINDA SMOOTH ON EVERY BUTTON AND EVERYTHING, JUST LOVE IT, YALL ARE DOING GREAT AT THIS, OH MY GODDDDDDDDDDDDD, KEEP GOING BROTHERSSSSS!!!!'),
(11, 'Roldan Reder', 'rredera@census.gov', 'Can I have 3 characters username? :\'('),
(12, 'Merrili Tomei', 'mtomeib@tmall.com', 'BAHAHAAHAAAHAHAHAAHAAHHAH'),
(13, 'Oran Clemmow', 'oclemmowc@hostgator.com', 'Do you play Valorant!? HAHAAAAAHA DON?T MIND ME'),
(14, 'Scottie Simenet', 'ssimenetd@jiathis.com', 'WHY NO AVATAR :\'( ADD THAT SHIT PLEASE'),
(15, 'Marnia De Courtney', 'mdee@shinystat.com', 'Where can I check my profile? Serious question please, ANSWER ME QUICKKKK!'),
(16, 'Arlen Sterte', 'astertef@weibo.com', 'Why is the server so lag, am my internet lag or wat?'),
(17, 'Candie Zecchini', 'czecchinig@addtoany.com', 'Hiii gotta appreciate your efforts in developing this website, Nice!! Great Work!!!'),
(18, 'Antonietta Blaber', 'ablaberh@cloudflare.com', 'Proud of you as a Malaysian!!!'),
(19, 'Eadith Stockbridge', 'estockbridgei@foxnews.com', 'Great Work Brothersss'),
(20, 'Ainslee Grubb', 'agrubbj@usatoday.com', 'Boooooo~ bet im better than yall, drop the website please, go back study!!!'),
(33, 'Tang Zhi Siang', 'siangztang@gmail.com', 'hi welcome to wdt');

-- --------------------------------------------------------

--
-- Table structure for table `tblparcels`
--

CREATE TABLE `tblparcels` (
  `id` int(11) NOT NULL,
  `courier_company` varchar(20) NOT NULL,
  `tracking_number` varchar(13) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `latest_update` datetime NOT NULL DEFAULT current_timestamp(),
  `latest_status` varchar(20) NOT NULL,
  `latest_description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblparcels`
--

INSERT INTO `tblparcels` (`id`, `courier_company`, `tracking_number`, `departure`, `destination`, `latest_update`, `latest_status`, `latest_description`) VALUES
(3, 'Pgeon', 'PG9563883085', 'Kelantan', 'Selangor', '2022-04-12 10:14:33', 'Shipped', 'Parcel has arrived at station: OUG Hub'),
(4, 'Shopee Xpress', 'SPX3258890657', 'Terengganu', 'Penang', '2022-01-21 11:01:01', 'Shipped', 'Parcel has arrived at station: MP3 sorting centre.'),
(5, 'UPS', 'UPS2837591044', 'Johor', 'Pahang', '2022-02-16 17:10:40', 'Delivered', 'Parcel has been delivered.'),
(6, 'Skynet', 'SKY0309138133', 'Perak', 'Labuan', '2022-04-10 17:35:35', 'Packing', 'Sender is preparing to ship your parcel.'),
(7, 'DHL E-commerce', 'DHL3155517412', 'Sarawak', 'Negeri Sembilan', '2022-01-30 09:31:08', 'Delivered', 'Parcel has been delivered.'),
(8, 'Pgeon', 'PG6436885054', 'Kedah', 'Perak', '2022-01-22 16:29:50', 'Delivered', 'Parcel has been delivered.'),
(9, 'Gdex', 'GD8998974301', 'Kuala Lumpur', 'Malacca', '2022-02-15 17:55:04', 'Out for delivery', 'Parcel is out for delivery.'),
(10, 'J&T Express', 'JT7517526833', 'Penang', 'Terengganu', '2022-02-16 05:08:18', 'Shipped', 'Parcel has departed from station.'),
(11, 'Pos Laju', 'POS0046770286', 'Kuala Lumpur', 'Selangor', '2022-02-03 00:24:22', 'Out for delivery', 'Parcel is out for delivery.'),
(12, 'Skynet', 'SKY7340120915', 'Kedah', 'Penang', '2022-03-05 21:45:22', 'Packing', 'Sender is preparing to ship your parcel.'),
(13, 'City-Link', 'CT1024411908', 'Perlis', 'Selangor', '2022-03-24 04:17:28', 'Packing', 'Sender is preparing to ship your parcel.'),
(14, 'DHL E-commerce', 'DHL3898181958', 'Penang', 'Kedah', '2022-03-14 11:10:39', 'Shipped', 'Parcel has arrived at station: Sungai Petani Hub'),
(15, 'UPS', 'UPS6873576949', 'Sabah', 'Johor', '2022-03-02 22:00:03', 'Out for delivery', 'Parcel is out for delivery.'),
(16, 'Shopee Xpress', 'SPX1174343703', 'Johor', 'Kelantan', '2022-02-14 10:01:54', 'Delivered', 'Parcel has been delivered.'),
(17, 'Shopee Xpress', 'SPX8562157924', 'Selangor', 'Perak', '2022-02-12 15:10:15', 'Delivered', 'Parcel has been delivered.'),
(18, 'Gdex', 'GD2449582183', 'Penang', 'Kuala Lumpur', '2022-04-07 06:14:18', 'Packing', 'Sender is preparing to ship your parcel.'),
(19, 'Pos Laju', 'POS0138264818', 'Terengganu', 'Pahang', '2022-03-15 14:49:22', 'Shipped', 'Parcel has been picked up by courier.'),
(20, 'J&T Express', 'JT7000322188', 'Pahang', 'Perak', '2022-03-05 16:15:57', 'Out for delivery', 'Parcel is out for delivery.'),
(24, 'City Link', 'CT1024411901', 'Johor', 'Selangor', '2022-04-14 15:12:49', 'Delivered', 'Parcel has been Delivered.'),
(25, 'UPS', 'UPS2837521321', 'Pahang', 'Kuala Lumpur', '2022-04-14 15:13:24', 'Packing', 'Parcel still in packing'),
(26, 'Pgeon', 'PG6436885013', 'Negeri Sembilan', 'Terengganu', '2022-04-14 15:14:12', 'Delivered', 'Parcel has been Delivered.'),
(27, 'DHL E-commerce', 'DHL2312456735', 'Kedah', 'Penang', '2022-04-21 14:56:14', 'Delivered', 'The Parcel has been delivered.');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dtCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(8) NOT NULL,
  `postal_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `password`, `full_name`, `email`, `phone`, `dtCreated`, `address`, `city`, `country`, `postal_code`) VALUES
('cjamota', 'GV8xkLFv', 'Callie Jamot', 'cjamota@yale.edu', '0133536796', '2022-04-01 15:56:18', '3995 Brown Way', 'Kangar', 'Malaysia', '01000'),
('cratleef', 'vicleo7O', 'Clyde Ratlee', 'cratleef@ask.com', '0175337385', '2022-03-08 15:56:35', '29771 Jackson Street', 'Pulai Chondong', 'Malaysia', '16600'),
('ctrembath9', '4p0Ws4ZX', 'Cecelia Trembath', 'ctrembath9@nba.com', '0181473773', '2022-03-09 15:56:45', '93766 Duke Pass', 'Kuala Lumpur', 'Malaysia', '43200'),
('dbeecheno3', 'PPVU1DHdJ', 'Dorrie Beecheno', 'dbeecheno3@nature.com', '0163653060', '2022-03-15 15:56:55', '687 Carey Alley', 'Sungai Petani', 'Malaysia', '08000'),
('demouser', 'User12345', 'Tang Zhi Siang', 'demouser@gmail.com', '0167863524', '2022-04-06 10:15:43', '27 Solok Relau 2 Relau', 'Bayan Lepas', 'Malaysia', '11900'),
('dstirleyd', 'vyeP0rJXZ', 'Dex Stirley', 'dstirleyd@google.co.uk', '0121874214', '2022-02-17 15:57:07', '56623 Victoria Terrace', 'Ketereh', 'Malaysia', '15100'),
('egoldfinch6', 'GPrxR14V', 'Emilee Goldfinch', 'egoldfinch6@cnet.com', '0162629303', '2022-02-25 15:57:13', '78 Grover Drive', 'George Town', 'Malaysia', '10000'),
('eloffillh', '0vZxrphT', 'Emmet Loffill', 'eloffillh@businesswire.com', '0153468767', '2022-03-04 15:57:23', '9877 Hauk Road', 'Kampung Lemal', 'Malaysia', '17000'),
('fgodfrey1', 'YBYz4vlmK', 'Foss Godfrey', 'fgodfrey1@shareasale.com', '0145471883', '2022-03-09 15:57:31', '350 Lunder Center', 'Butterworth', 'Malaysia', '12000'),
('hatterley7', 'lmUp5gOzX', 'Holly Atterley', 'hatterley7@businessweek.com', '0146063171', '2022-04-11 15:57:57', '612 Bashford Avenue', 'Klang', 'Malaysia', '41100'),
('jbutts8', 'mpqt2i8O', 'Julia Butts', 'jbutts8@digg.com', '0151263625', '2022-03-01 15:58:02', '12316 Northwestern Circle', 'Putrajaya', 'Malaysia', '43000'),
('jpietruszkab', 'sKxmUG8v', 'Jere Pietruszka', 'jpietruszkab@japanpost.jp', '0179947901', '2022-02-08 15:57:49', '5 Hallows Hill', 'Tumpat', 'Malaysia', '16200'),
('kienhaw', 'Kienhaw123', 'Wong Kien Haw', 'kienhaw@gmail.com', '0167863524', '2022-04-21 14:46:22', 'Block D, Level 16, Unit 12,', 'Bukit Jalil ', 'Malaysia', '57000'),
('lowsenz', 'Yam12090', '', 'qqquan1015@gmail.com', '0123456789', '2022-04-04 17:36:07', '', '', '', ''),
('lpelling2', 'eZmk7xnoP', 'Launce Pelling', 'lpelling2@walmart.com', '0185113112', '2022-02-10 15:58:10', '5 Manley Avenue', 'Ipoh', 'Malaysia', '30010'),
('mmarushak4', 'geXlA27Zz', 'Margaret Marushak', 'mmarushak4@miibeian.gov.cn', '0114964620', '2022-01-11 15:57:36', '1 Springs Junction', 'Kuala Terengganu', 'Malaysia', '20000'),
('mquinanej', 'PrHYb1s2', 'Marj Quinane', 'mquinanej@timesonline.co.uk', '0141223228', '2022-04-02 15:58:18', '50002 Corben Pass', 'Kuching', 'Malaysia', '93000'),
('mschollingi', 'qQZ7MYMZ', 'Maxie Scholling', 'mschollingi@gov.uk', '0126781867', '2022-02-09 15:58:24', '988 Helena Alley', 'Alor Setar', 'Malaysia', '05000'),
('nbazoche0', 'RpS9n33P', 'Nathalie Bazoche', 'nbazoche0@ucoz.ru', '0124688775', '2022-01-18 15:58:56', '4498 Duke Road', 'Melaka', 'Malaysia', '75000'),
('pferreoe', 'ANAb8qkkZ', 'Pat Ferreo', 'pferreoe@so-net.ne.jp', '0167079961', '2022-01-20 15:59:03', '14376 Montana Plaza', 'Kota Kinabalu', 'Malaysia', '88000'),
('pphilipson5', 'dSPaq9Dc', 'Prudy Philipson', 'pphilipson5@cisco.com', '0191411822', '2022-02-14 15:59:10', '54114 Buena Vista Avenue', 'Kota Bharu', 'Malaysia', '15200'),
('tlovekinc', '7XwaGwzw', 'Thorn Lovekin', 'tlovekinc@wix.com', '0195930915', '2022-02-16 15:58:49', '741 Anzinger Lane', 'Pasir Mas', 'Malaysia', '15050'),
('wpaolinog', '7ZNYadjl', 'Willie Paolino', 'wpaolinog@de.vu', '0145549536', '2022-01-07 15:58:42', '59300 Summit Junction', 'Seremban', 'Malaysia', '74000'),
('yam123', 'Yam12345', '', 'yamhampsap@gmail.com', '0123456789', '2022-04-14 15:11:27', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmins`
--
ALTER TABLE `tbladmins`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblfeedbacks`
--
ALTER TABLE `tblfeedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblparcels`
--
ALTER TABLE `tblparcels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_number` (`tracking_number`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfeedbacks`
--
ALTER TABLE `tblfeedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblparcels`
--
ALTER TABLE `tblparcels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
