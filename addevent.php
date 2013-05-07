<!DOCTYPE HTML>
<html>

<head>
<title>Add an event</title>
<meta charset=utf-8" />
<link href="home.css" type="text/css" rel="stylesheet" />

</head>

<body>

<?php include 'header.php' ?>

<div id="content_frame">
<h2> Create an Event </h2>
<div id="content">


<form method="link" action="eventsuccess.php">
	<fieldset id="input">
		Name your event:
		<input name="name" type="text" size="20" />
		<br/>
		Where is it?
		<input name="loc" type="text" size="20"/>
		<br/>
		Date of event(YYYY-MM-DD):
		<input name="date" type="text" size="20" maxlength = "10"/>
		<br/>
Time of event:
		<select name = "time">
			<?php
			for ($i=0; $i<48; $i++) {
				echo getOption($i); 
			}
			?>
		</select>
		<br/>
		Event Description:
		<textarea name="description" rows="4" cols="20">
Enter a brief description of the event.
		</textarea>
		<br/>
		How much does the event cost to attend?
		<input name="price" type="text" size="10" maxlength = "10">
		<br/>
		<input type="submit"/>
	</fieldset>
</form>
</div>
</div>
</body>

<?php
	function getOption($i) {
		$hours = (int)($i/2);
		if ($i % 2 == 1) {
			$minutes = "30";
		} else {
			$minutes = "00";
		}
		//format it for viewer of form:
		$time = $hours . ":" . $minutes;
		//format it for what goes into the database:
		if ($hours < 10) { $hours = "0" . $hours; }
		$time_val = $hours . ":" . $minutes . ":" . "00";
		
		return "<option value = \"" . $time_val . "\">" . $time . "</option>";
	}
?>

</html>
