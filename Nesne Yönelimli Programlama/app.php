<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nesne Yönelimli Programlamaya Giriş</title>
</head>

<body>
    <pre>
        Class : Kısaca sınıflara bir çok fonksiyonu ve değişkeni bir düzene göre bir arada barındıran yapıdır.

        Class kullanımı şekildeki gibidir : 
        
            class User
            {
                // Özellikler
                public $isim = 'Muhammed';
                const YAS = 20; // bu şekilde de sabitler tanımlayabiliyoruz.
                // Methodlar 
                public function isimYaz(){
                    return $this->isim;     // this değişkeni ile aslında class içerisindeki isim değişkenini tanımlıyorum.
                }
                
                public function toplam($num1,$num2){
                    return $num1+$num2;
                }
            }

            $user = new User(); //class çağırma işlemi.

            echo $user->isim;   // class çağırdıktan sonra bu şekilde de isim değişkenini yazdırabiliyoruz.
            echo $user->isimYaz(); //class çağırdıktan sonra fonksiyonu bu şekilde çağırabiliriz.

            //const değişkeni ile değeri çağırmak için
            echo User::YAS;
            
            $User->toplam(12,64);//parametreli fonksiyon böyle çağırılıyor.
    </pre>
</body>

</html>
<?php

class user {
    public $isim;
    public $soyisim;
    public $yas;
    public $email;

    public function addUser($isim,$soyisim,$yas,$email){
        $this->isim = $isim;
        $this->soyisim = $soyisim;
        $this->yas = $yas;
        $this->email = $email;
    }
}

$User = new user();

$User->addUser('Muhammed','Oğuz',20,'paramigeriistiyorum@gmail.com');

echo "Merhaba. Benim adım " . $User->isim . " " . $User->soyisim. ". Yaşım " . $User->yas . ". E-mail adresim ise : " . $User->email;