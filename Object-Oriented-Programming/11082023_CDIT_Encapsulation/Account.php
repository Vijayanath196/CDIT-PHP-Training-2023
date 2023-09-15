<?php
class Account
{
    public $accountname;
    public $accountnumber;
    public $accountbalance;

    public function setAccountName($accountname){
        $this->accountname = $accountname;
    }
    
    public function setAccountNumber($accountnumber){
        $this->accountnumber = $accountnumber;
    }
    
    public function setAccountbalance($accountbalance){
        $this->accountbalance = $accountbalance;
    }
    
    public function getAccountName(){
        return $this->accountname;
    }
    
    public function getAccountNumber(){
        return $this->accountnumber;
    }
    
    public function getAccountbalance(){
        return $this->accountbalance;
    }
}
?>
