<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htaccess kullanımı | Patika PHP Kursu</title>
</head>
<body style ="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
        <h1>htaccess kullanımı</h1>

        <pre>
            <h3>Klasör İşlemleri</h3>
            - Yetkilendirme ve Kimlik doğrulama
            - URL yönlendirme (Rewriting URL)
            - Dosya ve dizin erişimi engelleme
            - Dizin listeleme
            - Özel Hata Mesajları
            - MIME/Dosya Türlerinin Belirlenmesi 
            - Önbellek Kontrolü

            Dizin koruması sağlamak için dizin içerisinde .htaccess dosyası oluşturup "Options -Indexes" yazmamız gerekiyor.
            Dizin içerisindeki dosyalara erişimi tamamen engellemek için ise "deny from all" dememiz gerekiyor.
            Dizin içerisindeki dosyalara sadece belli IP adreslerinin girmesi için "deny from all" dedikten sonra "allow from |ip adresi|" dememiz gerekiyor.
            sadece bir dosya üzerinde değişiklik yapmam için files tagları arasında yapmam lazım 
        </pre>
</body>
</html>

<?php
