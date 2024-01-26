<?php

// faktöriyel kavramı nasıl yapılır ?
function faktoriyel($sayi)
{
    $sayi2 = 2;
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo faktoriyel(3) * faktoriyel(2);