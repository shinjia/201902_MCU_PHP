<?php
$link = mysqli_connect('localhost', 'root', '', 'class');

$sqlstr = " INSERT INTO person(usercode, username) VALUES ('B01', 'John' ) ";

mysqli_query($link, $sqlstr);

mysqli_close($link);

echo 'ok';
?>
