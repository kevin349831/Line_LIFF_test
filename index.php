<?php
echo 'hello';

$dbhost = 'ds147207.mlab.com';
$dbname = 'ds147207';

echo '1';

$mongoClient = new MongoClient('mongodb://' . $dbhost);

echo '2';
?>
