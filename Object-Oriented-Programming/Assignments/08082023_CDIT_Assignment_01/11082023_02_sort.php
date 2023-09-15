<?php

$unsortedArray = array(56,74,34,93);
$limit         = count($unsortedArray);

ascendingSort($unsortedArray,$limit);
descendingSort($unsortedArray,$limit);

function ascendingSort($unsortedArray,$limit){

    echo "ascending order :";
    for($i = 0;$i <= $limit-1;$i++){
        for($j = 0;$j < $limit - 1;$j++){
            if($unsortedArray[$j] < $unsortedArray[$j+1]){
    
                $temp                = $unsortedArray[$j];
                $unsortedArray[$j]   = $unsortedArray[$j+1];
                $unsortedArray[$j+1] = $temp;
            }
        }
    }
    foreach($unsortedArray as $sortedValues){
        echo $sortedValues."\n";
    }
}

function descendingSort($unsortedArray,$limit){

    echo "descending order :";
    for($i = 0;$i <= $limit-1;$i++){
        for($j = 0;$j < $limit - 1;$j++){
            if($unsortedArray[$j] > $unsortedArray[$j+1]){
    
                $temp                = $unsortedArray[$j];
                $unsortedArray[$j]   = $unsortedArray[$j+1];
                $unsortedArray[$j+1] = $temp;
            }
        }
    }
    foreach($unsortedArray as $sortedValues){
        echo $sortedValues."\n";
    }
}

?>