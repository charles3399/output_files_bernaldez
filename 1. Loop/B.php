<?php
	function displayOdd() {
	  $num = 0; //initialize the loop to 0
	  
	  do {
	    if($num % 2 != 0) { //if the number divided by 2 and remainder is not equal to 0, then it is odd
	      echo "Odd number: $num \n"; //the output
	    }
	    $num++; //increment num until it reaches 10
	  } while($num <= 10); //run the loop up until num is equal to 10
	}
	
	displayOdd();
?>