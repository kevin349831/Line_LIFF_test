<?php

require 'mysql.php';
$db = DataBase::initDB();

$stmt = $db->query("SELECT * FROM `z_line_test` WHERE 1");
foreach ($stmt->fetchAll() as $row) {
    $a = $row['a'];
}
echo $a;
echo 'end';
?>
