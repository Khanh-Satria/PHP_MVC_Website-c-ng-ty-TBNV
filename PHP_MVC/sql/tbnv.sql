-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2022 at 05:23 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_dvgp`
--

DROP TABLE IF EXISTS `ct_dvgp`;
CREATE TABLE IF NOT EXISTS `ct_dvgp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dvgp` int(11) NOT NULL,
  `ten_ct_dvgp` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` text COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dvgp` (`id_dvgp`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_dvgp`
--

INSERT INTO `ct_dvgp` (`id`, `id_dvgp`, `ten_ct_dvgp`, `tom_tat`, `mo_ta`, `hinh_anh`) VALUES
(1, 1, 'Giai Phap Khanh', '*ljhadnhcda', '*dans,jbf', 'danhgia2.jpg'),
(2, 1, 'Giải pháp Wifi', 'Giải pháp dùng cho các doanh nghiệp nhỏ, hoặc các chi nhánh, số lượng người dùng Wireless ít. Với giải pháp này, ta hoàn toàn sử dụng hệ thống mạng LAN có sẵn. Các thiết bị như laptop, PDA được kết nối thông qua access ...', '*Giải pháp dùng cho các doanh nghiệp nhỏ, hoặc các chi nhánh, số lượng người dùng Wireless ít. Với giải pháp này, ta hoàn toàn sử dụng hệ thống mạng LAN có sẵn. Các thiết bị như laptop, PDA được kết nối thông qua access ...\r\n*Giải pháp dùng cho các doanh nghiệp nhỏ, hoặc các chi nhánh, số lượng người dùng Wireless ít. Với giải pháp này, ta hoàn toàn sử dụng hệ thống mạng LAN có sẵn. Các thiết bị như laptop, PDA được kết nối thông qua access ...', 'wifi-chuyen-dung-la-gi.jpg'),
(3, 1, 'Giải pháp Bảo mật hệ thống', 'Nền kinh tế Việt Nam đang phát triển nhanh và mạnh đã dẫn đến nguồn nhân lực không theo kịp nhu cầu của các doanh nghiệp. Đặc biệt các doanh nghiệp đang hướng tới sự chuyên nghiệp trong quản lý nhân sự, quản lý thời ...', '*Nền kinh tế Việt Nam đang phát triển nhanh và mạnh đã dẫn đến nguồn nhân lực không theo kịp nhu cầu của các doanh nghiệp. Đặc biệt các doanh nghiệp đang hướng tới sự chuyên nghiệp trong quản lý nhân sự, quản lý thời ...', 'Bao-mat-he-thong-mang.jpg'),
(4, 1, 'Giải pháp Tích hợp hệ thống', 'Nền kinh tế Việt Nam đang phát triển nhanh và mạnh đã dẫn đến nguồn nhân lực không theo kịp nhu cầu của các doanh nghiệp. Đặc biệt các doanh nghiệp đang hướng tới sự chuyên nghiệp trong quản lý nhân sự, quản lý thời ...', '*Nền kinh tế Việt Nam đang phát triển nhanh và mạnh đã dẫn đến nguồn nhân lực không theo kịp nhu cầu của các doanh nghiệp. Đặc biệt các doanh nghiệp đang hướng tới sự chuyên nghiệp trong quản lý nhân sự, quản lý thời ...', 'tich_hop_he_thong.png'),
(5, 2, 'Giải pháp giám sát an ninh', 'kí đầu', '* kí đầu\r\n* nam nhi', ''),
(13, 1, 'fvxcv cv xv xv ', '*fvfd,xv', '*fv xm', 'hinhxe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu_giaiphap`
--

DROP TABLE IF EXISTS `dichvu_giaiphap`;
CREATE TABLE IF NOT EXISTS `dichvu_giaiphap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dv_gp` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu_giaiphap`
--

INSERT INTO `dichvu_giaiphap` (`id`, `ten_dv_gp`, `image`) VALUES
(1, 'CABLING SYSTEMS', 'data-cabling-banner-excellinx.jpg'),
(2, 'CCTV SYSTEMS', 'cctv_camera.gif'),
(3, 'PBX SYSTEMS', 'PBX.jpg'),
(4, 'ACS SYSTEMS', 'ACS.jpg'),
(12, 'dich vu moi', 'hinhxe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `du_an`
--

DROP TABLE IF EXISTS `du_an`;
CREATE TABLE IF NOT EXISTS `du_an` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_du_an` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `du_an`
--

INSERT INTO `du_an` (`id`, `ten_du_an`, `mo_ta`, `image`) VALUES
(1, 'Solution & Services', '*Solution & Services chuyên cung cấp các dịch vụ sau:\r\n*Tư vấn, thiết kế giải pháp hệ thống mạng \r\n* Thi công cabling cho hệ thống Data, Wifi, Camera,... \r\n* Bảo trì, sửa chữa hệ thống mạng \r\n* Cải tạo phòng server,...\r\n\r\n', 'Rack_2.jpg'),
(2, ' Warning: Invalid argument supplied for foreach()', 'helllo kí đầu', 'Rack_2.jpg'),
(4, 'Đi tìm kho báu one piece', '*fcxxnbfgc', 'hinhxe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gioi_thieu`
--

DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gioi_thieu`
--

INSERT INTO `gioi_thieu` (`id`, `tieu_de`, `noi_dung`) VALUES
(1, 'Đôi nét về công ty', '                                                                                                                                 *Công ty TNHH Thương Mại Dịch Vụ ACT4 hoạt động chuyên trong lĩnh vực :\r\n\r\n*Hệ thống cáp: Cáp mạng Data, Điện thoại & Dữ Liệu, VoiIP,...\r\n*Hệ thống an toàn: Cửa từ, CCTV, Âm thanh thông báo, Chuông cửa màn hình,...\r\n*Hệ thống đa phương tiện: CATV, MATV, Hội nghị truyền hình (Video conference)\r\n*Hệ thống Data Center, Thiết kế Phòng vi tính (Server, tủ Rack, UPS, Chữa cháy, Điều hòa, Bảo mật, Phát hiện nước, Sàn nâng…)\r\n*Lắp đặt hệ thống thang máng cáp (thang, lưới, khay, máng…)\r\n*Hệ thống Giải pháp Mạng không dây,...\r\n                                                                                                                                                                                                                    '),
(2, 'Tầm nhìn', '                                                                                                                                 *Với phương châm và định hướng phát triển là đem lại sự tin tưởng, cũng như chất lượng và thẩm mỹ cho từng khách hàng khi làm việc với ACT4, ...                                                                                                                                                                                                                 '),
(3, 'Đội ngũ nhân viên', '                                                                                                                                 *Đội ngũ nhân viên chúng tôi luôn tuân thủ về an toàn lao động, cũng như trong quá trình thi công, chúng tôi luôn hiểu rỏ các yêu cầu cũng như kỹ thuật thi công để đảm bảo hòng của khách hàng khi làm việc với chúng tôi.                          \r\n*Khanh                                                                                                                                                                                                                  ');

-- --------------------------------------------------------

--
-- Table structure for table `image_duan`
--

DROP TABLE IF EXISTS `image_duan`;
CREATE TABLE IF NOT EXISTS `image_duan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_duan` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_duan`
--

INSERT INTO `image_duan` (`id`, `id_duan`, `image`) VALUES
(1, 1, 'Rack_2.jpg'),
(2, 1, 'Rack_2.jpg'),
(3, 7, 'bai thi-Page-3.drawio4.png'),
(4, 7, 'hinhxe.jpg'),
(5, 7, 'meet.png'),
(16, 13, 'meet.png'),
(17, 3, 'huong-dan-tai-va-cai-dat-dev-c-13.jpg'),
(29, 4, 'bai thi-Page-3.drawio.png');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

DROP TABLE IF EXISTS `lien_he`;
CREATE TABLE IF NOT EXISTS `lien_he` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL,
  `gg_map` text COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `ten_cty`, `dia_chi`, `gg_map`, `website`, `gmail`, `sdt1`, `sdt2`) VALUES
(1, 'Công ty TNHH Thương Mại Dịch Vụ TBNV', '752/38/7 Lạc Long Quân', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.442967176541!2d106.6477659146225!3d10.777345492320878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb786ec3c53%3A0x713156eece0be08b!2zNzUyIEzhuqFjIExvbmcgUXXDom4sIFBoxrDhu51uZyA5LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1648211667781!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'tbnv.com', 'tbnb@gmail.com', '012345678', '012457888');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tai_khoan` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `tai_khoan`, `mat_khau`, `ho_ten`) VALUES
(1, 'khanh', '123', 'Phạm Tuấn Khanh'),
(5, 'zoro', '123', 'Roronoa Zoro'),
(8, 'sanji', '123', 'Sanji');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

DROP TABLE IF EXISTS `quyen`;
CREATE TABLE IF NOT EXISTS `quyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_quyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`id`, `ten_quyen`) VALUES
(1, 'Thuyền trưởng'),
(2, 'Thuyền viên');

-- --------------------------------------------------------

--
-- Table structure for table `quyen_nguoidung`
--

DROP TABLE IF EXISTS `quyen_nguoidung`;
CREATE TABLE IF NOT EXISTS `quyen_nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `id_quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quyen_nguoidung`
--

INSERT INTO `quyen_nguoidung` (`id_nguoidung`, `id_quyen`) VALUES
(1, 1),
(5, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tin_tuc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` text COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `ten_tin_tuc`, `hinh_anh`, `tom_tat`, `mo_ta`) VALUES
(1, 'CableIQ Qualification Tester (P/N: CIQ-100)', 'TestIQ_02.jpg', 'Thiết bị đo kiểm cáp đồng chuyên dụng Fluke Networks Cable IQ-100', '*Thiết bị đo kiểm cáp đồng chuyên dụng Fluke Networks Cable IQ-100.\r\n*Thiết bị đo kiểm cáp đồng chuyên dụng Fluke Networks Cable IQ-100'),
(2, 'Bộ Máy Đo Phân Tích Cáp Đồng Fluke DSX2-8000.', '244754036_10160079962934759_9221317292826937987_n.jpg', '', 'Sản phẩm đo kiểm chứng nhận cáp đồng Cat.5 đến Cat.8 với thời gian đo nhanh nhất, tiết kiệm đến 2/3 chi phí đo kiểm. Quản lý công việc và kết quả đo từ các thiết bị di động qua phần mềm LinkWare™ Live '),
(3, '\r\nGiám sát và quản lý trung tâm dữ liệu', 'giam-sat-va-quan-ly-trung-tam-du-lieu.jpg', '', 'Hệ thống DCIM như một chất kết dính, liên kết các phần khác nhau của TTDL trong một giao diện duy nhất. Cung cấp cho bạn cái nhìn toàn diện về TTDL để mở rộng hiệu quả hoạt động và quản lý của mình.'),
(4, 'Những điều cần biết khi lựa chọn tủ Rack', 'tu-rack-tu-mang.jpg', '', 'Việc lựa chọn tủ chứa thiết bị trở nên quan trọng hơn, ảnh hưởng trực tiếp đến hiệu suất làm mát và chất lượng của hệ thống CNTT mà bạn đang thiết kế. Hệ thống thông tin ngày càng phát triển kéo theo số lượng ...'),
(5, '\r\nGiải pháp nâng cao hiệu suất trung tâm dữ liệu', 'giai-phap-nang-cao-hieu-suat-trung-tam-du-lieu.jpg', '', 'Ba yếu tố: tản nhiệt, công suất sử dụng các thiết bị công nghệ thông tin (CNTT) và quản lý luồng không khí di chuyển (AFM) trong phòng đóng vai trò quyết định đến độ hiệu dụng của toàn bộ hệ thống TTDL.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
