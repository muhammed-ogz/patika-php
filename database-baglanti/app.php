<?php

/* 
PDO bağlantı 

try catch blokları ile hataları yakalamaya yarar.

*/
/*bütün dataları veritabanından getirmek için kullanılan değer $users değişkeni atanmış değerdir.
PDO::FETCH_ASSOC yerine sadece 2' de yazabilirdim. PDO fetch assoc değeri veritabanından gelen verilerin
user-id = 1 dedikten sonra [1] = 1 gibi bi sonuç vermemesi için kullandım*/

try {
    $db = new PDO('mysql:host=localhost;dbname=testdb;', 'root', '12345');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query('SET @@lc_time_names = "tr_TR"');   //zaman dilimini türkçeye çevirdik
    $db->query('SET CHARACTER SET utf8mb4');  //database dil setini ayarladık
    $db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');    //bağlantı dil setimizi ayarladık
} catch (PDOException $e) {
    echo $e->getMessage();
}


/*
 * crud işlemleri
 * */
echo "<pre>";
$select = $db->query('SELECT * FROM users');
$update = $db->query('UPDATE users SET username = "Kemalettin K*rdboğan" WHERE id = 5;');


//if($update){
//    echo "Değer başarı ile güncellendi.";
//}else{
//    echo "Değer güncellemesi başarısız oldu.";
//}

$users = $select->fetchAll(PDO::FETCH_ASSOC);
$delete = $db->query("DELETE FROM users WHERE id = 2");

//if($delete){
//    echo "Değer başarı ile silindi";
//}else{
//    echo "Değer silme işlemi başarısız oldu.";
//}

//$insert = $db->query("
//    INSERT INTO users SET
//                          id = 9,
//                          username = 'Nisa',
//                          grup = 'C,F,D,H'");

//if($insert){
//    echo "Değer başarı ile eklendi.";
//}else{
//    echo "Değer ekleme işlemi başarısız oldu.";
//}

$q = $db->prepare('INSERT INTO users SET
                            id = ?,
                            username = ?,
                            grup = ?');


$insert = $q->execute([11, 'Esra2', 'Y,D,F,T']);
$insert = $q->execute([12, 'Esra3', 'Y,D,F,T']);
$insert = $q->execute([13, 'Esra4', 'Y,D,F,T']);
$insert = $q->execute([14, 'Esra5', 'Y,D,F,T']);
$insert = $q->execute([15, 'Esra6', 'Y,D,F,T']);
$insert = $q->execute([16, 'Esra7', 'Y,D,F,T']);
$insert = $q->execute([17, 'Esra8', 'Y,D,F,T']);
$insert = $q->execute([18, 'Esra9', 'Y,D,F,T']);

if ($rows = $q->rowCount()) {
    echo $db->lastInsertId() . "<br>";    //eğer yukarıdaki sorgu başarlıdı dönerse sonuç 1 olacak ve bu kod çalışacak bu da son id yi verecek
    echo $rows . " kadar satır eklendi.";
} else {
    echo "Bir hata oluştu.";
}