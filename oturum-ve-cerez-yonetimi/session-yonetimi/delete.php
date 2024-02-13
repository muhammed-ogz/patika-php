<?php
session_start();    //session başlamadan destroy edilemez.
session_destroy();

header('Location: a.php');
echo "Oturum verileri başarı ile silindi...";