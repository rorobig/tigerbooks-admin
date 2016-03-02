<?php 
	include('lib/connection.php');
	$database = new DB_SQL;

	$kids =  $database->getkids();
	$drama = $database->getdrama();
	$romance = $database->getromance();

	$page_content = "pages/product.php";
	include("master.php");
 ?>