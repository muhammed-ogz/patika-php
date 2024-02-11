<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya dahil etme</title>
</head>

<body>
    <pre>
Bir PHP dosyasında bir başka betik ya da herhangi bir dosya dahil etmek için kullanılan fonksiyonlar vardır. Bu fonksiyonlar ile 
    bir PHP dosyası başka bir PHP dosyasına dahil edilebilir, dahil edilen PHP dosyasındaki değişkenler ve fonksiyonlar kullanılabilir.

    Bu fonksiyonlar ; 
    include
    include_once
    require
    require_once
    
    fonksiyonlarıdır. 

    include-include_once-require-require_once 'dosya.php' formatında kullanılmaktadır.
    
    require ve require_once fonksiyonlarında eğer dahil edilen dosya bulunamazsa program "FATAL_ERROR" verir ve çalışmayı durdurur. 
    include ve include_once fonksiyonlarında eğer dahil edilen dosya bulunamazsa program "WARNING" verir ve çalışmaya devam eder. 
    include ve include_once fonksiyonlarında dahil edilen dosyalar sadece bir kez dahil edilebilir.

    include ve require komutları aynı işlev amaçlı çalışabilirler. Fakat ekleyeceğimiz dosya olmazsa olmaz bir dosya ise require ile eklemek
    daha mantıklı olacaktır.

    include ile dosya birden fazla ekleme yapılırsa tekrar tekrar içerik okunabilir ama dosya tekrar tekrar okunmayı istese bile tek bir kez okunacaksa 
    include_once komutunu kullanmamız gerekir.
</pre>
</body>

</html>
<?php

/*
    require kullanımı : 
    require 'test.txt';
    require fonksiyonu ile diğer php tarzı dosyaları da dahil edebiliriz.
*/
include 'a.php';
echo "<pre>";
print_r($dizi);
