<?php 
if (isset($_SESSION["user"]) AND $_SESSION["user"]["admin"]==true) {
	# code...
}else{
	header("Location: ../index.php");
}

?>
<h3>Orders</h3>
<ul>
 	<?php
	 	include("../lib/connection.php");
	 	$database=new DB_SQL;
	 	$orders=$database->getorders();

	 	while ($row=mysql_fetch_assoc($orders)) {
	 	 	echo '<a href="edit.php?id='.$row["id"].'"><li>userID: '.$row["user_id"].' | ProductID: '.$row["product_id"].' | Date: '.date("d-M-Y", strtotime($row["purchase_date"])).' | ('.$row["status"].')</li></a>';
	 	 } 
 	 ?>
	<!-- <a href=""><li>userID: 4 | ProductID: 8 | Date: 23 February 2012</li></a> -->
	
</ul>