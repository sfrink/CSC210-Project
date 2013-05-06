<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Sign-in</title>
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
<a href="about.html">About</a>
<a href="faq.html">FAQ</a>
<a href="browse.php">Browse Bands</a>
<a href="band.php">My Band</a>
<a href="signin.php">Sign In / Sign up</a>
</nav>

<div id="content_frame">
<div id="content">



	<?php
		$username=$_GET["user"];
		$pw=$_GET["pw"];
		mysql_connect("localhost", "root", "your pw here");
		mysql_select_db("db1") or die(mysql_error());
		$results=mysql_query("SELECT * FROM users WHERE username='".$username."' and password='".$pw."'");
		if(mysql_num_rows($results) == 1){
			setcookie("user", $username);
			print "<p>Thanks for signing in, ".$username."<p/>";
		}
		else{
			print "<p>Invalid sign-in<p/>";
		}
	?>
	<p><a href="/project/home.php">Back to the main page</a></p>
</div>
</div>
</body>

</html>