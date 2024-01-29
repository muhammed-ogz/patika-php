<pre>
    dizi fonksiyonları 2 : <br>

    shuffle() : bir diziyi karıştırır. ve echo ile yazdırmak istersek 1 değer döndürür. <br>

    array_combine() : anahtarlar için bir dizi, değerler için başka bir dizi oluşturarak bir ilişkisel 
    dizi oluşturur. <br>

    array_count_values() : bir dizideki tüm değerleri sayar. <br>

    array_flip() : dizideki anahtarla değerlerin yerini değiştirir. <br>

    array_key_exists() : belirtilen anahtar veya indis dizi içerisinde var mı diye kontrol eder. <br>

    array_map() : belirtilen dizilerin geriçağırım işlevini uygular. <br>

    array_filter() : bir dizinin elemanlarını bir geriçağırım işlemiyle süzgeçten geçirir. <br>

    array_merge() : belirtilen dizileri art arda ekleyerek yeni dizi oluşturur. <br>

    array_rand() : diziden belirli sayıda rastgele bir anahtar döndürür. <br>

    array_reverse() : diziyi tersine sıralayıp döndürür. <br>

    array_search() : bir dizide belirtilen değeri arar ve eğer o değer varsa ilk bulduğu sonucu döndürür. <br>
</pre>

<?php

// array.shufle'a bir örnek 

$sayilar = range(1, 20);

shuffle($sayilar);

echo "<pre>";

foreach ($sayilar as $deger) {
    echo $deger . "<br>";
};

// array_combine için bir örnek

$a = [1, 2, 3, 4];
$b = ['ilk sayi', 'ikinci sayi', 'ucuncu sayi', 'dorduncu sayi'];

$sonuc = array_combine($a, $b);

print_r($sonuc);

// array_count_values a bir örnek
echo "array combine ile oluşturulmuş dizinin içerisindeki değer sayısı : " . "<br>";
print_r(array_count_values($sonuc));

// array.flip a bir örnek
print_r(array_flip($sonuc));


// array_key_exists e bir örnek 

$deger = array_key_exists('1', $sonuc);

if ($deger == 1) {
    echo "girilen değer dizi içerisinde mevcuttur...";
} else {
    echo "girilen değer dizi içerisinde mevcut değildir...";
};


// array.map üzerinden bir örnek 

$sayilar = range(1, 10);

function numberFunction($eleman)
{
    return $eleman + 2;
};

$yeniDizi = array_map('numberFunction', $sayilar);

print_r($yeniDizi);


// array_filter üzerinde bir örnek 

$ciftSayilar = array_filter($sayilar, function ($e) {
    return $e % 2 == 0 ? $e : false;
});

print_r($ciftSayilar);

$tekSayilar = array_filter($sayilar, function ($e) {
    return $e % 2 == 1 ? $e : false;
});

print_r($tekSayilar);


// array_merge() kullanımı 

$sayilar2 = range(11, 20);

$birlesmisDizi = array_merge($sayilar, $sayilar2);

print_r($birlesmisDizi);

// array_rand() kullanımı 

$meyveler = ['elma','armut','muz','kivi','elma','armut','muz','kivi','elma','armut','muz','kivi','elma','armut','muz','kivi','elma','armut','muz','kivi'];

$meyvelerKeys = array_rand($meyveler,2); //kaç key istediğimi söyler

echo $meyveler[$meyvelerKeys[0]] . " " . $meyveler[$meyvelerKeys[1]];


// array_reverse() kullanımı 

$arr2 = array_reverse($meyveler);

print_r($arr2);

// array_search()

$arr3 = array_search('muz',$meyveler);
print_r($arr3);