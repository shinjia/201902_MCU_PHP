<?php
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

$ans = $a * $b;

$n1 = $ans % 10;   // 個位數
$n2 = floor($ans/10);   // 十位數

$pic1 = 'images/' . $n1 . '.jpg';
$pic2 = 'images/' . $n2 . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99 CAI</title>
</head>
<body>
<h1>答案是</h1>
<p>{$a} 乘以 {$b} 等於 {$ans}</p>
<p><img src="{$pic2}"><img src="{$pic1}"></p>
<a href="question.php">再試一題</a>

</body>
</html>
HEREDOC;

echo $html;
?>