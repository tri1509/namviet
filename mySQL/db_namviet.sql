-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2023 lúc 05:53 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_namviet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(10) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(6, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `slug`) VALUES
(2, 'Điện - Điện lạnh', 'dien-dien-lanh'),
(3, 'Cửa sắt', 'cua-sat'),
(4, 'Nội thất', 'noi-that');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `times` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cat` int(11) NOT NULL,
  `tomtat` text NOT NULL,
  `content` text NOT NULL,
  `noidung` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `name`, `slug`, `cat`, `tomtat`, `content`, `noidung`, `img`) VALUES
(2, 'Nội Thất Trọn Gói', 'noi-that-tron-goi', 4, 'Nội thất nhà phố cao cấp của chị Hằng ở KDC Đảo Kim Cương, Quận 2 không chỉ mang vẻ...', 'Nội Thất Nhà Phố Cao Cấp Đảo Kim Cương, Quận 2', '<div class=\"untree_co--site-section pb-0\"><div class=\"video_perform\"><div class=\"untree_co--site-section\"><div class=\"container\"><div class=\"row justify-content-center text-center pt-0 pb-5\"><div class=\"col-lg-6 section-heading\"><h3 class=\"text-center\">Hình ảnh dự án</h3></div></div><div class=\"row gutter-2\"><div class=\"col-md-4\" data-aos-delay=\"\"><a href=\"public/images/tc-maylanh.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-4\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh1.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh8.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-4\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh2.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh2.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-12\" data-aos-delay=\"200\"><a href=\"public/images/tc-maylanh7.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh3.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-3\" data-aos-delay=\"\"><a href=\"public/images/tc-maylanh5.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh5.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-8\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh6.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh6.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div></div></div></div></div><div class=\"container-fluid px-md-0\"><div class=\"row no-gutters align-items-stretch room-animate site-section pb-0\"><div class=\"col-md-7 order-md-2 img-wrap\" data-jarallax-element=\"-100\"><div class=\"bg-image h-100\"\r\nstyle=\"background-color: #efefef; background-image: url(\'public/images/img-quancf1.jpg\');\"></div></div><div class=\"col-md-5\"><div class=\"row justify-content-center\"><div class=\"col-md-8 py-5\"><h3 class=\"display-4 heading\">Thiết Kế Nội Thất Quán Cafe</h3><div class=\"room-exerpt\"><p>Thiết Kế Nội Thất Quán Cafe – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất\r\nphòng khách nào cho ngôi nhà của mình?.Dưới đây là danh sách tổng hợp các xu hướng thiết kế không\r\ngian tốt nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.Có rất nhiều hình mẫu tham\r\nkhảo cho từng loại nội thất và vật dụng.Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ\r\nkhác nhau.</p><p>Tư vấn thiết kế nội thất miễn phí,Thi công nội thất giá xưởng tại TPHCM,Biên Hoà,Bình Dương,Long\r\nAn,Tây Ninh và Các tỉnh lân cận!</p><div class=\"row mt-5\"><div class=\"col-12\"><h3 class=\"mb-4\">Amenities</h3><ul class=\"list-unstyled ul-check\"><li>Có>10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li><li>Chất lượng hơn số lượng</li><li>Cam kết 100%sử dụng nguyên vật liệu đã báo giá</li><li>Chỉnh chu đến từng chi tiết</li><li>Có cam kết bảo hành sau xây dựng</li><li><a href=\"\" style=\"color: black; font-size: 1rem; border-bottom: 1px solid black;\">Liên Hệ Báo\r\nGiá.</a></li></ul></div></div></div></div></div></div></div></div></div><div class=\"row no-gutters align-items-stretch room-animate site-section\"><div class=\"col-md-7 img-wrap\" data-jarallax-element=\"-100\"><div class=\"bg-image h-100\"\r\nstyle=\"background-color: #efefef; background-image: url(\'public/images/img-cuahang.jpg\');\"><div class=\"da-chitiet\"><a href=\"\"><span>Xem Thêm</span></a></div></div></div><div class=\"col-md-5\"><div class=\"row justify-content-center\"><div class=\"col-md-8 py-5\"><h3 class=\"display-4 heading\">Thiết Kế Nội Thất Cửa Hàng</h3><div class=\"room-exerpt\"><p>Thiết Kế Nội Thất Chug Cư – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng\r\nkhách nào cho ngôi nhà của mình?.Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt\r\nnhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.Có rất nhiều hình mẫu tham khảo cho từng\r\nloại nội thất và vật dụng.Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác nhau.</p><p>Nếu bạn đã,đang và sẽ kinh doanh nhà hàng thì bạn không nên xem nhẹ vấn đề đầu tư vào thiết kế nội thất\r\nnhà hàng đẹp,chuyên nghiệp và có phong cách của riêng mình.Bởi không gian nội thất là một trong những\r\nyếu tố quyết định đến sự thành công khi kinh doanh nhà hàng.</p><div class=\"row mt-5\"><div class=\"col-12\"><h3 class=\"mb-4\">Tại Sao Bạn Nên Chọn Nam Việt?</h3><ul class=\"list-unstyled ul-check\"><li>Có>10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li><li>Chất lượng hơn số lượng</li><li>Cam kết 100%sử dụng nguyên vật liệu đã báo giá</li><li>Chỉnh chu đến từng chi tiết</li><li>Có cam kết bảo hành sau xây dựng</li><li><a href=\"\" style=\"color: black; font-size: 1rem; border-bottom: 1px solid black;\">Liên Hệ Báo Giá.</a></li></ul></div></div></div></div></div></div></div><div class=\"untree_co--site-section py-5 bg-body-darker cta\"><div class=\"container\"><div class=\"row\"><div class=\"col-12 text-center\"><h3 class=\"m-0 p-0\">Mang lại vẻ đẹp tinh tế,sang trọng,Phòng làm việc kết hợp phòng khách.<a\r\nhref=\"tel://0901579585\">0901 579 585</a></h3></div></div></div></div>', 'img-chungcu.jpg'),
(3, 'Nội thất phòng khách', 'noi-that-phong-khach', 4, 'Nội thất nhà phố cao cấp của chị Hằng ở KDC Đảo Kim Cương, Quận 2 không chỉ mang vẻ...', 'Nội Thất Phòng khách Cao Cấp Đảo Kim Cương, Quận 2', '<div class=\"untree_co--site-section pb-0\"><div class=\"video_perform\"><div class=\"untree_co--site-section\"><div class=\"container\"><div class=\"row justify-content-center text-center pt-0 pb-5\"><div class=\"col-lg-6 section-heading\"><h3 class=\"text-center\">Nội thất phòng khách</h3></div></div><div class=\"row gutter-2\"><div class=\"col-md-4\" data-aos-delay=\"\"><a href=\"public/images/tc-maylanh.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-4\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh1.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh8.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-4\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh2.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh2.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-12\" data-aos-delay=\"200\"><a href=\"public/images/tc-maylanh7.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh3.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-3\" data-aos-delay=\"\"><a href=\"public/images/tc-maylanh5.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh5.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div><div class=\"col-md-8\" data-aos-delay=\"100\"><a href=\"public/images/tc-maylanh6.jpg\" data-fancybox=\"gallery\"><img src=\"public/images/tc-maylanh6.jpg\" alt=\"Image\" class=\"img-fluid\"/></a></div></div></div></div></div><div class=\"container-fluid px-md-0\"><div class=\"row no-gutters align-items-stretch room-animate site-section pb-0\"><div class=\"col-md-7 order-md-2 img-wrap\" data-jarallax-element=\"-100\"><div class=\"bg-image h-100\"\r\nstyle=\"background-color: #efefef; background-image: url(\'public/images/img-quancf1.jpg\');\"></div></div><div class=\"col-md-5\"><div class=\"row justify-content-center\"><div class=\"col-md-8 py-5\"><h3 class=\"display-4 heading\">Thiết Kế Nội Thất Quán Cafe</h3><div class=\"room-exerpt\"><p>Thiết Kế Nội Thất Quán Cafe – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất\r\nphòng khách nào cho ngôi nhà của mình?.Dưới đây là danh sách tổng hợp các xu hướng thiết kế không\r\ngian tốt nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.Có rất nhiều hình mẫu tham\r\nkhảo cho từng loại nội thất và vật dụng.Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ\r\nkhác nhau.</p><p>Tư vấn thiết kế nội thất miễn phí,Thi công nội thất giá xưởng tại TPHCM,Biên Hoà,Bình Dương,Long\r\nAn,Tây Ninh và Các tỉnh lân cận!</p><div class=\"row mt-5\"><div class=\"col-12\"><h3 class=\"mb-4\">Amenities</h3><ul class=\"list-unstyled ul-check\"><li>Có>10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li><li>Chất lượng hơn số lượng</li><li>Cam kết 100%sử dụng nguyên vật liệu đã báo giá</li><li>Chỉnh chu đến từng chi tiết</li><li>Có cam kết bảo hành sau xây dựng</li><li><a href=\"\" style=\"color: black; font-size: 1rem; border-bottom: 1px solid black;\">Liên Hệ Báo\r\nGiá.</a></li></ul></div></div></div></div></div></div></div></div></div><div class=\"row no-gutters align-items-stretch room-animate site-section\"><div class=\"col-md-7 img-wrap\" data-jarallax-element=\"-100\"><div class=\"bg-image h-100\"\r\nstyle=\"background-color: #efefef; background-image: url(\'public/images/img-cuahang.jpg\');\"><div class=\"da-chitiet\"><a href=\"\"><span>Xem Thêm</span></a></div></div></div><div class=\"col-md-5\"><div class=\"row justify-content-center\"><div class=\"col-md-8 py-5\"><h3 class=\"display-4 heading\">Thiết Kế Nội Thất Cửa Hàng</h3><div class=\"room-exerpt\"><p>Thiết Kế Nội Thất Chug Cư – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng\r\nkhách nào cho ngôi nhà của mình?.Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt\r\nnhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.Có rất nhiều hình mẫu tham khảo cho từng\r\nloại nội thất và vật dụng.Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác nhau.</p><p>Nếu bạn đã,đang và sẽ kinh doanh nhà hàng thì bạn không nên xem nhẹ vấn đề đầu tư vào thiết kế nội thất\r\nnhà hàng đẹp,chuyên nghiệp và có phong cách của riêng mình.Bởi không gian nội thất là một trong những\r\nyếu tố quyết định đến sự thành công khi kinh doanh nhà hàng.</p><div class=\"row mt-5\"><div class=\"col-12\"><h3 class=\"mb-4\">Tại Sao Bạn Nên Chọn Nam Việt?</h3><ul class=\"list-unstyled ul-check\"><li>Có>10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li><li>Chất lượng hơn số lượng</li><li>Cam kết 100%sử dụng nguyên vật liệu đã báo giá</li><li>Chỉnh chu đến từng chi tiết</li><li>Có cam kết bảo hành sau xây dựng</li><li><a href=\"\" style=\"color: black; font-size: 1rem; border-bottom: 1px solid black;\">Liên Hệ Báo Giá.</a></li></ul></div></div></div></div></div></div></div><div class=\"untree_co--site-section py-5 bg-body-darker cta\"><div class=\"container\"><div class=\"row\"><div class=\"col-12 text-center\"><h3 class=\"m-0 p-0\">Mang lại vẻ đẹp tinh tế,sang trọng,Phòng làm việc kết hợp phòng khách.<a\r\nhref=\"tel://0901579585\">0901 579 585</a></h3></div></div></div></div>', 'img-quancf2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cat` int(20) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) DEFAULT NULL,
  `mota` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
