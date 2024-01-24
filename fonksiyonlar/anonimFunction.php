<?php

/**
 * Anonim fonksiyonlar isimsiz fonksiyonlardır.
 * Anonim fonksiyonlar normal fonksiyonlara benzer, çünkü çağrıldığında çalıştırılan kod bloğunu içerirler. 
 * Ayrıca argümanları kabul edebilir ve değerleri döndürürler. Anonim fonksiyonları değişkene atayarak kullanılır.
 * 
 * Anonim fonksiyonlar tanımlanırken noktalı virgün ile biter.
 */

function ($param) {
    //code..
};

//şeklinde tanımlıdır.

$topla = function ($param1, $param2) {
    return $param1 + $param2;
};

$deger = $topla(3, 2) . "<br>";

echo $deger;


$islem['toplama'] = function($num1, $num2){
    return $num1 + $num2 . "<br>";
};
$islem['cikarma'] = function($num1, $num2){
    return $num1 - $num2 . "<br>";
};
$islem['carpma'] = function($num1, $num2){
    return $num1 * $num2 . "<br>";
};
$islem['bolme'] = function($num1, $num2){
    return $num1 / $num2 . "<br>";
};

echo $islem['toplama'](10,5);  // 10 ile 5 i toplar
echo $islem['cikarma'](10,5);  //çıkartır
echo $islem['bolme'](10,5);    //çarpar 
echo $islem['carpma'](10,5);   //boler

// aynı kodları şöyle de çağırabiliriz

function hesapla($param1 , $param2, $islem){
    echo $islem['toplama']($param1 , $param2);
    echo $islem['cikarma']($param1 , $param2);
    echo $islem['carpma']($param1 , $param2);
    echo $islem['bolme']($param1 , $param2);
};
hesapla(20,4,$islem);

$numbers = [[1,2] , [2,3] , [3,4] , [4,5]];

array_map(function ($e){
    global $islem;
    echo $e[0].'+'.$e[1].' =';
    $islem['toplama']($e[0],$e[1]);
    echo '<br>';
}, $numbers);
