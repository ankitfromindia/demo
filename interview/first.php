<?php
/**
 *  Demonstrate how to sort an array of strings by the length of each string, shortest strings first.
 */
$a = array('ankit', 'vishwakarma','shweta','sharma','indu','mahule');

for($i=0; $i< count($a);$i++){

    for($j=$i+1; $j< count($a);$j++){
        
        if(strlen($a[$i]) > strlen($a[$j])){
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
        }
    }
}

print_r($a);
