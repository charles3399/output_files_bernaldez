<?php
    function reverseString($string) {
        $reversed = strrev($string); //strrev is a built-in php function to reverse a string

        echo $reversed;
    }

    reverseString('Car');