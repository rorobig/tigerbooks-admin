<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// include('lib/connection.php');
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tigerbooks</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<img class="logo" src="img/Untitled-1c.png" alt="">

	<div id="searchbox">
		<form id="searchbox" action="">
    	<input id="search" type="text" placeholder="Type here">
   	 	<input id="submit" type="submit" value="Search">
   	 	</form>	
	</div>

	<div class="header"> 
		<ul class="nav">

			<a href="index.php">
				<li>Home</li>
			</a>
			<a href="product.php">
				<li>Product</li>
			</a>
			<a href="about.php">
				<li>About</li>
			</a>
			<a href="contact.php">
				<li>Contact</li>
			</a>
				<?php
					if(isset($_SESSION['user'])){
						echo '
							<a href="logout.php">
							<li>Log Out</li>
							</a>
				';
				echo '
							<a href="profile.php">
							<li>Profile</li>
							</a>
				';
			}else{
				echo '
				<a href = "login.php">
					<li>Log In</li>
				</a>
				';

				echo ' 
				<a  href = "register.php">
				<li> Register</li>
				</a>
				';
					}
			?>
			
			
		</ul>
		
	</div>
	<div class="sidebar">
		
	</div>
	<div class="main">
		<?php
			include($page_content);

		?>
	</div>
	<div class="footer">
		<p>copyright - TigerBooks 2016</p>
	</div>
</body>
</html>

