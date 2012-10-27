<!DOCTYPE HTML>
<head>
<title>Homework 3 & 4</title>
<style type="text/css">
   body {		background-image:url('../images/dolores_1440x900_G.jpg');
   				color: #874D2A;
   				font-family: Arial, Helvetica, sans-serif;
   				font-size: 1.1em;
   				font-style: olbique;
   			}
   header{		padding: 0;
   				margin: 0;
   				border-bottom: 1px solid black;
   				overflow: hidden;
   			}
   			
   #exercise3 {	padding: 0;
   				margin: 0;
   				overflow: hidden;	
   			   }
   			
   #exercise4 {	padding: 0;
   				margin: 0;
   				overflow: hidden;
   			   }
   			
</style>
</head>
<body>
<header><p>Domenic DeRubis<br>
Day 5 - PHP Homework
</p></header>
<div id="exercise3">
<?php
/******************************************************
 *  Domenic DeRubis - Day 5 PHP Homework October 13,2012 *
 ******************************************************/
//Exercise 3

	print "<h2><strong><u>Exercise 3</u></strong></h2>";
	
//Define and print item cost and calculate discounts
	$ItemCost = 12;
	print "The item costs &#36 $ItemCost.<br><br>";
	$ItemDiscount10 = $ItemCost*0.9;
	$ItemDiscount20 = $ItemCost*0.8;

//Apply discounts based on item cost and print
	if ($ItemCost <= 10) {
		print "Your item cost, with a 10% discount, is &#36 $ItemDiscount10.<br><br>";
	}
	else {
		print "Your item cost, with a 20% discount, is &#36 $ItemDiscount20.<br><br>";
	}
?>
</div>
<div id="exercise4">
<?php
//Exercise 4
	print "<h2><strong><u>Exercise 4</u></strong></h2>";
	
//Calculate and print the multiplication table (to 10) for number n
	$n = 5;
	print "Here is the $n's multiplication table:<br><br>";
	$i = 1;
	while ($i <= 10) {
		print "$n x $i = ";
		print $n * $i;
		print "<br>";
		$i = $i + 1;
	}
?></div>
</body>
</html>
	