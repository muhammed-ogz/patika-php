<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP' de güvenlik</title>
</head>

<body>
    <h1>PHP' de güvenlik </h1> <br>
    <h3>Dosya ve dizin güvenliği</h3>
    - Dosya uzantısı .php olmayan dosyalara dışarıdan erişimi kapatmazsak içerikleri okunabilir. <br>
    - Dizin içeriklerinin okunmasını engelleyebiliriz.

    <h3>XSS (Cross Site Scrtpting)</h3>
    - Script kodları üzerinden bir web sitesine saldırı yapmaktır.
    - Çoğunlukla tarayıcıda saklanan bilgiler olan cookielere erişmek için yapılmaktadır.

    <h3>SQL Injection</h3>
    - Veritanabına gönderdiğimiz sorgularda araya başka SQL sorgularının sıkıştırılarak gönderilmesi olayıdır.
    <br>

    - Bir sayfaya require üzerinden .php uzantılı olmayan dosya dahil ettiğimizde uzantısı uymasa bile içinde PHP kodları olduğu için
    içerisindeki kodlar okunabilir.
<br><br>
    - deny from all dersek eğer dışarıdan hiçbir dosya çekemeyiz. (stil css dosyaları gibi) o sorunu yaşamamak için Options -Indexes
    dememiz lazım
</body>

</html>