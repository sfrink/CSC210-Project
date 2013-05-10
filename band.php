<!DOCTYPE html>
<html>

<head>
<title>Band Page</title>
<meta charset="utf-8">
<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) return;
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		 fjs.parentNode.insertBefore(js, fjs);
		 }(document, 'script', 'facebook-jssdk'));</script>
<?php 
	include 'queries.php';
	include 'header.php';
	$band_id = $_GET["id"];
	$img_url = getBandPic($band_id);
?>

<div id="content_frame">
	<h2> <?php echo getBandName($band_id); ?> </h2>
	<div class="fb-like" data-href=<?php print "\"".getBandFacebook($band_id)."\"";?> data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
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
	if(isset($_COOKIE["user"])){
		$userid=getBandID($_COOKIE["user"]);
		if($userid == $band_id){
			print "<div id = \"owner\">";
			print "<a href = addevent.php>Add Event</a>";
			print "<a href = edit.php>Edit My Page</a>";
			print "</div>";
		}
	}
?>
</body>

</html>
