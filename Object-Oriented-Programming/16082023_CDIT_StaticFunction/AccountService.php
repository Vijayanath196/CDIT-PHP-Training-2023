<?php 

include ("SavingsAccount.php");

class AccountService{

    public static function createAccount(){
   
      $accountNumber = readline("Account Number : -  ");
      echo"\n";
      $accountName = readline("Account Name : -  ");
      echo"\n";
      $accountBalance = readline("Account Balance : -  ");
      echo"\n";
      $rateOfInterest = readline("ROI : -  ");
      echo"\n";
      $SavingsAccount = new SavingsAccount($rateOfInterest,$accountNumber,$accountName,$accountBalance);
      return $SavingsAccount;
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

      public static function displayAllAccount(Array $savingsAccountList) {

        foreach($savingsAccountList as $savingsAccount){
        echo("Account name".$savingsAccount->getAccountName());
        echo("\t");
        echo("Account number".$savingsAccount->getAccountNumber());
        echo("\t");
        echo("Account balance".$savingsAccount->getAccountBalance());
        echo("\t");
        echo("rate of interest".$savingsAccount->getRateOfInterest());
        }
	    }
}
?>