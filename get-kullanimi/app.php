<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| GET KULLANIMI | </title>
</head>

<body>
    <pre>

get kullanımı : 

$_GET süper global bir değişkendir .
    -Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.
    -PHP $_GET, method = "get" ile bir HTTP GET isteği gönderdikten sonra veri toplamak için kullanılır.

</pre>

    <form action="get.php" method="get">
        <input type="text" name="isim" placeholder="isim giriniz..."><br>
        <input type="text" name="soyisim" placeholder="soyisim giriniz..."><br>
        <button type="submit">Gönderme Butonu</button>

        <hr>
        <!-- name bölümündeki dil içerisinin dizi olduğunu belirtmek için köşeli parantez "[]" belirtmemiz gerekiyor
        yoksa en son aldığı değeri sildiği değerin üstüne yazıyor. -->
        <label>Yazılım Dilleri</label><br>
        <label>PHP</label>
        <input type="checkbox" value="php" name="dil[]"><br>
        <label>JavaScript</label>
        <input type="checkbox" value="js" name="dil[]"><br>
        <label>Go</label>
        <input type="checkbox" value="go" name="dil[]"><br>
        <label>C++</label>
        <input type="checkbox" value="c++" name="dil[]"><br>
    </form>

</body>

</html>