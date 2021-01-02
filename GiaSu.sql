create database giasu;
use giasu;

create table `logins` (
  `tendangnhap` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  PRIMARY KEY (`tendangnhap`)
);

create table `giaoviens` (
  `GV_id` int(11) NOT NULL,
  `tengiaovien` varchar(100) NOT NULL,
  `ngaysinh` datetime not null,
  `gioitinh` varchar(15) NOT NULL,
  `Diachi` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  PRIMARY KEY (`GS_id`)
);

create table `hocsinhs` (
  `HV_id` int(11) NOT NULL,
  `tehocsinh` varchar(100) NOT NULL,
  `ngaysinh` datetime not null,
  `gioitinh` varchar(15) NOT NULL,
  `Diachi` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  PRIMARY KEY (`HS_id`)
);

create table `monhocs` (
  `MH_id` int(11) NOT NULL,
  `tenMH` varchar(100) NOT NULL,
  `TGhoc` varchar(50) NOT NULL,
  `GS_id` int(11) NOT NULL,
  PRIMARY KEY (`KH_id`),
  FOREIGN KEY (`GV_id`) REFERENCES `giaoviens`(`GV_id`)
);
    
create table `lophoc` (
  `tenlop` varchar(100) NOT NULL,
  `tenhocsinh` varchar(100) NOT NULL,
  `tengiaovien` varchar(100) NOT NULL
  );
  
create table `luong` (
  `tengiaovien` varchar(100) NOT NULL,
  `luongthang` varchar(50) NOT NULL,
  FOREIGN KEY (`tengiaovien`) REFERENCES `giaoviens`(`tengiaovien`)
);

INSERT INTO `logins`(`tendangnhap`, `matkhau`) VALUE
('anhthu', 'anhthu123'),
('linhnhi', 'linh93'),
('anhtuan', '5564761'),
('hoahoe', 'hoa20136'),
('vynhuoc', 'thuocduoc12'),
('nhatky', 'nhatkytutu'),
('yenkinh', '123456789'),
('baobao', 'baogivay');

INSERT INTO `giaoviens` (`GV_id`, `tengiaovien`, `ngaysinh`, `gioitinh`, `Diachi`, `email`, `sodienthoai`) VALUES
('G1', 'LÊ ANH THƯ', '23-05-1990', 'Nữ', 'Vĩnh Hòa', 'anhthu@gmail.com', '0124538872'),
('G2', 'NÔNG THỊ LINH', '15-09-1993', 'Nữ', 'Vĩnh Hòa', 'linhnhi@gmail.com', '0123654854'),
('G3', 'TRẦN QUỐC ANH', '03-11-1989', 'Nam', 'Vĩnh Hải', 'anhtuan@gmail.com', '0125413846'),
('G4', 'LÊ THỊ HOA', '16-01-1992', 'Nữ', 'Vĩnh Hải', 'hoahong@gmail.com', '0369551432'),
('G5', 'NGUYỄN LÊ VY', '30-09-1990', 'Nữ', 'Vĩnh Hòa', 'vysinh@gmail.com', '0265124698'),
('G6', 'NGUYỄN MINH NHẬT', '14-05-1992', 'Nam', 'Vĩnh Hòa', 'nhatminh@gmail.com', '0864931564'),
('G7', 'TRẦN NGỌC YẾN', '30-09-1990', 'Nữ', 'Vĩnh Hải', 'yensao@gmail.com', '0265124698'),
('G8', 'LÊ ĐĂNG BẢO', '30-09-1990', 'Nam', 'Vĩnh Hòa', 'baobinh@gmail.com', '0265124698');

INSERT INTO `hocsinhs` (`HV_id`, `tenhocsinh`, `ngaysinh`, `gioitinh`, `Diachi`, `email`, `sodienthoai`) VALUES
('HS01', 'Bá Như Ngọc', '25-10-2015', 'Nam', 'Nha Trang', 'quyenthan@gmail.com', '0968132543'),
('HS02', 'Trần Hoa Anh', '05-12-2014', 'Nữ', 'Hà Tĩnh', 'thaole@gmail.com', '0369541568'),
('HS03', 'Lê Phú Thọ', '04-05-2012', 'Nam', 'Phú Yên', 'kien12@gmail.com', '0969030696'),
('HS04', 'Trần Tâm Hùng', '19-06-2011', 'Nam', 'Vạn Giã', 'thinhido@gmail.com', '0396541253'),
('HS05', 'Nguyễn Minh Thần', '06-09-2009', 'Nam', 'Hà Nội', 'datpro@gmail.com', '0368941564'),
('HS06', 'Lê Bách Hoa', '25-11-2007', 'Nữ', 'sài gòn', 'huyen99@gmail.com', '0336951425'),
('HS07', 'Nguyễn Duy Anh', '16-02-2005', 'Nữ', 'Cam Ranh', 'anhiuey@gmail.com', '0368151645'),
('HS08', 'Hoàng Phong', '13-05-2004', 'Nam', 'Thanh Hóa', 'shusan@gmail.com', '0369258167');

INSERT INTO `monhocs`(`MH_id`, `tenMH`, `GS_id`) VALUES
('MH1', 'Toán1', 'G1'),
('MH2', 'Toán5', 'G3'),
('MH3', 'Toán9', 'G6'),
('MH4', 'Toán11', 'G8'),
('MH5', 'Anh2', 'G2'),
('MH6', 'Anh12', 'G7'),
('MH7', 'Văn4', 'G4'),
('MH8', 'Văn7', 'G5');

INSERT INTO `lophoc`(`tenlop`, `tenhocsinh`, `tengiaovien`) VALUE
('lop1', 'Bá Như Ngọc', 'LÊ ANH THƯ'),
('lop2', 'Trần Hoa Anh', 'NÔNG THỊ LINH'),
('lop4', 'Lê Bách Hoa', 'LÊ THỊ HOA'),
('lop5', 'Lê Phú Thọ', 'TRẦN QUỐC ANH'),
('lop7', 'Nguyễn Duy Anh', 'NGUYỄN LÊ VY'),
('lop9', 'Hoàng Phong', 'NGUYỄN MINH NHẬT'),
('lop11', 'Nguyễn Minh Thần', 'LÊ ĐĂNG BẢO'),
('lop12', 'Trần Tâm Hùng', 'TRẦN NGỌC YẾN');

INSERT INTO `luong`(`tengiaovien`, `luongthang`) VALUE
('LÊ ANH THƯ', '1.200.000VNĐ/Tháng'),
('NÔNG THỊ LINH', '1.500.000VNĐ/Tháng'),
('TRẦN QUỐC ANH', '1.200.000VNĐ/Tháng'),
('LÊ THỊ HOA', '800.000VNĐ/Tháng'),
('NGUYỄN LÊ VY', '800.000VNĐ/Tháng'),
('NGUYỄN MINH NHẬT', '1.200.000VNĐ/Tháng'),
('TRẦN NGỌC YẾN', '1.500.000VNĐ/Tháng'),
('LÊ ĐĂNG BẢO', '1.200.000VNĐ/Tháng');


