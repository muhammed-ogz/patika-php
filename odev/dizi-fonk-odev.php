Verilen dizideki boş elemanları temizleyerek belirtilen adette
rastgele değerlerden dizi oluşturan bir fonksiyon yazın.
(array_map(), array_filter() ve array_rand() fonksiyonlarını
kullanarak.)

<?php



$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function myFunction($array, $value)
{
    $filteredArray = array_filter($array);
    $randomizedArray = array_rand($filteredArray, $value);
    $result = array_map(function ($item) use ($filteredArray) {
        return $filteredArray[$item];
    }, $randomizedArray);
    return $result;
}
echo "<pre>";
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));

//ekran çıktısı 
// Array
// (
//     [0] => Venus
//     [1] => Mars
// )
// Array
// (
//     [0] => Earth
//     [1] => Jupiter
//     [2] => Uranus
// )
// Array
// (
//     [0] => Mars
//     [1] => Uranus
// )
// Array
// (
//     [0] => Venus
//     [1] => Earth
//     [2] => Jupiter
//     [3] => Neptune
// )
// Array
// (
//     [0] => Mercury
//     [1] => Earth
//     [2] => Saturn
//     [3] => Uranus
//     [4] => Neptune
// )