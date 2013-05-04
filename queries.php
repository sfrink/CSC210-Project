<?php

/* This file will includes all of the functions I think I'll need to call
from the home page or band pages. These should call the appropriate queries on
the database. This file will be included in home.php and band.php */
	
function getEventList() {
  	//returns an array of all eventIDs
}

function getEventBand($eventID) {
	//takes eventID and returns host bandID
}
  
function getEventDate($eventID) {
	//takes eventID and returns date	
	/*format doesn't matter too much as long as
	it can be ordered and converted into weekdays*/
}

function getEventTime($eventID) {
	//takes eventID and returns time
}

function getEventLocation($eventID) {
	//takes eventID and returns location of event
}

function getEventPrice($eventID) {
	//takes eventID and returns price of show
}

function getBandName($bandID){
	//takes a bandID and returns band's full name
	$band_name = ("band name");
	return $band_name;
}

function getBandEvents($bandID) {
	//takes a bandID and returns an array of eventIDs
}

function getBandPic($bandID) {
	//takes a bandID and returns link to picture
}

function getBandSample($bandID) {
	//takes a bandID and returns code to embed youtube vid
}

function getBandBio($bandID) {
	//takes a bandID and returns string of bio
}

function getBandMembers($bandID) {
	//takes a bandID and returns string of band members
}

function getBandEmail($bandID) {
	//takes a bandID and returns email address
}

function getBandWebsite($bandID) {
	//takes a bandID and returns web address
}
  
?>