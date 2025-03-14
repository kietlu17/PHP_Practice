CREATE TABLE t0x858653d3cf577e0e73e493d3aa5443d7 (
 
  c0xdf8b0f1ea4bd9a9167948ae6684cecb9= VARBINARY(255) PRIMARY KEY NOT NULL ,
  c0xf5af392cecaff04083e4c8be19015e11 VARBINARY(255),
  c0xc9be9a5dd8b4f5acd466fe51f7abc6fd VARBINARY(255),
  c0x47e1693da6673f2e68b5d233fa30b0e9 VARBINARY(255),
  c0x49b1efec24d47ae21fc4c3c5c3f7206b VARBINARY(255),
  c0x9f1e61242079aff4c3f12e4583b5383c VARBINARY(255),
  c0xd6c661c53d01028be1eb5af9839591cb VARBINARY(255)
);

CREATE TABLE t0xb887b1f68a4ca01e59d7a4bdad724d32 (
  c0xc3c2d83ae09302a5f51184644c501e94 VARBINARY(255) PRIMARY KEY NOT NULL ,
  c0xd4c2e98255990afe05dad080f1943da7 VARBINARY(255)
);

ALTER TABLE t0x858653d3cf577e0e73e493d3aa5443d7 ADD FOREIGN KEY (c0xd6c661c53d01028be1eb5af9839591cb) REFERENCES t0xb887b1f68a4ca01e59d7a4bdad724d32 (c0xc3c2d83ae09302a5f51184644c501e94);
-- key = 'kiet'

create table metadata (
  id SERIAL PRIMARY KEY,
  table_name_enc varchar(255),  -- Tên bảng đã mã hóa
  column_name_enc varchar(255), -- Tên cột đã mã hóa
  real_table_name VARCHAR(255),   -- Tên bảng thực tế
  real_column_name VARCHAR(255)   -- Tên cột thực tế
)

INSERT INTO `metadata` (`id`, `table_name_enc`, `column_name_enc`, `real_table_name`, `real_column_name`) VALUES
(1, 0xb887b1f68a4ca01e59d7a4bdad724d32, 0xc3c2d83ae09302a5f51184644c501e94, 'KHOA', 'ID'),
(2, 0xb887b1f68a4ca01e59d7a4bdad724d32, 0xd4c2e98255990afe05dad080f1943da7, 'KHOA', 'TEN'),
(3, 0x858653d3cf577e0e73e493d3aa5443d7, 0xf5af392cecaff04083e4c8be19015e11, 'SINHVIEN', 'ho_ten'),
(4, 0x858653d3cf577e0e73e493d3aa5443d7, 0xc9be9a5dd8b4f5acd466fe51f7abc6fd, 'SINHVIEN', 'masv'),
(5, 0x858653d3cf577e0e73e493d3aa5443d7, 0x47e1693da6673f2e68b5d233fa30b0e9, 'SINHVIEN', 'matkhau'),
(6, 0x858653d3cf577e0e73e493d3aa5443d7, 0x49b1efec24d47ae21fc4c3c5c3f7206b, 'SINHVIEN', 'ngaysinh'),
(7, 0x858653d3cf577e0e73e493d3aa5443d7, 0xd6c661c53d01028be1eb5af9839591cb, 'SINHVIEN', 'id_khoa'),
(8, 0x858653d3cf577e0e73e493d3aa5443d7, 0xdf8b0f1ea4bd9a9167948ae6684cecb9, 'SINHVIEN', 'id')

-- INSERT INTO `metadata` (`id`, `table_name_enc`, `column_name_enc`, `real_table_name`, `real_column_name`) VALUES
-- (2, '5a63aebddb72c18e042ad066a97f9145', 'b80bb7740288fda1f201890375a60c8f', 'SINHVIEN', 'id'),
-- (3, '5a63aebddb72c18e042ad066a97f9145', '209dbda1655e93abcde595f9336620a1', 'SINHVIEN', 'ho_ten'),
-- (4, '5a63aebddb72c18e042ad066a97f9145', '9f7a044ba9165e95a5e0fbe935886594', 'SINHVIEN', 'masv'),
-- (5, '5a63aebddb72c18e042ad066a97f9145', 'a788f6d55914857d4b97c1de99cb896b', 'SINHVIEN', 'matkhau'),
-- (6, '5a63aebddb72c18e042ad066a97f9145', '8e486fed03f4eccac57034ee91cbec9b', 'SINHVIEN', 'ngaysinh'),
-- (7, '5a63aebddb72c18e042ad066a97f9145', '452e96aaf1bb0959fdee3605009951b0', 'SINHVIEN', 'id_khoa'),
-- (8, '94e93eb2a42dd7d444eecd7904f8ae3f', 'b80bb7740288fda1f201890375a60c8f', 'KHOA', 'id'),
-- (9, '94e93eb2a42dd7d444eecd7904f8ae3f', 'b78ed53b341fb90dec4aea68e95d8344', 'KHOA', 'ten_khoa');

-- INSERT INTO `metadata` (`id`, `table_name_enc`, `column_name_enc`, `real_table_name`, `real_column_name`) VALUES (NULL, AES_ENCRYPT('SINHVIEN','kiet'), AES_ENCRYPT('diem','kiet'), 'SIHHVIEN', 'diem');

