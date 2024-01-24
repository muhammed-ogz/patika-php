<!-- global kullanımı  -->

<?php 
$isim = 'Muhammed';

function isimYaz(){
    global $isim;   // ile dışarıdaki değişkene ulaşmayı sağlar.
    echo $isim;
}

isimYaz();