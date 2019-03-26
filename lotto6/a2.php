<?php
$min = 1;
$max = 42;
$total = 6;  // 球的個數

// 『產生隨機亂數』，『放入陣列內』

for($i=1; $i<=$total; $i++)
{
    $num = mt_rand($min, $max);
    $a_box[] = $num;
}

/*
// 檢查陣列的值
echo '<pre>';
print_r($a_box);
echo '</pre>';
exit;
*/

$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . $one . '.jpg">';
}




$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Lotto6</title>
</head>

<body>
<p>幸運樂透數字</p>
<p>{$str}</p>
</body>
</html>
HEREDOC;

echo $html;
?>