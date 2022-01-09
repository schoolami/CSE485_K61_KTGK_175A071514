-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:09 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `175a071514_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(20) NOT NULL,
  `hovaten` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` int(10) NOT NULL,
  `nghenghiep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Thân Văn Trường', 'Nam', 1999, 'Nhân viên văn phòng', '2022-01-02', '2022-01-27', 'Hà Nội'),
(2, 'Nguyễn Gia Huy', 'Nữ', 2000, 'Sinh viên', '2022-01-04', '2022-01-31', 'Hà Nội'),
(3, 'Nguyễn Thanh Phương', 'Nữ', 2005, 'Học Sinh', '2022-01-03', '2022-01-24', 'Hà Nội'),
(4, 'Kiều Bảo Nam', 'Nam', 1997, 'Phiên Dịch', '2022-01-11', '2022-01-31', 'Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
