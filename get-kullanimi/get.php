strip_tags : html etiketlerini temizlemeye yarar.
htmlspecialchars : html kodlarını okunamaz hale getirerek bir nevi güvenlik önlemi almaya yarar.
postta veriler arkaplanda gönderilirken gette veriler adres çubuğunda görünür. 

<?php
function arrayFilter($p)
{
    return is_array($p) ? array_map('arrayFilter', $p) : htmlspecialchars(trim($p)); //htmlspecialchars() komutu daha çok güvenlik için yapılıyor...
}




/*
array map ne işe yarıyordu ? bize geriçağırım yaparak fonksiyon içerisindeki elemanları teker teker dönüyordu.
*/
$dizi = array_map('arrayFilter', $_GET);

echo "<pre>";

print_r($dizi);
