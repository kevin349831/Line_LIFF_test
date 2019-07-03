<?php
// MongoDB 伺服器設定
$dbhost = 'localhost';
$dbname = 'ds147207';

// 連線到 MongoDB 伺服器
$mongoClient = new \MongoClient('mongodb://' . $dbhost);

$mongoClient = new \MongoClient(
        'mongodb://' . $dbhost,
        array(
            'db' => $dbname,
            'username' => 'heroku_sr2fjj6t',
            'password' => 'qrkv5jk2rvjc1iv790de7ng7fi'
        )
    );

$db = $mongoClient->$dbname;

// 取得 test 這個 collection
$cDemo = $db->test;

// 要儲存的資料
$record = array(
  'firstName' => 'G.T.',
  'lastName' => 'Wang',
  'roles' => array('developer', 'webmaster')
);

// 將資料儲存至 test 這個 collection 中
$cDemo->save($record);

// 設定查詢條件
$queryCondition = array(
  'firstName' => 'G.T.',
  'lastName' => 'Wang'
);

// 查詢資料
$result = $cDemo->findOne($queryCondition);

// 輸出資料
print_r($result);
?>
