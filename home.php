<!-- This file is just a start -Keenan -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Home</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />
	<?php include 'queries.php'; ?>
</head>

<body>
<?php 
	//echo getBandName("cool"); 
	$event_list = getEventList();
	for ($i = 0; $i < (sizeof($event_list)); $i++) {
		echo $event_list[$i];
	}	
?>
</body>

</html>