<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| POST KULLANIMI | </title>
</head>

<body>
    <pre>
    get methodu kullanımı : 
    get methodu da post methodu gibi bir php süper global değişkendir.
    PHP $_GET, bir HTTP GET isteği gönderildikten sonra verileri toplamak için kullanılır.
    </pre>

    <form action="post.php" method="post">
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
<?php
