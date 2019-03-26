<?php
$min = 1;
$max = 12;
$total = 6;  // 球的個數


$a_full = range($min, $max);
shuffle($a_full);
$a_box = array_slice($a_full, 0, $total);



$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . $one . '.jpg">';
}

// 排序
sort($a_box);

$str_sort = '';
foreach($a_box as $one)
{
    $str_sort .= '<img src="images/' . $one . '.jpg">';
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
<p>原來順序{$str}</p>
<p>由小到大{$str_sort}</p>
<hr />
<p>檢查每次抽出的數字：{$check}</p>
</body>
</html>
HEREDOC;

echo $html;
?>