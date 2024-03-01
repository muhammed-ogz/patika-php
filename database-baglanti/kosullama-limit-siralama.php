<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=testdb','root','12345');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->query('SET @@lc_time_names = "tr_TR"');
    $db->query('SET CHARACTER SET utf8mb4');
    $db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');
}catch (PDOException $e){
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

$sql4 = "SELECT * FROM users WHERE username LIKE '%sr%'";
$q = $db->query($sql4);
$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);
