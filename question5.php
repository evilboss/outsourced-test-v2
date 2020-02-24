<?php

// QUESTION 4
// consider the following array
$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'Lancelot', 'Michael', 'Norman', 'Lawrence of Arabia');

// Create an output array that contains all distinct characters (Uppercase and Lowercase)
// from the strings contained within the array above. Use only the str_split function
// and any of the Array functions to do so.

// The output should then look something like this: Leandrki ... etc


//SUPPLY YOUR ANSWER BELOW THIS COMMENT

$str = "Hello World!";


foreach ($person_array as $item) {
        echo count_chars($item, 3);

};
