<?php

//hata yönetimi 
/*
    Hata raporlamasını aktif etmemiz gerekiyor bunun için 
    ini_set('display_errors', E_ALL); ini_set('display_startup_errors', 1);
    error_reporting(1); 

    hata bastırma operatörü '@' dir

    echo @$_GET['isim']; 
    yerine
    echo $_GET['isim'] ?? '';
    kullanmamız daha sağlıklı olacaktır.

    echo $_GET['isim'] ?? '';   bu eğer getten gelen bir isim değeri varsa onu yazdır yoksa boş döndür demektir.

    try catch yapısı 

    throw new Exception('Mesaj içeriği'); = new Exception hata mesajı fırlatmamıza yarar.

    set_error_handler(''); ile kendi hata işleyicimizi açıp düzenleyebiliyoruz.

*/


error_reporting(0);

function errHandler($no,$msg,$file,$line){
    include 'error.php';
}

function fatalErrorHandler(){
    $error = error_get_last();
    errHandler($error['type'],$error['message'],$error['file'],$error['line']);
}
class MyError extends Exception
{
    /*
        Exception sınıfında 
        $message
        $code
        $file
        $line değerleri var 
    */
    public function bomb (){
        errHandler($this->code,$this->message,$this->file,$this->line);
    }
}
set_error_handler('errHandler',E_ALL);
register_shutdown_function('fatalErrorHandler');
//try {
//     throw new MyError('Bu bir hata mesajıdır!');
// } catch (MyError $e) {
//     echo $e->bomb();
// }

//fatal error durumunda nasıl davranmalıyız;
