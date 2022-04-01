<?php
	function fibonacciSequence() {
	  $num1 = 0; // initialize two variables since fibonacci is the sum of the two numbers that precede it
	  $num2 = 1;
	  
	  for($i=0; $i < 10; $i++) { //loop until 10
	    echo "$num1\n"; //the output
	    
	    $sequence = $num1 + $num2; //the formula for fibonacci is the sum of two initialized variable is the sequence
	    $num1 = $num2;
	    $num2 = $sequence;
	  }
	}
	
	fibonacciSequence();
?>