-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 02:43 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn_artwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'งดเหล้า เข้าพรรษา'),
(2, 'สงกรานต์'),
(3, 'ysdn'),
(4, 'futsal');

-- --------------------------------------------------------

--
-- Table structure for table `sp_product`
--

CREATE TABLE `sp_product` (
  `id` int(11) NOT NULL,
  `name` text,
  `img` text,
  `description` text,
  `type` text,
  `filezip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_product`
--

INSERT INTO `sp_product` (`id`, `name`, `img`, `description`, `type`, `filezip`) VALUES
(51, 'logo สคล.', 'm1670827324025.jpg', 'โลโก้ องค์กรงดเหล้า', 'logo', 'z1670827324025.zip'),
(52, 'logo สสส.', 'm1670827394394.jpg', 'โลโก้ สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.)', 'logo', 'z1670827394394.zip'),
(53, 'logo สสส. New V. 2022', 'm1670827439947.jpg', 'โลโก้ สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.) เวอร์ชั่น ปี 2022', 'logo', 'z1670827439947.zip'),
(54, 'มูลนิธิ วิถีสุข', 'm1670827493771.jpg', 'โลโก้มูลนิธิวิถีสุข', 'logo', 'z1670827493771.zip'),
(55, 'พลังสังคม', 'm1670827523665.jpg', 'โลโก้ มูลนิธิพลังสังคม', 'logo', 'z1670827523665.zip'),
(56, 'ธรรมจักร', 'm1670827682487.png', 'โลโก้ ธรรมจักร ใช้ในงานพระสงฆ์', 'พระสงฆ์', 'z1670827682487.zip'),
(57, 'กองบุญพระสงฆ์', 'm1670827736744.png', 'ใช้ในงานกองบุญ พระสงฆ์', 'พระสงฆ์', 'z1670827736744.zip'),
(58, 'โลโก้ สังฆะเพื่อ สังคม', 'm1670827789448.png', 'มูลนิธิสังฆะเพื่อ สังคม', 'พระสงฆ์', 'z1670827789448.zip'),
(59, 'โลโก้ บวชสร้างสุข', 'm1670827837265.png', 'มูลนิธิสังฆะเพื่อสังคม โลโก้บวชสร้างสุข', 'พระสงฆ์', 'z1670827837265.zip'),
(60, 'Backdrop SDN-2022', 'm1670827885042.jpg', 'Backdrop SDN-2022', 'อื่นๆ', 'z1670827885042.zip'),
(61, 'บูธ อีเว้น 2022', 'm1670827949420.jpg', 'บูธ อีเว้น 2022', 'อื่นๆ', 'z1670827949420.zip'),
(62, 'สติกเกอร์ หนูภูมิใจ', 'm1670827992111.jpg', 'หนูภูมิใจ ที่พ่อแม่ไม่ดื่มเหล้า', 'อื่นๆ', 'z1670827992111.zip'),
(63, 'เจ้าภาพขอบคุณ งานบุญปลอดเหล้า', 'm1670828103567.jpg', 'เจ้าภาพขอบคุณ งานบุญปลอดเหล้า (ใช้จัดกิจกรรมงานบุญประเพณี)', 'บุญประเพณี', 'z1670828103567.zip'),
(64, 'ชุมชน คนสู้เหล้า', 'm1670828145682.png', 'ชุมชน คนสู้เหล้า', 'ชุมชนคนสู้เหล้า', 'z1670828145682.zip'),
(65, 'logo งดเหล้า เข้าพรรษา', 'm1670828353511.png', 'โลโก้ งดเหล้าเข้าพรรษา', 'งดเหล้าเข้าพรรษา', 'z1670828353511.zip'),
(66, 'Stiker-พรรษา(v.1)วงกลม', 'm1670828410786.jpg', 'Stiker-พรรษา(v.1)วงกลม', 'งดเหล้าเข้าพรรษา', 'z1670828410786.zip'),
(67, 'Stiker-พรรษา(v.1)-สี่เหลี่ยม', 'm1670828440171.jpg', 'Stiker-พรรษา(v.1)-สี่เหลี่ยม', 'งดเหล้าเข้าพรรษา', 'z1670828440171.zip'),
(68, 'เสื้อคอกลมเข้าพรรษา', 'm1670828478899.jpg', 'เสื้อคอกลมเข้าพรรษา', 'งดเหล้าเข้าพรรษา', 'z1670828478899.zip'),
(69, 'โรลอัพเข้าพรรษา-V.1', 'm1670828503756.jpg', 'โรลอัพเข้าพรรษา-V.1', 'งดเหล้าเข้าพรรษา', 'z1670828503756.zip'),
(70, 'โรลอัพเข้าพรรษา-V.2', 'm1670828524317.jpg', 'โรลอัพเข้าพรรษา-V.2', 'งดเหล้าเข้าพรรษา', 'z1670828524317.zip'),
(71, 'ไวนิล มหามงคล งดเหล้าเข้าพรรษา', 'm1670828557423.jpg', 'ไวนิล มหามงคล งดเหล้าเข้าพรรษา', 'งดเหล้าเข้าพรรษา', 'z1670828557423.zip'),
(72, 'ไวนิล-ซุปเปอร์', 'm1670828579112.jpg', 'ไวนิล-ซุปเปอร์', 'งดเหล้าเข้าพรรษา', 'z1670828579112.zip'),
(73, 'ขวดน้ำ65', 'm1670828602150.jpg', 'ขวดน้ำ65', 'งดเหล้าเข้าพรรษา', 'z1670828602150.rar'),
(74, 'ป้ายตั้งโต๊ะ-เข้าพรรษาา65', 'm1670828636769.jpg', 'ป้ายตั้งโต๊ะ-เข้าพรรษาา65', 'งดเหล้าเข้าพรรษา', 'z1670828636769.rar'),
(75, 'ป้ายถือ รณรงค์ งดเหล้าเข้าพรรษา', 'm1670828696653.jpg', 'ป้ายถือ รณรงค์ งดเหล้าเข้าพรรษา', 'งดเหล้าเข้าพรรษา', 'z1670828696653.zip'),
(76, 'ออมสิน-65', 'm1670828810067.jpg', 'ออมสิน-65', 'งดเหล้าเข้าพรรษา', 'z1670828810067.rar'),
(77, 'ป้ายพื้นที่สร้างสรรค์', 'm1670829286173.jpg', '1x6-new พื้นที่สร้างสรรค์', 'กีฬา', 'z1670829286173.rar'),
(78, 'Creative-space', 'm1670829312411.jpg', 'ป้าย Creative-space', 'กีฬา', 'z1670829312411.rar'),
(79, 'Backdrop  ysdn 2022', 'm1670829566163.jpg', 'Backdrop  ysdn 2022', 'ysdn', 'z1670829566163.zip'),
(80, 'เสื้อน้ำเงิน.คอปก ysdn 2022', 'm1670829593944.jpg', 'เสื้อน้ำเงิน.คอปก ysdn 2022', 'ysdn', 'z1670829593944.zip'),
(81, 'เสื้อน้ำเงิน-คอกลม ysdn 2022', 'm1670829618076.jpg', 'เสื้อน้ำเงิน-คอกลม ysdn 2022', 'ysdn', 'z1670829618076.zip'),
(82, 'โลโก้-น้องมือ', 'm1670829661854.png', 'โลโก้-น้องมือ', 'ysdn', 'z1670829661854.zip'),
(83, 'โล่รางวัล YSDN 2022', 'm1670829680645.jpg', 'โล่รางวัล YSDN 2022', 'ysdn', 'z1670829680645.zip'),
(84, 'ไดคัท  ysdn 2022', 'm1670829702306.jpg', 'ไดคัท  ysdn 2022', 'ysdn', 'z1670829702306.zip'),
(85, 'กระเป๋า  ysdn 2022', 'm1670829719122.jpg', 'กระเป๋า  ysdn 2022', 'ysdn', 'z1670829719122.zip'),
(86, 'AW สสส_KV_Horizontal', 'm1670830134879.jpg', 'AW สสส_KV_Horizontal', 'งดเหล้าเข้าพรรษา', 'z1670830134879.zip'),
(87, 'TC สสส_KV_Horizontal_B-01', 'm1670830235773.jpg', 'TC สสส_KV_Horizontal_B-01', 'งดเหล้าเข้าพรรษา', 'z1670830235773.zip'),
(88, 'TC สสส_KV_Horizontal_C-01', 'm1670830295808.jpg', 'TC สสส_KV_Horizontal_C-01', 'งดเหล้าเข้าพรรษา', 'z1670830295808.zip'),
(89, 'เสื้อส้ม-2022-1', 'm1670830717363.jpg', 'เสื้อส้ม-2022-1', 'อื่นๆ', 'z1670830717363.ai'),
(90, 'เสื้อส้ม-2022-2', 'm1670830757676.jpg', 'เสื้อส้ม-2022-2', 'อื่นๆ', 'z1670830757676.ai');

-- --------------------------------------------------------

--
-- Table structure for table `sp_transaction`
--

CREATE TABLE `sp_transaction` (
  `id` int(11) NOT NULL,
  `transid` text,
  `orderlist` text,
  `amount` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `netamount` int(11) DEFAULT NULL,
  `operation` text,
  `mil` bigint(20) DEFAULT NULL,
  `updated_at` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_product`
--
ALTER TABLE `sp_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_transaction`
--
ALTER TABLE `sp_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sp_product`
--
ALTER TABLE `sp_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `sp_transaction`
--
ALTER TABLE `sp_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
