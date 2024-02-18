<?php
session_start();    // eğer burada session başlamazsa sıkıntı yaşarız.
include 'function/helper.php';

$user = [
    'muhammedogz' => [
        'password' => '123456',
        'email' => 'muhammedogz@ads.com'
    ],
    'abbasdevaci31' => [
        'password' => '654321',
        'email' => 'abbasdevaci31@sdk.com'
    ],
    'abbasdevaci3131' => [
        'password' => '123456',
        'email' => 'abbasdevaci31@sdk.com'
    ]
];

if (get('islem') == 'giris') {

    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if (!post('username')) {
        $_SESSION['error'] = 'Lütfen bir kullanıcı adı giriniz';
        header('Location:login.php');
        exit();
    } elseif (!post('password')) {
        $_SESSION['error'] = 'Lütfen şifrenizi giriniz';
        header('Location:login.php');
        exit();
    }else{

        if (array_key_exists(post('username'),$user)){
            if ($user[post('username')]['password'] == post('password')){

                $_SESSION['login'] = true;
                $_SESSION['kullanici_adi'] = post('username');
                $_SESSION['eposta'] = $user[post('username')]['email'];

                header('Location:index.php');
                exit();

            }else{
                $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
                header('Location:login.php');
                exit();
            }
        }else{
            $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
            header('Location:login.php');
            exit();
        }

    }
};

if (get('islem') == 'hakkimda'){

    $hakkimda = post('hakkimda');

    $islem = file_put_contents('./db/'.session('kullanici_adi').'.txt',htmlspecialchars($hakkimda));

    if($islem){
        header('Location:index.php?islem=TRUE');
    }else{
        header('Location:index.php?islem=FALSE');
    }

}

if(get('islem') == 'cikis'){
    session_destroy();
    session_start();
    $_SESSION['error'] = 'Oturum Sonlandırıldı.';
    header('Location:login.php');
};

if(get('islem') == 'renk'){

    setcookie('color' , get('color'), time() + (86400 * 365));
    
    header('Location:'.$_SERVER['HTTP_REFERER'] ?? 'index.php');

}