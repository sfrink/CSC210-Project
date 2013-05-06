<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sign-up</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />

</head>

<body>

	<?php include 'header.php'; ?>
	
	<div id="content_frame">
	<h2>Sign-Up</h2>
	<div id="content">
	
	<form method="link" action="success.php">
		<fieldset id="input">
			Username:
			<input name="user" type="text" size="12"/>
			<br/>
			Password:
			<input name="pw" type="password" size="12"/>
			<br/>
			Band Name:
			<input name="band" type="text" size="20" />
			<br/>
			Band Members:
			<textarea name="members" rows="4" cols="20">Enter the members of your band here.
			</textarea>
			<br/>
			Band Bio:
			<textarea name="bio" rows="4" cols="20">Enter a brief bio for your band here.
			</textarea>
			<br/>
			Where is your band located:
			<input name="location" type="text" size="20"/>
			<br/>
			E-mail address:
			<input name="email" type="text" size="30"/>
			<br/>
			Facebook page: 
			<input name="facebook" type="text" size = "30"/>
			<br/>
			Myspace page:
			<input name="myspace" type="text" size="30"/>
			<br/>
			Twitter page:
			<input name="twitter" type="text" size="30"/>
			<br/>
			Picture:
			<input name="pic" type="text" size="30"/>
			<br/>
			Enter a youtube url to one of your songs:
			<br/>
			<input name="song" type="text" size="30"/>
			<br/>
			<input type="submit"/>
		</fieldset>
	</form>
	</div>
	</div>
</body>

</html>