<?php

class islem
{
    public $sayi1;
    public $sayi2;
    public $toplam;
    public $carpim;
    public $bolum;
    public $fark;

    public function topla()
    {
        $this->toplam = $this->sayi1 + $this->sayi2;
        return $this;
    }

    public function cikart()
    {
        $this->fark = $this->sayi1 - $this->sayi2;
        return $this;
    }

    public function carp()
    {
        $this->carpim = $this->sayi1 * $this->sayi2;
        return $this;
    }

    public function bol()
    {
        $this->bolum = $this->sayi1 / $this->sayi2;
        return $this;
    }

    public function goster(){
        echo $this->toplam."<br>";
        echo $this->carpim."<br>";
        echo $this->bolum."<br>";
        echo $this->fark."<br>";
    }
}

$islem = new islem();

$islem->sayi1 = 10;
$islem->sayi2 = 5;

echo $islem->topla()->carp()->bol()->cikart()->goster();