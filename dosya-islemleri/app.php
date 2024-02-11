<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya İşlemleri</title>
</head>
<body>
<pre>
Dosya işlemleri : 
touch() : yeni dosya oluşturmaya yarar. 
unlink() : dosya silme işlemi yapar.
fgets() : dosya okuma işlemi yapar.
fopen() : dosya açma işlemi yapar. 
fclose() : dosya kapatma işlemi yapar.
fputs() : dosya içeriği yazmamızı sağlar.
fwrite() : dosya içeriği yazmamızı sağlar.
feof() : dosya içeriğinin sonuna geldiğimizi belirtir. veri okunurken yeni satıra geçtikçe false değeri döndürür. Satır sonuna geldiğinde true (1) sonucunu
dönderir. feof açılımı : file end of' tur
file_exists() : PHP' de dosya ve dizin varlığını kontrol eder. Sonucu boolean olarak dönderir.
is_file() : içerisine girilen adresin dosya olup olmadığını kontrol etmek için kullanılır.
file_put_contents() : veriyi yazmaya yarıyor.
file_get_contents() : veriyi okumaya yarıyor.

Dosya Erişim Modları :

r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.

r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.

w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir. Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır.
Dosya belirtilen adreste yok ise yeniden oluşturulur.

w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir.
Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir. Dosya belirtilen adreste yok ise yeniden oluşturulur.

a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. 
Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.

a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. 
Dosya belirtilen adreste yok ise yeniden oluşturulur.

x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir.
Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.

x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir.
Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.
</pre>
</body>
</html>
<?php
/*while($satir = fgets($file)){
    echo $satir."<br>";
};

fclose($file);

touch('test.txt');
unlink('test.txt');

$file = fopen('text.txt','a');  //dosya içerisine sadece veri eklenebileceğini belirtiyorum.

fwrite($file,"\nalt satıra geçmiş veri girişi başarı ile sonuçlandı !\n");

$fileSize = filesize('text.txt');
echo fread($file,$fileSize);

feof kullanımı : 

$file = fopen('text.txt', 'r');

while(!feof($file)){    //feof fonksiyonu sıfır olmadığı sürece dönder sonucunu alıyoruz..
    echo fgets($file)."<br>";
}
fclose($file);

file_exist kullanımı : 
$check = file_exists('text.txt');
var_dump($check);

is_file kullanımı :
$check = is_file('text.txt');
var_dump($check);

file_put_contents kullanımı : 
file_put_contents('text.txt',"\nİçerik file put contents ile eklendi",FILE_APPEND); FILE_APPEND olayı dosyanın silinmeden ardından 
eklendiğini anlatmaya yarar.

file_get_contents kullanımı :
$get = file_get_contents('text.txt');
print_r($get);
*/

$dosya = "<?php";
$dosya .= '$isim = "Muhammed Oğuz"';
$dosya .= 'echo $isim';

file_put_contents('a.php',$dosya,FILE_APPEND);






