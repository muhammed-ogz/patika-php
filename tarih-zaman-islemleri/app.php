<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarih - Zaman İşlemleri</title>
</head>

<body>
    <pre>
        date fonksiyonunu yazdıktan sonra parantezler içerisine girdiler vermemiz lazım.

        Karakter           Açıklama                                     Örnek
        s               Sıfırlı şekilde iki haneli saniye değeri        07
        i               İki haneli dakika değeri                        05
        H               İki haneli 24 saat biçiminde saat değeri        00 ile 23 arası 
        d               İki haneli gün değeri                           01 ile 31 arası
        m               İki haneli ay değeri                            01 ile 12 arası
        Y               Dört haneli yıl değeri                          2031
        j               Tek haneli gün değeri                           4
        n               Tek haneli ay değeri                            1 ile 12 arası
        y               İki haneli yıl değeri                           18,96
        l               Gün ismi                                        Saturday
        F               Ay isimleri                                     February
        z               Yılın günü                                      0 ile 365 arası 
        
        timezone ayarlamak için date_default_timezone_set() fonksiyonunu kullanıyoruz.

        time() fonksiyonu = 1 ocak 1970 tarihinden bu yana kaç saniye geçmiş bunu yazan bir fonksiyon.
        strtotime() fonksiyonu = time fonksiyonundan farklı olarak içerisine bazı fonksiyonlar alabilir. 
        'now' = time() fonksiyonuyla aynı görevi üstlendirir.
        '+1 day' = bulunduğumuz andan itibaren 1 gün sonrasını saniye cinsinden veriyor.
        +1 hours gibi değişkenler de alabilir.
    </pre>
</body>

</html>
<?php

/*
girilen ay değerini türkçeye çeviren bir fonksiyon

        function translateDate($_date)
    {
        $date_en = [
            'January',
            'February',
            'March',
            'April',
            'June',
            'July',
            'September',
            'October',
            'November',
            'December',
        ];
        $date_tr = [
            'Ocak',
            'Şubat',
            'Mart',
            'Nisan',
            'Mayıs',
            'Haziran',
            'Temmuz',
            'Ağustos',
            'Eylül',
            'Ekim',
            'Kasım',
            'Aralık',
        ];
        return str_replace($date_en, $date_tr, $_date);
    }

    $format = 'l F z';
    date_default_timezone_set('Europe/Istanbul');
    $date = date($format);

    echo "<pre>";
    echo translateDate(date($format));
    
    echo time();
    echo "<br>";
    $unix = strtotime('2024-02-23 12:34:36');
    $t = strtotime('-5 month',$unix);
    date_default_timezone_set('Europe/Istanbul');
    // tarihe çevireceğiz.
    echo date('Y-m-d H:i:s' , $t);
*/

$DateTime = new DateTime();

echo $DateTime->format('Y-m-d H:i:s');

?>