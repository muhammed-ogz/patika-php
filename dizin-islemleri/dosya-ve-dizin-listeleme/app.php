<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya ve Dizin Listeleme</title>
</head>

<body>
    <pre>
        PHP' de dosya dizin listeleme işlemlerini scandir() ve glob() fonksiyonları ile yapıyoruz.
        scandir() : girilen dizin içerisindeki tüm dosya ve klsörleri tarayıp geri döndermeye yarar.
        glob() : girilen dizin içerisindeki tüm dosya ve klasörleri tarayıp geri döndermeye yarar. bunun scandirden farkı filtreleme işlemi yapabilmesidir.
        __DIR__ : bu bize dosyanın bulunduğu tam dizin yolunu gösterecek.

        scandir fonksiyonunda dizin içerisindeki dosyaların sadece adı yazarken glob fonksiyonunda dizin içerisindeki dosyalar yolları ile beraber array olarak döner.
    </pre>
</body>

</html>

<?php
/*
scandir ve __DIR__ kullanımı : 

    $basedir = require "../../settings.php";   //../ komutu ile bir klasör üste çıkıyorum 
    $newDir = scandir($basedir);

    print_r($newDir); 

glob fonksiyonu kullanımı : 
glob($basedir); //bulunan dosyanın hangi dizin içerisinde olduğunu gösterir.
glob($basedir.'/*');   // bu dizin içerisindeki herşeyi getir anlamına gelir
glob($basedir.'/*.php');   //bu dizin içerisindeki php uzantılı bütün dosyaları getir anlamına gelir.

glob ile sadece dosya adlarını gösterecek şekilde düzenleme yaparsak

$array = glob($basedir.'/*');
$newArray = array_map(function($param) use($basedir) {  //basedir değişkenini dışarıdan çağırmak için de bunu kullanabiliriz.
    return str_replace($basedir,'',$param);
},$array);

echo "<pre>";
print_r($newArray);

//basedir yolu üzerindeki dosyaları klasörler ile beraber alt klasörleri, dosyaları göstermek için düzenleme yaparsak 

function listAll($directory)
{
    $files = scandir($directory);
    echo "<ul>";
    foreach ($files as $file) :
        if ($file != '.' && $file != '..') {
            echo "<li>";
            echo $file;
            if (is_dir($directory . "/" . $file)) {
                listAll($directory . "/" . $file);
            }
            echo "</li>";
        }
    endforeach;
    echo "</ul>";
};

listAll($basedir);

//glob fonksiyonu ile birden çok dosya içerisine filtreleme işlemi nasıl yapılır ? 

$newFilteredDir = glob($basedir . '/*{php,txt}',GLOB_BRACE);

glob fonksiyonunda böyle birden çok dosyayı bir arada kullanabilmek için uzantıları belirttikten sonra GLOB_BRACE değerini 
girmemiz gerekmektedir
*/





