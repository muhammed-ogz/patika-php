<pre>

string fonksiyonları : 

strlen : verilen string ifadenin uzunluğunu döndürür. (byte cinsinden.)
mbstrlen : direkt olarak metinsel ifadenin uzunluğunu verir.

explode : verilen metni belirtilen ayırıcı karakterer göre parçalar ve bir dizi olarak dönderir.

implode : bu explodenin tersini yapıyor. girilen değerlere göre diziyi birleştiriyor 

str_split : verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür.
Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.

ltrim, rtrim, trim ($metin) : Verilen metnin sırasıyla solundaki, sağındaki ve her iki tarafındaki
gereksiz boşlukları siler. 

substr($metin, $baslangic,$uzunluk) : Bir metnin belirtilen başlangıç konumundan itibaren istenilen 
uzunluktaki bir parçasını gönderir.

strtlower ve strtoupper : girilen metni büyük ya da küçük harfe dönüştürür. Türkçe karakter sorunu 
oluşturmaz.

ucfirst($metin), ucwords($metin) : Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini ve metindeki
her kelimenin ilk karakterini büyük harfe dönüştürür.

str_replace($kaynak,$hedef,$metin) : Verilen metindeki kaynak karakterlerin yerine hedef karakterleri koyarak 
değiştirme yapar. Bu fonksiyon küçük/büyük harflere duyarlıdır.

nl2br : string ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.

md5,sha1 : sırasıyla metne karşılık gelen md5 ve sha1 kodlarını verir.

strstr : bir dizgede belirtilen karakterden sonrasını döndürür.

</pre>
<?php 

echo "<pre>";

$text = "Welcome ! \nMuhammed Nabi Oğuz";

$parcala = explode(' ',$text);

$birlestir = implode(' ',$parcala);

print_r($birlestir);
echo "<br>";

print_r($parcala);
echo "<br>";

$splitOrnek = mb_str_split($text,3);       //mbstrsplit yaptım ki multibyte a göre hareket etsin UTF-8 karakterleri de çift karakter olarak almasın

print_r($splitOrnek);
echo "<br>";

$substrOrnek = substr($text,2,4);

print_r($substrOrnek);
echo "<br>";

$strtoupperOrnek = mb_strtoupper($text,'UTF-8');
print_r($strtoupperOrnek);
echo "<br>";

$strreplaceOrnek = str_replace('Muhammed', 'Kemal', $text);

print_r($strreplaceOrnek);
echo "<br>";

$nl2brOrnek = nl2br($text);
print

$email = 'name@example.com';
$domain = strstr($email,'@');

echo $domain;       //@example.com u dönderir.

