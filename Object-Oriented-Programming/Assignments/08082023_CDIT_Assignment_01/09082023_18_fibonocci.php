<?php

$limit = readline("Enter the limit: ");

if (!is_numeric($limit)){
    echo "Invalid input. Enter a number as limit.";
}else {
    $fibanociSeries = generateFibonacciSeries($limit);

    foreach ($fibanociSeries as $numbers) {
        echo $numbers . "\n";
    }
}

function generateFibonacciSeries($limit){
    $fibanociSeries = array(0, 1);

    for ($i = 2; $i < $limit; $i++){
        $nextNumber = $fibanociSeries[$i - 1] + $fibanociSeries[$i - 2];
        array_push($fibanociSeries, $nextNumber);
    }

    return $fibanociSeries;
}

?>
