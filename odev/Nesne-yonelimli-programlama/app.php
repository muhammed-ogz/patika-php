<?php

class Sekil
{
    public $x, $y, $z;

    public function __construct($x, $y = null, $z = null)
    {
        $this->x = $x;  //genişlik
        $this->y = $y;  //uzunluk
        $this->z = $z;  //hipotenüs (opsiyonel)
    }
}

class Ucgen extends Sekil
{
    public function Cevre()
    {
        return $this->x + $this->y + $this->z;
    }

    public function Alan()
    {
        $u = $this->cevre();    //Üçgenin çevresi
        return bcsqrt((($u / 2) * (($u / 2) - $this->x) * (($u / 2) - $this->y) * (($u / 2) - $this->z)), 2);   //3 ayrıtı bilinen üçgenin alan formülü
    }
}

class Kare extends Sekil
{
    public function cevre()
    {
        return $this->x * 4;
    }

    public function alan()
    {
        return $this->x * 2;
    }
}

class Dikdortgen extends Sekil
{
    public function cevre()
    {
        return $this->x * 2 + $this->y * 2;
    }

    public function alan()
    {
        return $this->x * $this->y;
    }
}

$kare = new Kare(4);
$dikdortgen = new Dikdortgen(3,4);
$ucgen = new Ucgen(3,4,5);

echo "Karenin alanı : ". $kare->alan()."<br>";
echo "Karenin çevresi : ". $kare->cevre()."<br>";
echo "Üçgenin alanı : ". $ucgen->alan() . "<br>";
echo "Üçgenin çevresi : ". $ucgen->cevre() . "<br>";
echo "Dikdörtgenin alan : ". $dikdortgen->alan()."<br>";
echo "Dikdörtgenin çevresi : ". $dikdortgen->cevre()"<br>";

