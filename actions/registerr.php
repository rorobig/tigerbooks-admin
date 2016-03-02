 
 <?php
 	
 	include('../lib/connection.php');	

 	$firstname = $_POST["firstname"];
 	$lastname = $_POST["lastname"];
 	$email = $_POST["email"];
 	$password = $_POST["password"];

 	 $password = password_hash($password, PASSWORD_DEFAULT);
$role="user";
 	$database = new DB_SQL;		
 	$result = $database->register($firstname, $lastname, $email, $password, $role);

	 	if($result == true){
	 		echo 'Your account has been created';
	 		header ("refresh:1;url=../login.php");
	 	}else{	
	 		echo 'Error creating your account';
	 	}

 ?>