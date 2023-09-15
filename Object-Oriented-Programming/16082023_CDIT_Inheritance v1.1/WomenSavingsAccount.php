<?php

// include("SavingsAccount.php");

class womenSavingsAccount extends SavingsAccount{

private $creditCardNumber;

public function __construct($creditCardNumber,$rateOfInterest,$accountNumber,$accountName,$accountBalance,)
{
  $this->creditCardNumber = $creditCardNumber; 
  parent::__construct($rateOfInterest,$accountNumber,$accountName,$accountBalance);

}

public function setCreditCardNumber($creditCardNumber)
{
  $this->creditCardNumber=$creditCardNumber; 
}

public function getCreditCardNumber()
{
 return $this->creditCardNumber; 
}

}
