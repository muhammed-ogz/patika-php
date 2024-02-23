<?php

//final olarak tanımlanan sınıflar ve methodlar kalıtım yoluyla çoğaltılamaz.

class Bir
{

    public function methodBir()
    {
        echo 'MethodBir';
    }

}

class Iki extends Bir
{
    public function methodIki()
    {
        echo 'MethodIki';
    }
}

final class Uc extends Iki
{
    public function methodUc()
    {
        echo 'MethodUc';
    }
}

$Uc = new Uc();

$Uc->methodBir();
$Uc->methodIki();
$Uc->methodUc();