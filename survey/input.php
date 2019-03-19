<?php



$str_y = '';
$year_begin = 1900;
$year_end = date('Y', time());
for($i=$year_end; $i>=$year_begin; $i--)
{
  $str_y .= '<option>' . $i . '</option>' ;
}




$str_m = '';
for($i=1; $i<=12; $i++)
{
  $str_m .= '<option>' . $i . '</option>' ;
}



$str_d = '';
for($i=1; $i<=31; $i++)
{
  $str_d .= '<option>' . $i . '</option>' ;
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Survey</title>
</head>

<body>
<h1>問卷調查</h1>
<p>請輸入你的個人基本資料</p>

<form method="post" action="show.php">

  <p>姓名：<input type="text" name="nickname" value="Xxx"></p>

  <p>密碼：<input type="password" name="password"></p>

  <p>性別：
    <input type="radio" name="gender" value="M">男
    <input type="radio" name="gender" value="F">女
  </p>

  <p>血型：
    <input type="radio" name="blood" value="A">A
    <input type="radio" name="blood" value="B">B
    <input type="radio" name="blood" value="O">O
    <input type="radio" name="blood" value="AB">AB
    <input type="radio" name="blood" value="X">未知
  </p>

  <p>生日：
    <select name="birth_yy">
{$str_y}
    </select>
    年 
    <select name="birth_mm">
{$str_m}
    </select>
    月
    <select name="birth_dd">
{$str_d}
    </select>
    日
  </p>

  <p>是否已婚：<input type="checkbox" name="marriage" value="Y">(已婚請勾選)</p>

  <p>休閒興趣：
    <input type="checkbox" name="hobby1" value="Y">音樂 
    <input type="checkbox" name="hobby2" value="Y">閱讀 
    <input type="checkbox" name="hobby3" value="Y">旅遊 
    <input type="checkbox" name="hobby4" value="Y">美食
  </p>

  <p>個人簡介：
    <textarea rows="6" cols="40"></textarea>
  </p>

  <p><input type="submit" value="送出"></p>

</form>
</body>
</html>
HEREDOC;

echo $html;
?>