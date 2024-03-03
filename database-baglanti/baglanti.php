<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=testdb;', 'root', '12345');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query('SET @@lc_time_names = "tr_TR"');   //zaman dilimini türkçeye çevirdik
    $db->query('SET CHARACTER SET utf8mb4');  //database dil setini ayarladık
    $db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');    //bağlantı dil setimizi ayarladık
} catch (PDOException $e) {
    echo $e->getMessage();
}
