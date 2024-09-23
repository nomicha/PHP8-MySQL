<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>第三周作業第三部分20240923</title>
<style>
p { color:red;}
</style>
</head>
<body>
<?php
$begin = 6;
$end = 10;
for ($i = $begin; $i <= $end; $i += 1) {
?>
<p style="font-size:<?php echo 2*$i;?>pt">
歡迎光臨，這是第<?php echo $i-5?>行字
<?php
print "</p>";
} ?>
</body>
</html>