<?php

// include("SavingsAccount.php");

class SavingsMaxAccount extends SavingsAccount{

private $debitCardNumber;

public function __construct($debitCardNumber,$rateOfInterest,$accountNumber,$accountName,$accountBalance)
{
  $this->debitCardNumber = $debitCardNumber;
  parent::__construct($rateOfInterest,$accountNumber,$accountName,$accountBalance);
}

public function setDebitCardNumber($debitCardNumber)
{
  $this->debitCardNumber = $debitCardNumber; 
}

public function getDebitCardNumber()
{
  return $this->debitCardNumber;
}

}


?>