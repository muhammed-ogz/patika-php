<?php
class UserModel
{
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=testdb;', 'root', '12345');
    }

    public function listUsers()
    {
        $q = $this->db->query('SELECT * FROM users');
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
}

/**
 * Model veritabanını barındıran bölümdür. Prosedür ve işleyiş kuralları
 * bu bölümde yer almaktadır.
 */