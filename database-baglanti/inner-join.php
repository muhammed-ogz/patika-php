<?php
//JOIN
/*
$upt = $db->prepare('UPDATE users SET user_group=? WHERE id=?');

foreach ($users as $user):

    if ($user['user_group'] == 0) {
        $upt->execute([NULL, $user['id']]);
    }

endforeach;*/
global $db;
require 'baglanti.php';

$sql = "SELECT * FROM users
        INNER JOIN groups ON users.user_group = groups.group_id
";

$q = $db->query($sql);
$arr = $q->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($arr);

