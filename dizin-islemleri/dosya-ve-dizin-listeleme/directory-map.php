<?php
//basedir adında bir değişken ile anayolu gösterip altındaki dosyaları ve klasörleri teker teker liste halinde gösteren bir program 

$basedir = require '../../settings.php';

function listAll($dir)
{
    $files = scandir($dir);
    echo "<ul>";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "<li>";
            echo $file;
            if (is_dir($dir . '/' . $file)) {
                listAll($dir . '/' . $file);
            }
            echo "</li>";
        }
    }
    echo "</ul>";
};
listAll($basedir);
