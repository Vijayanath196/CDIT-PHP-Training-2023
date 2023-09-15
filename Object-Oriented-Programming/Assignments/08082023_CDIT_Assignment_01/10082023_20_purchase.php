<?php

$validityDate  = strtotime("2021-08-01") ;
$expiryDate    = strtotime("2022-08-01") ;
$purchaseDate  = strtotime(readline("enter date format(YYYY-MM-DD"));

if($purchaseDate > $expiryDate){
    echo "Cannot buy. Product is already expired."; 
}elseif($purchaseDate > $validityDate){
    echo "Cannot buy. Product is already out of validity."; 
}else{
    echo "Purchased.";
}

?>
