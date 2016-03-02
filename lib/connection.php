<?php

error_reporting(E_ALL ^ E_DEPRECATED);
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "boekhandel2");
		

class DB_SQL{
	function __construct(){
		$link = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);

		if (!$link) {
			die('Could not connect: ' .mysql_error());
		}
		mysql_select_db(DB_NAME);
	}
	
	function register($firstname, $lastname, $email, $password, $role){
		$sql_res = "INSERT INTO user VALUES(null, '$firstname', '$lastname', '$email', '$password', '$role')";
		return mysql_query($sql_res);
	}

	function login ($username, $password){
		$sql_res = "SELECT * from user WHERE firstname = '$username'";
		return mysql_query($sql_res);

	}

	function getkids(){
		$sql_res="SELECT * from product WHERE genres = 'kids'";
		return mysql_query($sql_res);
	}

	function getdrama(){
		$sql_res="SELECT * from product WHERE genres = 'drama'";
		return mysql_query($sql_res);
	}

	function getromance(){
		$sql_res="SELECT * from product WHERE genres = 'romance'";
		return mysql_query($sql_res);
	}

	function order($user_id, $product_id, $purchase_date){
		$sql_res="INSERT into orders VALUES(null, $user_id, $product_id, '$purchase_date', 'ordered')";
		return mysql_query($sql_res);
	}

	function update($firstname, $lastname, $password, $email, $user_id){
		$sql_res = "UPDATE user SET firstname='$firstname',lastname='$lastname', email= '$email', password='$password' WHERE id=$user_id";
		return mysql_query($sql_res);
	}

	function getorders(){
		$sql_res = "select * from orders";
		return mysql_query($sql_res);
	}

	function updateorder($id, $status){
		$sql_res = "update orders set status='$status' where id=$id";
		return mysql_query($sql_res);
	}

}
	

	
?>