<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Sign-in</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="home.css" type="text/css" rel="stylesheet" />

</head>

<body>

<?php include 'header.php'; ?>

<div id="content_frame">
	<div id="content">	
	<?php
		if(isset($_COOKIE["user"])){
			setcookie("user", "", time()-3600);
			print "<p>You have successfully logged out.<p/>";
		}
		else{
			print "Something went wrong!";
		}
	?>	
	</div>
</div>
</body>

</html>