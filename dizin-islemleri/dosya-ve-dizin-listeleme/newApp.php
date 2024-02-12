<?php

$basedir = require '../../settings.php';

$arrayOne = glob($basedir . '/*');

$arrayTwo = array_map(function ($param) use ($basedir) {
    return str_replace($basedir,'',$param);
}, $arrayOne);

echo "<pre>";
echo "Dizin içerisindeki dosyalar : ";
print_r($arrayTwo);
