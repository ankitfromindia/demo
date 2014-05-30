<?php
$array = array(2,7,4,9,18,35,24,6,20);
for($i=0; $i<count($array); $i++){
    $match = $array[$i];
    for($j=0; $j<count($array); $j++){
        if($match < $array[$j]){
            $array[$j] = $match;
            $array[$i] = $array[$j];
        }
    }
}
echo '<pre>';
print_r($array);