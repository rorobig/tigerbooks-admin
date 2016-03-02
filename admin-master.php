<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// include('lib/connection.php');
session_start();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tigerbooks</title>
	<link rel="stylesheet" href="../css/admin.css">
	<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<img class="logo" src="../img/Untitled-1c.png" alt="">

	
	<div class="header"> 
		<ul class="nav">
		</ul>
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



