<?php

/* 
PDO bağlantı 

try catch blokları ile hataları yakalamaya yarar.

*/

try 
{
    $db = new PDO('mysql:host=localhost;dbname=testdb;', 'root', '12345');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) 
{
    echo $e->getMessage();
}
