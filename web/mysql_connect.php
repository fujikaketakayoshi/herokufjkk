<?php

//CLEARDB_DATABASE_URL: mysql://bb1251ea55e1d8:93abc748@us-cdbr-east-03.cleardb.com/heroku_053601649a23275?reconnect=true

// mysql -u bb1251ea55e1d8 -p -h us-cdbr-east-03.cleardb.com heroku_053601649a23275
// 93abc74
// 'bb1251ea55e1d8'@'ip-10-0-118-207.ec2.internal' 

// $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'] . ';charset=utf8';
// $db_user = $_ENV['DB_USERNAME'];
// $db_pass = $_ENV['DB_PASSWORD'];
// $dbh = new PDO($dsn, $db_user, $db_pass);


// $dbh = mysqli_connect('us-cdbr-east-03.cleardb.com', 'bb1251ea55e1d8', '93abc748', 'heroku_053601649a23275');
$dbh = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);


var_dump($dbh);

var_dump($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);