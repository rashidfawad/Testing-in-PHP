<?php
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Välkommen till Hitta.se</title>
	<link rel="stylesheet" href="styles.css"/>
	<link rel="stylesheet" href="stylesheets.css"/>
</head>

<body>

<header>
	<div id="page_title">
		<a href="contactForm.php">Hitta</a>
	</div>
	<nav>
		<ul>
			<li><a href="index.php">Hem</a></li>
			<li><a href="#">Shops</a></li>
			<li><a href="om-oss.php">About Us</a></li>
			<li><a href="kontakt-oss">Contact Us</a></li>
		</ul>
	</nav>

</header>

<section>

	<div class="search">
		<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			<input type="text" id="search" autofocus="true" placeholder="Sök"/>
			Hospital
			<input type="radio" name="option" value="Hospital"/>
			Shops
			<input type="radio" name="option" value="Shops"/>
			Butiks
			<input type="radio" name="option" value="Butiks"/>
			Restaurants
			<input type="radio" name="option" value="Retaurants"/>
			<input id="submit" type="submit" value="Sök"/>
		</form>
	</div>

	<?php

	if(!file_exists('folderName')) {
		mkdir('folderName', '0777', true);
		$path = realpath('folderName');
		$file = fopen($path . "/file1.txt", 'w') or die("Could not open the file");
	}

	//var_dump(__DIR__); die;





	?>
</section>

<footer>&copy; Hitta.se All rights reseved</footer>


</body>

</html>


















