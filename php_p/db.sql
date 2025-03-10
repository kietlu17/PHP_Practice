CREATE TABLE `sanpham` (
  `masp` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `ten` varchar(255),
  `gia` float,
  `maloai` int
);

CREATE TABLE `loai` (
  `maloai` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `ten` varchar(255)
);

CREATE TABLE `user` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `password` varchar(255),
  `id_role` int
);

CREATE TABLE `role` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `ten` varchar(255)
);

ALTER TABLE `sanpham` ADD FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

ALTER TABLE `user` ADD FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
