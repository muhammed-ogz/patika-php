<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <pre>
    cookie (çerez) yönetimi :
    setcookie($params...) fonksiyonu ile çerezler tanımlanır.
    setcookie($name, $value, $time , $path, $domain, $secure, $http_only);

    $name : cookie ismidir. cookie bu isim üzerine çağırılır.

    $value : cookie değeridir.

    $time : tarayıcı üzerinde aktif olacağı saniye üzerinden belirtilen cookie değeridir. Eğer bu değer verilmezse cookie tarayıcı kapandığında silinir
    fakat şu an ki zaman - girilen değer kadar süre girilirse o süre içerisinde cookie tarayıcı içerisinde tutulur.

    $path : Sitede hangi dizin içerisinde çalışması gerektiğini bildirir. Eğer tüm site içerisinde aktif olunması istenirse '/' değeri girilir.

    $domain : Cookie'nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını bildirir. Yazılmaz ise çalıştığı sitenin ana domaini baz 
    alınır, tüm site üzerinde etkili olur.

    $secure : True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleştirilir. Cookie güvenliği arttırma için kullanılır.
    Çerez bilgisini sadece HTTPS bilgisi ile alınacağını bildirir.

    $http_only : True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır. Javascript ile tarayıcı üzerinde cookie
    düzenlenemeyecektir.

    </pre>
</body>

</html>

<?php

setcookie('isim','Muhammed');
