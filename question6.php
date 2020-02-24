<?php

// QUESTION 5
// consider the following array
$indexed_array = array('fruit' => 'apple', 'select_name' => 'john', 'select_animal' => 'cat', 'number' => '23', 'select_car' => 'toyota', 'plant' => 'rose', 'color' => 'blue', 'select_other' => ': this is awesome');

// Create an output array that contains all array entries from $indexed_array which keys (index) starts with "select_", keep both the key and value in tact
// Then update the new array to remove the "select_" part of the keys, but keeping the rest as is
// Print out every key and value pair in the array on a new line, in the format "key => value"
// Update the output so that every line is followed by the current date and time in the format yyyy-mm-dd hh:mm:ss (eg. 2013-12-15 23:06:59)
// (Note) Don't type out the date and time, let PHP generate it
// Example of Answer:  name = john 2019-09-14  11:55:05
/*         animal = cat  2019-09-14  11:55:05
         car = toyota  2019-09-14  11:55:05
         other = this is awesome  2019-09-14  11:55:05*/

//SUPPLY YOUR ANSWER BELOW THIS COMMENT
foreach (array_keys($indexed_array) as $item) {
    if (strpos($item, 'select_') !== false) {
        echo str_replace("select_", "", $item) . " = " . $indexed_array[$item]." " . date("Y-m-d h:m:s") . "\n";;

    }


};
