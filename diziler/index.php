<?php
$kisi = [
    'isim' => 'Şahin',
    'soyisim' => 'ERSEVER',
    'dogumtarihi' => '10.01.1993'
];

print_r($kisi);

//İfadenin çıktısı

//Array(
//    [isim] => Şahin
//    [soyisim] => ERSEVER
//[dogumtarihi] => 10.01.1993
//    )

    echo "Merhaba benim adım " . $kisi['isim'] . " " . $kisi['soyisim'] . "  Doğum tarihim " . $kisi['dogumtarihi'];

    //İfadenin çıktısı
//    Merhaba benim adım Şahin ERSEVER  Doğum tarihim 10.01.1993
    $hayvanlar = array('kedi', 'köpek', 'tavşan');

    echo $hayvanlar[0]; // "kedi" Çıktısını verir.
    echo $hayvanlar[1]; // "köpek" Çıktısını verir.
    echo $hayvanlar[2]; // "tavşan" Çıktısını verir.