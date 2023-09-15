<?php 
include ("Account.php");

class Service{

    public function createAccount(){
   
      $account=new Account(10203,'Vijayl',20000); 
      
       $account->setAccountName(readline("enter AccountName"));
       $account->setAccountBalance(readline("enter AccountBalance"));
       $account->setAccountNumber(readline("enter AccountNumber"));

     return $account;
    }
    public function deposit($account){
      $openingBalance= $account->getAccountBalance();
     $depositAmount= readline("Enter deposit amount");
     echo"\n";
       $finalBalanceAmount=$openingBalance+$depositAmount;
       $account->setAccountBalance($finalBalanceAmount);
 
     }
     public function withdraw($account){
       $openingBalance= $account->getAccountBalance();
       $withdrawtAmount= readline("Enter amount to withdraw");

       echo"\n";
  
        $finalBalanceAmount=$openingBalance-$withdrawtAmount;
        $account->setAccountBalance($finalBalanceAmount);
 
  
      }
}
?>