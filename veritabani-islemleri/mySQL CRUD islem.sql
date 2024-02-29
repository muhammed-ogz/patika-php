USE testdb;
SELECT
	* 
FROM
	users;
SELECT
	*,
	CONCAT( user_name, ' ', user_surname ) AS user_fullname 
FROM
	users;
UPDATE users 
SET user_name = 'İlayda' 
WHERE
	id = 5;
USE testdb;
UPDATE users 
SET user_grup = 'A,B,C,D';
SELECT
	* 
FROM
	users;
INSERT INTO users
VALUES
	( 8, 'Cabbar', 'K*rdogullari', 'A,B,C,D' );
DELETE 
FROM
	users 
WHERE
	id = '8'; --#LIKE
-- #arama sorgusu yapılırken LIKE komutu kullanılır.
USE testdb;
SELECT
	* 
FROM
	users 
WHERE
	user_name LIKE '%at%' ##SUM MIN MAX COUNT - GROUP HAVING(WHERE)
	USE testdb;
SELECT
	SUM( id ) AS id_toplamlari 
FROM
	users;#toplam değeri verir
SELECT
	MIN( id ) AS id_toplamlari 
FROM
	users;#minimum değeri verir
SELECT
	MAX( id ) AS id_toplamlari 
FROM
	users; --#maximum değeri verir
SELECT
	COUNT( id ) AS id_toplamlari 
FROM
	users; --#değer sayısını verir
#GROUP HAVING
SELECT
	* 
FROM
	users;
USE testdb;
SELECT
	COUNT( id ) AS toplam,
	user_name 
FROM
	users 
GROUP BY
	user_grup;
	
	
	#HAVING değeri sonradan as ile oluşturduğumuz değerde WHERE komutu ile yapabileceklerimizi yapmamızı sağlar.
	
	
	
	# IN değeri belli bir sıraya kadar değer getirmeyi sağlar.
	
	USE testdb;
	
	SELECT * FROM users WHERE id IN(1,2,3);
	
	#BETWEEN belirli aralıktaki değerleri getirmeye yarar.
	
	SELECT * FROM users WHERE id BETWEEN 1 and 5;