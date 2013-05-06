<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Add an event</title>
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



<form method="link" action="eventsuccess.php">
	<fieldset id="input">
		Name Your Event:
		<input name="name" type="text" size="20" />
		<br/>
		Where is it:
		<input name="loc" type="text" size="20"/>
		<br/>
		Date of event(YYYY-MM-DD):
		<input name="date" type="text" size="20"/>
		<br/>
Time of event(HH:MM:SS):
		<input name="time" type="text" size="20"/>
		<br/>
		Event Description:
		<textarea name="description" rows="4" cols="20">
Enter a brief description of the event.
		</textarea>
		<br/>
		How much does the event cost to attend:
		<input name="price" type="text" size="10">
		<br/>
		<input type="submit"/>
	</fieldset>
</form>
</div>
</div>
</body>

</html>