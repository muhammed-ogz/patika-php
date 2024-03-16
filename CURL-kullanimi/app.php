<?php 

// extension_loaded('curl');   //girilen eklenti kurulu mu kontrol eder.

$curl = curl_init();   //curl isteğini bulunacağımız sayfayı belirtir

curl_setopt_array($curl,[
    CURLOPT_URL => 'http://localhost/patika-php/CURL-kullanimi/post.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'user' => true,
    ]
]);

$result = curl_exec($curl);   //curl oturumunu başlatır.
curl_close($curl);

echo "<pre>";
print_r($result);
?>
