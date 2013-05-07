<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Browse Bands</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

	<?php 
		include 'queries.php';
		include 'header.php'; 
	?>
	
	<div id="content_frame">
	<h2>Browse Bands</h2>
	<div id="content">
		<?php
			$band_list = getBandListInOrder();
			foreach ($band_list as $band_id) {
				echo getRow($band_id);
			}
		?>

	</div>
	</div>
	
</body>

<!--FUNCTIONS-->
<?php
	function getRow($band_id) {
		ob_start();
		?>
		<html>
			<div id="row">
				<?php 
					$img_url = getBandPic($band_id);
					$band_name = getBandName($band_id);
					echo getEventTime($event_id)
				?>
				<img src= "http://www.waughsd.org/fxconsult1/userfiles/band(1).jpg" width="50" height="50" >
				<?php echo $band_name; ?>
			</div>
		</html>
		<?php
		$row = ob_get_clean();
		return $row;
	}
?>

</html>