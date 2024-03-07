<?php
global $db;
include '../database-baglanti/baglanti.php';
// include '../hata-yonetimi/app.php';
if (isset($_POST['isim'])) {
    $sql = "INSERT INTO kullanicilar (isim, soyisim) VALUES ('{$_POST['isim']}', '{$_POST['soyisim']}')";
    $insert = $db->prepare("INSERT INTO kullanicilar SET isim=?,soyisim=?");
    $insert->execute(['']);
    if ($insert) {
        echo "sorgu eklendi.";
    } else {
        echo "Bir hata meydana geldi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
</head>

<body>
    <h1>SQL sorgu giriş sayfası </h1>

    <form action="" method="POST">
        <input cols="30" rows="10" name="isim"><br>
        <input cols="30" rows="10" name="soyisim"><br>
        <button type="submit">Gönder</button>
    </form>

</body>

</html>