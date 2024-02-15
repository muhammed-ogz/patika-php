<?php
session_start();

if (isset($_SESSION['isim'])) {
    echo "Merhaba " . $_SESSION['isim'] . " hoş geldiniz !";

    echo "Kullanıcı bilgilerinin dizi görüntüsü : " . "<br>";
    echo "<pre>";
    print_r($_SESSION);
} else {
    echo "Lütfen oturum açınız.";
};
