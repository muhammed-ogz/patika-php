<?php
$num = $_POST['number'];

function checkRemainder($num)
{
    $message = '';
    global $num;
    if ($num % 3 == 0) {
        return $message = "Girilen sayı 3' e tam olarak bölünebiliyor. Bölümünün sonucu : " . $num / 3;
    } else {
        if (($num + 1) % 3 == 0) {
            return $message = "Girilen sayı 3'e tam olarak bölünemez. Bölünebilecek en küçük sayı : " . $num + 1;
        } else {
            $message = "Girilen sayı 3'e tam olarak bölünemez. Bölünebilecek en küçük sayı : " . $num + 1;
        };
    }
    return $message;
};

echo checkRemainder($num);


