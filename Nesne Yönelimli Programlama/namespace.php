<?php

/*
 * Namespace kullanımı
 * - Kullanılması zorunlu değildir.
 * - Aynı isimli sınıfların ayırt edilmesi amacıyla kullanılır.
 * - Geleneksel olarak ana dizinden bulunduğu klasöre kadar uzanan bir namespace tanımlanır.
 * */

require 'app/controller/home.php';
require 'app/view/home.php';

//namespace alanı ile çağırmam gerek yoksa PHP hangi home.php yi çağıracağını bilemez.

$Home = new app\controller\Home();
echo "<br>";
$HomeView = new app\view\Home();