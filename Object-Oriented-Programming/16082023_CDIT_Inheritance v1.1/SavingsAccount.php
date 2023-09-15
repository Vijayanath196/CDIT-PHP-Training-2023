<?php

include("Account.php");
Class SavingsAccount extends Account{

  private $rateOfInterest;

  public function __construct($rateOfInterest,$accountNumber,$accountName,$accountBalance){
    $this->rateOfInterest = $rateOfInterest;
    parent::__construct($accountNumber,$accountName,$accountBalance);
  }

  public function setRateOfInterest($rateOfInterest){
    $this->rateOfInterest = $rateOfInterest;
  }

  public function getRateOfInterest(){
    return $this->rateOfInterest;
  }
}

?>