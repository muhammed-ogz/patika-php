<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session İşlemleri</h1>

    <pre>
        session_start() ile oturum başlatılır. Tarayıcı tamamen kapatılana kadar oturum verileri tarayıcıda tutulur.
        $_SESSION['key'] = 'value'; girdisi ile session değer ataması yapılır.
        echo $_SESSION['key'] = 'value'; ile session değerine ulaşılır.
        unset($_SESSION['key'] = 'value'); ile bir anahtara ait session değeri silinir.
        session_destroy(); ile session oturumu kapatılır.
    </pre>
</body>
</html>

<?php
session_start();
$_SESSION['isim'] = 'Muhammed';
$_SESSION['soyisim'] = 'Oğuz';
$_SESSION['Sehir'] = 'Kayseri';
$_SESSION['yas'] = 29;