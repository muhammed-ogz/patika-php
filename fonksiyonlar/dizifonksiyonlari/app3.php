<pre>
    dizi fonksiyonları 3 : 

    in_array() : bir dizide bir değerin varlığını araştırır.

    array_shift() : dizi başlangıcından bir eleman çıkartır.

    array_pop() : dizi sonundan bir eleman çıkartır.
    
    array_slice() : bir dizinin belli bir bölümünü döndürür.

    array_sum() : bir dizideki değerlerin toplamını hesaplar.

    array_product() : dizideki değerlerin çarpımını bulur.

    array_unique() : dizide yinelenen değerleri siler.

    array_values() : dizideki tüm değerleri döndürür.

    array_push() : belli sayıda elemanı dizinin sonuna ekler.

    array_unshift() : bir dizinin başlangıcına eleman ekler.

    array_keys() : bir dizideki tüm anahtarları veya bir anahtar kümesini döndürür.

    extract() : dizi anahtarlarını değişken olarak kullanmaya yarar.

    asort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.

    arsort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.

    ksort() : Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.

    krsort() : Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
</pre>

<?php
echo "<pre>";

$array = ['ahmet', 'mehmet', 'merve', 'aysu', 'sıla', 'kemal'];

if (in_array('ahmet', $array) == 1) {
    echo "dizi içerisinde değer mevcuttur.";
} else {
    echo "dizi içerisinde değer mevcut değildir.";
}
