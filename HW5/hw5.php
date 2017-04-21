<?php

$link=mysqli_connect(
	'localhost',
	'root',
	'a3654887',
	'phphw' );

$name=$_POST["name"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$time=implode(" ",$_POST["time"]);
$gift=implode(" ",$_POST["gift"]);
$size=$_POST["size"];
$text=$_POST["text"];

$sql="INSERT INTO hw (name, phone, gender, time, prize, size, remark) VALUES ('$name', '$phone', '$gender', '$time', '$gift', '$size', '$text')";
$result=mysqli_query($link,$sql);

$result=mysqli_query($link, "SELECT * FROM hw");


echo "<table border=1>";

echo "<tr>";
echo "<td>";
echo "編號";
echo "</td><td>";
echo "姓名";
echo "</td><td>";
echo "電話";
echo "</td><td>";
echo "性別";
echo "</td><td>";
echo "時段";
echo "</td><td>";
echo "獎品";
echo "</td><td>";
echo "Size";
echo "</td><td>";
echo "備註";
echo "</td></tr>";

while ($row=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>";
	echo $row["No"];
	echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["time"];
	echo "</td><td>";
	echo $row["prize"];
	echo "</td><td>";
	echo $row["size"];
	echo "</td><td>";
	echo $row["remark"];
	echo "</td></tr>";
}



?>