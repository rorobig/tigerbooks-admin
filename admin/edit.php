<?php 
if (!isset($_SESSION["user"]) AND isset($_SESSION["user"]["admin"])) {
	# code...
	header("Location: ../index.php");
}

$id=$_GET["id"];

if (isset($_POST["submit"])) {
	$status = $_POST["status"];
	include('../lib/connection.php');

	$database = new DB_SQL;
	$result = $database->updateorder($id, $status);

	if ($result==true) {
		echo 'Status changed succesfuly';
		header( "Refresh:1; url=admin.php", true, 303);
		
	}else{
		echo 'Error changing status';
	}
}



?>
<h2>Change status</h2>
<form action="" method="POST">
	<select name="status" id="" required>
		<option value="transit">transit</option>
		<option value="pending">pending</option>
	</select>
	<br>
	<input type="submit" name="submit"	value="Save changes">
</form>