<?php

/* This file will includes all of the functions I think I'll need to call
from the home page or band pages. These should call the appropriate queries on
the database. This file will be included in home.php and band.php */

//returns an array of all eventID	
function getEventList() {
	$event_list = array(
		1 => 100,
	);
  	return $event_list;
}

//takes eventID and returns host bandID
function getEventBand($eventID) {
	$bandID = "thehairygoats"
	return $bandID;
}

//takes eventID and returns date  
function getEventDate($eventID) {
	/*NOTE: format doesn't matter too much as long as
	it can be ordered and converted into weekdays*/
	$event_date = "6.1.2013";
	return event_date;
}

//takes eventID and returns time
function getEventTime($eventID) {
	$event_time = "20:30";
	return $event_time;
}

//takes eventID and returns location of event
function getEventLocation($eventID) {
	$event_loc = "The Bug Jar";
	return $event_loc;
}

//takes eventID and returns price of show
function getEventPrice($eventID) {
	$event_price = 7;
	return $event_price;
}

//takes a bandID and returns band's full name
function getBandName($bandID){
	$band_name = ("The Hairy Goats");
	return $band_name;
}

//takes a bandID and returns an array of eventIDs
function getBandEvents($bandID) {
	$band_events = array(
		1 => 100,
	);
	return $band_events;
}

//takes a bandID and returns link to picture
function getBandPic($bandID) {
	$band_pic = "http://img.ehowcdn.com/other-people/ehow/images/a06/v4/es/make-goat-wormer-using-herbs-180x180.jpg";
	return $band_pic;
}

//takes a bandID and returns code to embed youtube vid
function getBandSample($bandID) {
	$band_sample = "http://www.youtube.com/watch?v=PpccpglnNf0";
	return $band_sample;
}

//takes a bandID and returns string of bio
function getBandBio($bandID) {
	$band_bio = "This band rocks!";
	return $band_bio;
}

//takes a bandID and returns string of band members
function getBandMembers($bandID) {
	$band_members = "John Goat - guitar";
	return $band_members;
}

//takes a bandID and returns email address
function getBandEmail($bandID) {
	$band_email = "john@hairygoats.org";
	return $band_email;
}

//takes a bandID and returns web address
function getBandWebsite($bandID) {
	$band_site = "hairygoats.org";
	return $band_site;
}
  
?>