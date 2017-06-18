<?php

session_start();

if (isset($_SESSION["id"])) {
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$quantity=$_SESSION["quantity"];

	// 儲存選購商品的陣列Cookie
	setcookie($id."[id]", $id, time()+3600);
	setcookie($id."[name]", $name, time()+3600);
	setcookie($id."[price]", $price, time()+3600);
	setcookie($id."[quantity]", $quantity, time()+3600);

	$test=$_COOKIE["id.id"];
	echo "id=".$test;
}

header("Location: shoppingcart.php");




?>