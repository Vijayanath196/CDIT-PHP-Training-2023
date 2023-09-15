<?php

$elementArray = array(1, 2, 3, 4, 4, 4, 6, 7, 9, 10);
$countNumber = 2;
$frequency = countFrequency($elementArray, $countNumber);

echo $frequency;

function countFrequency($elementArray, $countNumber) {
    $frequency = 0;

    foreach ($elementArray as $element) {
        if ($element == $countNumber) {
            $frequency++;
        }
    }

    return $frequency;
}

?>
