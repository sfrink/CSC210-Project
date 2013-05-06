<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Event Success</title>
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
	$name=$_GET["name"];
	$loc=$_GET["loc"];
	mysql_connect("localhost", "root", "your pw here");
	$date=$_GET["date"];
	$time=$_GET["time"];
	$desc=$_GET["description"];
	$price=$_GET["price"];
	mysql_select_db("db1") or die(mysql_error());
	if(isset($_COOKIE["user"])){
		$username=$_COOKIE["user"];
		$findid=mysql_query("SELECT band_id FROM users WHERE username='".$username."'");
		$row1=mysql_fetch_row($findid);
		$id=$row1[0];
	}
	else{
		print "something went wrong";
	}
	$IDinfo=mysql_query("SELECT event_id FROM events");
	$newid=mysql_num_rows($IDinfo)+1;
	mysql_query("INSERT INTO events (event_id, event_name, event_location, event_date, event_time, event_description, event_price, band_id)
				VALUES (".$newid.", '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($loc)."', '".mysql_real_escape_string($date)."', '".mysql_real_escape_string($time)."', '".mysql_real_escape_string($desc)."', '".mysql_real_escape_string($price)."', ".mysql_real_escape_string($id).")");
	print "	<p>Congratulations!  You have successfully created a new event for your band!</p>";
	
	?>
<p><a href="/project/home.php">Back to the main page</a></p>
</div>
</div>
</body>
</html>