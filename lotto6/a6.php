<?php
$min = 1;
$max = 42;
$total = 6;  // 球的個數


$a_full = range($min, $max);
$a_box = array_rand($a_full, $total);  // 注意取出為key




$str = '';
foreach($a_box as $one)
{
    $str .= '<img src="images/' . ($one+1) . '.jpg">';
    // $str .= '<img src="images/' . $a_full[$one] . '.jpg">';
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
</body>
</html>
HEREDOC;

echo $html;
?>