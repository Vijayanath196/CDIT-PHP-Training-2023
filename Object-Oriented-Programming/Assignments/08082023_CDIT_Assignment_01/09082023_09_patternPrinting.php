<?php

for ($rowNumber = 1; $rowNumber <= 10; $rowNumber++) {
    for ($columnNumber = 1; $columnNumber <= $rowNumber; $columnNumber++) {
        echo $columnNumber;
    }
    echo "\n";
}

?>
