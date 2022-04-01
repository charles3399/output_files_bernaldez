<?php
	function sumEvenNumbers() {
	  $num = 0; //initialize the loop to 0
	  $sum = 0; //declare a variable called sum to contain the sum of even numbers
 
    while($num <= 10) { //loop if num reaches to 10
      if($num % 2 == 0) { //if the number divided by 2 and remainder is equal to 0, then it is even
        $sum += $num; //then sum is totaled of all even numbers
      }
      $num++; //increment num up to 10
    }
    
    echo "Sum of even numbers is: $sum"; //output
	}
	
	sumEvenNumbers();
?>