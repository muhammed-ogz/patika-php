<?php

// veri değişim formatları 
/**
    JSON

    -JSON veri depolama ve veri alışverişi için kullanılan bir formattır.
    -JSON .json uzantılı dosyalarda tutulabilir.
    -JSON formatı,benzer fonksiyonlara sahip olan XML‘e (ing) daha basit ve hafif bir alternatiftir.
    -Veriler Anahtar-Değer şeklinde tutulur.
    -Bir JSON nesnesi {} küme parantezleriyle başlar ve biter.
    -İçinde iki veya daha fazla anahtar/değer çiftlerine sahip olabilir ve bu ikisini bir virgül ile ayırır.
    -Anahtar ve değerler : ile ayrılır {'isim': 'Şahin'} .


    XML 

    XML Extensible Markup Language, Türkçe karşılığı Genişletilebilir İşaretleme Dilidir.
 */
// $array = [
//     'isim' => 'Muhammed',
//     'soyisim' => 'Oğuz',
//     'yas' => 20,
//     'email' => 'muhammedoguz@gmail.com',
// ];
//$decode = json_decode($obj,true);    JSON objesinden bir dizi elde etmek istersem bu sefer de bunu kullanıyorum
// $encode = json_encode($array);  //bir diziden JSON objesi elde etmek için bunu kullanıyorum.
/*
JSON decode işlemi yaptığımızda bize dönen array türü stdClass türünden olacaktır. 
Eğer stdClass değil array olarak almak istiyorsak 2. parametre olarak true değerini göndermemiz gerekecek.
*/
/*
echo "<pre>";
print_r($decode);
echo "<br>"."Girilen arraydeki isim değeri : ";
echo $decode['isim'];
*/

$obj = file_get_contents('user.json');

$decode = json_decode($obj,true);

echo "<pre>";
print_r($decode);
