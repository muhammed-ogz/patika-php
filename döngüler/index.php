<!-- döngüler  -->
<?php
//  for döngüsü

for ($i = 0; $i < 10; $i++) {
    print_r("<pre>");
    echo "girilen değer " .  $i;
    echo "<br>";
}

// i değeri 10 olana kadar dönmeye devam eder

$dizi = [
    'Muhammed',
    'Cemal',
    'Mehmet',
    'Burak',
    'Ali'
];

for ($i = 0; $i < 4; $i++){
    print_r("<pre>");
    echo "girilen değer " .  $dizi[$i];
    echo "<br>";
}
