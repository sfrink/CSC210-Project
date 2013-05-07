<div id="banner">
	<div id="banner_text">
		Roc 'N' Roll
	</div>
</div>

<nav>
	<a href="home.php">Home</a>
	<a href="about.php">About</a>
	<a href="faq.php">FAQ</a>
	<a href="browsebands.php">Browse Bands</a>
	<?php
		//include 'queries.php';
		if(isset($_COOKIE["user"])){
			$bandid=getBandID($_COOKIE["user"]);
			print "<a href=\"band.php?id=".$bandid."\">My Band</a>";
			print "<a href=\"logout.php\">Log out</a>";
		}
		else{
			print "<a href=\"band.php\">My Band</a>";
			print "<a href=\"signin.php\">Sign In / Sign up</a>";
		}
	?>
</nav>