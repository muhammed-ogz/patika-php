<?php
/*
    normalde dosyalarımızı teker teker require ile dahil edebilecekken 20-30 tane php dosyasını dahil edemeyeceğimize göre
    bizim farklı bir method kullanmamız gerekiyor.
*/
$basedir = require '../../settings.php';

$array = glob($basedir.'/newExample/*');
foreach($array as $file){
    require $file;
};

post();
get();
app();