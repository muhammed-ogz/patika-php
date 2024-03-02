<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '12345');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query('SET @@lc_time_names = "tr_TR"');
    $db->query('SET CHARACTER SET utf8mb4');
    $db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');
} catch (PDOException $e) {
    echo $e->getMessage();
}

//kosullama limit ve sorgulama
$sql = "SELECT * FROM users LIMIT 5";
$sql2 = "SELECT * FROM users WHERE id >0 && users.id <=5";
$sql3 = "SELECT * FROM users WHERE id >0 && users.id <=5 ORDER BY id DESC";
//$q = $db->query($sql3);
//$users = $q->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";

//LIKE KULLANIMI

$sql4 = "SELECT username,grup FROM users WHERE username LIKE '%sr%'";
//$q = $db->query($sql4);
//$users = $q->fetchAll(PDO::FETCH_ASSOC);
//
//echo "<ul>";
//
//foreach ($users as $key => $value) {
//
//    echo "<li> {$value['username']} adlı kişinin kayıt olduğu gruplar :  {$value['grup']}";
//
//}
//
//echo "</ul>";

$sql5 = "SELECT MIN(id) as en_kucuk_id, MAX(id) as en_buyuk_id FROM users";
$in = "SELECT * FROM users WHERE id IN(1,2,3,4)";
$between = "SELECT * FROM users WHERE id BETWEEN 2 AND 4";
$q = $db->query($between);
$users = $q->fetchAll(PDO::FETCH_ASSOC);



print_r($users);



