<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Event Success</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="success.css" type="text/css" rel="stylesheet" />

</head>

<body>
<?php
	$name=$_GET["name"];
	$loc=$_GET["loc"];
	mysql_connect("localhost", "root", "your mysql pw here");
	$date=$_GET["date"];
	$time=$_GET["time"];
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
	print $newid." ".$name." ".$loc." ".$date." ".$time." ".$id;
	mysql_query("INSERT INTO events (event_id, event_name, event_location, event_date, event_time, band_id)
				VALUES (".$newid.", '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($loc)."', '".mysql_real_escape_string($date)."', '".mysql_real_escape_string($time)."', ".mysql_real_escape_string($id).")");
	print "	<p>Congratulations!  You have successfully created a new event for your band!</p>";
	
	?>
<p><a href="/project/home.php">Back to the main page</a></p>
</body>
</html>