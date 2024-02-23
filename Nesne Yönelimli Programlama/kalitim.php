<?php

class Hash
{
    public function md5Hash($string)
    {
        return md5($string) . 'HASHCLASS';
    }

    public function sha1Hash($string)
    {
        return sha1($string);
    }
}

class User extends Hash
{

    public $username;
    public $password;

    public function md5Hash($string)
    {
        return md5($string) . 'User CLASS';
    }
//    aynı method class içerisinde varsa öncelikli olarak kendi methodunu kullanır

    public function saveUser($username, $password)
    {
        $this->username = $username;
        $this->password = parent::md5Hash($password);
//        parent:: ile miras aldığımız classı referans alacak
    }

    public function showUser()
    {
        echo $this->username . "<br>";
        echo $this->password . "<br>";
    }
}

$User = new User();

$User->saveUser('paramigeriistiyorum', '123456');

$User->showUser();