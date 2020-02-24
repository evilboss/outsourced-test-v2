<?php
/**
 *
 * Take your ID and sort it into a string, ordered by biggest number to smallest.
 * Example:
 *
 * $id = "8910295209871"
 * - your code goes here -
 * - your code goes here -
 * - your code goes here -
 * - etc etc etc -
 * echo $sortedid; // which outputs 9998875221100
 *
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 * DO NOT USE THE sort FUNCTIONS FOUND HERE http://php.net/manual/en/array.sorting.php THAT WOULD BE TOO EASY. DO IT YOURSELF.
 * IF YOU REALLY CAN'T DO IT WITHOUT USING THOSE FUNCTIONS, THEN SUBMIT HAVING USED ONE OF THOSE FUNCTIONS. IT'S BETTER THAN NOT SUBMITTING AT ALL.
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 *
 * NB: Do NOT copy and paste a solution from the internet. We are aware of these solutions and you WILL be penalised if you just use them
 * To prove that you wrote this yourself, add comment explaining why you do what you do
 *
 */

$id = "8910295209871";
// your code goes here
$idArray = str_split($id);

for($j = 0; $j < count($idArray); $j ++) {
    for($i = 0; $i < count($idArray)-1; $i ++){
        if($idArray[$i] > $idArray[$i+1]) {
            $temp = $idArray[$i+1];
            $idArray[$i+1]=$idArray[$i];
            $idArray[$i]=$temp;
        }
    }
}

print_r($idArray);
