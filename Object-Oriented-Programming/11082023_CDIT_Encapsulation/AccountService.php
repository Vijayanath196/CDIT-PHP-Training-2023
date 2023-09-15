<?php
include("Account.php");
class AccountService
{
    public function createAccount()
    {
        $account = new Account();
        $account->setAccountName("Vijayanath G");
        $account->setAccountNumber("6666");
        $account->setAccountbalance(10000);

        return $account;
    }

    public function deposit($account, $amount){
        if($amount > 0){
            $account->accountbalance = $account->accountbalance + $amount;
            echo "Deposit : ".$account->accountbalance;
            return true;
        }
        return false;
    }

    public function withdraw($account, $amount){
        if($amount > 0 && $account->accountbalance >= $amount){
            $account->accountbalance = $account->accountbalance - $amount;
            echo "Withdraw : ".$account->accountbalance;
            return true;
        }
        return false;
    }
}
?>
