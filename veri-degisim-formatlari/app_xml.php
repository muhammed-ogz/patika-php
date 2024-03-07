<?php
/*
$kisiler = simplexml_load_file('kisiler.xml');
echo "<pre>";
print_r($kisiler);
*/
// header('Content-Type: application/xml charset="utf8"');
// $xml = new SimpleXMLElement('<kisiler/>');


require '../database-baglanti/baglanti.php';

$sql = 'SELECT * FROM users';
$q = $db->query($sql);
$users = $q->fetchAll(PDO::FETCH_ASSOC);

$obj = json_encode($users);

echo $obj;