<?php
include ("AcountService.php");

$objArray=array();
do{
$choice=readline("1.create Account 2.Deposit 3.withdraw\n");
    // $account->getAccountName();
    // $account->getAccountBalance();
    // $account->getAccountNumber();
switch($choice)
{
    case 1:
        $service=new Service();
        array_push($objArray,$service->createAccount());
        break;
    case 2: 

        $inAccountNum=readline("Enter Account number\t");
        $flag=0;

        foreach($objArray as $objNumber){
 
            if($objNumber->getAccountNumber()==$inAccountNum)
            {
                $service->deposit( $objNumber);
                echo"Balance amount";
                echo"\n";
                    echo($objNumber->getAccountBalance());
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

    foreach($objArray as $objNumber){

        if($objNumber->getAccountNumber()==$inAccountNum)
        {
            $service->withdraw( $objNumber);
            echo"Balance amount";
           echo"\n";
           echo($objNumber->getAccountBalance());
           $flag=1;
        }
        
      }
      if($flag==0)
        {
            echo"Invalid Account Number";
        }


   
      break;

 default: echo"wrong choice";
}
echo"\n";
$choice2=readline("Do you want to continue?\t");
}
while($choice2=='y');


    
?>