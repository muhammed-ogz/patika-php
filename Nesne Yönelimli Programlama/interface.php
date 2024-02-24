<?php

/*
 * Interface kullanımı :
 * -Arayüzler, abstractlara benzer
 * -Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken methodları belirlemek için kullanılır.
 *
 * Özellikleri :
 * -Soyut methodlar ve sabitler kullanılır.
 * -Sadece public method tanımlanabilir.
 * -Aynı sınıf birden fazla interface alabilir.
 *
 * implements kullanımı aşağıda vardır diğer kullanım şekli de kodlarda yer alacak.
 * interface Deneme
{
    public function deneme();

    public function deneme2();
}

interface Deneme2
{
    public function deneme3();

    public function deneme4();
}

class Sinif implements Deneme, Deneme2
{

    public function __construct(){}

    public function deneme(){}

    public function deneme2(){}

    public function deneme3(){}

    public function deneme4(){}
}
 * */

interface Deneme
{
    public function deneme();

    public function deneme2();
}

interface Deneme2 extends Deneme
{
    public function deneme3();

    public function deneme4();
}

class Sinif implements Deneme
{

    public function __construct(){}

    public function deneme(){}

    public function deneme2(){}

    public function deneme3(){}

    public function deneme4(){}
}


