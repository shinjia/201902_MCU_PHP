<?php

$a = mt_rand(1,9);
$b = mt_rand(1,9);

$pic_a = 'images/' . $a . '.jpg';
$pic_b = 'images/' . $b . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99 CAI</title>
</head>
<body>
<h1>Hello World</h1>
<p>{$a} * {$b}</p>
<p><img src="{$pic_a}"><img src="images/mul.jpg"><img src="{$pic_b}"></p>

<p>
| <a href="question.php">換一題</a> | <a href="answer.php?a={$a}&b={$b}">看答案</a> | 
</p>

</body>
</html>
HEREDOC;

echo $html;
?>