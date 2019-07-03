<?php
echo 'hello';

$dbhost = 'ds147207.mlab.com:47207/heroku_sr2fjj6t';
$dbname = 'ds147207';

echo '1';

$mongoClient = new \MongoClient('mongodb://' . $dbhost);

echo '2';
?>
