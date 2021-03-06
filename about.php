<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>About</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

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
<a href="band.php">My Band</a>
<?php
	if(isset($_COOKIE["user"])){
		print "<a href=\"logout.php\">Log out</a>";
	}
	else{
		print "<a href=\"signin.php\">Sign In / Sign up</a>";
	}
	?>
</nav>
	
	<div id="content_frame">
	<h2>About</h2>
	<div id="content">
	
	Roc 'N' Roll was created by Keenan Bartlett, Steven Frink, and Andrew Lee to help bands and music groups at the University of Rochester with publicizing upcoming events and shows. Often, these events are publicized in sources such as the Weekly Buzz, the Campus Times, and city publications, but easily get lost in the noise. By creating a web app targeted to students that caters specifically to music groups at the U of R and the Rochester, NY area, we hope to strengthen and promote a healthy music scene on campus.

	</div>
	</div>
	
</body>

</html>