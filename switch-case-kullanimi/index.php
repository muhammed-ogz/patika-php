<?php
//Switch Case Yapısı
//normalde if else koşulu olacak olsa aşağıdaki gibi olacak
$a = 2;

//if($a ==2){
//    echo "1. koşul çalıştı.";
//}elseif ($a == 1){
//    echo "2. koşul çalıştı";
//}else{
//    echo "else çalıştı";
//}

//aynı durum switch case de ise şöyle gerçekleşiyor

switch ($a){
    case 1:
        echo "1. case çalıştı";
    case 2:
        echo "2.case çalıştı";
    case 3:
        echo "3. case çalıştı";
    break;

    default:
        echo "default çalıştı!";
}
