<?php

include ("AccountService.php");

$savingsAccountList = array();
$choice = "n";
$choice2 = "n";

do {

$choice=readline("1.create Account 2.Deposit 3.withdraw 4.display\n");
    
switch($choice)
{
    case 1:
        $accountService=new AccountService();
        array_push($savingsAccountList,$accountService->createAccount());
        break;
    case 2: 

        $inAccountNum=readline("Enter Account number\t");
        $flag=0;

        foreach($savingsAccountList as $savingsAccountNumber){
 
            if($savingsAccountNumber->getAccountNumber()==$inAccountNum)
            {
                $accountService->deposit( $savingsAccountNumber);
                echo"Balance amount";
                echo"\n";
                    echo($savingsAccountNumber->getAccountBalance());
                    $flag=1;

            }
            
        }
        if($flag==0)
        {
            echo"Invalid Account Number\n";
        }
         break;
   case 3:
    $inAccountNum=readline("Enter Account number\n");
    $flag=0;

    foreach($savingsAccountList as $savingsAccountNumber){

        if($$savingsAccountNumber->getAccountNumber()==$inAccountNum)
        {
            $accountService->withdraw( $savingsAccountNumber);
            echo"Balance amount";
           echo"\n";
           echo($savingsAccountNumber->getAccountBalance());
           $flag=1;
        }
        
      }
      if($flag==0)
        {
            echo"Invalid Account Number";
        }

      break;

      case 4:
        $accountService->displayAllAccount($savingsAccountList);
        break;

 default: echo"wrong choice";
}
echo"\n";
$choice2=readline("Do you want to continue?\t");
}
while($choice2=='y');
    
?>