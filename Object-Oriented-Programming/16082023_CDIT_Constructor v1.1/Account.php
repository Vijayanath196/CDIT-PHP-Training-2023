<?php
class Account
{
    public $accountName;
    public $accountNumber;
    public $accountBalance;


    public function __construct($accountNumber,string $accountName,float $accountBalance)
    {
       $this->accountName=$accountName; 
       $this->accountBalance=$accountBalance;
       $this->accountNumber=$accountNumber;

   }

    public function setAccountName($accountName){
        $this->accountName = $accountName;
    }
    
    public function setAccountNumber($accountNumber){
        $this->accountNumber = $accountNumber;
    }
    
    public function setAccountbalance($accountBalance){
        $this->accountBalance = $accountBalance;
    }
    
    public function getAccountName(){
        return $this->accountName;
    }
    
    public function getAccountNumber(){
        return $this->accountNumber;
    }
    
    public function getAccountbalance(){
        return $this->accountBalance;
    }
}
?>
