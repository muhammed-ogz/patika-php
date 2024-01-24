<!-- statik kavramı  -->

<?php

/**
 * Statik kavramı nedir ? 
 * Bir fonksiyonun çalışması bittiğinde içerisinde tanımlı olan değişkenler yok edilir yani ölürler.
 * Fonksiyonun bir sonraki kullanımında tanımlı olan değişkenlerin eski değerleri kaybolmuş olur. 
 * Eğer fonksiyonun ikinci kez yada daha sonraki kullanımlarında içerisindeki değişkenlerin eski değerlerinin 
 * kaybolmasını istemiyorsanız o değişkenleri statik (static) olarak tanımlamanız gerekmektedir. 
 * Bu sayede değişkenlerin eski değerlerine ulaşabilirsiniz.
 */

function counter(){
    static $count = 1;
    echo $count;
    $count++;
};

counter();
counter();
counter();
counter();
// sonuç : 1234 olacaktır. eğer count değerini static olarak ayarlamasak sounç 1111 olacaktı.