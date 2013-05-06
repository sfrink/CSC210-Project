<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Sign-in</title>
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



	<form method="link" action="signinsuccess.php">
		<fieldset id="input">
			Username:
			<input name="user" type="text" size="12"/>
			<br/>
			Password:
			<input name="pw" type="password" size="12"/>
			<input type="submit"/>
		</fieldset>
	</form>
	<br/>
	<a href="signup.php">Signup if you don't have an account yet</a>
</div>
</div>
</body>
	
</html>