<?php
/**
 * Created by PhpStorm.
 * User: Rashid
 * Date: 21/05/2015
 * Time: 15:02
 */

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Contact Form for SimpleTest</title>
	<link rel="stylesheet" href="styles.css"/>
</head>

<body>

<header>
	<div id="page_title">
		<a href="contactForm.php">PHP Meetup Stockholm</a>
	</div>
	<nav>
		<ul>
			<li><a href="ContactForm.php">Home</a></li>
			<li><a href="#">Talks</a></li>
			<li><a href="about-us">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</nav>

</header>

<section>

	<?php

	if(isset($_GET) && count($_GET) >= 3) {
		?>
		<h4>Thank you</h4>
	<?php
	}

	?>



	<h1>Contact Form</h1>

	<form id="contact_form" action="<?php print $_SERVER['PHP_SELF'] ?>" method="GET" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Your name:</label><br />
			<input id="name" class="input" name="name" type="text" value="" size="30" autofocus="true" required="true" /><br />
		</div>
		<div class="row">
			<label for="email">Your email:</label><br />
			<input id="email" class="input" name="email" type="email" value="" size="30" required="true" /><br />
		</div>
		<div class="row">
			<label for="message">Your message:</label><br />
			<textarea id="message" class="input" name="message" rows="7" cols="30" required="true"></textarea><br />
		</div>
		<input id="submit_button" type="submit" value="Send email" />
	</form>

	<div class="sticky">
		<span class="elem">Rashid Khan</span>
		<span class="elem"><a href="mailto:rashidkhan.se@gmail.com">rashidkhan.se@gmail.com</a></span>
		<span class="elem"><a href="callto:0704 913763">0704 913763</a></span>
	</div>


</section>

</body>
</html>

