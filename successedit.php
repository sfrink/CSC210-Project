<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Edit Success</title>
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
	mysql_connect("localhost", "root", "your pw here");
	$band=$_GET["band"];
	$members=$_GET["members"];
	$bio=$_GET["bio"];
	$loc=$_GET["location"];
	$email=$_GET["email"];
	$face=$_GET["facebook"];
	$myspace=$_GET["myspace"];
	$twitter=$_GET["twitter"];
	$pic=$_GET["pic"];
	for($i=0;$i<10;$i++){
		$song[$i]=$_GET["song".($i+1)];
	}	
	mysql_select_db("db1") or die(mysql_error());
	if(isset($_COOKIE["user"])){
		$username=$_COOKIE["user"];
		$findid=mysql_query("SELECT band_id FROM users WHERE username='".$username."'");
		$row=mysql_fetch_row($findid);
		$id=$row[0];
	}
	mysql_query("UPDATE bio SET band_name='".mysql_real_escape_string($band)."', band_members='".mysql_real_escape_string($members)."', band_bio='".mysql_real_escape_string($bio)."', band_location='".mysql_real_escape_string($loc)."', band_email='".mysql_real_escape_string($email)."', band_facebook='".mysql_real_escape_string($face)."', band_myspace='".mysql_real_escape_string($myspace)."', band_twitter='".mysql_real_escape_string($twitter)."', song_1='".mysql_real_escape_string($song[0])."', song_2='".mysql_real_escape_string($song[1])."', song_3='".mysql_real_escape_string($song[2])."', song_4='".mysql_real_escape_string($song[3])."', song_5='".mysql_real_escape_string($song[4])."', song_6='".mysql_real_escape_string($song[5])."', song_7='".mysql_real_escape_string($song[6])."', song_8='".mysql_real_escape_string($song[7])."', song_9='".mysql_real_escape_string($song[8])."', song_10='".mysql_real_escape_string($song[9])."' WHERE band_id=".$id);
	mysql_query("UPDATE users SET email='".mysql_real_escape_string($email)."' WHERE band_id=".$id);
	print "	<p>Congratulations!  You have successfully edited the page for your band!</p>";
	
	?>
<p><a href="/project/home.php">Back to the main page</a></p>
</div>
</div>
</body>
</html>