<!-- Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon yazın. 
Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın. -->
<?php


function ucgen($num){
    $a = 0;
    while($a <= $num){
        for($i = 0; $i < $a; $i++){
            echo "o";
        }
        $a++;
        echo "<br>";
    }
}

ucgen(20);
?>