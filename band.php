<!DOCTYPE html>
<html>

<head>
<title>Band Page</title>
<meta charset="utf-8">
<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php 
	include 'queries.php';
	include 'header.php';
	$band_id = $_GET["id"];
	$img_url = getBandPic($band_id);
?>

<div id="content_frame">
	<h2> <?php echo getBandName($band_id); ?> </h2>
	<div id="content">
		<hr>
		<div id = "col1">
			<img src= <?php echo "\"" . $img_url . "\"" ?> width="300" height="300" >
		</div>
		<div id = "col2">
			<h3>About</h3>
			<hr>
			<p>
				<?php echo getBandBio($band_id); ?>
			</p>
			<h3>Members</h3>
			<hr>
			<p>
				<?php echo getBandMembers($band_id); ?>
			</p>
			<h3>Contact Info</h3>
			<hr>
			<p>
				<?php echo getBandEmail($band_id); ?>
			</p>
		</div>
	</div>
</div>

<?php
<div id = "owner">
	<a href = addevent.php>Add Event</a>
	<a href = edit.php>Edit My Page</a>
</div>
</body>

</html>
