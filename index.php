<?php

$client = new MongoDB\Client(
    'mongodb://heroku_sr2fjj6t:qrkv5jk2rvjc1iv790de7ng7fi@ds147207.mlab.com:47207/heroku_sr2fjj6t'
);

$db = $client->test;

//mongodb://heroku_sr2fjj6t:qrkv5jk2rvjc1iv790de7ng7fi@ds147207.mlab.com:47207/heroku_sr2fjj6t
