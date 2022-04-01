<?php
	$numbers = [9863, 7127, 2020, 80, 131, 55, 100];
	
	sort($numbers); //sort the array of numbers in ascending order
	
	for($i=0; $i < count($numbers); $i++) { //loop on how many numbers are there in the array
	  if($numbers[$i] % 2 != 0) { //formula if the number is odd
	    $rounded = ceil($numbers[$i] / 10) * 10; //round to the nearest tens
	    echo $rounded;
	    echo "\n";
	  }
	  else {
	    echo $numbers[$i]; //if number is even then it will stay as it is
	    echo "\n";
	  }
	}
?>