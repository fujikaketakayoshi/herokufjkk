<?php

//CLEARDB_DATABASE_URL: mysql://bb1251ea55e1d8:93abc748@us-cdbr-east-03.cleardb.com/heroku_053601649a23275?reconnect=true

// mysql -u bb1251ea55e1d8 -p -h us-cdbr-east-03.cleardb.com heroku_053601649a23275
// 93abc74
// 'bb1251ea55e1d8'@'ip-10-0-118-207.ec2.internal' 

// $dsn = 'mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_053601649a23275;charset=utf8';
// $db_user = 'bb1251ea55e1d8';
// $db_pass = '93abc74';
// $dbh = new PDO($dsn, $db_user, $db_pass);



$dbh = mysqli_connect('us-cdbr-east-03.cleardb.com', 'bb1251ea55e1d8', '93abc74', 'heroku_053601649a23275');


var_dump($dbh);
