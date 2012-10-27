<?php
/******************************************************
 *  Domenic DeRubis - Day 6 PHP Homework October 26,2012 *
 ******************************************************/
	//Print title

	print "<h2><strong><u>Day 6 PHP Homework</u></strong></h2><p>Domenic DeRubis</p>";

	//Define parameters:
		/* 
			$multi_factor = mulplication factor entered by user form
		******************************************************/
	
	
	//MULPLICATION FACTOR LOGIC
	
	//Calculate and print the multiplication table (to 10) for number n
	$multi_factor = $_POST["multi_factor"];
	
	//print "Here is the $n's multiplication table:<br><br>";
	/*$i = 1;
	while ($i <= 10) {
		print "$n x $i = ";
		print $n * $i;
		print "<br>";
		$i = $i + 1;
	}*/
	?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Product Discount Form PHP Homework</title>
<style>
	/*Layout*/
	#container	{
		width: 650px;
		margin: 0 auto;
		padding: 15px;
		font-family: sans-serif;
		font-size: 1.5em;
		}
	#form_title	{
		text-align:center;
		font-family: sans-serif;
	}
	br	{
		clear: left;
	}
	label	{
		font-weight: bold;
		}
	#mainContent	{
		text-align: center;
	}
	
	/*Presentation*/
	#container	{
		background-color: white;
		margin-left: auto;
    	margin-right: auto;
    	-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		padding:10px;
		border: 1px solid #999;
		border: inset 1px solid #333;
		-webkit-box-shadow: 0px 0px 218px rgba(0, 0, 0, 0.6);
		-moz-box-shadow: 0px 0px 218px rgba(0, 0, 0, 0.6);
		box-shadow: 0px 0px 218px rgba(0, 0, 0, 0.6);
		}
	body	{
		background-image:url('images/form_bk.jpg');
		
		}
	</style>
</head>
<body>

<section id="container">
	<h2 id="form_title">Multiplication Factor <?php echo $multi_factor; ?></h2>				
	 	<br>
	 	<span><?php $i = 1;
while ($i <= 10) {
print "$multi_factor x $i = ";
print $multi_factor * $i;
print "<br>";
$i = $i + 1;
} ?></span>

	 	
	 	</section>
</body>
</html>





	





















