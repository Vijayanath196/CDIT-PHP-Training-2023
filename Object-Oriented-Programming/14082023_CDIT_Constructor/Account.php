<?php
class Account  {

    private $accountName;
    private $accountBalance;
    private $accountNumber;
    
public function __construct($accountNumber,string $accountName,float $accountBalance)
{
  $this->accountName=$accountName; 
  $this->accountBalance=$accountBalance;
  $this->accountNumber=$accountNumber;

}
    public function setAccountName($accountName)
    {
      $this->accountName=$accountName; 
    }
    public function setAccountBalance($accountBalance)
    {
      $this->accountBalance=$accountBalance;
    }
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber=$accountNumber;
    }
     

    public function getAccountName()
    {
        return $this->accountName;
    }
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    
}

?>