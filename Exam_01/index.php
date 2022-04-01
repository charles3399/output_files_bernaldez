<?php
	function palindrome($string) {
	  $string = strtolower($string); //lowercase the letters
	  
	  $reversed = strrev($string); //reverse the string to compare with the original
	  $reversedExplode = explode(' ', $reversed); //if there are spaces in the string, separate by space
	  $reversedJoin = join('', $reversedExplode); //then join the reversed string by joining them without spaces
	  
	  $originalExploded = explode(' ', $string); //if there are spaces in the unreversed string, separate by space
	  $originalJoin = join('', $originalExploded); //then join the unreversed string by joining them without spaces
	  
	  if($reversedJoin == $originalJoin) { //palindrome if the original and reversed string is the same when reading
	     echo "palindrome";
	  }
	  else {
	    echo "not a palindrome"; //else not a palindrome
	  }
	}
	
	palindrome('race car');
?>