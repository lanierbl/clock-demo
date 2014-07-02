<?php

date_default_timezone_set('America/New_York');

$curtime = date('g:i a');
$curtimeint = date('Hi');
$curtimezone = date('e');

$imgbase = "http://making-the-internet.s3.amazonaws.com/php-";

$time_of_day = calc_time_of_day($curtimeint);

function calc_time_of_day($curtimeint) {

	if (($curtimeint >= 0500) && ($curtimeint <= 1059)) {
		$timeofday = 'morning';
	}
	elseif (($curtimeint >= 1100) && ($curtimeint <= 1559)) {
		$timeofday = 'afternoon';
	}
	elseif (($curtimeint >= 1600) && ($curtimeint <= 1959)) {
		$timeofday = 'evening';
	}
	else {
		$timeofday = 'night';
	}	
	
	return $timeofday;
	
}