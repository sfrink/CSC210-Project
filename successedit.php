<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Edit Success</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="success.css" type="text/css" rel="stylesheet" />

</head>

<body>
<?php
	mysql_connect("localhost", "root", "put your mysql pw here");
	$band=$_GET["band"];
	$members=$_GET["members"];
	$bio=$_GET["bio"];
	$loc=$_GET["location"];
	mysql_select_db("db1") or die(mysql_error());
	if(isset($_COOKIE["user"])){
		$username=$_COOKIE["user"];
		$findid=mysql_query("SELECT band_id FROM users WHERE username='".$username."'");
		$row=mysql_fetch_row($findid);
		$id=$row[0];
	}
	mysql_query("UPDATE bio SET band_name='".mysql_real_escape_string($band)."'
				, band_members='".mysql_real_escape_string($members)."', 
				band_bio='".mysql_real_escape_string($bio)."', 
				band_location='".mysql_real_escape_string($loc)."' WHERE band_id=".$id);
	print "	<p>Congratulations!  You have successfully edited the page for your band!</p>";
	
	?>
<p><a href="/project/home.php">Back to the main page</a></p>
</body>
</html>