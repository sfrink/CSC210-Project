<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Sign-up</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="signup.css" type="text/css" rel="stylesheet" />

</head>

<body>

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
		<textarea name="members" rows="4" cols="20">
Enter the members of your band here, one per line.
		</textarea>
		<br/>
		Band Bio:
		<textarea name="bio" rows="4" cols="20">
Enter a brief bio for your band.
		</textarea>
		<br/>
Where is your band located:
		<input name="location" type="text" size="20"/>
		<br/>
		<input type="submit"/>
	</fieldset>
</form>

</body>

</html>