<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <pre>
        session_start komutu ile tarayıcıda bir oturumu açabiliyoruz. tarayıcı kapatılana kadar bizim oturum verilerimiz tarayıcı içerisinde 
        saklanıyor.
        session_destroy komutumuz oturum verilerimizi siliyor.
        header yönlendirmeye yarıyor.
        bir session'u başlatmadan destroy edemeyiz.
        $_SESSION süper globalimiz var.
    </pre>
</body>
</html>

<?php
session_start();
$_SESSION['isim'] = 'Muhammed';