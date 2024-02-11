<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizin İşlemleri</title>
</head>

<body>
    <pre>
    mkdir : bu fonksiyon klasör oluşturmaya yardımcı olur.
    rmdir : bu fonksiyon klasör/dizin silmeye yardımcı olur. Fonksiyonda parametre olarak silinecek dosyanın yolu verilir. 
    rmdir ile dizin silme işleminin sonucu boolean olarak geri döndürülür.
    PHP dosya silme işleminin mkdir ile gerçekleştirmek için dosyanın / dizinin tamamen boş olması gerekiyor.
    Dizin içerisindeki tüm dosyaların klasörlerin silinip ardından rmdir ile dosyanın silinmesi gerekiyor. 
    </pre>
</body>

</html>
<?php
echo "<pre>";
/*
file exists kullanımı : 

$check = file_exists('deneme');
var_dump($check);

mkdir kullanımı : 
if (file_exists('deneme')) {
    echo "Bu dizin zaten dosya içerisinde var !";
} else {
    if (mkdir('deneme')) {
        echo "Dizin Başarılı Bir Şekilde Oluşturuldu !";
    } else {
        echo "Kritik Bir Hata Meydana Geldi !";
    }
}

mkdir komutu ile alt dosyalara erişerek dosya içerisinde dosya oluşumunu sağlamak için : 
$dosyaDizini = "c/b/a";
if (file_exists($dosyaDizini)) {
    echo "Bu dizin zaten dosya içerisinde var !";
} else {
    if (mkdir($dosyaDizini,0777,true)) {
        echo "Dizin Başarılı Bir Şekilde Oluşturuldu !";
    } else {
        echo "Kritik Bir Hata Meydana Geldi !";
    }
}

rmdir kullanımı : 
$dosyaDizini = "c/b/a";
if (rmdir($dosyaDizini)) echo "Dizin başarılı bir şekilde silindi.";
else echo "Dizin silme işlemi başarısız. Bir hata meydana geldi !";
*/

$dosyaDizini = "c/b/a";
if (file_exists($dosyaDizini)) {
    if(rmdir($dosyaDizini)) echo "Dizin başarı ile silindi.";
    else "Bir hata meydana geldi.";
} else {
    echo "Dizin silinemedi ! Böyle bir dizin bulunmamakta.";
};


