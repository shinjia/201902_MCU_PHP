<?php

/*
$name = '陳信嘉';
$age = 50;
$pic = 'images/head1.jpg';
*/



$name = '阮經天';
$age = 25;
$pic = 'images/head2.jpg';




$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>自我介紹</h1>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p><img src="{$pic}"></p>

</body>
</html>
HEREDOC;

echo $html;
?>