<DOCTYPE html>

<head>
	<title>shoppingcart.php</title>
	<meta charset="utf-8" />
</head>

<body>

<form action="catalog.php">

<?php
echo "<table border=1>";

echo "<tr>";
echo "<td>功能</td>";
echo "<td>編號</td>";
echo "<td>名稱</td>";
echo "<td>價格</td>";
echo "<td>數量</td>";
echo "</tr>";

$total=0;

while(list($arr, $value)= each($_COOKIE)){			//把Cookie值取出來，用陣列形式
	echo "<tr>";
	echo "<td><a href='deldata.php?id=".$arr."'>刪除</a></td>";
	$price=0;
	$quantity=0;

	while(list($name, $value)=each($_COOKIE[$arr])){
		echo "<td>".$value."</td>";
		if($name=="price"){
			$price=$value;
		}	
		if($name=="quantity"){
			$quantity=$value;
		}
	}

		$total=$total+($quantity*$price);
		echo "</tr>";
}

	if ($total!= 0) {
		echo "<tr>";
		echo "<td>總金額= NT$".$total."</td>";
		echo "</tr>";
	}


echo "<table>";

?>

</form>

	<br>
	<a href="catalog.php">商品目錄</a><br>
	<a href="shoppingcart.php">檢視購物車</a>

</body>

</DOCTYPE> 