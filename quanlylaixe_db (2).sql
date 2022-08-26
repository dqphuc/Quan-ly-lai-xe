-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2022 lúc 10:33 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlylaixe_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `hohocvien` varchar(50) NOT NULL,
  `tenhocvien` varchar(10) NOT NULL,
  `ngaysinh` varchar(20) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `hokhau` varchar(200) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `hang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id`, `hohocvien`, `tenhocvien`, `ngaysinh`, `gioitinh`, `hokhau`, `dienthoai`, `hang`) VALUES
(1, 'Diệp Quốc', 'Phục', '03/6/1982', 'Nam', 'Rạch Giá - Kiên Giang', '', ''),
(2, 'Trần Văn', 'Mín', '16/3/1985', 'Nam', 'Vĩnh Quang - Rạch Giá - Kiên Giang', '', ''),
(3, 'Nguyễn Thị Mỹ', 'Linh', '12/3/2000', 'Nữ', 'Rạch sỏi - Rạch Giá - Kiên Giang', '0919999999', ''),
(5, 'Trần Thị Thu', 'Hiên', '09/9/1987', 'Nữ', 'Rạch Giá - Kiên Giang', '0914603517', 'B2'),
(6, 'Trần Thị Thu', 'Tâm', '09/9/1987', 'Nữ', 'Rạch Giá - Kiên Giang', '0914603517', 'B2'),
(7, 'Trịnh Hoàng', 'Nam', '1/1/1987', 'Nam', 'Châu Thành - Kiên Giang', '0919999999', 'C'),
(8, 'ccc', 'ddd', '12/3/2000', 'Nam', 'sdf', '0919923932', 'b2'),
(9, 'sffff', 'rrr', '12/3/2000', 'Nữ', 'd', '999', 'c'),
(10, 'Trần Thị Thu', 'Nam', '09/9/1987', 'Nữ', 'Châu Thành - Kiên Giang', '0919999999', 'B2'),
(11, 'Diep Quoc', 'Phuc', '03/6/1982', 'Nam', 'Rạch Giá - Kiên Giang', '0919923932', 'B2'),
(12, 'qư', 'ư', '1', 'a', '12', '123', 'a1'),
(13, 'danh văn', 'Hùng', '09/9/1972', 'Nam', '123 đống đa', '0919923932', 'B2'),
(14, 'Trần Thị Thu', 'ddd', '09/9/1987', 'Nữ', 'Châu Thành - Kiên Giang', '0914603517', 'B2'),
(15, 'Diệp Quốc', 'Phục', '09/9/1987', 'Nam', '12', '999', 'C'),
(16, 'Bành Văn', 'Nam', '09/9/1987', 'Nam', '123 đống đa', '0914603517', 'A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `mahv` varchar(10) NOT NULL,
  `mamh` varchar(2) NOT NULL,
  `diemtx` double NOT NULL,
  `diemdk1` double NOT NULL,
  `diemdk2` double NOT NULL,
  `diemthi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthichungchi`
--

CREATE TABLE `diemthichungchi` (
  `mahv` varchar(10) NOT NULL,
  `diemlt` double NOT NULL,
  `diemsh` double NOT NULL,
  `diemcc` double NOT NULL,
  `diemdt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsnhaphoc`
--

CREATE TABLE `dsnhaphoc` (
  `id` int(11) NOT NULL,
  `hohocvien` varchar(50) NOT NULL,
  `tenhocvien` varchar(10) NOT NULL,
  `ngaysinh` varchar(10) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `hokhau` varchar(200) NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `hang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `magv` varchar(10) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `giaovientt` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `quyen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvien`
--

CREATE TABLE `hocvien` (
  `mahv` varchar(10) NOT NULL,
  `hohv` varchar(50) NOT NULL,
  `tenhv` varchar(10) NOT NULL,
  `ngaysinh` varchar(20) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `malop` varchar(10) NOT NULL,
  `nhom` int(11) NOT NULL,
  `dangkythilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocvien`
--

INSERT INTO `hocvien` (`mahv`, `hohv`, `tenhv`, `ngaysinh`, `gioitinh`, `diachi`, `malop`, `nhom`, `dangkythilai`) VALUES
('', 'Diệp Quốc', 'Phục', '0000-00-00', 'Nam', 'P23-09 Ngô Quang Hớn - An Hòa - Rạch Giá - Kiên Giang', 'B2-K20/202', 0, 0),
('', 'Trần Quốc', 'Phục', '12/3/2000', 'Nam', 'Giồng Riềng - Kiên Giang', '', 0, 0),
('', 'Trần Quốc', 'Phục', '2/3/2014', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `rule`) VALUES
(1, 'dqphuc', 'admin', 'dqphuc29@gmail.com', 'admin'),
(2, 'nvthang', '123456', 'nvthang@caodangnghekg.edu.vn', 'teacher'),
(3, 'lqnha', '123456', 'lqnha@caodangnghekg.edu.vn', 'staff'),
(4, 'ttthien', '123456', 'ttthien@caodangnghekg.edu.vn', 'teacher'),
(10, 'dvhung', '123456', 'dvhung@gmail.com', 'staff');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) NOT NULL,
  `tenlop` varchar(50) NOT NULL,
  `giaovienchunhiem` varchar(50) NOT NULL,
  `ngaynhaphoc` varchar(20) NOT NULL,
  `ngaythichungchi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `giaovienchunhiem`, `ngaynhaphoc`, `ngaythichungchi`) VALUES
('B2-K2/2021', 'Lái xe ô tô hạng B2 Khóa 2/2021', 'Nguyễn Hướng Dương', '01/3/2021', '15/4/2021'),
('B2-K3/2021', 'Lái xe ô tô hạng B2 Khóa 3/2021', 'Trịnh Hoàng Nam', '01/4/2021', '15/7/2021'),
('B2-K4/2021', 'Lái xe ô tô hạng B2 Khóa 4/2021', 'Nguyễn Thanh Đông', '05/4/2021', '20/7/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(2) NOT NULL,
  `tenmh` varchar(50) NOT NULL,
  `sotiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomthuchanh`
--

CREATE TABLE `nhomthuchanh` (
  `malop` varchar(10) NOT NULL,
  `nhom` int(11) NOT NULL,
  `mamonhoc` int(2) NOT NULL,
  `magv` varchar(10) NOT NULL,
  `gvdungtenth` varchar(50) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `hocky` int(11) NOT NULL,
  `namhoc` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanconglythuyet`
--

CREATE TABLE `phanconglythuyet` (
  `malop` varchar(10) NOT NULL,
  `mamonhoc` int(11) NOT NULL,
  `magv` varchar(10) NOT NULL,
  `gvdungtenlt` varchar(50) NOT NULL,
  `ngaybatdau` varchar(20) NOT NULL DEFAULT '',
  `ngayketthuc` varchar(20) NOT NULL DEFAULT '',
  `hocky` int(11) NOT NULL,
  `namhoc` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dsnhaphoc`
--
ALTER TABLE `dsnhaphoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
