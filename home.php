<!DOCTYPE html>
<html>

<head>
<title>Home</title>
<meta charset="utf-8">
<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php 
	include 'queries.php';
	include 'header.php';
?>

<div id="content_frame">
	<h2> All Events </h2>
	<div id="content">
		<?php
			$event_list = getEventListInOrder();
			foreach ($event_list as $event_id) {
				/*TODO If this is a new date from the event before, make a date banner*/
				/*event info row*/
				echo getRow($event_id);
			}
		?>
	</div>
</div>

</body>

<!--FUNCTIONS-->
<?php
	function getRow($event_id) {
		ob_start();
		?>
		<html>
			<div id="date_banner">
				<?php echo getEventDate($event_id); ?>
			</div>
			<div id="row">
				<?php 
					$band_id = getEventBand($event_id);
					$img_url = getBandPic($band_id);
					$band_name = getBandName($band_id);
					echo getEventTime($event_id)
				?>
				<img src= "http://www.waughsd.org/fxconsult1/userfiles/band(1).jpg" width="50" height="50" >
				<?php echo $band_name ?> at <?php echo getEventLocation($event_id); ?>
				<?php echo getEventPrice($event_id); ?>
			</div>
		</html>
		<?php
		$row = ob_get_clean();
		return $row;
	}
?>

</html>
