<?php

$name=$_GET["name"];
$phone=$_GET["phone"];
$mail=$_GET["mail"];
$gender=$_GET["gender"];
$time=$_GET["time"];
$gift=$_GET["gift"];
$size=$_GET["size"];
$text=$_GET["text"];

echo "聯絡人資料確認：<br/><br/>";
echo "姓名：".$name."<br/>";
echo "電話：".$phone."<br/>";
echo "信箱：".$mail."<br/>";

if($gender=="male"){
	echo "你的性別是女性。<br/><br/><br/>";
	echo "<body bgcolor='pink'>";
}
else{
	echo "你的性別是男性。<br/><br/><br/>";
	echo "<body bgcolor='#99BBFF'>";
}


echo "參賽資料確認：<br/><br/>";
echo "時間選擇：";

for ($i=0; $i < count($time) ; $i++) { 
	echo $time[$i]."<br/>";
}

echo "參賽獎品選擇：";
for ($a=0; $a < count($gift) ; $a++) { 
	echo $gift[$a].",";
}
echo "<br/>";
echo "T-shirt size：".$size."<br/>";

echo "寶貴建議：".$text."<br/>";

?>