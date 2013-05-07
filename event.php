<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>FAQ</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />

</head>

<body>

	<?php 
		include 'queries.php';
		include 'header.php';
		$event_id = 3; //test
	?>
	
	<div id="content_frame">
	<h2><?php echo getEventName($event_id); ?></h2>
	<div id="content">
	<hr>
	<p>
		<?php echo getEventDetails($event_id); ?>
	</p>
		
	</div>
	</div>
	
</body>

</html>
