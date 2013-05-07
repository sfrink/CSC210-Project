<!DOCTYPE html>
<html>

<head>
<title>Home</title>
<meta charset="utf-8">
<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
	date_default_timezone_set('America/New_York');
	include 'queries.php';
	include 'header.php';
?>

<div id="content_frame">
	<h2> All Events </h2>
	<div id="content">
		<?php
			$event_list = getEventListInOrder();
			for ($i=0; $i < sizeof($event_list); $i++) {
				$event_id = $event_list[$i];
				
				if (eventDateHasPassed($event_id)) {continue;}
						
				//print date banner
				if ($i == 0) { //always print first date banner
					echo getDateBanner($event_id);
				} else if (getEventDate($event_id) != getEventDate($event_list[$i-1])) {
					echo getDateBanner($event_id);
				} else {
					echo "<hr>";
				}
				
				//print row
				echo getRow($event_id);
			}
			echo "<hr>";
		?>
	</div>
</div>

</body>

<!--FUNCTIONS-->
<?php
	//this method still needs work
	function getRow($event_id) {
		ob_start();
		?>
		<html>
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

<?php
	function getDateBanner($event_id) {
		ob_start();
		?>
		<html>
			<div id="date_banner">
				<?php echo getEventDate($event_id); ?>
			</div>
		</html>
		<?php
		$date_banner = ob_get_clean();
		return $date_banner;
	}
?>

<?php
	function eventDateHasPassed($event_id) {
		$event_date = getEventDate($event_id);
		$cur_date = date('Y-m-d');
		if ($event_date < $cur_date) { return TRUE;}
		else {return FALSE;}
	}	
?>

</html>
