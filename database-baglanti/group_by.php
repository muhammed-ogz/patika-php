<?php

require 'baglanti.php';
global $db;

echo "<pre>";

$sql = "SELECT COUNT(id) as toplam, group_name, users.user_group FROM users
        LEFT JOIN groups ON user_group = group_id
        GROUP BY user_group
";

$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

print_r($users);