<?php 

	error_reporting(E_ALL ^ E_DEPRECATED);
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$database = new DB_SQL;

		if (mysql_num_rows($database->login($username, $password)) > 0){
			$row = mysql_fetch_assoc($database->login($username, $password));
			
			if(password_verify($password, $row['password'])){
				echo 'You are logged in';
				$_SESSION['user'] = [
				'firstname' => $row['firstname'],
				'id' => $row['id'],
				'lastname' => $row['lastname'],
				'email' => $row['email'],
				];
				// header("Location: login.php");
				header( "Refresh:1; url=index.php", true, 303);

			}else{
				echo 'Wrong username or password';

				}

			}else{
			echo "user doesnt exist"; 
		}
	}
 ?>

<h1>Log In</h1>
<hr>
<form action="" method="POST">
	<label for="">username</label>
	<input type="text" name="username" required>
	<br>
	<br>
	<label for="">password</label>
	<input type="password" name="password" required>
	<br>
	<br>
	<button type="submit" name="submit">Login</button>
	

</form>