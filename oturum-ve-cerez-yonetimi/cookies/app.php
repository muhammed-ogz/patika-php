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
    eğer path değeri girilmezse bulunduğu dizin içerisinde çalışan bir cookie olur.

    $domain : Cookie'nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını bildirir. Yazılmaz ise çalıştığı sitenin ana domaini baz
    alınır, tüm site üzerinde etkili olur.

    $secure : True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleştirilir. Cookie güvenliği arttırma için kullanılır.
    Çerez bilgisini sadece HTTPS bilgisi ile alınacağını bildirir. sadece SSL sertifikası olan yerlerde aktif olarak kullanılır anlamına gelmekte. 
    Güvenlik için kullanılır.

    $http_only : True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır. Javascript ile tarayıcı üzerinde cookie
    düzenlenemeyecektir (tarayıcı üzerinden "document.cookie" komutu ile çerezlere erişemeyiz). bunu aktif ettiğimde tarayıcı içerisinde cookieleri ekrana yazdırma durumum ortadan kalkıyor sadece 
    sağ tık > incele > performans > çerezler bölümünden görebiliyoruz.


    cookieleri sessionlardan ayıran en temel özellik sessionlar sunucu tabanlı çalışırken cookieler local tabanlı çalışabilir. Yani cookieler ile 
    sizler de oynayabilirsiniz.

    </pre>
</body>

</html>

<?php
//cookie oluşturmak için bir key birde value değerleri girmek gerekiyor.
//setcookie('isim','Muhammed',time() + 20);   geçerli süre + 20 saniye dediğim için bu cookie 20 saniye boyunca tutulacak.

// print_r($_COOKIE);
//cookie silmek için bir fonksiyon yok ama girilen değer yerine "-" li değer girersem otomatik cookie silinmiş olacaktır.

// echo time();

// setcookie(
//     $name,
//     $value,
//     $time,
//     $path,
//     $domain,
//     $secure,
//     $http_only
//     );

setcookie(
    'renk',
    '#000000',
    time() + 86400,
    '/',
    'localhost',
    'false',
    'false'
);
setcookie(
    'isim',
    'Muhammed',
    time() + 86400,
    '/',
    'localhost',
    'false',
    'true'  //http only güvenlik amaçlı girilen bir değer.
);
echo "<pre>";
print_r($_COOKIE);