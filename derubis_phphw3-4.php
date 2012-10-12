<!DOCTYPE HTML>
<head>
<title>Homework 3 & 4</title>
</head>
<style type="text/css">
   body {	background-color: #00002f;
   			color: #fff;
   			}
</style>
<body>

<?php
/******************************************************
 *  Domenic DeRubis - Day 5 PHP Homework October 13,2012 *
 ******************************************************/
//Exercise 3

	print "<strong><u>Exercise 3</u></strong><br><br>";
	
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

//Exercise 4
	print "<strong><u>Exercise 4</u></strong><br><br>";
	
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
?>
</body>
</html>
	