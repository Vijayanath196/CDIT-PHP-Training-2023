<?php 

include ("SavingsAccount.php");
include ("womenSavingsAccount.php");
include ("SavingsMaxAccount.php");


class AccountService{

    public static function createAccount(){
   
      $chooseSavingsAccountType = readline("type of account \n : 1. Womens saving account \n 2. Savings max account");
      
      if($chooseSavingsAccountType == 1){
      echo "WOMEN SAVINGS ACCOUNT \n";  
      $accountNumber = readline("Account Number : -  ");
      echo"\n";
      $accountName = readline("Account Name : -  ");
      echo"\n";
      $accountBalance = readline("Account Balance : -  ");
      echo"\n";
      $rateOfInterest = readline("ROI : -  ");
      echo"\n";
      $creditCardNumber = readline("enter credit card number");

      $SavingsAccount = new WomenSavingsAccount($creditCardNumber,$rateOfInterest,$accountNumber,$accountName,$accountBalance);
      return $SavingsAccount;

      }elseif($chooseSavingsAccountType == 2){

      echo "SAVINGS MAX ACCOUNT \n";  
      $accountNumber = readline("Account Number : -  ");
      echo"\n";
      $accountName = readline("Account Name : -  ");
      echo"\n";
      $accountBalance = readline("Account Balance : -  ");
      echo"\n";
      $rateOfInterest = readline("ROI : -  ");
      echo"\n"; 
      $debitCardNumber = readline("enter debit card number");
      $SavingsAccount = new SavingsMaxAccount($debitCardNumber,$rateOfInterest,$accountNumber,$accountName,$accountBalance);
      return $SavingsAccount;

      }else{

        echo "invalid input";
        exit();

      }
    }

    public static function displayAllAccount(Array $savingsAccountList) {

      foreach($savingsAccountList as $savingsAccount){
      echo("Account name".$savingsAccount->getAccountName());
      echo("\t");
      echo("Account number".$savingsAccount->getAccountNumber());
      echo("\t");
      echo("Account balance".$savingsAccount->getAccountBalance());
      echo("\t");
      echo("rate of interest".$savingsAccount->getRateOfInterest());
      if($savingsAccount->getCreditCardNumber)
      echo("credit card number \n".$savingsAccount->getCreditCardNumber());
      }
      echo("\t");
      
    }

    public static function deposit($account){
      $openingBalance= $account->getAccountBalance();
      $depositAmount= readline("Enter deposit amount");
      echo"\n";
      $finalBalanceAmount=$openingBalance+$depositAmount;
      $account->setAccountBalance($finalBalanceAmount);
     }

     public static function withdraw($account){
       $openingBalance= $account->getAccountBalance();
       $withdrawtAmount= readline("Enter amount to withdraw");
       echo"\n";
       $finalBalanceAmount=$openingBalance-$withdrawtAmount;
       $account->setAccountBalance($finalBalanceAmount);
      }

}
?>