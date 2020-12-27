create database QuanLyGiaSu;
use QuanLyGiaSu;

create table LOGIN(
	USENAME nvarchar(100) not null,
    PASSWOD nchar(100) not null,
    primary key (USENAME)
);

create table GIASU(
	MAGS int(10) not null,
    TENGS varchar(50) not null,
    NGAYSINH datetime not null,
    GIOITINH char(1) not null check (gioitinh in(N'M', N'F')),
    DIACHI varchar(50) not null,
    SDT char(10),
    primary key (MAGS)
);

create table HOCSINH(
	MAHS int(10) not null,
    TENHS varchar(50) not null,
    NGAYSINH datetime not null,
    GIOITINH char(1) not null check (gioitinh in(N'M', N'F')),
    DIACHI varchar(50) not null,
    primary key (MAHS)
);

create table PHUHUYNH(
	MAPH int(10) not null,
    TENPH varchar(50) not null,
    GIOITINH char(1) not null check (gioitinh in(N'M', N'F')),
    DIACHI varchar(50) not null,
    SDT char(10) not null,
    primary key (MAPH)
);
INSERT INTO PHUHUYNH VALUES ('PH01', 'NGUYỄN HOÀI AN', 'NAM', 'NHA TRANG', '0963357456');

create table MONHOC(
	MAMH int(10) not null,
    TENMH varchar(50) not null,
    MAGS int(10) not null,
    MAHS int(10) not null,
    primary key (MAMH),
    foreign key (MAGS) references GIASU(MAGS),
    foreign key (MAHS) references HOCSINH(MAHS)
);

INSERT INTO MONHOC VALUES ('T12', 'Toán', 'A03', 'T001');
INSERT INTO MONHOC VALUES ('V11', 'Ngữ Văn', 'B01', 'T012');
INSERT INTO MONHOC VALUES ('A10', 'Anh Văn', 'C15', 'T023');
INSERT INTO MONHOC VALUES ('L12', 'Lý', 'A01', 'T005');
INSERT INTO MONHOC VALUES ('H12', 'Hóa', 'A02', 'T011');


