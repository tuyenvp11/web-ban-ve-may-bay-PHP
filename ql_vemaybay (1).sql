-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2024 lúc 07:03 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_vemaybay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date_create`) VALUES
(1, 'admin', '123456', '2024-01-10 10:58:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dschuyenbay`
--

CREATE TABLE `dschuyenbay` (
  `id` int(10) NOT NULL,
  `diemden` varchar(255) NOT NULL,
  `diemdi` varchar(255) NOT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `loaicb` enum('Một Chiều','Khứ Hồi','','') NOT NULL,
  `tinhtrangcb` varchar(255) NOT NULL,
  `sogheconlai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ds-datve`
--

CREATE TABLE `tbl_ds-datve` (
  `id_order` int(11) NOT NULL,
  `id_ve` int(11) NOT NULL,
  `diemdi` varchar(255) NOT NULL,
  `diemden` varchar(255) NOT NULL,
  `ngaydi` date NOT NULL,
  `hanghk` varchar(255) NOT NULL,
  `soluong` int(50) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ds-datve`
--

INSERT INTO `tbl_ds-datve` (`id_order`, `id_ve`, `diemdi`, `diemden`, `ngaydi`, `hanghk`, `soluong`, `tongtien`, `date_create`) VALUES
(47, 15, 'Hà Nội', 'Đà Lạt', '2024-01-21', 'Vietnam Airlines', 1, 1299000, '2024-01-28 01:17:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dschuyenbay`
--

CREATE TABLE `tbl_dschuyenbay` (
  `id` int(10) NOT NULL,
  `diemdi` varchar(255) NOT NULL,
  `diemden` varchar(255) NOT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `loaicb` varchar(255) NOT NULL,
  `hanghk` varchar(255) NOT NULL,
  `tinhtrangcb` varchar(255) NOT NULL,
  `tinhtrangghe` varchar(255) NOT NULL,
  `giave` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dschuyenbay`
--

INSERT INTO `tbl_dschuyenbay` (`id`, `diemdi`, `diemden`, `ngaydi`, `ngayve`, `loaicb`, `hanghk`, `tinhtrangcb`, `tinhtrangghe`, `giave`) VALUES
(15, 'Hà Nội', 'Đà Lạt', '2024-01-21', '0000-00-00', 'Một chiều', 'Vietnam Airlines', 'Hoạt động', 'Còn', 1299000),
(16, 'Hà Nội', 'Nha Trang', '2024-01-21', '0000-00-00', 'Một chiều', 'Vietnam Airlines', 'Hoạt động', 'Còn', 1170000),
(17, 'Hải Phòng', 'Đà Nẵng', '2024-01-21', '2024-02-11', 'Khứ hồi', 'Vietjet Air', 'Hoạt động', 'Còn', 860000),
(18, 'Hà Nội', 'Phú Quốc', '2024-01-21', '2024-02-02', 'Khứ hồi', 'Vietjet Air', 'Hoạt động', 'Còn', 1380000),
(19, 'Hà Nội', 'Sài Gòn', '2024-01-21', '0000-00-00', 'Một chiều', 'Bamboo Airways', 'Hoạt động', 'Còn', 1299000),
(20, 'Hải Phòng', 'Sài Gòn', '2024-02-01', '0000-00-00', 'Một chiều', 'Bamboo Airways', 'Hoạt động', 'Còn', 960000),
(21, 'Sài Gòn', 'Đà Lạt', '2024-02-11', '0000-00-00', 'Một chiều', 'Vietjet Air', 'Hoạt động', 'Còn', 560000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_login_user`
--

CREATE TABLE `tbl_login_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_login_user`
--

INSERT INTO `tbl_login_user` (`id`, `username`, `email`, `password`) VALUES
(26, 'Phạm Văn Tuyến', 'tuyenpham191103@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dschuyenbay`
--
ALTER TABLE `dschuyenbay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_ds-datve`
--
ALTER TABLE `tbl_ds-datve`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `tbl_dschuyenbay`
--
ALTER TABLE `tbl_dschuyenbay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_login_user`
--
ALTER TABLE `tbl_login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_ds-datve`
--
ALTER TABLE `tbl_ds-datve`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tbl_dschuyenbay`
--
ALTER TABLE `tbl_dschuyenbay`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_login_user`
--
ALTER TABLE `tbl_login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
