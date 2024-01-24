<!-- fonksiyonlar : PHP' de fonksiyonlar nasıl çalışır ?  -->
<?php

/**
Fonksiyonlar kısaca bir veya daha fazla komutun içinde yer aldığı yapılardır.

PHP'de fonksiyonları, yerleşik ve kullanıcı tanımlı olmak üzere ikiye ayırabiliriz:

Yerleşik fonksiyonlar: PHP'de önceden tanımlanmış olarak kullanıma hazır fonksiyonlardır.

Kullanıcı tanımlı fonksiyonlar: Geliştirici tarafından oluşturularak kullanılan fonksiyonlardır.

Fonksiyon isimleri bir harf ya da alt çizgi ile başlar.

Parametrelere varsayılan değerler atayarak değer girilmediği durumları ele alabiliriz
 */

function selamla()
{
    return "Hello World !";
}

$degerGetir = selamla();    // değeri içeriye tanımlarız

echo $degerGetir;   //değeri ekrana yazdırırız.

function parametreliFonksiyon($param)
{
    echo $param;
}

function degerAtanmisParametreliFonksiyon($param1, $param2 = 10){
    return $param1 + $param2;
}

$deger2Getir = degerAtanmisParametreliFonksiyon(20);

echo $deger2Getir;  // param2 parametresine 10 değerini atadığım için otomatik olarak onu 10 olarak gösterdi.