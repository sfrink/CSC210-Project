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
					$time = getEventTime($event_id);
				?>
				<div id = "time">
					<?php echo formatTime($time); ?>
				</div>
				<div id = "pic">
					<img src= <?php echo "\"" . $img_url . "\"" ?> width="60" height="60" >
				</div>
				<div id = "band_and_loc">
					<a href = "band.php"> <?php echo $band_name ?> </a> <br> <span id = "at">
					at </span> <?php echo getEventLocation($event_id); ?>
				</div>
				<div id = "price">
					<?php echo "<br>" . getEventPrice($event_id); ?>
				</div>
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
				<?php 
					$date = getEventDate($event_id);
					$today = date('Y-m-d');
					$tomorrow = date('Y-m-d', strtotime("$today + 1 day"));
					if ($date == $today) {
						echo "Today";
					} else if ($date == $tomorrow) {
						echo "Tomorrow";
					} else {
						$date = DateTime::createFromFormat('Y-m-j', $date);
						echo $date->format('l, F d');
					}
				?>
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

<?php
	function formatTime($time) {
		$time_ary = explode(":", $time);
		$hours = $time_ary[0];
		$minutes = $time_ary[1];
		$meridian = "am";
		if ($hours >= 12) {
			$meridian = "pm";
		}
		if ($hours == 0) {
			$hours = 12;
		}
		if ($hours < 10) {
			$hours = substr($hours, -1);
		}
		return "<span id = \"hours\">" . $hours . "</span><span id = \"rest\">" . ":" . $minutes . $meridian . "</span>";
	}
?>

</html>
