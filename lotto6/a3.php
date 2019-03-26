<?php
$min = 1;
$max = 12;
$total = 6;  // 球的個數

// 『產生隨機亂數』，『放入陣列內』

$a_box = array();
$check = '';
for($i=1; $i<=$total; $i++)
{
    do {
		// 重覆『產生隨機亂數』，『放入陣列內』
        $num = mt_rand($min, $max);
        $check .= $num . ', ';

    } while( in_array($num, $a_box) );

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