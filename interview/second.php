<?php

/**
 *  You are given an array of 0s and 1s in random order. Segregate 0s on left side and 1s on right side of the array. Traverse array only once.
 *  Input array   =  [0, 1, 0, 1, 0, 0, 1, 1, 1, 0] 
 *  Output array =  [0, 0, 0, 0, 0, 1, 1, 1, 1, 1] 
 */

$a = array(0, 1, 0, 1, 0, 0, 1, 1, 1, 0);

for($i=0;$i<count($a)-1; $i++){
    if($a[$i] > $a[$i+1]){
        $temp = $a[$i];
        $a[$i] = $a[$i+1];
        $a[$i] = $temp;
    }
}
echo '<pre>';
print_r($a);
