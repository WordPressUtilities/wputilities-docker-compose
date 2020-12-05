<?php

$conn = mysqli_connect('mysql', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$conn) {
    exit('Connection failed: ' . mysqli_connect_error() . PHP_EOL);
}

$set = mysqli_query($conn,'SHOW DATABASES;');
$dbs = array();
while($db = mysqli_fetch_row($set))
   $dbs[] = $db[0];
echo implode('<br/>', $dbs);

echo 'Successful database connection!' . PHP_EOL;
