CREATE DATABASE testdb CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE testdb;
CREATE TABLE users (
	id INT(11),
	isim VARCHAR(100),
	soyisim VARCHAR(100),
	dogum_yili YEAR
);

#SHOW TABLES;

#EXPLAIN users;


#RENAME TABLE kullanicilar TO users;

#ALTER TABLE users ADD COLUMN grup VARCHAR(255);

#ALTER TABLE users ADD COLUMN (
#	kayit_tarihi DATETIME,
#	guncelleme_tarihi DATETIME
#);

#ALTER TABLE users CHANGE guncelleme_tarihi guncelleme DATETIME;
#ALTER TABLE users CHANGE isim name VARCHAR(255);
#ALTER TABLE users CHANGE soyisim surname VARCHAR(255);

#drop table users;

CREATE TABLE users (
	id INT(11),
	username VARCHAR(255),
	kayit_tarihi DATETIME,
	PRIMARY KEY(id)

);

create table blog(
	id INT(11),
	dil INT(11),
	baslik VARCHAR(255),
	icerik TEXT,
	PRIMARY KEY(id,dil)
);

create table sayfa(
	id INT(11) AUTO_INCREMENT,
	dil INT(11) NOT NULL,
	baslik VARCHAR(255) NOT NULL,
	icerik TEXT NOT NULL,
	PRIMARY KEY(id)
);







