<?php
	// get the positive integer from the user
	$userNum = intval($_POST['userNum']);

  // initialize counter 
	$counter = 1;

  // initialize facNumber display 
	$facNumber = 1;
  
	// use a do..while loop to create the factorial display
  do {
  // calculate the factorial
  $facNumber = $facNumber * $counter;
  // increment the counter
  $counter ++;
  } while ($counter <= $userNum);

  // return the factorial back to user
  echo "The factorial of this positive integer is " . $facNumber . ".";
?>
