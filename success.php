<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sign-up Success</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="success.css" type="text/css" rel="stylesheet" />

</head>

<body>
	<?php
		$username=$_GET["user"];
		$pw=$_GET["pw"];
		mysql_connect("localhost", "root", "mgs4gotp!");
		$band=$_GET["band"];
		$members=$_GET["members"];
		$bio=$_GET["bio"];
		$loc=$_GET["location"];
		$id=trim(strtolower($band));
		mysql_select_db("db1") or die(mysql_error());
		$check_band = mysql_query("SELECT * FROM bio WHERE band_name='".$band."'");
		$check_user = mysql_query("SELECT username FROM users WHERE username='".$username."'");
		if((mysql_num_rows($check_band) ==0) && (mysql_num_rows($check_user) ==0)){
			$IDinfo=mysql_query("SELECT band_id FROM users ORDER BY band_id");
			$newid=mysql_num_rows($IDinfo)+1;				
			mysql_query("INSERT INTO bio (band_id, band_name, band_members, band_bio, band_location)
						VALUES (".$newid.", '".mysql_real_escape_string($band)."', '".mysql_real_escape_string($members)."', '".mysql_real_escape_string($bio)."', '".mysql_real_escape_string($loc)."')");
			mysql_query("INSERT INTO users (band_id, username, password)
					VALUES (".$newid.", '".$username."', '".$pw."')");
				print "	<p>Congratulations!  You have successfully created a page for your band!</p>";

			}
		else{
			print "<p>A band or user with that name already exists.<p/>";
		}
		
	?>
	<p><a href="/project/home.php">Back to the main page</a></p>
</body>
</html>