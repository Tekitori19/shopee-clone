create database bobapop5;
go
use bobapop5
go

CREATE TABLE [Category] (
  [category_id] varchar(10),
  [name] nvarchar(100),
  PRIMARY KEY ([category_id])
);

CREATE TABLE [Product] (
  [product_id] varchar(10),
  [product_name] nvarchar(100),
  [product_picture] varchar(1000),
  [price] decimal(10,2),
  [category_id] varchar(10),
  CONSTRAINT [FK_Category.category_id]
    FOREIGN KEY ([category_id])
      REFERENCES [Category]([category_id]),
  PRIMARY KEY ([product_id])
);


CREATE TABLE [Account] (
  [account_id] varchar(10),
  [full_name] nvarchar(100),
  [email] nvarchar(50),
  [password] nvarchar(100),
  [phone] nvarchar(10),
  [address] nvarchar(100),
  [role] nvarchar(10),
  PRIMARY KEY ([account_id])
);

CREATE TABLE [Order] (
  [order_id] varchar(10),
  [order_date] datetime,
  [total_price] decimal(10,2),
  [status] nvarchar(10),
  [email] nvarchar(50),
  [full_name] nvarchar(100),
  [phone] nvarchar(10),
  [address] nvarchar(100),
  [shipment] nvarchar(100),
  [message] nvarchar(100),
  PRIMARY KEY ([order_id])
);
CREATE TABLE [Order_Detail] (
  [order_detail_id] varchar(10),
  [quantity] int,
  [size] varchar(10),
  [price] decimal(10,2),
  [ice] int,
  [suggar] int,
  [product_id] varchar(10),
  [order_id] varchar(10),
  PRIMARY KEY ([order_detail_id], [order_id]),
  CONSTRAINT [FK_Order_Detail.order_id]
    FOREIGN KEY ([order_id])
      REFERENCES [Order]([order_id]),
  CONSTRAINT [FK_Order_Detail.product_id]
    FOREIGN KEY ([product_id])
      REFERENCES [Product]([product_id])
);


insert into Category values('C1',N'Trà Sủi Bọt');
insert into Category values('C2',N'Trà Con Gái');
insert into Category values('C3',N'Trà Sữa');
insert into Category values('C4',N'Trà Tươi');
insert into Category values('C5',N'Trà Đặc Biệt');
insert into Category values('C6',N'Kem Tuyết');
insert into Category values('C7',N'New Product');

insert into Product values('P1',N'Sữa Tươi Trân Châu Đường Đen' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/30-sua-tuoi-tran-chau-600x600.jpg' ,35000 ,'C7');
insert into Product values('P2',N'Chocominz' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/31-Chocominz-600x600.jpg' ,38000 ,'C7');
insert into Product values('P3',N'Matcheese' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/29-Tra-xanh-pho-mai-600x600.jpg' ,49000 ,'C7');
insert into Product values('P4',N'Trà Raspberry' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/16-Dau-Rung-600x600.jpg' ,38000 ,'C7');
insert into Product values('P5',N'Hồng Trà Dâu' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/10-Hong-Tra-Dau-600x600.jpg' ,35000 , 'C7');
insert into Product values('P6',N'Trà Thanh Xuân' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/12-Thanh-Xuan-600x600.jpg' ,35000 ,'C7');

insert into Product values('P7',N'Trà Bí Đao Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-tra-bi-dao-sb-600x600.jpg' ,36000 ,'C1');
insert into Product values('P8',N'Trà Xanh Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/02-tra-xanh-sb-600x600.jpg' ,38000 ,'C1');
insert into Product values('P9',N'Hồng Trà Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/03-Hong-tra-sb-600x600.jpg' ,38000 ,'C1');
insert into Product values('P10',N'Trà Alisan Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/07-Alisan-SB-600x600.jpg' ,41000 ,'C1');
insert into Product values('P11',N'Trà Gạo Nâu Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/08-Gao-nau-SB-600x600.jpg' ,41000 ,'C1');
insert into Product values('P12',N'Trà Quan Âm Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/09-Quan-Am-Sb-600x600.jpg' ,41000 ,'C1');
insert into Product values('P13',N'Trà Ô Long Sủi Bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/10-Olong-SB-600x600.jpg' ,41000 ,'C1');
insert into Product values('P14',N'Trà hoa sủi bọt' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/05-tra-hoa-600x600.jpg' ,38000 ,'C1');

insert into Product values('P15',N'Trà Gạo Nâu' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-tra-gao-nau-600x600.jpg' ,35000 ,'C2');
insert into Product values('P16',N'Trà Hoa Lục Trà' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/02-Hoa-Luc-Tra-600x600.jpg' ,35000 ,'C2');
insert into Product values('P17',N'Trà Mật Ong Nha Đam' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/03-mat-ong-nha-dam-600x600.jpg' ,35000 ,'C2');
insert into Product values('P18',N'Trà Blueberry' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/04-tra-blueberry-600x600.jpg' ,41000 ,'C2');
insert into Product values('P19',N'Trà Đẹp' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/05-tra-dep-600x600.jpg' ,41000 ,'C2');
insert into Product values('P20',N'Trà Bưởi' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/06-tra-buoi-600x600.jpg' ,38000 ,'C2');

insert into Product values('P21',N'Trà Sữa Trân Châu' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/32-tran-chau-600x600.jpg' ,32000 ,'C3');
insert into Product values('P22',N'Trà Sữa Darjeeling' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/16-Ts-Dajeling-600x600.jpg' ,32000 ,'C3');
insert into Product values('P23',N'Trà Sữa Dâu Tây' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/05-Ts-Dau-600x600.jpg' ,29000 ,'C3');
insert into Product values('P24',N'Trà Sữa Cà Phê' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-ceylon-600x600.jpg' ,32000 ,'C3');
insert into Product values('P25',N'Trà Sữa Ô Long' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/17-Ts-oolong-600x600.jpg' ,32000 ,'C3');
insert into Product values('P26',N'Trà Sữa Bạc Hà' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/12-Ts-Bac-Ha-600x600.jpg' ,32000 ,'C3');
insert into Product values('P27',N'Trà Sữa Taichi' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/24-Taichi-600x600.jpg' ,32000 ,'C3');
insert into Product values('P28',N'Trà Sữa Đào' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/15-Ts-Dao-600x600.jpg' ,32000 ,'C3');
insert into Product values('P29',N'Trà Sữa Sôcôla' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/06-Ts-socola-600x600.jpg' ,32000 ,'C3');
insert into Product values('P30',N'Trà Sữa Khoai Môn' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/07-Ts-Khoai-mon-600x600.jpg' ,32000 ,'C3');
insert into Product values('P31',N'Trà Sữa Caramen' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/08-Caramen-600x600.jpg' ,32000 ,'C3');
insert into Product values('P32',N'Trà Sữa Hạnh Nhân' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/10-Ts-Hanh-Nhan-600x600.jpg' ,32000 ,'C3');
insert into Product values('P33',N'Trà Sữa Mật Ong' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/11-Ts-Mat-Ong-600x600.jpg' ,32000 ,'C3');
insert into Product values('P34',N'Trà Sữa Alisan' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/20-Tra-alisan-600x600.jpg' ,32000 ,'C3');
insert into Product values('P35',N'Trà Sữa Quan Âm' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/18-Ts-Quan-am-600x600.jpg' ,32000 ,'C3');
insert into Product values('P36',N'Trà Sữa Bí Đao' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/03-Ts-Bi-Dao-600x600.jpg' ,32000 ,'C3');
insert into Product values('P37',N'Trà Sữa Hoa Lục Trà' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/21-Tra-Hoa-600x600.jpg' ,32000 ,'C3');
insert into Product values('P38',N'Trà Sữa BoBaPop' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-ceylon-600x600.jpg' ,29000 ,'C3');
insert into Product values('P39',N'Trà Sữa Gạo Nâu' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/22-Tra-Gao-600x600.jpg' ,32000 ,'C3');
insert into Product values('P40',N'Trà Sữa Vải' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/02-Ts-Vai-600x600.jpg' ,29000 ,'C3');
insert into Product values('P41',N'Trà Sữa 3Q' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/25-3Q-600x600.jpg' ,34000 ,'C3');
insert into Product values('P42',N'Sữa Tươi Trân Châu Đường Đen' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/30-sua-tuoi-tran-chau-600x600.jpg' ,35000 ,'C3');
insert into Product values('P43',N'Chocominz' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/31-Chocominz-600x600.jpg' ,38000 ,'C3');
insert into Product values('P44',N'Matcheese' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/29-Tra-xanh-pho-mai-600x600.jpg' ,49000 ,'C3');

insert into Product values('P45',N'Trà Bí Đao' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-Bi-Dao-600x600.jpg' ,28000 ,'C4');
insert into Product values('P46',N'Hồng Trà Ceylon' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/02-Ceylon-600x600.jpg' ,32000 ,'C4');
insert into Product values('P47',N'Trà Xanh Bobapop' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/03-Tra-Xanh-BBP-600x600.jpg' ,32000 ,'C4');
insert into Product values('P48',N'Trà Cao Sơn Ô Long' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/04-Cao-Son-Olong-600x600.jpg' ,32000 ,'C4');
insert into Product values('P49',N'Cao Sơn Trà Tươi' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/05-Cao-Son-Tra-Tuoi-600x600.jpg' ,32000 ,'C4');
insert into Product values('P50',N'Hồng Trà Darjeeling' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/06-Hong-Tra-Dajeling-600x600.jpg' ,32000 ,'C4');
insert into Product values('P51',N'Trà Quan Âm' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/09-Quan-Am-600x600.jpg' ,32000 ,'C4');
insert into Product values('P52',N'Trà Alishan Lạnh' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/07-Alisan-Lanh-600x600.jpg' ,32000 ,'C4');

insert into Product values('P53',N'Trà Xanh Xí Muội' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/01-tra-xanh-xi-muoi-600x600.jpg' ,32000 ,'C5');
insert into Product values('P54',N'Trà Xanh Mật Ong Chanh' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/05-tx-mat-ong-chanh-600x600.jpg' ,32000 ,'C5');
insert into Product values('P55',N'Trà Xanh Chanh Dây' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/06-chanh-day-600x600.jpg' ,32000 ,'C5');
insert into Product values('P56',N'Trà Xanh Xoài' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/09-Tra-xanh-Xoai-600x600.jpg' ,35000 ,'C5');
insert into Product values('P57',N'Trà Đào' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/13-Dao-600x600.jpg' ,38000 ,'C5');
insert into Product values('P58',N'Trà Xanh Kiwi' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/14-Kiwi-600x600.jpg' ,38000 ,'C5');
insert into Product values('P59',N'Trà Vải' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/15-Vai-600x600.jpg' ,38000 ,'C5');
insert into Product values('P60',N'Trà Raspberry' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/16-Dau-Rung-600x600.jpg' ,38000 ,'C5');
insert into Product values('P61',N'Hồng Trà Dâu' ,'https://store.bobapop.com.vn/resource/uploads/2019/06/10-Hong-Tra-Dau-600x600.jpg' ,35000 ,'C5');
insert into Product values('P62',N'Trà Thanh Xuân','https://store.bobapop.com.vn/resource/uploads/2019/06/12-Thanh-Xuan-600x600.jpg' ,35000 ,'C5');

insert into Product values('P63',N'Kem Tuyết Sôcôla','https://store.bobapop.com.vn/resource/uploads/2019/06/05-Socola-600x600.jpg' ,38000 ,'C6');
insert into Product values('P64',N'Kem Tuyết Trà Xanh Nhật Bản','https://store.bobapop.com.vn/resource/uploads/2019/06/08-Txnb-600x600.jpg' ,44000 ,'C6');

insert into Account values ('admin', N'admin',N'admin',N'admin',N'admin',N'admin',N'1')


delete from account