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
		$event_id = $_get["id"];
		$band_id = getEventBand($event_id);
		$img_url = getBandPic($band_id);
	?>
	
	<div id="content_frame">
	<h2><?php echo getEventName($event_id); ?></h2>
	<div id="content">
	<hr>
	<div id = "col1">
		<img src= <?php echo "\"" . $img_url . "\"" ?> width="300" height="300" >
	</div>
	<div id = "col2">
		<h3>Band</h3>
		<hr>
		<p>
			<?php print "<a href=\"band.php?id=" .$band_id. "\">".$band_name."</a>" ?>
		</p>
		<h3>Description</h3>
		<hr>
		<p>
			<?php echo getEventDetails($event_id); ?>
		</p>
		<h3>Location</h3>
		<hr>
		<p>
			<?php echo getEventLocation($event_id); ?>
		</p>
		<h3>Time</h3>
		<hr>
		<p>
			<?php echo getBandTime($event_id); ?>
		</p>
		<h3>Price</h3>
		<hr>
		<p>
			<?php echo getBandPrice($event_id); ?>
		</p>
	</div>
	
	</div>
	</div>
	
</body>

</html>
