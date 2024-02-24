<?php
//abstract yani soyut sınıflar oluşturmak için
/*
Abstract(Soyutlama) Kullanımı
    Soyutlanmış sınıflar içerisinde soyut methodlar barındırır.
    Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.


Özellikleri

    -Soyut methodlar ve sabitler içerebilir.
    -Normal methodlar, özellikler ve sabitler içerebilir.
    -public, protected ve private olarak tanım yapılabilir.
    -Aynı sınıf sadece bir abstract sınıftan türetilebilir.
 * */

abstract class Urun
{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);

    abstract public function urunFiyat($urunFiyat);

    abstract public function urunVergi($urunVergi);

    public function urunEkle()
    {
        //DB KAYIT
        echo 'urun Adi : ' . $this->urunAdi . "<br>";
        echo 'urun Fiyati : ' . $this->urunFiyat . "<br>";
        echo 'urun Vergi Tutari : ' . $this->urunVergi . "<br>";
    }
}

class icecek extends Urun
{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi = $urunVergi;
    }
}

$icecek = new icecek();

$icecek->urunAdi('Meyve Suyu');
$icecek->urunFiyat('30TL');
$icecek->urunVergi('5,4TL');

$icecek->urunEkle();


