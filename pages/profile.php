<?php 
if (isset($_SESSION["user"])) {
	if (isset($_POST["submit"])) {
		$firstname= $_POST["firstname"];
		$lastname= $_POST["lastname"];
		$password= $_POST["password"];
		$password= password_hash($password,PASSWORD_DEFAULT);
		$email= $_POST["email"];
		$user_id= $_SESSION["user"]["id"];

		include("lib/connection.php");
		$database = new DB_SQL;

		$result=$database->update($firstname, $lastname, $password, $email, $user_id);
		if ($result==true) {
			echo "your account has been updated";
			$_SESSION['user'] = [
				'firstname' => $firstname,
				'lastname' => $lastname,
				'email' => $email
				];
		}else{
			echo "Error updating your account";
		}
	}

}else{
	header("Location: login.php");

}

 ?>
 <form action="" method="POST">
 	Firstname <input type="text" name="firstname" value="<?php echo $_SESSION["user"]["firstname"];  ?>" required>
 	<br>
 	Lastname <input type="text" name="lastname" value="<?php echo $_SESSION["user"]["lastname"];  ?>" required>
 	<br>
 	Password <input type="password" name="password" required>
 	<br>
 	Email <input type="email" name="email" value="<?php echo $_SESSION["user"]["email"];  ?>" required>
 	<br>
 	<input type="submit" name="submit" value="Save Changes">
 </form>
