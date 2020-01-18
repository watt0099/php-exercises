/*
+---+
| 1 |
+---+
Declare the variable named language and 
assign it with value PHP.
*/

/*
Combine (chain or concatenate) language 
with the string literal to create the expression 
which will output the sentence: 
Welcome to PHP!. 

Declare the variable greeting, 
assign it with the created expression.
*/

/*
Print greeting.
*/


<?php

$language = 'PHP';
$greeting = '<br><br>Welcome to '.$language.'!<br><br>';

print $greeting;

?>



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 |
+---+
Declare variable named firstName and 
assign it with the value of your first name.
*/

/*  
Declare variable named lastName and 
assign it with the value of your last name.
*/

/*
Declare variable named day and 
assign it with the day of your birthday (number).
*/

/*
Declare variable named month and 
assign it with the month of your birthday (string).
*/

/*
Declare variable named year and 
assign it with the year of your birthday (number).
*/

/*
Use all of the variables above and create expression that will
output the sentence reading:
My name is _ _ _ _ _  _ _ _ _ _. I was born on _ _ of _ _ _ _ _ in  _ _ _ _.

Declare variable named assembled and 
assign it with the chained (concatenated) expression above.
*/

/*
Print assembled.
*/  

<?php

$firstName = 'Alex';
$lastName = 'Watt';
$day = 18;
$month = "August";
$year = 1986;
$assembled = '<br><br>My name is '.$firstName.'.<br><br>';

print $assembled;

?>



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Calculate and print the area of the rectangle below:
 +------------6.5-------------+
 |                            |
3.5                           |
 |                            |
 +----------------------------+
 
Declare the variable length and assign it with the specified value.
*/

/*
Declare the variable width and assign it with the specified value.
*/

/*
Declare the variable area and assign it with the product of length and width.
*/

/*
Print area.
*/


 <?php

 	$length = 3.5;
 	$width = 6.5;
 	$area = $length*$width;

 	print '<br><br>The area of the rectangle is '.$area.'.<br><br>';

 ?>


// task separator
echo "<hr style=\"margin 1rem 0\">";

 /*
+---+
| 4 |
+---+
Description: Printing the price of product including the tax and delivery.
*/

/*
Declare the variable product and assign it with armchair.
*/

/*
Declare the variable price and assign it with 249.00.
*/

/*
Declare the variable tax and assign it with 13% (0.13).
*/

/*
Declare the variable delivery and assign it with 5% (0.05).
*/

/*
Use price, tax and delivery 
to create the expression that will output the price after the tax and delivery.

Declare the variable total and assign it with the expression gotten from the previous step.
*/

/*
Concatenate the variables and string literals to print the statement:
armchair: $295.44
*/

<?php
	$product = 'armchair';
	$price	= 249.00;
	$tax = 0.13;
	$delivery = 0.05;
	$total = $price*$tax+$price*$delivery+$price;

	print '<br><br>armchair: $'.$total.'.<br><br>';
?>


// task separator
echo "<hr style=\"margin 1rem 0\">";


+---+
| 5 |
+---+
Print the final statement from previous exercise in the following markup 
(including the placeholder image, armchair: $295.44 
should be contained by figcaption element):
<figure>
  <img src="https://placehold.jp/24/e8d2ae/fff/300x300.png" alt="placeholder-image">
  <figcaption>
  	<?php
	$product = 'armchair';
	$price	= 249.00;
	$tax = 0.13;
	$delivery = 0.05;
	$total = $price*$tax+$price*$delivery+$price;

	print 'armchair: $'.$total.'.<br><br>';

?>

  </figcaption>
</figure>
