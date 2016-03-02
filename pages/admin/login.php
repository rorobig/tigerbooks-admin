<?php
include("../lib/connection.php");

if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$database = new DB_SQL;

		if (mysql_num_rows($database->login($username, $password)) > 0){
			$row = mysql_fetch_assoc($database->login($username, $password));
			
			if(password_verify($password, $row['password']) AND $row["role"]=="admin"){
				echo 'You are logged in';
				$_SESSION['user'] = [
				'admin' => true,
				'firstname' => $row['firstname'],
				'id' => $row['id'],
				'lastname' => $row['lastname'],
				'email' => $row['email'],
				];
				// header("Location: login.php");
				header( "Refresh:1; url=admin.php", true, 303);

			}else{
				echo "You don't have permission to login";

				}

			}else{
			echo "user doesnt exist"; 
		}
	}
 ?> 


<form action="" method="POST">
	<input type="text" name="username" placeholder="username"required>
	<br>
	<input type="password" name="password" placeholder="password"required>
<br>
<input type="submit" name="submit" value="login">
</form>