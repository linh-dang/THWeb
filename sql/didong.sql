-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2016 at 03:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `didong`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`cus_ID` int(9) NOT NULL,
  `cus_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `phone` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `role` int(11) NOT NULL,
  `date` date NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_ID`, `cus_name`, `sex`, `phone`, `email`, `address`, `birth`, `username`, `password`, `role`, `date`, `active`) VALUES
(10, 'Wayner Rooney', 1, '7452xxxxxxx', 'rooney@gmail.com', 'Manchester City', '1985-10-04', 'rooney', '123456', 0, '0000-00-00', 1),
(11, 'Di Maria', 1, '01865248953', 'dimaria@gmail.com', 'Manchester', '1987-05-17', 'dimaria', 'dimaria', 0, '0000-00-00', 0),
(13, 'Ronaldinho', 1, '08452xxxxx', 'ronaldinho@gmail.com', 'Brazil', '1981-04-08', 'ronaldinho', 'ronaldinho', 0, '0000-00-00', 1),
(18, 'Dư Minh Phươngas', 1, '154782369', 'phuong@gmail.com', 'Ninh Bình', '1994-11-16', 'duminhphuong', '123456', 0, '2014-12-24', 1),
(19, 'Nguyễn Duy Hưng', 1, '0132456789', 'hung@gmail.com', 'Đống Đa - Hà Nội', '1994-03-13', 'hungpro9x', '123456', 0, '2014-12-24', 0),
(21, 'CR7', 1, '01687017198', 'cr7@yahoo.com', 'Nghệ An', '2000-12-23', 'cr7abcxyz', '123456', 0, '2014-12-24', 1),
(22, 'Huyền Trang', 0, '012566954', 'trang@gmail.com', 'Nam Định', '0000-00-00', 'trang1154988', '123456', 0, '2014-12-24', 1),
(23, 'Hoài Thu', 0, '0156599666', 'thu2313142@yahoo.com.vn', 'Ninh Bình', '2001-01-23', 'thu21er3232', 'huyhoang', 0, '2014-12-24', 1),
(24, 'KaKa', 0, '0156661115', 'baohuy.baohuy.92@facebook.com', 'Hải Phòng', '1995-01-23', 'hihihehe', 'huyhoang', 0, '2014-12-24', 1),
(25, 'Kinh Khủng Khiếp', 1, '0168995445', 'huyhoang23121994@yahoo.com.vn', 'Hà Nam', '1995-12-23', 'chimsedinang', 'huyhoang', 0, '2014-12-24', 1),
(26, 'Đức Binh', 1, '0156659999', 'hyhy@gmail.com', 'Nghệ An', '1996-01-25', 'kobietdattengi', 'hihihehe', 0, '2014-12-24', 1),
(27, 'Doãn Chí Bình', 1, '0156984554', 'chibinh@gmail.com', 'Tung Của', '0269-12-26', 'binhdaica', 'binhdaica', 0, '2014-12-24', 1),
(28, 'asd', 1, '124', 'coco@gmail.com', 'Cà Mau 93', '1994-01-23', 'cocoduongqua', 'duongqua', 0, '2014-12-24', 1),
(29, 'Dương Quá', 1, '01689875545', 'duongqua@gmail.com', 'Vũng Tàu', '2000-01-23', 'duongquacoco', 'hihihehe', 0, '2014-12-24', 1),
(30, 'giả nhất bình', 1, '0168995445', 'hanam@yahoo.com', 'Hà Nam', '1664-12-23', 'hanamyahoo', 'huyhoang', 0, '2014-12-24', 1),
(31, 'Trần Bảo Huy', 1, '01687017199', 'kakalot@gmail.com', 'Nghệ An', '1665-05-25', 'kakalotlot', 'huyhoang', 0, '2014-12-24', 1),
(32, 'Falcao', 1, '0169554665', 'falcao@gmail.com', 'England', '1887-08-25', 'falcaomanchester', 'huyhoang', 0, '2014-12-24', 1),
(33, 'admin', 1, '0123456789', 'admin', 'admin', '0000-00-00', 'admin1', 'admin1', 1, '0000-00-00', 1),
(34, '', 0, '', '', '', '0000-00-00', 'hungbui', 'donghokat', 0, '0000-00-00', 0),
(35, 'Bùi Văn Hưng ', 0, '098758689', 'hung@gmai.com', '40 đường 34, tổ dân phố 2, thành phố Nam định', '0000-00-00', 'hungbui2', 'donghokat', 0, '0000-00-00', 0),
(36, '', 0, '', '', '', '0000-00-00', 'hedspi57', '12345678', 0, '0000-00-00', 0),
(37, '', 0, '', '', '', '0000-00-00', 'hedspi60', '12345678', 0, '0000-00-00', 0),
(38, '', 0, '', '', '', '0000-00-00', 'hedspi61', 'thanhvt', 0, '0000-00-00', 0),
(39, '', 0, '', '', '', '0000-00-00', 'hedspi61', 'thanhvt', 0, '0000-00-00', 0),
(40, '', 0, '', '', '', '0000-00-00', 'hedspi00', 'hhhhhhhhh', 0, '0000-00-00', 0),
(41, '', 0, '', '', '', '0000-00-00', 'hedspixx', '123456789', 0, '0000-00-00', 0),
(42, '', 0, '', '', '', '0000-00-00', 'hedspi11', '1111111111', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(3) unsigned NOT NULL,
  `id_sanpham` int(9) NOT NULL,
  `link_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `id_sanpham`, `link_img`, `loai`) VALUES
(1, 1, 'htc-one-a9-2', 1),
(2, 2, 'asus-zenfone-2', 1),
(3, 3, 'oppo-r7-lite-4', 1),
(4, 4, 'samsung-galaxy-note-5-n920-1', 1),
(5, 5, 'htc-one-m8-eye-4', 1),
(6, 6, 'oppo-r7s', 1),
(7, 7, 'iphone-6-16gb-t12-1', 1),
(8, 8, 'iphone-6s-64gb-1', 1),
(9, 9, 'lenovo-a6010-highlight', 1),
(10, 10, 'lenovo-a7000-plus-2\r\n', 1),
(11, 11, 'microsoft-lumia-540-11', 1),
(12, 12, 'mobiistar-prime-xense-2', 1),
(13, 13, 'oppo-mirror-5-10', 1),
(14, 14, 'samsung-galaxy-grand-prime-g531-4', 1),
(15, 15, 'samsung-galaxy-j5-j500', 1),
(16, 16, 'sony-xperia-z5', 1),
(17, 17, 'wiko-pulp-fab', 1),
(18, 18, 'wiko-rainbow-jam', 1),
(19, 19, 'wing-s800-80-300b-300x300', 1),
(20, 20, 'huawei-mediapad-t1-a21l-300-1-300x300', 1),
(21, 21, 'huawei-mediapad-t1-a21l-300-1-300x300', 1),
(22, 22, 'ipad-air-2-cellular-64g-18-nowatermark-300x300', 1),
(23, 23, 'ipad-mini-4-icon-300x300', 1),
(24, 24, 'ipad-pro-300x300', 1),
(25, 25, 'ipad-pro-wifi-cellular-128gb-300-300x300', 1),
(26, 26, 'samsung-galaxy-tab-3v-wifi-300-300x300', 1),
(27, 27, 'samsung-galaxy-tab-a-plus-97-sm-p555-300but-300x300', 1),
(28, 28, 'samsung-galaxy-tab-e-96-sm-t561-300-1', 1),
(29, 29, 'samsung-galaxy-tab-s2-84-300x300', 1),
(30, 30, 'acer-aspire-e5-473-i3-5005u-4g-500g-win10-300-300x300', 1),
(31, 31, 'acer-es1-431-n3050-4gb-500gb-win10-300-300x300', 1),
(32, 32, 'acer-es1-431-n3700-4gb-500gb-win10-300-300x300', 1),
(33, 33, 'asus-a540la-i3-4005u-4gb-500gb-win10-300-1-300x300', 1),
(34, 34, 'asus-e402ma-n2840-2gb-500gb-win10-300-300x300', 1),
(35, 35, 'asus-f454la-i3-4005u-4gb-500gb-win-10-300-1-300x300', 1),
(36, 36, 'asus-x453ma-celeron-n3540-win8-nowatermark-300x300', 1),
(37, 37, 'asus-x553ma-sx684b-1-nowatermark-300x300', 1),
(38, 38, 'dell-inspiron-3451-n3540u-2gb-500gb-win81-300x300', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderlines`
--

CREATE TABLE IF NOT EXISTS `orderlines` (
`orderline_ID` int(9) NOT NULL,
  `order_ID` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_sanpham` int(9) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderlines`
--

INSERT INTO `orderlines` (`orderline_ID`, `order_ID`, `quantity`, `id_sanpham`, `price`) VALUES
(2, 21, 1, 1, 1370000),
(3, 22, 1, 1, 1370000),
(4, 22, 1, 2, 4500000),
(5, 22, 1, 5, 3990000),
(6, 23, 1, 1, 1370000),
(7, 23, 1, 2, 4500000),
(8, 24, 1, 1, 1370000),
(9, 24, 1, 5, 3990000),
(10, 24, 1, 30, 15590000),
(11, 25, 1, 1, 1370000),
(12, 26, 1, 1, 1370000),
(13, 27, 1, 2, 4500000),
(14, 28, 1, 2, 4500000),
(15, 29, 1, 2, 4500000),
(16, 30, 1, 2, 4500000),
(17, 31, 1, 1, 1370000),
(18, 31, 1, 2, 4500000),
(19, 32, 1, 5, 3990000),
(20, 33, 1, 5, 3990000),
(21, 33, 1, 7, 11990000),
(22, 34, 1, 5, 3990000),
(23, 34, 1, 7, 11990000),
(24, 35, 1, 4, 5400000),
(25, 35, 1, 5, 3990000),
(26, 35, 1, 7, 11990000),
(27, 36, 1, 1, 1370000),
(28, 37, 1, 1, 1370000),
(29, 38, 1, 3, 2740000),
(30, 39, 1, 1, 1370000),
(33, 42, 1, 12, 15590000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_ID` int(9) NOT NULL,
  `cus_ID` int(9) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `cus_ID`, `date`, `total`, `status`) VALUES
(8, 33, '2015-12-03', 19470000, 0),
(10, 33, '2015-12-09', 5360000, 0),
(11, 33, '2015-12-10', 5480000, 0),
(12, 33, '2015-12-10', 4500000, 0),
(13, 33, '2015-12-10', 2740000, 0),
(14, 33, '2015-12-10', 5870000, 0),
(15, 33, '2015-12-10', 2740000, 0),
(16, 33, '2015-12-10', 1370000, 0),
(17, 33, '2015-12-10', 13360000, 0),
(18, 33, '2015-12-10', 1370000, 0),
(19, 33, '2015-12-10', 7240000, 0),
(20, 33, '2015-12-10', 4500000, 0),
(21, 33, '2015-12-10', 1370000, 0),
(23, 31, '2015-12-10', 5870000, 0),
(24, 33, '2015-12-11', 20950000, 0),
(25, 28, '2015-12-17', 1370000, 0),
(26, 28, '2015-12-17', 1370000, 0),
(27, 28, '2015-12-17', 4500000, 0),
(28, 28, '2015-12-17', 4500000, 0),
(29, 28, '2015-12-17', 4500000, 0),
(30, 28, '2015-12-17', 4500000, 0),
(31, 28, '2015-12-17', 5870000, 0),
(32, 28, '2015-12-17', 3990000, 0),
(33, 28, '2015-12-17', 15980000, 0),
(34, 28, '2015-12-17', 15980000, 0),
(35, 28, '2015-12-17', 21380000, 0),
(36, 28, '2015-12-17', 1370000, 0),
(37, 28, '2015-12-17', 1370000, 0),
(38, 35, '2015-12-18', 2740000, 0),
(39, 35, '2015-12-18', 1370000, 0),
(42, 10, '2015-12-28', 15590000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
`id_sanpham` int(9) NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `typesp` int(1) NOT NULL DEFAULT '1',
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `hang` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `thongso` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sale_off` int(11) NOT NULL,
  `soluongtonkho` int(15) NOT NULL DEFAULT '100'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensp`, `typesp`, `image`, `hang`, `price`, `publish_date`, `thongso`, `description`, `sale_off`, `soluongtonkho`) VALUES
(1, 'htc-one-a9-hero-product', 1, 'htc-one-a9-hero-product.png', 'HTC', 1370000, '2015-10-20', 'Màn hình:	QVGA, 2.8", 240 x 320 Pixels\r\nSIM:	2 SIM 2 sóng\r\nCamera:	2.0 MP\r\nDanh bạ:	1000 số\r\nHỗ trợ thẻ tối đa:	32 GB\r\nKết nối Bluetooth	Có, V3.0\r\nCổng USB:	Micro USB\r\nJack cắm tai nghe:	3.5 mm\r\nChức năng khác	Yahoo! Messenger, Facebook, Twitter\r\nNghe nhạc:	MP3\r\nRadio FM:	Có', '', 500000, 100),
(2, 'asus zenfone 2', 1, 'asus-zenfone-2.png', 'ASUS', 4500000, '2015-01-19', 'Màn hình:	QQVGA, 1.8", 128 x 160 Pixels\r\nSIM:	1 Sim\r\nCamera:	Không có\r\nDanh bạ:	500 số\r\nHỗ trợ thẻ tối đa:	Không\r\nKết nối Bluetooth	Không\r\nCổng USB:	Không\r\nJack cắm tai nghe:	3.5 mm\r\nChức năng khác	Đèn pin sáng', '', 0, 100),
(3, 'oppo-r7-detail', 1, 'oppo-r7-detail.png', 'Apple', 2740000, '2015-11-05', 'Màn hình:	Retina HD, 5.5", 1080 x 1920 pixels\r\nCamera sau:	12 MP, Quay phim 4K 2160p@30fps\r\nCamera trước:	5 MP\r\nHệ điều hành:	iOS 9.0\r\nCPU:	Apple A9, 2 nhân, 1.8 GHz\r\nChip đồ hoạ:	PowerVR GT7600\r\nRAM:	2 GB\r\nBộ nhớ trong:	128GB\r\nHỗ trợ thẻ tối đa:	Không', '', 700000, 100),
(4, 'samsung-galaxy-note-5', 1, 'samsung-galaxy-note-5.png', 'Samsung', 5400000, '2015-10-06', 'Màn hình:	Retina HD, 5.5", 1080 x 1920 pixels\r\nCamera sau:	8 MP, Quay phim 4K 2160p@30fps\r\nCamera trước:	5 MP\r\nHệ điều hành:	Androi 4.4\r\nCPU:	Apple A9, 2 nhân, 1.8 GHz\r\nChip đồ hoạ:	PowerVR GT7600\r\nRAM:	2 GB\r\nBộ nhớ trong:	16GB\r\nHỗ trợ thẻ tối đa:	Không', '', 500000, 100),
(5, 'htc-one-m8-eye-hp-400x533', 1, 'htc-one-m8-eye-hp-400x533.png', 'OPPO', 3990000, '2015-08-10', 'Màn hình:	Full HD, 5.2", 1080 x 1920 pixels\r\nCamera sau:	20.7 MP, Quay phim 4K 2160p@30fps\r\nCamera trước:	5 MP\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCPU:	Snapdragon 810, 8 nhân, Quad-core 1.5 GHz Cortex-A53 & Quad-core 2 GHz Cortex-A57\r\nChip đồ hoạ:	Adreno 430\r\nRAM:	3GB\r\nBộ nhớ trong:	32 GB\r\nHỗ trợ thẻ tối đa:	128 GB', '', 1000000, 100),
(6, 'oppo-r7s', 1, 'oppo-r7s-1-400x533-400x533.png', 'ASUS', 12990000, '2015-09-07', 'Màn hình:	Full HD, 5.0", 1080 x 1920 pixels\r\nCamera sau:	20.7 MP, Quay phim 4K 2160p@30fps\r\nCamera trước:	4 Ultra pixel\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCPU:	Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz Cortex-A57\r\nChip đồ hoạ:	Adreno 430\r\nRAM:	3GB\r\nBộ nhớ trong:	32 GB\r\nHỗ trợ thẻ tối đa:	2 TB', '', 0, 100),
(7, 'iphone-6-16gb-t12-1', 1, 'iphone-6-16gb-t12-1.png', 'iphone', 11990000, '2015-10-20', 'Màn hình:	AMOLED 16 triệu màu, 5.0", 1080 x 1920 pixels\r\nCamera sau:	13 MP, Quay phim FullHD 1080p@30fps\r\nCamera trước:	4 Ultra pixel\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCPU:	Qualcomm Snapdragon 617, 8 nhân, 1.5 GHz\r\nChip đồ hoạ:	Adreno 405\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nHỗ trợ thẻ tối đa:	2 TB', '', 700000, 100),
(8, 'iphone-6s-64gb-1', 1, 'iphone-6s-64gb-400x450-400x450.png', 'Sony', 16990000, '2015-08-26', 'Thông số kỹ thuật\r\n\r\nMàn hình:	Full HD, 5.5", 1080 x 1920 pixels\r\nCamera sau:	13 MP, Quay phim FullHD 1080p@30fps\r\nCamera trước:	5 MP\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCPU:	MTK 6752, 8 nhân, 1.7 GHz\r\nChip đồ hoạ:	Mali-T760\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nHỗ trợ thẻ tối đa:	128 GB', '', 0, 100),
(9, 'lenovo-a6010-highlight', 1, 'lenovo-a6010-400x460.png', 'LENOVO', 6490000, '2015-09-30', 'Thông số kỹ thuật\r\n\r\nMàn hình:	IPS+ LCD, 16 triệu màu, 5.5", 1080 x 1920 pixels\r\nCamera sau:	13 MP, Quay phim FullHD 1080p@30fps\r\nCamera trước:	13 MP\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCPU:	Snapdragon 615, 8 nhân, -\r\nChip đồ hoạ:	Adreno 405\r\nRAM:	3GB\r\nBộ nhớ trong:	32 GB\r\nHỗ trợ thẻ tối đa:	128 GB', '', 0, 100),
(10, 'lenovo-a7000-plus-2', 1, 'lenovo-a7000-plus-400x454.png', 'LENOVO', 3790000, '2015-03-23', 'Màn hình:	HD, 5.0", 720 x 1280 pixels\r\nCamera sau:	8.0 MP, Có quay phim\r\nCamera trước:	5 MP\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCPU:	MTK 6582, 4 nhân, 1.3 GHz\r\nChip đồ hoạ:	Mali-400\r\nRAM:	1 GB\r\nBộ nhớ trong:	8 GB\r\nHỗ trợ thẻ tối đa:	32 GB', '', 300000, 100),
(11, 'microsoft-lumia-540-11', 1, 'microsoft-lumia-540-400x533-400x533.png', 'Nokia', 1999000, '2014-08-20', 'Màn hình:	LED-backlit LCD, 12.9 inch\r\nHệ điều hành:	iOS 9\r\nCPU:	Dual - Core, 2.2GHz\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nCamera sau:	8 MP, 1080p@30fps\r\nCamera trước:	1.2 MP\r\n3G:	Không 3G\r\nWifi:	Wi-Fi 802.11 a/b/g/n/ac\r\nHỗ trợ SIM:	Không\r\nĐàm thoại	Không\r\nDung lượng pin	38.5 Whrs\r\nTrọng lượng (g)	713 g', '', 0, 100),
(12, 'mobiistar-prime-xense-2', 1, 'mobiistar-prime-xense-400x533.png', 'Mobistar', 15590000, '2014-12-31', 'Màn hình:	Retina công nghệ IPS, 9.7 inch\r\nHệ điều hành:	iOS 8\r\nCPU:	3 nhân, 1.5 GHz\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nCamera sau:	8 MP, Full HD 1080p (1920x1080 pixels)\r\nCamera trước:	1.2 MP\r\n3G:	Có 3G (tốc độ Download 42 Mbps; Upload 5.76 Mbps)\r\nWifi:	Dual-band, Wi-Fi Chuẩn 802.11 a/b/g/n/ac, Wi-Fi Direct\r\nHỗ trợ SIM:	Nano-SIM/ Apple SIM ', '', 0, 100),
(13, 'oppo-mirror-5-10', 1, 'oppo-mirror-5-hp-400x533.png', 'OPPO', 11990000, '2014-12-17', 'Màn hình:	Retina công nghệ IPS, 9.7 inch\r\nHệ điều hành:	iOS 8\r\nCPU:	3 nhân, 1.5 GHz\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nCamera sau:	8 MP, Full HD 1080p (1920x1080 pixels)\r\nCamera trước:	1.2 MP\r\n3G:	Không 3G\r\nWifi:	Wi-Fi Direct, Dual-band, Wi-Fi 802.11 a/b/g/n/ac\r\nHỗ trợ SIM:	Không\r\nĐàm thoại	Face Time\r\nDung lượng pin	7340mAh\r\nTrọng lượng (g)	437g', '', 0, 100),
(14, 'samsung-galaxy-grand-prime-g531-4', 1, 'samsung-galaxy-grand-prime-g531-1-400x533-400x533.png', 'Samsung', 11990000, '2015-08-11', 'Màn hình:	WQXGA-Công Nghệ Super AMOLED, 8 inch\r\nHệ điều hành:	Android 5.0\r\nCPU:	8 nhân, 1.3 GHz Cortex-A53 & 1.9GHz 4 nhân Cortex-A57\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nCamera sau:	8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)\r\nCamera trước:	2.1 MP (1920 x 1080 pixels)\r\n3G:	Có 3G (tốc độ Download 21Mbps/42 Mbps; Upload 5.76 Mbps)\r\nWifi:	Wi-Fi 802.11 b/g/n\r\nHỗ trợ SIM:	Nano Sim', '', 0, 100),
(15, 'samsung-galaxy-j5-j500', 1, 'samsung-galaxy-j5-1-400x533.png', 'Samsung', 7990000, '2015-05-19', 'Màn hình:	TFT LCD, 8 inch\r\nHệ điều hành:	Android 5.0\r\nCPU:	Quad-core, 1.2 GHz\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nCamera sau:	5 MP (2592 x 1944 pixels), HD 720p (1280x720 pixels)\r\nCamera trước:	2 MP (1600 x 1200 pixels)\r\n3G:	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps)\r\nWifi:	Wi-Fi Chuẩn 802.11 b/g/n, Wi-Fi hotspot', '', 200000, 100),
(16, 'sony-xperia-z5', 1, 'sony-xperia-z5-dual-400x460.png', 'Sony', 5990000, '2015-08-26', 'Màn hình:	WXGA-TFT, 9.6 inch\r\nHệ điều hành:	Android 4.4\r\nCPU:	Quad-core, 1.3 GHz\r\nRAM:	1.5 GB\r\nBộ nhớ trong:	8 GB\r\nCamera sau:	5 MP (2592 x 1944 pixels), HD 720p (1280x720 pixels)\r\nCamera trước:	2 MP (1600 x 1200 pixels)\r\n3G:	Có 3G (tốc độ Download 21Mbps/42 Mbps; Upload 5.76 Mbps)\r\nWifi:	Wi-Fi 802.11 b/g/n, Wi-Fi hotspot', '', 0, 100),
(17, 'wiko-pulp-fab', 1, 'wiko-pulp-fab.png', 'Wiko', 3990000, '2015-10-22', 'Màn hình:	IPS-LCD, 7 inch\r\nHệ điều hành:	Android 5.0\r\nCPU:	Quad-core, 1.2 GHz\r\nRAM:	1 GB\r\nBộ nhớ trong:	16 GB\r\nCamera sau:	13 MP (4128 x 3096 pixels), Có quay phim\r\nCamera trước:	5 MP (2592 x 1944 pixels)\r\n3G:	Có\r\nWifi:	Wi-Fi 802.11 a/b/g/n/ac', '', 0, 100),
(18, 'wiko-rainbow-jam', 1, 'wiko-rainbow-jam-400x460.png', 'Wiko', 3190000, '2015-07-28', 'Màn hình:	IPS-LCD, 7 inch\r\nHệ điều hành:	Android 5.0\r\nCPU:	Quad-core, 1 GHz\r\nRAM:	1 GB\r\nBộ nhớ trong:	8 GB\r\nCamera sau:	2 MP (1600 x 1200 pixels), Có quay phim\r\nCamera trước:	0.3 MP (VGA 640 x 480 pixels)\r\n3G:	Có 3G (tốc độ Download 21Mbps/42 Mbps; Upload 5.76 Mbps)\r\nWifi:	Wi-Fi 802.11 b/g/n', '', 0, 100),
(19, 'wing-s880-hp', 1, 'wing-s800-80-533b-400x533.png', 'Wing', 2790000, '2015-10-13', 'Màn hình:	IPS-WXGA, 8 inch\r\nHệ điều hành:	Android 4.4\r\nCPU:	Quad-core, 1.3 GHz\r\nRAM:	1 GB\r\nBộ nhớ trong:	8 GB\r\nCamera sau:	5 MP (2592 x 1944 pixels), Có quay phim\r\nCamera trước:	2 MP (1600 x 1200 pixels)\r\n3G:	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps)\r\nWifi:	Wifi chuẩn 802.11 b/g/n', '', 0, 100),
(20, 'huawei-mediapad-t1-a21l-300-1-300x300', 2, 'huawei-mediapad-t1-a21l-300-1-300x300.png', 'huawei', 1299000, '2015-10-13', 'Màn hình:	IPS-LCD, 7.85 inch\r\nHệ điều hành:	Android 4.4\r\nCPU:	Quad-core, 1.2 GHz\r\nRAM:	1 GB\r\nBộ nhớ trong:	8 GB\r\nCamera sau:	8 MP (3264x2448 pixels), HD 720p (1280x720 pixels)\r\nCamera trước:	2 MP (1600 x 1200 pixels)\r\n3G:	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps)\r\nWifi:	Wi-Fi 802.11 b/g/n', '', 200000, 100),
(21, 'ipad-air-2-cellular-16g-1-300x420', 2, 'ipad-air-2-cellular-16g-1-300x420.png', 'IPad', 5790000, '2014-12-30', 'CPU:	Intel, Celeron, N2840, 2.16 GHz\r\nRAM:	DDR3L (1 khe RAM), 2 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Integrated Graphics, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP\r\nChất liệu vỏ:	Vỏ nhựa\r\nCổng giao tiếp:	HDMI, LAN (RJ45), USB 2.0, USB 3.0\r\nKết nối khác:	Bluetooth v4.0', '', 300000, 100),
(22, 'ipad-air-2-cellular-64g-18-nowatermark-300x300', 2, 'ipad-air-2-cellular-64g-1-300x420.png', 'IPad', 15990000, '2014-11-22', 'CPU:	Intel, Celeron, N3050, 1.60 GHz\r\nRAM:	DDR3 (1 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP\r\nChất liệu vỏ:	Vỏ nhựa\r\nCổng giao tiếp:	HDMI, LAN (RJ45), USB 2.0, USB 3.0\r\nKết nối khác:	Bluetooth', '', 500000, 100),
(23, 'ipad-mini-4-detail-400x450', 2, 'ipad-mini-4-icon-300x300.png', 'IPad', 16290000, '2015-03-22', 'CPU:	Intel, Celeron, N2840, 2.16 GHz\r\nRAM:	DDR3L (1 khe RAM), 2 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Integrated Graphics, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP\r\nChất liệu vỏ:	Vỏ nhựa\r\nCổng giao tiếp:	HDMI, LAN (RJ45), USB 2.0, USB 3.0, VGA (D-Sub)', '', 0, 100),
(24, 'ipad-pro-300x300', 2, 'ipad-pro-new-400x460.png', 'IPad', 10790000, '2015-08-16', 'CPU:	Intel, Core i3 Broadwell, 5005U, 2.00 GHz\r\nRAM:	DDR3L (2 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	15.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics 5500, Share\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(25, 'ipad-pro-wifi-cellular-128gb-300-300x300', 2, 'ipad-pro-wifi-cellular-128gb-400-400x460.png', 'IPad', 13990000, '2015-03-30', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L (2 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics 5500, Share 1792 MB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(26, 'samsung-galaxy-tab-3v-wifi-300-300x300', 2, 'samsung-galaxy-tab-3v-wifi-533a-400x533-400x533.png', 'Samsung', 27590000, '2015-11-24', 'CPU:	Intel, Core i7 Haswell, 4720HQ, 2.60 GHz\r\nRAM:	DDR3L (2 khe RAM), 8 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 1 TB\r\nMàn hình rộng:	15.6 inch, FHD (1920 x 1080 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	NVIDIA® GeForce® GTX 950M, 4 GB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(27, 'samsung-galaxy-tab-a-plus-97-sm-p555-300but-300x300', 2, 'samsung-galaxy-tab-a-plus-97-sm-p555-533but-3-400x533.png', 'Samsung', 13290000, '2015-08-19', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L (2 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	15.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	NVIDIA® GeForce® 920M, 2 GB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(28, 'samsung-galaxy-tab-e-96-sm-t561-300-1', 2, 'samsung-galaxy-tab-e-96-sm-t561-400-400x400.png', 'Samsung', 14790000, '2015-07-06', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L (1 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 1 TB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics 5500, Share\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(29, 'samsung-galaxy-tab-s2-84-300x300', 2, 'samsung-galaxy-tab-s2-84-400x533.png', 'Samsung', 14290000, '2015-01-10', 'CPU:	Intel, Core i3 Haswell, 4030U, 1.90 GHz\r\nRAM:	DDR3L (1 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	11.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Có\r\nĐồ họa:	Intel HD Graphics 4400, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(30, 'acer-aspire-e5-473-i3-5005u-4g-500g-win10-300-300x300', 3, 'acer-aspire-e5-473-i3-5005u-4g-500g-win10-400-400x400.png', 'Acer', 15590000, '2015-05-10', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L(On board+1Khe), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	15.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Có\r\nĐồ họa:	NVIDIA® GeForce® 940M, 2 GB\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP', '', 0, 100),
(31, 'acer-es1-431-n3050-4gb-500gb-win10-300-300x300', 3, 'acer-es1-431-n3050-4gb-500gb-win10-400-400x400.png', 'Acer', 17990000, '2015-09-07', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L (2 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics 5500, Share 1792 MB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 500000, 100),
(32, 'acer-es1-431-n3700-4gb-500gb-win10-300-300x300', 3, 'acer-es1-431-n3700-4gb-500gb-win10-400-400x400.png', 'Acer', 19990000, '2015-09-07', 'CPU:	Intel, Celeron, N2840, 2.16 GHz\r\nRAM:	DDR3L (1 khe RAM), 2 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Integrated Graphics, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP\r\nChất liệu vỏ:	Vỏ nhựa\r\nCổng giao tiếp:	HDMI, LAN (RJ45), USB 2.0, USB 3.0\r\nKết nối khác:	Bluetooth v4.0', '', 0, 100),
(33, 'asus-a540la-i3-4005u-4gb-500gb-win10-300-1-300x300', 3, 'asus-a540la-i3-4005u-4gb-500gb-win10-400-1-400x400.png', 'ASUS', 21000000, '2015-12-01', 'CPU:	Intel, Core i7 Haswell, 4720HQ, 2.60 GHz\r\nRAM:	DDR3L (2 khe RAM), 8 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 1 TB\r\nMàn hình rộng:	15.6 inch, FHD (1920 x 1080 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	NVIDIA® GeForce® GTX 950M, 4 GB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 1000000, 100),
(34, 'asus-e402ma-n2840-2gb-500gb-win10-300-300x300', 3, 'asus-e402ma-n2840-2gb-500gb-win10-400-400x400.png', 'ASUS', 25590000, '2015-01-17', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L (2 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Intel® HD Graphics 5500, Share 1792 MB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 590000, 100),
(35, 'asus-f454la-i3-4005u-4gb-500gb-win-10-300-1-300x300', 3, 'asus-f454la-i3-4005u-4gb-500gb-win-10-400-1-400x400.png', 'asus', 26000000, '2015-08-10', 'CPU:	Intel, Core i3 Haswell, 4030U, 1.90 GHz\r\nRAM:	DDR3L (1 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	11.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Có\r\nĐồ họa:	Intel HD Graphics 4400, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(36, 'asus-x453ma-celeron-n3540-win8-nowatermark-300x300', 3, 'asus-x453ma-pentium-n3540-win8-wx346b-400x400', 'ASUS', 18293048, '2015-08-03', 'CPU:	Intel, Celeron, N2840, 2.16 GHz\r\nRAM:	DDR3L (1 khe RAM), 2 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	Integrated Graphics, Share\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP\r\nChất liệu vỏ:	Vỏ nhựa\r\nCổng giao tiếp:	HDMI, LAN (RJ45), USB 2.0, USB 3.0\r\nKết nối khác:	Bluetooth v4.0', '', 0, 100),
(37, 'asus-x553ma-sx684b-1-nowatermark-300x300', 3, 'asus-x553ma-sx684b-2-400x400.png', 'ASUS', 9000000, '2015-11-27', 'CPU:	Intel, Core i7 Haswell, 4720HQ, 2.60 GHz\r\nRAM:	DDR3L (2 khe RAM), 8 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 1 TB\r\nMàn hình rộng:	15.6 inch, FHD (1920 x 1080 pixels)\r\nCảm ứng:	Không\r\nĐồ họa:	NVIDIA® GeForce® GTX 950M, 4 GB\r\nĐĩa quang:	DVD Super Multi Double Layer\r\nWebcam:	0.9 MP(16:9)', '', 0, 100),
(38, 'dell-inspiron-3451-n3540u-2gb-500gb-win81-300x300', 3, 'dell-inspiron-3451-n3540u-2gb-500gb-win81-400-400x400.png', 'dell', 13470000, '2014-10-10', 'CPU:	Intel, Core i5 Broadwell, 5200U, 2.20 GHz\r\nRAM:	DDR3L(On board+1Khe), 4 GB, 1600 MHz\r\nĐĩa cứng:	HDD, 500 GB\r\nMàn hình rộng:	15.6 inch, HD (1366 x 768 pixels)\r\nCảm ứng:	Có\r\nĐồ họa:	NVIDIA® GeForce® 940M, 2 GB\r\nĐĩa quang:	Không\r\nWebcam:	0.3 MP', '', 200000, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`cus_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`), ADD KEY `id_sanpham3` (`id_sanpham`);

--
-- Indexes for table `orderlines`
--
ALTER TABLE `orderlines`
 ADD PRIMARY KEY (`orderline_ID`), ADD KEY `order_ID` (`order_ID`), ADD KEY `order_ID_2` (`order_ID`), ADD KEY `book_ID` (`id_sanpham`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_ID`), ADD KEY `cus_ID` (`cus_ID`), ADD KEY `cus_ID_2` (`cus_ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `cus_ID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `orderlines`
--
ALTER TABLE `orderlines`
MODIFY `orderline_ID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_ID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
MODIFY `id_sanpham` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
