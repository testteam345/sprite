-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 09:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sprite_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `type` char(1) NOT NULL DEFAULT '1' COMMENT '1::สินค้าในตะกร้า 0::กำลังชำระ 2::ชำระเเล้ว',
  `cart_qty` int(11) NOT NULL DEFAULT 1,
  `count_list` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `user_id`, `status`, `type`, `cart_qty`, `count_list`) VALUES
(2, 2, 1, '1', '1', 8, NULL),
(4, 1, 1, '1', '1', 9, NULL),
(7, 1, 2, '1', '1', 2, NULL),
(8, 2, 2, '1', '1', 1, 0),
(43, 1, 5, '1', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cate_id`, `cate_name`) VALUES
(15, 'Canon'),
(16, 'Sony'),
(17, 'Fujiflm'),
(18, 'Panasonic'),
(19, 'Nikon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `ch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`ch_id`, `user_id`, `status`, `create_date`) VALUES
(3, 5, 0, '2019-10-15 14:52:45'),
(4, 5, 0, '2019-10-15 15:02:34'),
(5, 5, 0, '2019-10-15 15:09:07'),
(6, 5, 0, '2019-10-15 15:09:46'),
(7, 5, 0, '2019-10-15 15:10:18'),
(8, 5, 0, '2019-10-15 15:10:25'),
(9, 5, 0, '2019-10-15 15:12:13'),
(10, 5, 0, '2019-10-15 16:27:07'),
(11, 5, 0, '2019-10-15 16:28:16'),
(12, 5, 0, '2019-10-15 16:28:22'),
(13, 5, 0, '2019-10-15 16:31:23'),
(14, 5, 0, '2019-10-15 16:31:56'),
(15, 5, 0, '2019-10-15 16:32:27'),
(16, 5, 0, '2019-10-15 16:33:08'),
(17, 5, 0, '2019-10-15 16:33:29'),
(18, 5, 0, '2019-10-15 16:34:11'),
(19, 5, 0, '2019-10-15 16:34:58'),
(20, 5, 0, '2019-10-15 16:35:20'),
(21, 5, 0, '2019-10-15 16:35:27'),
(22, 5, 0, '2019-10-15 16:35:41'),
(23, 5, 0, '2019-10-15 16:36:23'),
(24, 5, 0, '2019-10-15 16:37:40'),
(25, 5, 0, '2019-10-15 16:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout_list`
--

CREATE TABLE `tbl_checkout_list` (
  `ch_ls_id` int(11) NOT NULL,
  `ch_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout_list`
--

INSERT INTO `tbl_checkout_list` (`ch_ls_id`, `ch_id`, `pro_id`, `qty`) VALUES
(3, 3, 1, 2),
(4, 3, 5, 1),
(5, 4, 1, 2),
(6, 4, 5, 1),
(7, 5, 1, 2),
(8, 5, 5, 1),
(9, 6, 1, 2),
(10, 6, 5, 1),
(11, 7, 1, 2),
(12, 7, 5, 1),
(13, 8, 1, 2),
(14, 8, 5, 1),
(15, 9, 1, 2),
(16, 9, 5, 1),
(17, 10, 1, 2),
(18, 10, 5, 1),
(19, 11, 1, 2),
(20, 11, 5, 1),
(21, 12, 1, 2),
(22, 12, 5, 1),
(23, 13, 1, 2),
(24, 13, 5, 1),
(25, 14, 1, 2),
(26, 14, 5, 1),
(27, 15, 1, 2),
(28, 15, 5, 1),
(29, 16, 1, 2),
(30, 16, 5, 1),
(31, 17, 1, 2),
(32, 17, 5, 1),
(33, 18, 1, 2),
(34, 18, 5, 1),
(35, 19, 1, 2),
(36, 19, 5, 1),
(37, 20, 1, 2),
(38, 20, 5, 1),
(39, 21, 1, 2),
(40, 21, 5, 1),
(41, 22, 1, 2),
(42, 22, 5, 1),
(43, 23, 1, 2),
(44, 23, 5, 1),
(45, 25, 1, 2),
(46, 25, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` float NOT NULL,
  `pro_detail` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_sub_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cate_id`, `pro_name`, `pro_price`, `pro_detail`, `pro_sub_detail`, `pro_img`, `active`) VALUES
(14, 15, 'EOS RP (RF24-240mm f/4-6.3 IS USM)', 77900, 'Canon EOS RP กล้องมิเรอร์เลสฟูลเฟรมแบบถอดเปลี่ยนเลนส์ได้ที่เบาที่สุดของแคนนอน ด้วยช่องมองภาพแบบอิเล็กทรอนิกส์กล้อง EOS RP มาพร้อม เซนเซอร์ CMOS ความละเอียด 26.2 ล้านพิกเซลและการบันทึกภาพเคลื่อนไหวแบบ 4K UHD* เต็มประสิทธิภาพการทำงานของระบบป้องกันภาพสั่นไหวแบบ Dual Sensing IS เมื่อใช้คู่กับเลนส์ตระกูล RF และระบบประมวลผลภาพ DIGIC 8 ความเร็วชัตเตอร์สูงสุดถึง 5 สต๊อปเมื่อถ่ายภาพนิ่ง\r\n\r\nระบบออโต้โฟกัสตรวจจับภาพได้รวดเร็วเพียง 0.05 วินาทีโฟกัสแม่นยำแม้ในที่แสงน้อยถึง EV -5 ระบบตรวจจับดวงตาอัตโนมัติ (Eye Detection AF) และติดตามอัตโนมัติ (Servo AF) ด้วยเทคโนโลยี Dual Pixel CMOS AF สามารถเลือกจุดโฟกัสได้ถึง 4,779 จุด\r\n\r\nเลนส์ RF 24-240mm f/4-6.3 IS USM สามารถซูมภาพได้ 10 เท่า ในขณะที่ให้มุมกว้างได้อย่างเหมาะสมสำหรับการถ่ายภาพภูมิทัศน์ที่กว้างใหญ่ และด้วยช่วงโฟกัสครอบคลุมทุกระยะการถ่ายภาพ ให้อิสระในการสร้างสรรค์ภาพถ่ายของคุณมากยิ่งขึ้น', 'สร้างสรรค์จินตนาการใหม่ในตัวคุณ', '20191104152915_194.png', '1'),
(15, 16, 'Sony Alpha a5100', 20990, 'ซนเซอร์ Exmor APS-C CMOS 24.3 MP\r\nระบบ BIONZ X™ เพื่อการแสดงรายละเอียดและการลดสัญญาณรบกวนอย่างเหนือชั้น\r\nFast Hybrid AF พร้อมจุดการตรวจจับระยะห่าง 179 จุด\r\nหน้าจอ LCD ปรับเอียงได้ 180° รองรับการถ่ายภาพตนเองที่สมบูรณ์แบบ\r\nWi-Fi และ One-touch NFC เพื่อการแชร์และควบคุมที่ง่ายดาย', 'สร้างผลงานศิลปะได้ไวเท่าความคิด', '20191104170340_522.jpg', '1'),
(16, 15, 'EEOS 77D Kit (EF-S18-55 IS STM)OS 77D Kit', 31900, 'EOS 77D คือกล้องดีเอสแอลอาร์ที่จะช่วยให้คุณถ่ายภาพได้ดียิ่งขึ้นอีกระดับ ด้วยระบบออโต้โฟกัสที่เร็วที่สุดในโลก จับโฟกัสได้ในเวลาเพียง 0.03 วินาที* ในโหมด Live View พร้อมฟังก์ชันการถ่ายภาพที่หลากหลายและใช้งานสะดวก EOS 77D มาพร้อมวงแหวนปุ่มควบคุมอิเล็กทรอนิกส์ 2 จุดสำหรับการปรับตั้งค่าด้วยตัวเองแบบเดียวกับกล้องระดับไฮเอนด์ ค่าความไวแสงปกติสูงถึง ISO 25,600 เป็นจริงได้ด้วยหน่วยประมวลผลภาพ DIGIC 7 ที่ช่วยให้ได้ภาพนิ่งและวิดีโอที่สวยงาม มีสัญญาณรบกวนภาพและการสั่นไหวต่ำ ระบบออโต้โฟกัสรวดเร็วและแม่นยำในทุกสถานการณ์การถ่ายภาพ พร้อมเทคโนโลยี Dual Pixel CMOS AF ปรับปรุงใหม่ ช่วยให้โฟกัสได้ในเวลาเพียง 0.03 วินาทีในโหมด Live View AF ส่วนการถ่ายภาพผ่านช่องมองภาพมีระบบออโต้โฟกัส 45 จุด (All cross-type) ครอบคลุมพื้นที่ส่วนใหญ่ของช่องมองภาพ เพื่อความแม่นยำในการถ่ายภาพมากยิ่งขึ้น นอกจากนี้การถ่ายวิดีโอยังน่าตื่นเต้นกว่าที่ผ่านมา ด้วยฟังก์ชั่นที่มีให้เลือกหลากหลาย เช่น Time Lapse, HDR movies พร้อมรองรับการถ่ายวิดีโอแบบ Full HD 50p / 60p\r\n\r\nระบบออโต้โฟกัส Dual Pixel CMOS AF\r\nระบบออโต้โฟกัส 45- point All Cross-type\r\nรองรับการเชื่อมต่อแบบไร้สาย Wi-Fi, NFC และ Bluetooth Low Energy', 'เพิ่มขีดความสามารถใน การถ่ายภาพขึ้นอีกระดับ', '20191104161536_603.jpg', '1'),
(17, 15, 'EOS 200D Kit (EF-S18-55 IS STM)', 23900, 'EOS 200D กล้องดีเอสแอลอาร์ขนาดเล็ก น้ำหนักเบา พกพาใส่กระเป๋าไปได้ง่าย มีให้เลือก 3 สี คือ ขาว ดำ และเงิน มาพร้อมเทคโนโลยีล่าสุดที่ทำให้ได้ภาพถ่ายที่สวยงามสื่ออารมณ์ได้ตามต้องการ แชร์ภาพไปยังโซเชียลมีเดียได้สะดวกด้วยระบบเชื่อมต่อ Wi-Fi ในตัวกล้อง\r\n\r\nดีไซน์กะทัดรัด น้ำหนักเบา\r\nโฟกัสฉับไวในโหมด Live View ด้วยระบออโต้โฟกัส Dual Pixel CMOS AF\r\nจอแอลซีดีทัชสกรีน ปรับหมุนได้หลายทิศทาง\r\nรองรับ Wi-Fi / NFC / Bluetooth low energy', 'กล้องดีเอสแอลอาร์ทรงสวยกะทัดรัดที่เติมเต็มจินตนาการการถ่ายภาพของคุณ', '20191104161857_248.png', '1'),
(18, 15, 'EOS-1D X Mark II (Body)', 210900, 'เซนเซอร์ 35mm full frame CMOS ความละเอียด 20.2 ล้านพิกเซล และชิปประมวลผลภาพ Dual DIGIC 6+\r\nปรับค่า ISO ได้สูงสุดถึง 409,600\r\nถ่ายวิดีโอคุณภาพระดับ 4K 60p/50p พร้อมฟังก์ชั่น 4K Frame Grab และถ่ายวิดีโอ Full HD 120p/100p ด้วยโหมด High Frame Rate\r\nดูตัวอย่างรูปถ่ายและภาพยนตร์จากกล้องดิจิตอล EOS 1DX Mark II ได้ ที่นี่', 'รวมคุณสมบัติที่ดีที่สุด ทั้งภาพนิ่ง และภาพเคลื่อนไหว', '20191104162606_188.png', '1'),
(19, 15, 'PowerShot G5 X Mark II', 29900, 'ระบบประมวลผล DIGIC 8 และเซนเซอร์ Stacked CMOS 1.0 นิ้ว\r\nออปติคัลซูม 5 เท่า (24 มม. - 120 มม.) & กำลังขยาย 0.47\r\nถ่ายภาพต่อเนื่องสูงสุด 30fps (โหมดถ่ายภาพรัว - One Shot AF)\r\nความละเอียด 20.1 ล้านพิกเซล\r\nบันทึกวิดีโอ 4K (โดยไม่ต้องครอป)\r\nช่องมองภาพอิเล็กทรอนิกส์แบบพับได้', 'กล้องโปรขนาดเล็ก', '20191104163158_626.png', '1'),
(20, 15, 'EOS M10 Kit III (EF-M15-45mm IS STM & EF-M55-200mm IS STM)', 26450, 'เซนเซอร์ CMOS ขนาด APS-C ความละเอียดสูง 18 MP.\r\nระบบออโต้โฟกัส Hybrid CMOS AF II โฟกัสรวดเร็ว\r\nโหมดถ่ายภาพ Self Portrait เลือกปรับผิวหน้าสว่างใส ผิวเรียบเนียน สร้างเอฟเฟ็คเน้นหน้าชัด/ละลายฉากหลัง ได้ตามต้องการ', 'สวยเลือกได้ กับฟังก์ชั่นอัพหน้าสวย 4 ออพชั่น และลูกเล่นแต่งโทนสีภาพ พร้อมเลือกเปลี่ยนเคสได้หลายสไตล์', '20191104163706_057.png', '1'),
(21, 16, 'Sony Alpha a6500 (body)', 36990, 'AF ที่เร็วที่สุด (0.05 วินาที) พร้อมจุด AF ตรวจจับระยะห่าง 425 จุด\r\nการป้องกันภาพสั่นไหวแบบ 5 แกนในตัว\r\nเซนเซอร์ภาพ Exmor™ CMOS 24.2 ล้านพิกเซล เพื่อความไวแสงที่น่าทึ่ง\r\nระบบประมวลผลภาพ BIONZ X™ เพื่อการสร้างรายละเอียดที่เหนือกว่า\r\nการบันทึกภาพยนตร์ 4K ด้วยการอ่านแบบเต็มพิกเซล/ไม่ใช้ Pixel Binning', 'กล้องมากความสามารถ บนฝ่ามือคุณ', '20191104170053_328.jpg', '1'),
(22, 16, 'Sony Alpha a7R', 114990, 'เซนเซอร์ Exmor R CMOS ฟูลเฟรม 35 มม. 61.0MP และระบบประมวลผลภาพ BIONZ X\r\nช่วง ISO มาตรฐานกว้าง 100-32000 4\r\nFast Hybrid AF ที่มี AF ตรวจจับระยะห่างระนาบโฟกัส 567 จุด และ AF ตรวจจับคอนทราส 425 จุด\r\nการถ่ายภาพต่อเนื่องความเร็วสูงถึง 10fps พร้อมการติดตาม AF/AE\r\nความน่าเชื่อถือและความสะดวกสบายในการทำงานที่รองรับเวิร์กโฟลว์ของมืออาชีพ', 'อีกหนึ่งความสำเร็จ สร้างผลงานดุจมืออาชีพ', '20191104170753_976.jpg', '1'),
(23, 16, 'Sony Cyber-shot RX10 IV', 59990, 'เลนส์ซูมความเร็วและความละเอียดสูงที่มีรูรับแสง F2.4-4 ขนาดใหญ่ ZEISS® Vario-Sonnar T* 24-600 มม.\r\nเซนเซอร์ Exmor RS™ Stacked CMOS AF ตรวจจับระยะห่าง 1.0-type ที่มีชิป DRAM ที่มีพิกเซลที่ใช้งานจริงประมาณ 20.1 ล้านพิกเซล\r\nระบบประมวลผลภาพ BIONZ X™ สำหรับการสร้างรายละเอียดและการลดสัญญาณรบกวนที่เหนือชั้น\r\nการตอบสนอง AF 0.03 วินาที พร้อมจุด AF ตรวจจับระยะห่างของระนาบโฟกัส 315 จุด', 'โฟกัสรวดเร็วและซูมล่วงหน้า', '20191104171722_924.jpg', '1'),
(24, 16, 'Sony Cyber-shot RX100 VI', 34990, 'เลนส์ซูมความละเอียดสูง ZEISS® Vario-Sonnar T* 24-200 มม. F2.8-4.5\r\nเซนเซอร์ Stacked Exmor RS™ CMOS 1.0-type พิกเซลที่ใช้งานจริงประมาณ 20.1 ล้านพิกเซล พร้อมด้วยชิพ DRAM\r\nระบบประมวลผลภาพ BIONZ X™ สำหรับการสร้างรายละเอียดและการลดสัญญาณรบกวนที่เหนือชั้น\r\nการตอบสนอง AF 0.03 วินาที พร้อมจุด AF ตรวจจับระยะห่างของระนาบโฟกัส 315 จุด\r\nการถ่ายภาพต่อเนื่องสูงสุด 24fps พร้อม AF/AE สูงสุด 233 ช็อต', 'ความกะทัดรัดขนาดกระเป๋าเสื้อมาพร้อมกับประสิทธิภาพการซูมสูงไร้ที่ติ', '20191104172316_172.jpg', '1'),
(25, 16, 'Sony Alpha a7 III', 68990, 'ซนเซอร์ CMOS ฟูลเฟรม 35 มม. ที่รับแสงด้านหลัง 24.2MP\r\nช่วงความไวสูงสุด ISO 51200 (ขยายได้ถึง ISO 50-204800 สำหรับภาพนิ่ง)\r\nFast Hybrid AF ที่มี AF ตรวจจับระยะห่างระนาบโฟกัส 693 จุด และ AF ตรวจจับคอนทราส 425 จุด\r\nการถ่ายภาพต่อเนื่องความเร็วสูงถึง 10 fps2 พร้อมการติดตาม AF/AE\r\nความสามารถในการบันทึกภาพยนตร์ 4K HDR', 'ทุกความสมบูรณ์แบบ อย่างที่คุณต้องการ', '20191104172845_877.jpg', '1'),
(26, 17, 'Fujifilm GFX 100', 339900, '102MP 43.8 x 32.9mm BSI CMOS Sensor\r\nX-Processor 4 Image Processor\r\nRemovable 5.76m-Dot OLED EVF\r\n3.2\" 2.36m-Dot Tilting Touchscreen LCD\r\nDCI 4K30 Video; F-Log Gamma & 10-Bit Out', 'ทุกภาพคือการเผยให้เห็นทุกรายละเอียด', '20191104174024_741.jpg', '1'),
(27, 17, 'Fujifilm X-A7', 23990, '24.2MP APS-C CMOS Sensor\r\n3.5\" 2.76m-Dot Articulating Touchscreen\r\nUHD 4K and Full HD Video Recording\r\nISO 200-12800, Up to 6 fps Shooting', 'รายละเอียดเพิ่มเติม', '20191104174837_717.jpg', '1'),
(28, 17, 'Fujifilm X-T30 Body', 31990, NULL, 'ให้การซูมที่ทรงประสิทธิภาพนำคุณเข้าใกล้รายละเอียดมากขึ้น', '20191104175125_121.jpg', '1'),
(29, 17, 'Fujifilm X-T100 Kit 23mm F2R (Brown)', 27990, 'เซ็นเซอร์ APS-C CMOS 24 ล้านพิกเซล APS-C \r\nค่าความไวแสง ISO 100-51200 (สูงสุดจาก RAW)\r\nระบบโฟกัส 91 จุด hybrid AF \r\nช่องมองภาพ OLED 2.36ล้านจุด \r\nทัชสกรีน 3 นิ้ว จอ LCD สามารถพับจอขึ้นลง และกางออกได้ 180 องศา\r\nถ่ายภาพต่อเนื่องสูงสุด 6 เฟรม/วินาที\r\nโหมดจำลองสีฟิล์ม Film Simulation \r\nถ่ายวิดีโอ 4K/15p และ 1080/60p\r\nถ่าย 4K ต่อเนื่อง \r\nเชื่อมต่อ Wi-Fi + Bluetooth \r\nมี Grip ที่สามารถถอดได้มาให้ \r\nถ่ายได้สูงสุด 430 ช็อต/การชาร์จแบตเตอรี่ 1 ครั้ง', 'กล้องที่สายท่องเที่ยวต้องมี!!!', '20191105101527_109.jpg', '1'),
(30, 17, 'Fujifilm X-H1 (Body)', 69990, 'เซ็นเซอร์ X-Trans™* CMOS III\r\nชิปประมวลผล X-Processor Pro\r\nมาพร้อมระบบกันสั่นในตัว ลดกันสั่นได้สูงสุด 5.5 stops\r\nISO 200 -12800 (ขยายได้ 100 - 51200)\r\nถ่ายภาพต่อเนื่องสูงสุด 14 เฟรมภาพต่อวินาที\r\nถ่ายวิดีโอ DCI 4K  \r\nFeather - touch shutter ไวทุกสถานการณ์\r\nการใช้งาน Focus ง่ายขึ้น\r\nAuto Focus ที่แม่นยำและรวดเร็ว   \r\nFilm Simulation ตัวใหม่ “ETERNA” เหมาะกับการถ่ายวิดีโอ\r\nความไว Auto Focus 0.06 วินาที\r\nบอดี้กันฝุ่นละอองและทนต่ออุณหภูมิต่ำถึง -10 องศา', 'ประสิทธิภาพขั้นสูง มาพร้อมความสามารถในการถ่ายวิดีโอและภาพนิ่งระดับมืออาชีพ', '20191105102442_381.jpg', '1'),
(31, 17, 'Fujifilm GFX 50R', 202900, 'GFX 50R ตัว R หมายถึง Rangefinder \r\nเซ็นเซอร์ Medium Format CMOS Bayer array ความละเอียด 51.4 ล้านพิกเซล \r\nชิปประมวลผล X-Processor Pro \r\nช่องมองภาพ OLED ความละเอียด 3.69ล้านจุด กำลังขยาย 0.77 เท่า \r\nบอดี้สไตล์ Rangefinder\r\nISO 100-12800 (ขยายได้ ISO50-102400)\r\nDynamic range 14stop \r\nRAW 14bit \r\nปุ่ม Drive เลือกโหมดได้หลากหลายเช่น Brust, Bracketing และ Video \r\nจอยสติ๊ก เลื่อนตำแหน่งพื้นที่โฟกัสได้ 8 ทิศทาง \r\nช่องใส่ SD card 2 ช่อง\r\nบอดี้แมกนีเซียมอัลลอย น้ำหนัก 775 กรัม กะทัดรัด พกพาสะดวก \r\nระบบ Autofocus Contrast-Detection 117 จุด \r\nหน้าจอทัชสกรีน LCD 3.2นิ้ว ความละเอียด 2.36ล้านจุด tilt ปรับองศา เพื่อถ่ายภาพได้ทั้งมุมสูงและมุมต่ำ \r\nซีลกันป้องกันทุกสภาพอากาศ กันน้ำกันฝุ่น และทนต่ออุณหภูมิต่ำสุดที่ -10 องศา \r\nรองรับ Wi-Fi และ Bluebooth ทีประหยัดแบตเตอรีมากกว่า \r\nเม้าท์ G รองรับเลนส์ Fujinon GF', 'จิตวิญญาณของกล้องโปรระดับมืออาชีพ', '20191105103357_607.jpg', '1'),
(32, 18, 'Panasonic Lumix TZ90', 13861, 'เซ็นเซอร์ CMOS 20 ล้านพิกเซล\r\nระบบลดการสั่นไหวของภาพภายในตัวกล้อง 5 แกน\r\nหน้าจอทัชสกรีน LCD 3.0 นิ้ว\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ 4K USD', 'พลิกมุมมองกล้อง Compact สายซูม ที่ขอ Selfie ได้งามๆ สักครั้ง', '20191105104013_909.jpg', '1'),
(33, 18, 'Panasonic Lumix DMC-GF9', 18991, 'เซ็นเซอร์ Micro-Four Thirds 16 ล้านพิกเซล\r\nหน้าจอทัชสกรีนขนาด 3 นิ้ว สามารถปรับได้ 180 องศา\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ 4K\r\nมีฟังก์ชั่น 4K Photo และ Post Focus', 'มิเรอร์เลส4Kตัวจิ๋วจากค่ายพานาโซนิก', '20191105105103_166.jpg', '1'),
(34, 18, 'Panasonic Lumix GH5', 47491, 'เซ็นเซอร์ CMOS 20.3 ล้านพิกเซล\r\nระบบลดการสั่นไหวของภาพภายในตัวกล้อง 5 แกน\r\nหน้าจอทัชสกรีน LCD 3.2 นิ้ว พลิกมาด้านหน้าได้\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ 4K USD', 'สุดยอดทั้งภาพนิ่งและภาพเคลื่อนไหว ครบจบในตัวเดียว', '20191105105722_785.jpg', '1'),
(35, 18, 'Panasonic Lumix DMC-FZ300', 18990, 'เซ็นเซอร์ Micro-Four Thirds 20.3 ล้านพิกเซล\r\nมีระบบป้องกันสั่นไหวของภาพในตัวกล้อง 5 แกน\r\nหน้าจอทัชสกรีนขนาด 3.0 นิ้ว สามารถปรับองศาได้\r\nรองรับการบันทึกภาพและวิดีโอคุณภาพระดับ 4K', 'ปรับทุกอย่างที่เป็นมิตรกับคนใช้มากขึ้น', '20191105110412_284.png', '1'),
(36, 18, 'Panasonic LUMIX DMC-GX7', 23990, 'เซ็นเซอร์ Digital Live MOS 16 ล้านพิกเซล\r\nหน้าจอทัชสกรีน LCD ขนาด 3 นิ้ว\r\nช่องมองภาพ Live View Finder ปรับองศาได้ 90 องศา\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ Full HD 1080p', 'อิสระแห่งการค้นหามุมมองใหม่', '20191105110722_422.jpg', '1'),
(37, 18, 'Panasonic Lumix DC-S1R', 125990, 'เลนส์เมาท์ Leica L\r\nความละเอียด 47.3 MP\r\nเซ็นเซอร์ Fullframe\r\nช่องมองภาพความละเอียด 5.76m-Dot\r\nจอ LCD ขนาด 3.2 นิ้ว ทัชสกรีน\r\nระบบกันสั่นไหว 5 แกน ป้องกันสูงสุด 5.5 steps\r\nระบบกันสั่นแบบ Dual IS 2\r\nเทคโนโลยีตรวจจับแบบ Ai\r\nHigh Resorution Mode สามารถขยาย pixels ได้สูงสุดที่ 187 Megapixels\r\nรองรับการถ่าย Video 4K 60p แบบ 4:2:0 8-bit Crop\r\nรองรับ Feature 6K Photo 30p / 4K Photo 60p\r\nระบบ Focus แบบ DFD ทำงานร่วมกับ Contrast Detection พร้อมจุดโฟกัส 225 จุด\r\nความไวในการ Focus 0.07 sec. ( CIPA Test )\r\nรองรับการถ่ายต่อเนื่อง 9 fps (AFS), 6 fps (AFC)\r\nระบบ Weather Seal ( Dust proof / Splash proof / Freeze proof / Low temperature-10 ° )\r\nรองรับ Dual Slot ( 1 XQD / 1 SD Card )\r\nแบตเตอรี่สูงสุด 380 ภาพ ต่อการชาร์จเต็ม 1 ครั้ง\r\nขนาด : 148.9 x 110.0 x 96.7 mm\r\nน้ำหนัก ( เฉพาะ Body ) 1020 g', 'คุณสมบัติขั้นสูงสำหรับภาพนิ่งและวิดีโอ ทนทาน แข็งแกร่ง ลุยได้ทุกสภาวะการณ์', '20191105111519_917.jpg', '1'),
(38, 19, 'Nikon COOLPIX W300', 17400, 'ความสามารถกันฝุ่น กันน้ำลึกได้ถึง 30 เมตร กันการกระแทกจากการตกจากความสูงถึง 2.4 เมตรและทนต่อความเย็นที่อุณหภูมิต่ำสุด -10 องศา นอกจากนี้ยังสามารถถ่ายวิดีโอได้ชัดระดับ 4K', 'กล้องถ่ายรูปที่พกพาคุณสมบัติที่ทนทาน เหมาะสำหรับผู้ที่ชื่นชอบกิจกรรมกลางแจ้ง', '20191105114327_009.jpg', '1'),
(39, 19, 'Nikon D5 (XQD)', 219000, 'ประเภทกล้อง Professional full frame DSLR\r\nความละเอียดภาพ 20.8 ล้านพิกเซล\r\nชนิดของเซ็นเซอร์ CMOS\r\nขนาดของเซ็นเซอร์ Full frame (35.9 x 23.9 มิลลิเมตร)\r\nการตั้งค่า ISO ที่รองรับ Auto, 100-102,400 (ขยายได้ 50-3,280,000)\r\nเลนส์เม้าท์ AF NIKKOR\r\nตัวคูณระยะเลนส์ 1X\r\nแฟลชหัวกล้อง : ไม่มี\r\nรองรับแฟลชเสริมตระกูล Nikon Speedlight\r\nขนาดจอ LCD 3.2 นิ้ว ความละเอียด 2,359,000 จุด รองรับระบบสัมผัสสำหรับการกำหนดจุดโฟกัส\r\nชัตเตอร์สปีด 1/8000 - 30 วินาที (รองรับ Shutter bulb)\r\nรูปแบบไฟล์วีดิโอ MOV (H.264)', 'กล้องเซ็นเซอร์ภาพระดับ Full Frame ระดับโปร', '20191105114941_609.jpg', '1'),
(40, 19, 'Nikon Z7 Body+Adapter', 125990, 'เซ็นเซอร์ back-illuminated CMOS 45.7 ล้านพิกเซล\r\nระบบลดการสั่นไหวของภาพภายในตัวกล้อง 5 แกน\r\nหน้าจอทัชสกรีน 3.2 นิ้ว สามารถปรับองศาการมองได้\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ 4K USD', 'ฟูลเฟรมเรือธงจาก นิคอน!', '20191105120823_651.jpg', '1'),
(41, 19, 'Nikon D3500', 17990, 'เซ็นเซอร์ CMOS ความละเอียด 24.2 ล้านพิกเซล\r\nความละเอียดของภาพสูงถึง 96 ล้านพิกเซล\r\nหน้าจอ Touchscreen LCD ขนาด 3.0 นิ้ว\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ Full HD 1080p', 'สัมผัสคุณภาพของกล้อง D-SLR: คมชัดทุกการเคลื่อนไหว ให้ภาพบุคคลโดยมีฉากหลังนุ่มนวล และอีกมาก', '20191105121338_885.jpg', '1'),
(42, 19, 'Nikon COOLPIX S6900', 9900, 'หน้าจอ LCD มีขนาด 3 นิ้ว ที่สามารถบิดพับได\r\nภาพที่ถ่ายออกมาจะมีความละเอียดสูงถึง 16 ล้านพิกเซล มีเซ็นเซอร์ CMOS ทำให้รับแสงได้เต็มที่\r\nภาพเคลื่อนไหวแบบ Full HD คมชัดสุดๆ\r\nถ่ายภาพ Self-Portrait ที่มีความละเอียดคมชัด', 'Selfie ช็อตเดียวอยู่', '20191105121927_396.jpg', '1'),
(43, 19, 'Nikon D5600', 26900, 'เซ็นเซอร์ DX-Format CMOS 24.2 ล้านพิกเซล\r\nEye Sensor ดับหน้าจออัตโนมัติเมื่อมองที่ Viewfinder\r\nหน้าจอทัชสกรีน 3.2 นิ้ว\r\nรองรับการบันทึกวิดีโอคุณภาพระดับ Full HD 1080p', 'กล้อง DSLR รุ่นเล็ก สำหรับงานอดิเรกในการถ่ายภาพ', '20191105122316_832.jpg', '1'),
(44, 15, 'EOS R (RF24-105mm f/4L IS USM)', 122900, 'เซนเซอร์ CMOS ขนาดฟูลเฟรม ความละเอียด 30.3 ล้านพิกเซล\r\nโฟกัสภาพเร็วใน 0.05 วินาที\r\nออโต้โฟกัสเลือกได้ 5,655 ตำแหน่ง\r\nถ่ายภาพในที่แสงน้อยได้ถึง EV -6\r\nระบบป้องกันภาพสั่นไหวแบบ Dual Sensing IS และ Combination IS\r\nซีลกันฝุ่นและละอองน้ำ\r\nรองรับฟังก์ชั่น Wifi / Bluetooth', 'ปฏิวัติสู่อนาคต', '20191107083925_564.png', '1'),
(45, 15, 'EOS M50 Kit (EF-M15-45 IS STM & EF-M55-200 IS STM)', 34990, 'เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)\r\nชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)\r\nช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag\r\nถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p\r\nระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)\r\nถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi\r\nอัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง', 'มาพร้อมชิปประมวลผล DIGIC 8 เพิ่มประสิทธิภาพการถ่ายวิดีโอ 4K และระบบออโต้โฟกัส', '20191107084305_861.png', '1'),
(46, 16, 'E-mount α6000', 23990, 'เซนเซอร์ Exmor™ APS HD CMOS 24.3MP พร้อมระบบ BIONZ X™\r\nFast Hybrid Autofocus (การตรวจจับระยะห่างและความเปรียบต่าง)\r\nระบบเลนส์ E-mount อเนกประสงค์แบบเปลี่ยนได้\r\nการควบคุมด้วยตนเองทั้งหมดสำหรับการถ่ายภาพเพื่องานสร้างสรรค์\r\nแบ่งปันและจัดการอย่างง่ายดายด้วย Wi-Fi และ NFC One-touch', 'โฟกัสอัตโนมัติเร็วกว่า DSLR', '20191107084835_299.jpg', '1'),
(47, 16, 'Sony Alpha A9 II', 149990, 'เซนเซอร์ Stacked CMOS ฟูลเฟรมขนาด 35 มม. 24.2 ล้านพิกเซล พร้อมหน่วยความจำภายใน\r\nระบบประมวลผล BIONZ X™\r\nการถ่ายภาพต่อเนื่อง 20fps พร้อม AF/AE Tracking\r\nการครอบคลุมของ AF กว้างด้วยจุด AF ตรวจจับระยะห่าง 693 จุด และ AF ตรวจจับคอนทราส 425 จุด\r\nรองรับช่องเสียบ 1000BASE-T LAN, 5GHz Wi-Fi สำหรับการถ่ายโอนข้อมูลได้รวดเร็ว', 'แรงบันดาลใจจากความหลงใหลของมืออาชีพ', '20191107085417_897.jpg', '1'),
(48, 17, 'Fujifilm X-A5 Kit 15-45mm', 20990, '180° Tilting LCD & Portrait Enhancer for Selfie\r\nMacro Photography\r\nWireless Communication\r\n24M APS-C Sensor', 'สร้างมาเพื่อช่วงเวลาสำคัญ', '20191107090514_169.jpg', '1'),
(49, 15, 'EOS M5 Kit (EF-M18-150 IS STM)', 54590, 'เซ็นเซอร์ APS-C CMOS ความละเอียด 24.2 ล้านพิกเซล พร้อม Dual Pixel CMOS AF\r\nชิปประมวลผลภาพ DIGIC 7 โดดเด่นเรื่องการถ่ายภาพในที่มืดด้วย ISO 100 - 25600\r\nช่องมองภาพอิเล็กทรอนิกส์ OLED (0.39-type) ความละเอียดสูง 2.36 ล้านจุด', 'กล้องมิเรอร์เลสระดับพรีเมี่ยม คุณภาพระดับโปรฯ', '20191107091018_975.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_content` text NOT NULL,
  `review_rate` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `pro_id`, `user_id`, `review_content`, `review_rate`, `create_date`) VALUES
(1, 4, 5, 'eraereaf', 3, '2019-10-07 23:08:26'),
(2, 4, 5, 'test_comment', 5, '2019-10-07 23:38:32'),
(3, 4, 5, 'sadfas', 1, '2019-10-07 23:41:08'),
(4, 4, 5, 'sadfas', 1, '2019-10-07 23:41:14'),
(5, 4, 5, 'sadfas', 3, '2019-10-07 23:42:03'),
(6, 4, 5, 'pae', 4, '2019-10-07 23:42:52'),
(7, 1, 5, 'sdfgsd', 4, '2019-10-08 22:07:33'),
(8, 1, 5, 'asdf', 1, '2019-10-08 22:08:41'),
(9, 2, 5, 'test', 5, '2019-10-14 22:40:27'),
(10, 2, 5, 'sss', 5, '2019-10-14 22:44:13'),
(11, 2, 5, 'ff', 5, '2019-10-14 22:46:42'),
(12, 2, 5, 'df', 5, '2019-10-15 20:18:48'),
(13, 2, 5, 'dsg', 5, '2019-10-15 20:19:01'),
(14, 2, 5, 'sadf', 1, '2019-10-15 20:24:24'),
(15, 2, 5, 'sadf', 1, '2019-10-15 20:24:26'),
(16, 2, 5, 'asdf', 1, '2019-10-15 20:24:29'),
(17, 2, 5, 'as', 1, '2019-10-15 20:24:35'),
(18, 2, 5, 'asdf', 1, '2019-10-15 20:35:10'),
(19, 2, 5, 'asdf', 1, '2019-10-15 20:35:15'),
(20, 2, 5, 'sdf', 1, '2019-10-15 20:35:19'),
(21, 2, 5, 'sdfg', 1, '2019-10-15 20:36:28'),
(22, 2, 5, 'sdf', 1, '2019-10-15 20:36:30'),
(23, 2, 5, 'sdfg', 1, '2019-10-15 20:36:32'),
(24, 2, 5, 'sdf', 1, '2019-10-15 20:36:34'),
(25, 2, 5, 'sdf', 1, '2019-10-15 20:36:37'),
(26, 2, 5, 'sdf', 1, '2019-10-15 20:36:39'),
(27, 2, 5, 'sdf', 1, '2019-10-15 20:36:41'),
(28, 2, 5, 'sdf', 1, '2019-10-15 20:36:43'),
(29, 2, 5, 'sdf', 1, '2019-10-15 20:36:45'),
(30, 2, 5, 'ewraf', 2, '2019-10-19 14:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `user_email`, `create_date`, `update_date`) VALUES
(1, 'Tatchai', 'Admin', 'a0db8f6d8c1106e971a81625153eff2e', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'surasak', 'surasak', '827ccb0eea8a706c4c34a16891f84e7b', 'test@gmail.com', '2019-10-04 14:38:24', '2019-10-04 14:38:24'),
(6, 'asdf', 'asdfs', '912ec803b2ce49e4a541068d495ab570', 'sdaf', '2019-10-05 04:01:50', '2019-10-05 04:01:50'),
(7, 'test', 'test', '192c3425f0a3a4cca70e96149b5f3ff9', 'test.gmail.com', '2019-10-05 04:05:03', '2019-10-05 04:05:03'),
(8, 'thammarat', 'sprite', '25f9e794323b453885f5181f1b624d0b', 's@gmail.com', '2019-10-19 12:02:39', '2019-10-19 12:02:39'),
(9, 'thammarat', 'nut', '25f9e794323b453885f5181f1b624d0b', 'than@gmail.com', '2019-10-19 13:44:41', '2019-10-19 13:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`) USING BTREE;

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `ch_id` (`ch_id`);

--
-- Indexes for table `tbl_checkout_list`
--
ALTER TABLE `tbl_checkout_list`
  ADD PRIMARY KEY (`ch_ls_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`) USING BTREE;

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_checkout_list`
--
ALTER TABLE `tbl_checkout_list`
  MODIFY `ch_ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
