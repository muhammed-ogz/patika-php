<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Dizin Taşıma ve İsimlendirme</title>
</head>

<body>
    <pre>
    dosya dizin adını değiştirmek için rename() fonksiyonunu kullanırız. eğer işlemi başarı ile gerçekleştirirse true yoksa false olarak döndürür.
 </pre>
</body>

</html>

<?php
/*
 rename kullanımı : 
 rename('a','adı değişen dönek a');
 */
// rename('adı değişen dönek a' , 'b/adi-degisen-donek-a');

if(rename('test.txt', 'b/adi-degisen-donek-a/test.txt')) echo "dosya başarı ile taşındı.";
else echo "dosya taşınamadı";
