<?php
// $height = $_POST['height'];
$height = isset($_POST['height']) ? $_POST['height'] : 0;
$weight = isset($_POST['weight']) ? $_POST['weight'] : 0; 

/*
print_r($_POST);  // 顯示陣列
exit;
*/


// 計算 BMI
$bmi = ($weight) / (($height/100) * ($height/100));
// $bmi = $weight / pow(($height/100),2);
// $bmi = $weight / (($height/100) ** 2);

// 取兩位小數
$bmi = round($bmi, 2);
// $bmi = number_format($bmi, 2);
// $bmi = floor($bmi*100) / 100;



if($bmi>=24)
{
    $msg = '月巴月半';
}
elseif( ($bmi<24) && ($bmi>=22) )
{
    $msg = '過重';
}
elseif( $bmi<22 && $bmi>=17.5 )
{
    $msg = '標準';
}
elseif( $bmi<17.5 )
{
    $msg = '太輕';
}
else
{
    $msg = '程式一定出錯了';
    echo $msg;
    exit;
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>
<body>
<h1>你的BMI</h1>
<p>BMI: {$bmi}</p>
<p>{$msg}</p>
<p>你好你好</p>

<hr />

<p>身高：{$height}</p>
<p>體重：{$weight}</p>

</body>
</html>
HEREDOC;

echo $html;
?>