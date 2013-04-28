<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Sign-in</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="signup.css" type="text/css" rel="stylesheet" />

</head>

<!-- this functionality should be made a part of the home page, possibly in javascript.
	It will  redirect to a homepage (unless we use js), but we will need to use cookies or sessions
	to remember that a user has logged in-->

<body>
	<form method="link" action="home.php">
		<fieldset id="input">
			Username:
			<input name="user" type="text" size="12"/>
			<br/>
			Password:
			<input name="pw" type="password" size="12"/>
			<input type="submit"/>
		</fieldset>
	</form>

</body>
	
</html>