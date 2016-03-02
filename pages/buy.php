<?php 
if (isset($_SESSION["user"])) {
	include("lib/connection.php");
	
	$product_id=$_GET["id"];
	$user_id=$_SESSION["user"]["id"];
	$purchase_date = date('Y-m-d H:i:s');

	if (isset($_POST["submit"])) {
		$database = new DB_SQL;
		$result= $database->order($user_id, $product_id, $purchase_date);

		if ($result==true) {
			echo "Your order has been placed";

		}else{
			echo "Error placing your order";

		}
	}
	
}else{

	header("Location: login.php");
}

 ?>
<form action="" method="POST">

	<input type="text" name="creditcard" placeholder="Creditcard Number" required>
	<br>
	<input type="submit" name="submit" value="Purchase">
</form>