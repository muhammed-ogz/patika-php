use testdb;
SELECT * FROM users;

SELECT *, CONCAT(user_name,' ', user_surname) as user_fullname FROM users;

UPDATE users SET user_name = 'İlayda' WHERE id = 5;

use testdb;
UPDATE users SET user_grup = 'A,B,C,D';