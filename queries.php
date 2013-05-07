<?php

/* This file will includes all of the functions I think I'll need to call
from the home page or band pages. These should call the appropriate queries on
the database. This file will be included in home.php and band.php */
	mysql_connect("localhost", "root", "your pw here");
	mysql_select_db(db1) or die(mysql_error);

//returns an array of all eventID	
function getEventList() {
	$results=mysql_query("SELECT event_id FROM events");
	$i=0;
	while($row = mysql_fetch_array($results)) {
		$ids[$i]=$row["event_id"];
		$i++;
	}
  	return $ids;
}

//returns list of all events sorted by date and time
function getEventListInOrder() {
	$results=mysql_query("SELECT event_id FROM events ORDER BY event_date, event_time");
	$i=0;
	while($row = mysql_fetch_array($results)) {
		$ids[$i]=$row["event_id"];
		$i++;
	}
  	return $ids;
}

//takes eventID and returns host bandID
function getEventBand($eventID) {
	$results=mysql_query("SELECT band_id FROM events WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$bandID=$row["band_id"];
	return $bandID;
}

//takes eventID and returns name of event
function getEventName($eventID) {
	$results=mysql_query("SELECT event_name FROM events WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$event_name=$row["event_name"];
	return $event_name;
}

//takes eventID and returns date  
function getEventDate($eventID) {
	/*NOTE: format doesn't matter too much as long as
	it can be ordered and converted into weekdays*/
	$results=mysql_query("SELECT event_date FROM events WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$event_date = $row["event_date"];
	return $event_date;
}

//takes eventID and returns time
function getEventTime($eventID) {
	$results=mysql_query("SELECT event_time FROM events WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$event_time=$row["event_time"];
	return $event_time;
}

//takes eventID and returns location of event
function getEventLocation($eventID) {
	$results=mysql_query("SELECT event_location FROM events	WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$event_loc = $row["event_location"];
	return $event_loc;
}

//takes eventID and returns price of show
function getEventPrice($eventID) {
	$results=mysql_query("SELECT event_price FROM events WHERE event_id=".$eventID);
	$row=mysql_fetch_array($results);
	$event_price = $row["event_price"];
	return $event_price;
}

//returns list of all band ids alphabetically sorted by band name
function getBandListInOrder() {
	$results=mysql_query("SELECT band_id FROM bio ORDER BY band_name");
	$i=0;
	while($row = mysql_fetch_array($results)) {
		$ids[$i]=$row["band_id"];
		$i++;
	}
  	return $ids;
}

//takes a bandID and returns band's full name
function getBandName($bandID){
	$results=mysql_query("SELECT band_name FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_name = $row["band_name"];
	return $band_name;
}

//takes a bandID and returns an array of eventIDs
function getBandEvents($bandID) {
	$results=mysql_query("SELECT event_id FROM events WHERE band_id=".$bandID);
	$i=0;
	while($row = mysql_fetch_array($results)) {
		$ids[$i]=$row["event_id"];
		$i++;
	}
	return $ids;
}

//takes a bandID and returns link to picture
function getBandPic($bandID) {
	$results=mysql_query("SELECT band_picture FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_pic=$row["band_picture"];
	return $band_pic;
}

//takes a bandID and returns an array of the given youtube urls
//note that some entries in the array may be empty
function getBandSample($bandID) {
	$results=mysql_query("SELECT song_1 FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$music=$row["song_1"];
	$music=str_replace("watch", "embed", $music);
	$music=str_replace("?v=", "/", $music)."?autohide=0";
	return $music;
}

//takes a bandID and returns string of bio
function getBandBio($bandID) {
	$results=mysql_query("SELECT band_bio FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_bio=$row["band_bio"];
	return $band_bio;
}

//takes a bandID and returns string of band members
function getBandMembers($bandID) {
	$results=mysql_query("SELECT band_members FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_members=$row["band_members"];
	return $band_members;
}

//takes a bandID and returns email address
function getBandEmail($bandID) {
	$results=mysql_query("SELECT email FROM users WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_email = $row["email"];
	return $band_email;
}

//takes a bandID and returns facebook
function getBandFacebook($bandID) {
	$results=mysql_query("SELECT band_facebook FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_facebook = $row["band_facebook"];
	return $band_facebook;
}

//takes a bandID and returns myspace
function getBandMyspace($bandID) {
	$results=mysql_query("SELECT band_myspace FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_myspace = $row["band_myspace"];
	return $band_myspace;
}

//takes a bandID and returns twitter
function getBandTwitter($bandID) {
	$results=mysql_query("SELECT band_twitter FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_twitter = $row["band_twitter"];
	return $band_twitter;
}

//takes bandID and returns location of band
function getBandLocation($bandID) {
	$results=mysql_query("SELECT band_location FROM bio WHERE band_id=".$bandID);
	$row=mysql_fetch_array($results);
	$band_loc = $row["band_location"];
	return $band_loc;
}

?>
