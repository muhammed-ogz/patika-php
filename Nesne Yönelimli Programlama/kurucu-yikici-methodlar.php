<?php
//class çalıştırıldığında ilk çalışan method kurucu method, son çalışan methodda yıkıcı method olarak adlandırılıyor.
class User
{

    private $isim;
    private $soyisim;

    public function __construct($isim, $soyisim)
    {
        //kurucu method
        $this->isim = $isim;
        $this->soyisim = $soyisim;
    }

    public function isimYaz()
    {
        return "Hoşgeldiniz " . $this->isim . " " . $this->soyisim;
    }

    public function __destruct()
    {
        //yıkıcı method. Bunun altında 300 tane methodda tanımlasak PHP otomatik olarak en son bu methodu çalıştıracaktır.
        $this->isim = null;
        $this->soyisim = null;
    }
}

$User = new User('Muhammed' , 'Oğuz');

echo $User->isimYaz();

