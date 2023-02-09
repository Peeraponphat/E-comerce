-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id_product` int(100) NOT NULL,
  `Product_name` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `count` int(15) NOT NULL,
  `Price` float NOT NULL,
  `IDMEMBER` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id_product`, `Product_name`, `Description`, `count`, `Price`, `IDMEMBER`) VALUES
(2, 'เบาะรองปรับท่านั่ง Curble Wider', 'เบาะรองปรับท่านั่ง Curble Wider เมื่อนั่งจะดันหลังให้ตรงโดยอัตโนมัติ มีขอบเบาะที่ยกขึ้นถึง 35องศา\r\nช่วยยกกระดูกก้นกบและกระดูกเชิงกรานให้นั่งได้ถูกตามหลักสรีระศาสตร์', 1, 1600, 3),
(3, 'เบาะรองนั่ง Folding Chair', 'Folding Chair ผลิตจากผ้าตาข่าย ระบายอากาศได้ดี นุ่มไม่ยุบตัวง่าย มีที่พักแขน เหมาะกับทุกสรีระ ปรับได้ 6 ระดับ\r\nสามารถพับเก็บได้  ', 1, 499, 3);

-- --------------------------------------------------------

--
-- Table structure for table `conect_web`
--

CREATE TABLE `conect_web` (
  `id_member` int(20) NOT NULL,
  `USER` varchar(100) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `CONPASS` varchar(20) NOT NULL,
  `PHONENUM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conect_web`
--

INSERT INTO `conect_web` (`id_member`, `USER`, `EMAIL`, `PASS`, `CONPASS`, `PHONENUM`) VALUES
(1, 'PEERAPON', 'monlove.605@gmail.com', '0806356835', '0806356835', '039395718'),
(2, 'RATCHANUN', 'ratchanun.t@ku.th', '@Aarcn18361', '@Aarcn18361', '0851903747'),
(3, 'PEERAPON', 'monlove.605@gmail.com', '1234', '1234', '0806356835'),
(4, 'Ratchanun', 'ratchanun.aim12@gmail.com', 'aarcn123456', 'aarcn123456', '0851903747');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `description`, `picture`, `price`) VALUES
(1, 'เบาะรองนั่งเพื่อสุขภาพ\r\n\r\n\r\n', 'เบาะรองนั่งเพื่อสุขภาพ Memory Foam ตาข่าย เบาะรองนั่ง มีสายรัดปรับระดับ ยืดหยุ่นพร้อมรับไปกับสรีระของผู้ใช้งาน\r\nมีช่องสำหรับใส่โทรศัพท์มือถืออยู่ที่ด้านข้างของเบาะรองหลัง', 'img/h1.jpg', 1190),
(2, 'เบาะรองปรับท่านั่ง Curble Wider', 'เบาะรองปรับท่านั่ง Curble Wider เมื่อนั่งจะดันหลังให้ตรงโดยอัตโนมัติ มีขอบเบาะที่ยกขึ้นถึง 35องศา\r\nช่วยยกกระดูกก้นกบและกระดูกเชิงกรานให้นั่งได้ถูกตามหลักสรีระศาสตร์', 'img/h2.png', 1600),
(3, 'เบาะรองนั่ง Folding Chair', 'Folding Chair ผลิตจากผ้าตาข่าย ระบายอากาศได้ดี นุ่มไม่ยุบตัวง่าย มีที่พักแขน เหมาะกับทุกสรีระ ปรับได้ 6 ระดับ\r\nสามารถพับเก็บได้  ', 'img/h3.png', 499),
(4, 'เบาะรองนั่งพื้น Japanese Style', 'เบาะรองนั่งพื้น สไตล์ญี่ปุ่น มีที่พิงหลัง ปรับได้ 6 ระดับ  โครงสร้างเหล็ก แข็งแรง หุ้มด้วยผ้าไมโครเบอร์', 'img/h4.png', 790),
(5, 'เบาะรองนั่ง Seat Cushion', 'Seat Cushion ผลิตจากโพลีเอสเตอร์ พร้อมที่จับ หยิบใช้งานได้สะดวก ให้สัมผัสที่นุ่มสบาย\r\nรองรับการกระจายน้ำหนักได้อย่างทั่วถึง', 'img/h5.jpg', 199),
(6, 'เบาะรองนั่ง Beehive', 'ดีไซน์รังผึ้ง ระบายอากาศ ไม่อับชื้น ยืดหยุ่น ทนทาน\r\nผลิตจากวัสดุ Soft Gel รับน้ำหนักได้ดี เหมาะสำหรับผู้ที่นั่งทำงานในออฟฟิส หรือ ขับรถนานๆ ', 'img/h6.png', 680),
(7, 'เบาะรองนั่ง Memory Cushion', 'เบาะรองนั่ง Memory Cushion ผลิตจาก MEMORY FOAM เนื้อสัมผัสนุ่มแน่น คืนตัวได้ดี ไม่ยุบตัวง่าย\r\nกระจายน้ำหนักให้สมดุล ลดแรงกดทับ', 'img/h7.png', 490),
(8, 'อุปกรณ์เสริม\r\nเบาะรองหลัง Backrest', 'เบาะรองหลัง Backrest ผลิตจากเส้นใยโพลีเอสเตอร์  ให้ความนุ่ม น้ำหนักเบา ยืดหยุ่นได้ดี\r\nออกแบบดีไซน์มาเฉพาะตัว ช่วยเพิ่มความนุ่มสบายบริเวณด้านหลังของกับเก้าอี้', 'img/h8.png', 650),
(9, 'เบาะรองนั่ง Pet Seat', 'เบาะรองนั่งรูปสัตว์เลี้ยง ทรงกลม ใยผ้ากำมะหยี่ นุ่มนิ่ม ไม่ระคายเคือง นั่งสบาย\r\nเหมาะสำหรับตกแต่งห้องนอน ห้องนั่งเล่น', 'img/h9.jpg', 229),
(10, 'เบาะรองนั่งลายการ์ตูน Rolling Cushion', 'เบาะรองนั่งลายการ์ตูน แบบม้วนเก็บได้ ขนาดประมาณ 42 x 36 Cm ความหนาประมาณ 5 Cm\r\nสำหรับใช้รองนั่งในรถ หรือรองบนเก้าอี้ทำงาน', 'img/h10.jpg', 390),
(11, 'เบาะรองนั่งลายการ์ตูน Comic Cushion', 'เบาะรองนั่งลายการ์ตูน แยกชิ้นส่วนระหว่างเบาะรองนั่งกับผนักพิงได้ มีซิปสำหรับถอดซักทำความสะอาด ', 'img/h11.jpg', 590),
(12, 'เบาะรองนั่ง Hamster', 'เบาะรองนั่ง ลายแฮมสเตอร์ ดีไซน์น่ารัก ออกแบบมาคล้ายโซฟาขนาดพกพา ด้านในเป็นใยสังเคราะห์ สามารถทำความสะอาดได้', 'img/h12.png', 230),
(13, 'เบาะรองนั่ง Baby Rabbit ', 'เบาะรองนั่งหูกระต่าย พร้อมสายรัดเก้าอี้ เบาะนุ่ม ผนักพิงช่วยดันหลังให้ตรง ขนาดพอดีตัว', 'img/h13.png', 199),
(14, 'เบาะรองนั่ง Deer Cushion', 'เบาะรองนั่งทำงาน นุ่ม ๆ นิ่ม ๆ มีเชือกสำหรับ มัดติดกับเก้าอี้ มีซิปสามารถม้วนเบาะเป็นหมอนได้\r\nเบาะรองนั่งด้านในเป็นใยสังเคราะห์ สามารถทำความสะอาดได้ ซักได้', 'img/h14.jpg', 530),
(15, 'เบาะรองนั่ง รุ่นFlower', 'เบาะรองนั่ง FLOWER ภายนอกผลิตจากเส้นใยโพลีเอสเตอร์ สัมผัสนุ่มลื่นเบาสบายขณะนั่ง\r\nภายในบรรจุใยสังเคราะห์คุณภาพดี คืนตัวได้ดี และไม่ยุบตัวง่าย', 'img/h15.png', 1990),
(16, 'เบาะรองนั่ง High Elasticity Cushion', 'เบาะรองนั่ง เบาะรองนอน เบาะรองนอนเก้าอี้พักผ่อน เนื้อผ้าฝ้ายผสม นุ่มสบาย\r\nเหมาะสำหรับเก้าอี้ที่ปรับเอนนอนได้', 'img/h16.png', 260);

-- --------------------------------------------------------

--
-- Table structure for table `savebill`
--

CREATE TABLE `savebill` (
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Number` varchar(20) NOT NULL,
  `Compemailany` varchar(100) NOT NULL,
  `Add1` varchar(300) NOT NULL,
  `Add2` varchar(300) NOT NULL,
  `City` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `ID_BILL` int(100) NOT NULL,
  `ID_MEMBER` int(100) NOT NULL,
  `TOTAL` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savebill`
--

INSERT INTO `savebill` (`Firstname`, `Lastname`, `Company`, `Number`, `Compemailany`, `Add1`, `Add2`, `City`, `District`, `zip`, `Message`, `ID_BILL`, `ID_MEMBER`, `TOTAL`, `date`, `time`) VALUES
('abc', 'def', 'aaa', '0812345678', 'ratchanun.aim12@gmail.com', '6', '', 'bkk', 'Thailand', '10600', '', 1, 2, 439, '2022-04-06', '08:49:53'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', 'noting', 2, 2, 549, '2022-04-06', '18:14:04'),
('abc', 'def', 'aaa', '0812345678', 'ratchanun.aim12@gmail.com', '4', '', 'bkk', 'Thailand', '10600', '', 3, 1, 8979, '2022-04-06', '20:22:25'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', 'JUST BUY', 4, 1, 10579, '2022-04-07', '16:15:09'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '5555', 5, 1, 10579, '2022-04-07', '16:16:53'),
('abc', 'POMMEPHATHANAYOTTHA', 'aaa', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '55', 6, 1, 1909, '2022-04-07', '16:19:01'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '55', 7, 1, 1909, '2022-04-07', '16:21:39'),
('abc', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '55', 8, 1, 3438, '2022-04-07', '17:10:13'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '5555', 9, 1, 2210, '2022-04-08', '07:07:01'),
('', '', '', '', '', '', '', '', 'Thailand', '', '', 10, 1, 1650, '2022-04-08', '08:11:34'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', 'ok', 11, 1, 1650, '2022-04-08', '08:17:19'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'chanthaburi', 'Thailand', '22170', '', 12, 1, 3250, '2022-04-08', '11:23:46'),
('PEERAPON', 'POMMEPHATHANAYOTTHA', 'KU', '0806356835', 'monlove.605@gmail.com', '57/1 ', '52/3', 'bkk', 'Thailand', '22170', '', 13, 2, 1240, '2022-04-08', '11:31:19'),
('Ratchanun', 'Tantiranon', 'ABC Company', '0851903747', 'ratchanun.aim12@gmail.com', '5 Soi ducky', '', 'Bangkok', 'Thailand', '10600', '', 14, 4, 4318, '2022-12-18', '15:52:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id_product`);

--
-- Indexes for table `conect_web`
--
ALTER TABLE `conect_web`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `savebill`
--
ALTER TABLE `savebill`
  ADD PRIMARY KEY (`ID_BILL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conect_web`
--
ALTER TABLE `conect_web`
  MODIFY `id_member` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `savebill`
--
ALTER TABLE `savebill`
  MODIFY `ID_BILL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
