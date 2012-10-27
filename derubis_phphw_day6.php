<?php
/******************************************************
 *  Domenic DeRubis - Day 6 PHP Homework October 26,2012 *
 ******************************************************/
	//Print title

	print "<h2><strong><u>Day 6 PHP Homework</u></strong></h2><p>Domenic DeRubis</p>";

	//Define parameters:
		/* 
		 	$product_description = name of item entered by user form
		 	$itemCost = cost of item entered by user form
			$itemDiscount10 = cost of item at 10%
			$itemDiscount20 = cost of item at 20%
			$multi_factor = mulplication factor entered by user form
		******************************************************/
	
	//PRODUCT DISCOUNT LOGIC
	
	//Get the user data from the form
	$product_description = $_POST["product_description"];
	$itemCost = $_POST["item_cost"];
	

	//Define and print item cost and calculate discounts
	$itemDiscount10 = $itemCost*0.9;
	$itemDiscount20 = $itemCost*0.8;

	/*Apply discounts based on item cost and print at 
	if ($itemCost <= 10) {
		print "Your item cost, with a 10% discount, is &#36 $itemDiscount10.<br><br>";
	}
	else {
	print "Your item cost, with a 20% discount, is &#36 $itemDiscount20.<br><br>";
	}
	*/
	
	//Apply currency formatting to the dollar amounts for output
	$itemDiscount10_formatted = "$".number_format($itemDiscount10, 2);
	$itemDiscount20_formatted = "$".number_format($itemDiscount20, 2);
	
	$discount_percent_formatted = $discount_percent."%";
	$itemCost_formatted = "$".number_format($itemCost, 2);

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
	echo $multi_factor;
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
				<h2 id="form_title">Product Discount Details</h2>
					
					<label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $itemCost_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php //Apply discounts based on item cost and print
	if ($itemCost <= 10) {
		print "10%";
	}
	else {
		print "20%";
	}
	 				?></span><br />

        <label>Discount Price:</label>
        <span><?php if ($itemCost <= 10) {
		echo $itemDiscount10_formatted;
	}
	else {
		print $itemDiscount20_formatted;
	}
	 				?></span>
	 			
				</section>
</body>
</html>





	





















