<?php

require 'mysql.php';
$db = DataBase::initDB();
$c = 0;
$stmt = $db->query("SELECT User_account FROM z_line_test");
foreach ($stmt->fetchAll() as $row) {
    echo 'hello';
    echo $row['a'];
    break;
}
echo 'end';
?>
