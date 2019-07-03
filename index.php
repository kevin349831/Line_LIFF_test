<?php
echo 'hello';

$dbhost = 'ds147207.mlab.com:47207/heroku_sr2fjj6t';
$dbname = 'ds147207';

echo '1';

$mongoClient = new \MongoClient('mongodb://' . $dbhost);

$mongoClient = new \MongoClient(
        'mongodb://' . $dbhost,
        array(
            'db' => $dbname,
            'username' => 'heroku_sr2fjj6t',
            'password' => 'qrkv5jk2rvjc1iv790de7ng7fi'
        )
    );
//mongodb://heroku_sr2fjj6t:qrkv5jk2rvjc1iv790de7ng7fi@ds147207.mlab.com:47207/heroku_sr2fjj6t
$db = $mongoClient->$dbname;

// 取得 test 這個 collection
$cDemo = $db->test;

echo '2';
?>
