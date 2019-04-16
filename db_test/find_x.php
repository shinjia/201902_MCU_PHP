<?php
include 'config.php';

$key = isset($_POST['key']) ? $_POST['key'] : '*&^*&^*&HGIUYGH';

// 連接資料庫
$link = db_open();


$sqlstr = "SELECT * FROM person WHERE username='$key' ";
echo $sqlstr;

$result = mysqli_query($link, $sqlstr);

$total_rec = mysqli_num_rows($result);

$data = '';
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
   $uid      = $row['uid'];
   $usercode = $row['usercode'];
   $username = $row['username'];
   $address  = $row['address'];
   $birthday = $row['birthday'];
   $height   = $row['height'];
   $weight   = $row['weight'];
   $remark   = $row['remark'];
   
   // 依需要調整顯示內容
   $str_birthday = date('Y-m-d', strtotime($birthday));

   $data .= <<< HEREDOC
   <tr>
     <td>{$uid}</td>
     <td>{$usercode}</td>
     <td>{$username}</td>
     <td>{$address}</td>
     <td>{$str_birthday}</td>
     <td>{$height}</td>
     <td>{$weight}</td>
     <td>{$remark}</td>
   </tr>
HEREDOC;
}

db_close($link);



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>基本資料庫系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2 align="center" align="center">共有 {$total_rec} 筆記錄</h2>
<table border="1" align="center">
   <tr>
      <th>序號</th>
      <th>代碼</th>
      <th>姓名</th>
      <th>地址</th>
      <th>生日</th>
      <th>身高</th>
      <th>體重</th>
      <th>備註</th>
   </tr>
{$data}
</table>

</body>
</html>
HEREDOC;

echo $html;
?>