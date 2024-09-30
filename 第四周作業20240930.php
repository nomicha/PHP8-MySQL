<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>第四周作業20240930.php</title>
</head>
<body>
<?php 
//20240930
// 變數與指定敘述
$name = "myName";
$$name = "古莉婷";  // 指定變數$myName的值
// 取出動態變數的值
$username = $$name;
$username1 = ${$name};

$no = "B11090088";// 指定成字串

// 指定布林變數值
$isPass = True;
$isnotPass = False;

// 指定整數變數值
$a = 13;   $b = -1234;	$c = 0234;   //0開頭是8進位
$d = 0x1A; $e = 0x3fc;	//0x開頭是16進位
$year = 1999;	$mon = 5;	$date = 4;
$taiwan_y = $year - 1911;
$age = 2024 - $year;

// 指定浮點變數值
$j = 2.3; $k = 1.2345e3; $l = 7E-4;
$hr = 3.5;

// 指定字串變數值
$str1 = 'PHP+MySQL+AJAX網頁程式設計';
$str2 = "感謝您登入此網頁!";

// 顯示變數的內容
print "(1) $str2 ，這是 $username 的資料，他的編號是: $no ，年齡 $age 歲 ，出生年月日:	民國 $taiwan_y 年 $mon 月 $date 日，
是否吃葷?\t[ $isPass ]，是否有抽菸經驗?\t[ $isnotPass ] ，是否有重大病史?\t[ $isnotPass ]，
本次已登入 $hr hr，登入次數 $a 次，平均登入時間 $j hr<br/><br/>";

echo "(2)<br/>$str2<br/> 姓名:" . "\t$username <br/>
編號:  $no <br/>
年齡:  $age <br/>
出生年月日:	民國 $taiwan_y 年 $mon 月 $date 日<br/>
是否吃葷? \t[ $isPass ]<br/>
是否有抽菸經驗?\t[ $isnotPass ]<br/>
是否有重大病史?\t[ $isnotPass ]<br/>
本次已登入 $hr hr<br/>
登入次數 $a 次<br/>
平均登入時間 $j<br/>";
?>
</body>
</html>