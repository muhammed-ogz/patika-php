<?php
session_start();

if (isset($_SESSION['isim'])) {
    echo "Merhaba " . $_SESSION['isim'] . " hoş geldiniz !";
} else {
    echo "Lütfen oturum açınız.";
};
