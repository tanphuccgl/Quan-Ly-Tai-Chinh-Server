-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 30, 2019 lúc 04:20 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qltc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanchi`
--

CREATE TABLE `khoanchi` (
  `makhoanchi` int(11) NOT NULL,
  `tendangnhap` varchar(100) DEFAULT NULL,
  `tenloaichi` varchar(50) NOT NULL,
  `sotienchi` double NOT NULL,
  `ngaychi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoanchi`
--

INSERT INTO `khoanchi` (`makhoanchi`, `tendangnhap`, `tenloaichi`, `sotienchi`, `ngaychi`) VALUES
(8, 'hanh', 'cho cho', 200, '2019-03-20'),
(9, 'a', 'An uong', 2000, '2019-03-22'),
(10, 'a', 'an sua', 22222, '2019-03-22'),
(11, 'nv', 'an uong', 6900, '2019-03-24'),
(12, 'a', 'Hoc tap', 3000, '2019-03-24'),
(13, 'a', 'an uong', 200, '2019-03-30'),
(14, 'a', 'an uong', 3333, '2019-03-29'),
(15, 'a', 'an uong', 3000, '2019-03-30'),
(16, 'a', 'an uong', 3000, '2019-03-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanthu`
--

CREATE TABLE `khoanthu` (
  `makhoanthu` int(11) NOT NULL,
  `tendangnhap` varchar(100) DEFAULT NULL,
  `tenloaithu` varchar(200) DEFAULT NULL,
  `sotienthu` double NOT NULL,
  `ngaythu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoanthu`
--

INSERT INTO `khoanthu` (`makhoanthu`, `tendangnhap`, `tenloaithu`, `sotienthu`, `ngaythu`) VALUES
(1, 'a', 'Gia dinh', 200000, '2019-03-04'),
(2, 'a', 'Lam them', 2000, '2019-03-13'),
(3, 'a', 'thu ok', 2000, '2019-03-17'),
(6, 'hanh', 'an cut', 2000, '2019-03-20'),
(7, 'hanh', 'An uong', 10000000, '2019-03-20'),
(8, 'hanh', 'An uong', 100000, '2019-03-20'),
(9, 'a', 'gia dinh', 22222, '2019-03-22'),
(10, 'nv', 'nn', 5000, '2019-03-24'),
(11, 'a', 'lam them', 2000, '2019-03-29'),
(12, 'a', 'gia dinh', 200, '2019-03-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaichi`
--

CREATE TABLE `loaichi` (
  `maloaichi` int(11) NOT NULL,
  `tenloaichi` varchar(200) NOT NULL,
  `tendangnhap` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaichi`
--

INSERT INTO `loaichi` (`maloaichi`, `tenloaichi`, `tendangnhap`) VALUES
(2, 'an uong', 'a'),
(26, 'ten', 'v'),
(27, 'cho cho', 'hanh'),
(29, 'hoc tap', 'a'),
(30, 'an uong', 'minh'),
(31, '0111', 'minh'),
(32, 'd', 'minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaithu`
--

CREATE TABLE `loaithu` (
  `maloaithu` int(11) NOT NULL,
  `tenloaithu` varchar(200) NOT NULL,
  `tendangnhap` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaithu`
--

INSERT INTO `loaithu` (`maloaithu`, `tenloaithu`, `tendangnhap`) VALUES
(1, 'gia dinh', 'a'),
(2, 'lam them', 'a'),
(7, 'nn', 'nv'),
(8, 'an uong', 'minh'),
(14, 'gia dinh', 'minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`tendangnhap`, `matkhau`, `hoten`, `diachi`) VALUES
('a', '1', 'nguyen  van a', 'Thai binh'),
('a1', '1', 'Nguyen van b', 'Thai bbbb'),
('a2', '1', 'nguyen van a2', 'Thai nguyen'),
('add', '1', 'dhhfhsfv', 'dhhfhsfv'),
('anh', '1', 'nguyen van a', 'nguyen van a'),
('hanh', '1', 'nguyen van a', 'nguyen van a'),
('minh', '1', 'quang minh', 'quang minh'),
('nv', '2', 'nguyen van v', 'nguyen van v'),
('v', '2', 'nguyen van a', 'nguyen van a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoanchi`
--
ALTER TABLE `khoanchi`
  ADD PRIMARY KEY (`makhoanchi`),
  ADD KEY `kc` (`tendangnhap`);

--
-- Chỉ mục cho bảng `khoanthu`
--
ALTER TABLE `khoanthu`
  ADD PRIMARY KEY (`makhoanthu`),
  ADD KEY `kt1` (`tendangnhap`);

--
-- Chỉ mục cho bảng `loaichi`
--
ALTER TABLE `loaichi`
  ADD PRIMARY KEY (`maloaichi`),
  ADD KEY `lc` (`tendangnhap`);

--
-- Chỉ mục cho bảng `loaithu`
--
ALTER TABLE `loaithu`
  ADD PRIMARY KEY (`maloaithu`),
  ADD KEY `lt` (`tendangnhap`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khoanchi`
--
ALTER TABLE `khoanchi`
  MODIFY `makhoanchi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `khoanthu`
--
ALTER TABLE `khoanthu`
  MODIFY `makhoanthu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaichi`
--
ALTER TABLE `loaichi`
  MODIFY `maloaichi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loaithu`
--
ALTER TABLE `loaithu`
  MODIFY `maloaithu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khoanchi`
--
ALTER TABLE `khoanchi`
  ADD CONSTRAINT `kc` FOREIGN KEY (`tendangnhap`) REFERENCES `user` (`tendangnhap`);

--
-- Các ràng buộc cho bảng `khoanthu`
--
ALTER TABLE `khoanthu`
  ADD CONSTRAINT `kt1` FOREIGN KEY (`tendangnhap`) REFERENCES `user` (`tendangnhap`);

--
-- Các ràng buộc cho bảng `loaichi`
--
ALTER TABLE `loaichi`
  ADD CONSTRAINT `lc` FOREIGN KEY (`tendangnhap`) REFERENCES `user` (`tendangnhap`);

--
-- Các ràng buộc cho bảng `loaithu`
--
ALTER TABLE `loaithu`
  ADD CONSTRAINT `lt` FOREIGN KEY (`tendangnhap`) REFERENCES `user` (`tendangnhap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
