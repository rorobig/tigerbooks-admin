<h2>new releases</h2>
<br>
<div class="category">
	<h3>Drama</h3>
		<?php 
		while ($row = mysql_fetch_assoc($drama)) {
			echo '<div class="book">
			<img src="'.$row["image"].'" alt="">
			<p class="title">'.$row['productname'].'</p>
			<p class="price">
					$'.$row["price"].'
				<a href="buy.php?id='.$row["id"].'">buy now</a>
			</p>
		</div>';
		}
	 ?>

	<!-- <div class="book">
		<img src="img/books/kawasaki.jpg" alt="">
		<p class="title">Guy Kawasaki</p>
		<p class="price">
			$14.99
			<button>buy now</button>
		</p>
	</div>
	<div class="book">
		<img src="img/books/kawasaki.jpg" alt="">
		<p class="title">Guy Kawasaki</p>
		<p class="price">
			$14.99
			<button>buy now</button>
		</p>
	</div>
</div>-->
<div class="category">
	<h3>Romance</h3>
		<?php 
		while ($row = mysql_fetch_assoc($romance)) {
			echo '<div class="book">
			<img src="'.$row["image"].'" alt="">
			<p class="title">'.$row['productname'].'</p>
			<p class="price">
					$'.$row["price"].'
				<a href="buy.php?id='.$row["id"].'">buy now</a>
			</p>
		</div>';
		}
	 ?>
<!-- 	<div class="book">
		<img src="img/books/design.jpg" alt="">
		<p class="title">Adaptive Design</p>
		<p class="price">
			$14.99
			<button>buy now</button>
		</p>
	</div>
	<div class="book">
		<img src="img/books/design.jpg" alt="">
		<p class="title">Adaptive Design</p>
		<p class="price">
			$14.99
			<button>buy now</button>
		</p>
	</div> -->
</div>
<br>
<div class="category">
	<h3>Kids</h3>
	<?php 
		while ($row = mysql_fetch_assoc($kids)) {
			echo '<div class="book">
			<img src="'.$row["image"].'" alt="">
			<p class="title">'.$row['productname'].'</p>
			<p class="price">
					$'.$row["price"].'
				<a href="buy.php?id='.$row["id"].'">buy now</a>
			</p>
		</div>';
		}
	 ?>

<!-- 		<div class="book">
			<img src="img/books/kids/AlienAlby.jpg" alt="">
			<p class="title">Alien Alby</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/coocking.jpg" alt="">
			<p class="title">Coocking in a can</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/Journey.jpg" alt="">
			<p class="title">Kids Journey to getting rich</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/Lottos.jpg" alt="">
			<p class="title">Lotto's Park Adventure</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/Mercy.jpg" alt="">
			<p class="title">Mercy Watson</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/Sidney.jpg" alt="">
			<p class="title">Sidney's Best Beaches</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div>
		<div class="book">
			<img src="img/books/kids/Think.jpg" alt="">
			<p class="title">Think Think Think!</p>
			<p class="price">
					$14.99
				<button>buy now</button>
			</p>
		</div> -->