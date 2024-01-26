<!-- dizi fonksiyonları  -->
<pre>
dizi fonksiyonları birden çok değer alabilmekte <br>
print_r() : bir değişkenin ya da dizi gösterimini ekrana basar. <br>

var_dump() : bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve
nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı ile birlikte gösterilir.<br>

explode() : bir dizgeyi ayraca göre bölüm bir dizi haline getirir. <br>

implode() : bir diziyi birleştirip dizge haline getirir. <br>

count() : bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür. <br>

is_array() : değişkenin dizi içerip içermediğine bakar. <br>
</pre>
<?php

$arr =  [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "<pre>";

echo "print_r bu şekilde bir çıktı alıyoruz : <br>";
print_r($arr);

echo "<br>";

echo "vard_dump() ile de bu şekilde bir çıktı alıyoruz : <br>";
var_dump($arr);

// implode kullanımı

$dizge = implode('-', $arr);
print_r($dizge);

/* explode kullanımı : dizi içerisindeki elemanları - ile parçaladığımız 
için - işaretini yakala elemanları ona göre ayır diyeceğiz */

$newArray = explode('-', $dizge);

print_r($newArray);

echo "new Array dizisi içerisindeki eleman sayısı : " . count($newArray);

// dizi eleman sayısına göre for döngüsü alabiliriz artık
echo "dizi içerisindeki eleman sayısına göre for döngüsü kullanımı.";
for ($i = 0; $i <= count($newArray); $i++) {
    echo "dizi içerisindeki eleman sayısı ölçülüyor..." . "<br>" . $i;
    if ($i == count($newArray)) {
        echo "dizi içerisindeki max eleman sayısına ulaşıldı..." . " <br>";
    };
}

// elemanın dizi içerip içermediğini kontrol etme 
echo "girilen değer dizi midir ?" . " <br>";

echo "Sonuç : ";
if (is_array($newArray) == true) {
    echo "girilen değer dizidir..." . " <br>";
} else {
    echo "girilen değer maalesef dizi değildir..." . " <br>";
}
