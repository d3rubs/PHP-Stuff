<?php
/******************************************************
 *  Domenic DeRubis - Day 4 PHP Homework Sept 29,2012 *
 ******************************************************/
//Excersize 1

	print "<strong><u>Excersize 1</u></strong><br><br>";
	$myFirstName = "Domenic";
	$myLastName = "DeRubis";
	$myBirthday = "November 2, 1980";
	$myFavColor = "Mother of Pearl";
	
	print "My name is $myFirstName $myLastName <br>";
	
	print "I was born on $myBirthday <br>";
	
	Print "My favorite color is $myFavColor <br><br>";

//Excersize 2
	print "<strong><u>Excersize 2</u></strong><br><br>";
	
//Calculate number of minutes per week
	$DaysPerWeek = 7;
	$HoursPerDay = 24;
	$MinutesPerHour = 60;
	$MinutesPerWeek = $MinutesPerHour * $HoursPerDay * $DaysPerWeek;
	
	print "There are $MinutesPerWeek minutes per week on Earth.<br><br>";
	
//Reassign number of hours per day on the Bilky Way and recalculate
	$HoursPerDay = 26;
	$MinutesPerWeek = $MinutesPerHour * $HoursPerDay * $DaysPerWeek;
	
	print "There are $MinutesPerWeek minutes per week in the Bilky Way galaxy.";

?>
	