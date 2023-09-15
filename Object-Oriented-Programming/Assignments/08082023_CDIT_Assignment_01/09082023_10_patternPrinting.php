<?php

$currentNumber = 1;

for ($rowNumber = 1; $rowNumber <= 4; $rowNumber++){
    for ($columnNumber = 1; $columnNumber <= $rowNumber ; $columnNumber++){
        echo $currentNumber;
        $currentNumber++;
    }
    echo "\n";
}

?>
