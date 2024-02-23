<?php
//Sınıf özelliklerinin ya da methodların static olarak tanımlanması,
//o özelliklerin ve yöntemlerin sınıfı başlatmadan kullanılabilmesini sağlar.
class User
{

    public static $isim;
    public $soyisim;

    public static function setIsim($isim)
    {
        self::$isim = $isim;
    }

    public static function getIsim()
    {
        return self::$isim;
    }

}

User::setIsim('Muhammed Oğuz');
echo User::getIsim();