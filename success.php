<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sign-up Success</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="success.css" type="text/css" rel="stylesheet" />

</head>

<body>
	<p>Congratulations!  You have successfully created a page for your band!</p>
	<?php
		$username=$_GET["user"];
		$pw=$_GET["pw"];
		#mqsqlconnect("localhost", "root", "put your mysql password here");
		$band=$_GET["band"];
		$members=$_GET["members"];
		$bio=$_GET["bio"];
		$id=trim(strtolower($band));
		#mysql_query("INSERT INTO bands (ID, Band Name, Members, Bio)
		#			VALUES ('".$id."', '".$band."', '".$members."', '".$bio."')");
		#mysql_query("INSERT INTO users (Username, Password, ID)
		#			VALUES ('".$username."', '".$pw."', '".$id."')");
	?>
	<p><a href="/home.php">Back to the main page</a></p>
</body>
</html>