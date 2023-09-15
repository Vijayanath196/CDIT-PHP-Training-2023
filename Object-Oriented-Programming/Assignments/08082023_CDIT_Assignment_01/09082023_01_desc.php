<?php

$firstNumber = readline("Enter first number: ");
validateNumber($firstNumber);

$secondNumber = readline("Enter second number: ");
validateNumber($secondNumber);

$thirdNumber = readline("Enter third number: ");
validateNumber($thirdNumber);

$largestNumber = findLargestNumber($firstNumber, $secondNumber, $thirdNumber);
$smallestNumber = findSmallestNumber($firstNumber, $secondNumber, $thirdNumber);
$sumOfThreeNumbers = $firstNumber + $secondNumber + $thirdNumber;
$middleNumber = findMiddleNumber($sumOfThreeNumbers, $largestNumber, $smallestNumber);

displayInDescOrder($largestNumber, $smallestNumber, $middleNumber);

function validateNumber($number)
{
    if (!is_numeric($number)) {
        echo "Invalid input. Please enter a number as input.";
        exit();
    }
}

function findLargestNumber($firstNumber, $secondNumber, $thirdNumber)
{
    if ($firstNumber >= $secondNumber && $firstNumber >= $thirdNumber) {
        return $firstNumber;
    } elseif ($secondNumber >= $firstNumber && $secondNumber >= $thirdNumber) {
        return $secondNumber;
    } else {
        return $thirdNumber;
    }
}

function findSmallestNumber($firstNumber, $secondNumber, $thirdNumber)
{
    if ($firstNumber <= $secondNumber && $firstNumber <= $thirdNumber) {
        return $firstNumber;
    } elseif ($secondNumber <= $firstNumber && $secondNumber <= $thirdNumber) {
        return $secondNumber;
    } else {
        return $thirdNumber;
    }
}

function findMiddleNumber($sumOfThreeNumbers, $largestNumber, $smallestNumber)
{
    return $sumOfThreeNumbers - ($largestNumber + $smallestNumber);
}

function displayInDescOrder($largestNumber, $smallestNumber, $middleNumber)
{
    echo "Numbers in descending order: " . $largestNumber . " " . $smallestNumber . " " . $middleNumber;
}

?>