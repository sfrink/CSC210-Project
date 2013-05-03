<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Edit</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="edit.css" type="text/css" rel="stylesheet" />

</head>

<!--Once cookies and databases are set up, we should be able to retrieve existing
	band data simply and make that the default values in these text boxes.
 -->

<body>
	<?php
		mysql_connect("localhost", "root", "put your mysql pw here");
		mysql_select_db("db1") or die(mysql_error());
		if(isset($_COOKIE["user"])){
			$username=$_COOKIE["user"];
			$findid=mysql_query("SELECT band_id FROM users WHERE username='".$username."'");
			$row1=mysql_fetch_row($findid);
			$id=$row1[0];
			$results = mysql_query("SELECT * FROM bio WHERE band_id='".$id."'");
			$row2 = mysql_fetch_row($results);
		}
		else{
			print "something went wrong";
		}
	?>
	<form method="link" action="successedit.php">
		<fieldset id="input">
			Band Name:
			<input name="band" type="text" size="20" value= <?php print "\"".$row2[1]."\""; ?> />
			<br/>
			Band Members:
			<textarea name="members" rows="4" cols="20">
				<?php print $row2[2]; ?>
			</textarea>
			<br/>
			Band Bio:
			<textarea name="bio" rows="4" cols="20">
				<?php print $row2[3]; ?>
			</textarea>
			<br/>
			Where is your band located:
			<input name="location" type="text" size="20" value = <?php print "\"".$row2[4]."\""; ?> />
			<br/>
			<input type="submit"/>
		</fieldset>
	</form>
	
</body>	

</html>