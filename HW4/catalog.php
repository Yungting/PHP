<DOCTYPE html>

<head>
	<title>catalog.php</title>
	<meta charset="utf-8" />
</head>

<body>

<?php
session_start();

if (isset($_POST["product"])) {	 				//只要product有回傳
	$_SESSION["quantity"]=$_POST["quantity"];
	$id=$_POST["product"];
	$_SESSION["id"]=$id;

	switch ($id) {
		case "S001";
		$_SESSION["name"]="10吋變形平板";
		$_SESSION["price"]=12000;	
		break;
		
		case "S002";
		$_SESSION["name"]="15.6吋筆記型電腦";
		$_SESSION["price"]=27000;	
		break;

		case "S003";
		$_SESSION["name"]="iPhone手機";
		$_SESSION["price"]=21000;	
		break;

	}
	header("Location: savedata.php");  //轉到savedata.php
}

?>


	<form action="catalog.php" method="post">

	選擇商品：<select name="product">
		<option value="S001" select="true">10吋變形平板-$12000</option>
		<option value="S002">15.6吋筆記型電腦-$27000</option>
		<option value="S003">iPhone手機-$21000</option>
	</select>
	<input type="number" name="quantity" value="1">
	<input type="submit" value="訂購">
	
	

	<a href="catalog.php">商品目錄</a>
	<a href="shoppingcart.php">購物車</a>

	</form>

</body>

</DOCTYPE>