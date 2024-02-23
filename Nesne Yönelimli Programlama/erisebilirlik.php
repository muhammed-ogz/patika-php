<?php

/**
 * php' de erişebilirlik durumu : 
 * 
 * public : her yerden erişilebilir.
 * 
 * private : sadece class içerisinde erişilebilir. 
 * 
 * protected :
 *      -Dışarıdan erişilemez.
 *      -Sınıf içerisinden erişilebilir.
 *      -Miras alma yoluyla kullanılabilir.
 *     //public tanım için
    class User {
        public $isim;
    }

    $User = new User();

    echo $User->isim = 'Muhammed';
    
 */
//private veya protected durumundaki bir veriye nasıl eriiriz.
class User
{
    private $isim;
    protected $soyisim;

    public function setIsim($isim)
    {
        $this->isim = $isim;
    }

    public function getIsim()
    {
        return $this->isim;
    }

    public function setSoyisim($soyisim)
    {
        $this->soyisim = $soyisim;
    }

    public function getSoyisim()
    {
        return $this->soyisim;
    }
}


$User->setIsim('Muhammed');
$User->setSoyisim('Oğuz');

echo $User->getIsim() . "<br>";
echo $User->getSoyisim();
