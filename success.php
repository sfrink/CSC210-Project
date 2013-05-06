<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sign-up Success</title>
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
		setcookie("user", $username);
		mysql_select_db("db1") or die(mysql_error());
		$check_band = mysql_query("SELECT * FROM bio WHERE band_name='".$band."'");
		$check_user = mysql_query("SELECT username FROM users WHERE username='".$username."'");
		if((mysql_num_rows($check_band) ==0) && (mysql_num_rows($check_user) ==0)){
			$IDinfo=mysql_query("SELECT band_id FROM users ORDER BY band_id");
			$newid=mysql_num_rows($IDinfo)+1;				
			mysql_query("INSERT INTO bio (band_id, band_name, band_members, band_bio, band_location, band_email, band_facebook, band_myspace, band_twitter, band_picture, song_1, song_2, song_3, song_4, song_5,song_6, song_7, song_8, song_9, song_10)
						VALUES (".$newid.", '".mysql_real_escape_string($band)."', '".mysql_real_escape_string($members)."', '".mysql_real_escape_string($bio)."', '".mysql_real_escape_string($loc)."', '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($face)."', '".mysql_real_escape_string($myspace)."', '".mysql_real_escape_string($twitter)."', '".mysql_real_escape_string($pic)."', '".mysql_real_escape_string($song[0])."', '".mysql_real_escape_string($song[1])."', '".mysql_real_escape_string($song[2])."', '".mysql_real_escape_string($song[3])."', '".mysql_real_escape_string($song[4])."', '".mysql_real_escape_string($song[5])."', '".mysql_real_escape_string($song[6])."', '".mysql_real_escape_string($song[7])."', '".mysql_real_escape_string($song[8])."', '".mysql_real_escape_string($song[9])."')");
			mysql_query("INSERT INTO users (band_id, email, username, password)
					VALUES (".$newid.", '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($username)."', '".mysql_real_escape_string($pw)."')");
				print "	<p>Congratulations!  You have successfully created a page for your band!</p>";

			}
		else{
			print "<p>A band or user with that name already exists.<p/>";
		}

		
	?>
	<p><a href="/project/home.php">Back to the main page</a></p>
</div>
</div>
</body>
</html>