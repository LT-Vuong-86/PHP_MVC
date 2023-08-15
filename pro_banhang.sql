-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2023 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pro_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_nhanvien`
--

CREATE TABLE `admin_nhanvien` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `lv` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_nhanvien`
--

INSERT INTO `admin_nhanvien` (`id`, `username`, `password`, `full_name`, `lv`) VALUES
(1, 'vudinhba', '6543', 'Ä‘Ã¬nh ba', 2),
(2, 'tyui', 'uytgrf', '3456efg', 1),
(76, 'udgtvybsh', '2345ytfd', 'ch?u luôn ??y', 2),
(77, 'tyuyt', '2345y?ergtfd', '?õ vi?t xuân', 2),
(79, 'username2', '2345677654', 'Nguyá»…n CÃ´ng Báº£o An', 2),
(80, 'username76', 'Æ°erthrasd', 'Nguyá»…n CÃ´ng Báº£o An', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, '[value-5]'),
(2, '[value-6]'),
(3, '[value-1]'),
(4, '[value-2]'),
(5, '[value-3]'),
(6, '[value-4]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `amount` decimal(15,0) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`id`, `full_name`, `address`, `email`, `phone`, `amount`, `status`) VALUES
(1, 'Äá»— Viáº¿t XuÃ¢n', 'njsjc ', 'nguyenhienvuong666@gmail.com', '0394731342', '246000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_detail`
--

CREATE TABLE `oder_detail` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(15,0) DEFAULT NULL,
  `amount` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `oder_detail`
--

INSERT INTO `oder_detail` (`id`, `oder_id`, `product_id`, `qty`, `price`, `amount`) VALUES
(2, 1, 3, 1, '123000', '246000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(15,0) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `img_link` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `price`, `amount`, `img_link`, `content`) VALUES
(1, 6, 'ao', '123000', 233, 'public/fronend/images/home/product1.jpg', 'áo ??u'),
(2, 5, 'ao', '123000', 233, 'public/fronend/images/home/product2.jpg', 'áo ??u'),
(3, 4, 'ao', '123000', 233, 'public/fronend/images/home/product3.jpg', 'áo ??u'),
(4, 3, 'ao', '123000', 233, 'public/fronend/images/home/product4.jpg', 'áo ??u'),
(5, 2, 'ao', '123000', 233, 'public/fronend/images/home/product5.jpg', 'áo ??u'),
(6, 1, 'ao', '123000', 233, 'public/fronend/images/home/product6.jpg', 'áo ??u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_2`
--

CREATE TABLE `product_2` (
  `id` int(11) DEFAULT NULL,
  `catalog_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(15,0) DEFAULT NULL,
  `img_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `product_2`
--

INSERT INTO `product_2` (`id`, `catalog_id`, `name`, `price`, `img_link`) VALUES
(1, 4, '[value-1]', '524000', 'public/fronend/images/home/gallery1.jpg'),
(2, 3, '[value-2]', '445000', 'public/fronend/images/home/gallery2.jpg'),
(3, 2, '[value-3]', '465000', 'public/fronend/images/home/gallery3.jpg'),
(4, 1, '[value-4]', '344600', 'public/fronend/images/home/gallery4.jpg'),
(5, 5, 'quanao', '4567000', 'public/fronend/images/home/gallery1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `star` int(1) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pasword` varchar(32) DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pasword`, `gioitinh`, `ngaysinh`, `phone`, `email`, `address`) VALUES
(6, '', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, '0394731342', 'nguyenhienvuong666@gmail.com', 'lienthien'),
(7, '', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, '088474483', 'nguyenhienvuong666@gmail.com', 'lienthien'),
(8, '', '5e8667a439c68f5145dd2fcbecf02209', NULL, NULL, '0394731342', 'nguyenhienvuong666@gmail.com', 'lienthien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_nhanvien`
--
ALTER TABLE `admin_nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oder_detail` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`catalog_id`);

--
-- Chỉ mục cho bảng `product_2`
--
ALTER TABLE `product_2`
  ADD KEY `fk_product_2` (`catalog_id`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rate` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_nhanvien`
--
ALTER TABLE `admin_nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD CONSTRAINT `fk_oder_detail` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`);

--
-- Các ràng buộc cho bảng `product_2`
--
ALTER TABLE `product_2`
  ADD CONSTRAINT `fk_product_2` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`);

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `fk_rate` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
