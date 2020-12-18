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
create table MONHOC(
	MAMH int(10) not null,
    TENMH varchar(50) not null,
    MAGS int(10) not null,
    MAHS int(10) not null,
    primary key (MAMH),
    foreign key (MAGS) references GIASU(MAGS),
    foreign key (MAHS) references HOCSINH(MAHS)
);

INSERT INTO MONHOC VALUE 

