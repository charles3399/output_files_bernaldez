<?php
	$names = ['red','blue','black','red','blue','blue','red', 'gold'];
	$container = []; //this where to put those items that are not repetitive
	
	$occurrence = array_count_values($names); //count the number of occurrences of each items
	
	foreach($occurrence as $key => $value) { //loop each items and its number of occurrences
	//if the name and its number of occurrence is the least, it will push to the new container
	  if($value == min($occurrence)) {
	    array_push($container, $key);
	  }
	}
	
	echo "Items that are not repetitive: \n";
	
	for($i = 0; $i < count($container); $i++) {//show the least repetitive items
	  echo "$container[$i]\n";
	}
	
?>