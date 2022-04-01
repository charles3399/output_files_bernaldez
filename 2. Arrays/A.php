<?php
	$names = ['Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian'];
	$container = []; //this where to put the most number of occurrences
	
	$occurrence = array_count_values($names); //count the number of occurrences of each names
	
	foreach($occurrence as $key => $value) { //loop each names and its number of occurrences
	//if the name and its number of occurrence is the highest, it will push to the new container
	  if($value == max($occurrence)) {
	    array_push($container, $key);
	  }
	}
	
	echo "Name(s) with most number of occurrences: \n";
	
	for($i = 0; $i < count($container); $i++) {//show and sort the most occurrences alphabetically if tied
	  sort($container);
	  echo "$container[$i]\n";
	}
	
?>