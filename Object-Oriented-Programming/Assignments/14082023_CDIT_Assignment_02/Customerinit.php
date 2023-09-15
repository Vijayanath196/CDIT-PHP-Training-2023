<?php

include_once ("CustomerService.php");

$customerList  =  array();

do {

    echo "1. create a new customer \n";
    echo "2. display all customers \n";
    echo "3. search a customer \n";
    echo "4. display all premium customer \n";
    echo "5. display all seniour citizen customers \n";

    $choiceOne  =  readline("enter your choice : ");
 
    switch($choiceOne) {

    case 1: array_push($customerList, CustomerService::createCustomer());
            break;
    case 2: CustomerService::displayAllCustomers($customerList);
            break;
    case 3: echo " search by: \n";
            echo " 1. phone Number \n";
            echo " 2. customer Code \n";
            
            $searchOption = readline(" select an option: ");
    
            if($searchOption == '1') {
                $phoneNumber   =  readline(" enter phone number to search: ");
                $foundCustomer =  CustomerService::searchCustomerByPhoneNumber($customerList,$phoneNumber);
            }elseif($searchOption == '2') {
                $customerCode  =  readline(" enter customer code to search: ");
                $foundCustomer =  CustomerService::searchCustomerByCode($customerList,$customerCode);
            } else {
                echo " invalid option \n";
                break;
            }

            if ($foundCustomer) {
              echo " customer found : \n";
              echo " customer name  : \n".$foundCustomer->getCustomerName() . "\n";
              echo " customer code  : \n".$foundCustomer->getCustomerCode() . "\n";
              echo " customer phone : \n".$foundCustomer->getPhoneNumber()  . "\n";
            } else {
              echo "Customer not found.\n";
            }
        
            break;
    case 4:
        CustomerService::displayPremiumCustomers($customerList);
        break; 
    case 5:
        CustomerService::displaySeniorCitizens($customerList);
        break;

    default: echo  "wrong choice";
    
    }

$choiceTwo  = readline("Do you want to continue?\t");

} while($choiceTwo  ==  'y');


?>